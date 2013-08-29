<?php
class Tgen_DnD extends Tgen {
    const ED3_MAX_CR = 20;
    const ED3_MAX_MULT = 100;
    private $options = array(
        'multiplier' => 1,
        'mode35'     => '',
        'cr'         => 1,
        'edition'    => '',
        'cursed'     => false,
        'trade'      => false,
        'drac'       => false,
        'ed3ExtSize' => false,
    );

    public function __construct() {}

    public function generate() {
        $this->_validateForm();
        $classname = $this->_getClassName();
        if (class_exists($classname)) {
            $this->treasure = new $classname($this->options);
            $this->treasure->generate();
        } else {
            echo $classname;
            exit;
        }
    }

    public function loadToView(array &$templatevars) {
        $this->_sortTreasure();
        $templatevars['treasure'] = true;
        $templatevars['coins'] = $this->treasure->coins;
        $templatevars['goods'] = $this->treasure->goods;
        $templatevars['items'] = $this->treasure->items;
        $templatevars['tradeGoods'] = $this->treasure->tradeGoods;
        $templatevars['totalValue'] = $this->_formatValue($this->treasure->cpValue);
        $templatevars['cpValue'] = $this->treasure->cpValue;
        $templatevars['tgenoptions'] = $this->options;
    }

    private function _sortTreasure() {
        if (is_array($this->treasure->goods)) {
            sort($this->treasure->goods);
        }
        $dupes = array_count_values($this->treasure->goods);
        $this->treasure->goods = array_unique($this->treasure->goods);
        foreach ($this->treasure->goods as &$item) {
            if ($dupes[$item] > 1) {
                $item .= " [Qty: {$dupes[$item]}]";
            }
        }
        $dupes = null;
        if (is_array($this->treasure->items)) {
            sort($this->treasure->items);
        }
        $dupes = array_count_values($this->treasure->items);
        $this->treasure->items = array_unique($this->treasure->items);
        foreach ($this->treasure->items as &$item) {
            if ($dupes[$item] > 1) {
                $item .= " [Qty: {$dupes[$item]}]";
            }
        }
        $dupes = null;
        $this->_combineDuplicateTradeGoods();
    }

    private function _combineDuplicateTradeGoods() {
        if (!is_array($this->treasure->tradeGoods)) {
            return;
        }

        sort($this->treasure->tradeGoods);

        $qty      = 0;
        $i        = 0;
        $currItem = '';
        $currItemIndex = 0;
        $matches  = array();
        $pattern  = '/^(?P<item>[^(]+) \((?P<qty>\d+)(?P<therest>.+)$/';

        foreach ($this->treasure->tradeGoods as $item) {
            if (preg_match($pattern, $item, $matches) != 0) {
                if ($i > 0 && $currItem == $matches['item']) {
                    $qty += $matches['qty'];
                    //echo " --- currItem = {$currItem}; qty = {$qty}<br />";
                    $this->treasure->tradeGoods[$currItemIndex] = $matches['item']
                          . ' (' . $qty . $matches['therest'];
                    unset($this->treasure->tradeGoods[$i]);
                } else {
                    $qty = $matches['qty'];
                    $currItem = $matches['item'];
                    $currItemIndex = $i;
                }
            }
            $matches = array();
            $i++;
        }
        sort($this->treasure->tradeGoods);
    }

    private function _formatValue($cpValue) {
        $pp = (int) ($cpValue / 1000);
        $cpValue = $cpValue - ($pp * 1000);
        $gp = (int) ($cpValue / 100);
        $cpValue = $cpValue - ($gp * 100);
        $sp = (int) ($cpValue / 10);
        $cpValue = $cpValue - ($sp * 10);
        $pp = number_format($pp);
        $gp = number_format($gp);
        $sp = number_format($sp);
        $cp = number_format($cpValue);
        return "{$pp} platinum; {$gp} gold; {$sp} silver; and {$cp} copper pieces";
    }

    protected function _getDieRoll($numDice, $dieType, $modifier = 0) {
	$max = $numDice * $dieType;
	return (rand($numDice, $max) + $modifier);
    }

    private function _validateForm() {
        $this->_setEdition();
        $this->_getEditionOptions();
    } // end _validateForm()

    private function _setEdition() {
        if (isset($_POST['edition']) && ctype_digit($_POST['edition'])) {
            $this->options['edition'] = (int) $_POST['edition'];
            if ($this->options['edition'] !== 30 &&
                $this->options['edition'] !== 35 &&
                $this->options['edition'] !== 40) {
                $this->options['edition'] = 35;
            }
        }
        if ($this->options['edition'] == 35) {
            if (isset($_POST['mode35']) && ctype_alpha($_POST['mode35'])) {
                $this->options['mode35'] = $_POST['mode35'];
                if ($this->options['mode35'] !== 'DMG' && $this->options['mode35'] !== 'MIC') {
                    $this->options['mode35'] = 'DMG';
                }
                if ($this->options['mode35'] == 'MIC') {
                    $this->options['edition'] = '35MIC';
                }
            }
        }
    }

    private function _getEditionOptions() {
        if ($this->options['edition'] == '30' || $this->options['edition'] == '35' || $this->options['edition'] == '35MIC') {
            if (isset($_POST['ed3CR']) && ctype_digit($_POST['ed3CR'])) {
                $this->options['cr'] = (int) $_POST['ed3CR'];
                if ($this->options['cr'] < 1 || $this->options['cr'] > self::ED3_MAX_CR) {
                    $this->options['cr'] = 1;
                }
            }
            if (isset($_POST['ed3Mult']) && ctype_digit($_POST['ed3Mult'])) {
                $this->options['multiplier'] = (int) $_POST['ed3Mult'];
                if ($this->options['multiplier'] < 1) {
                    $this->options['multiplier'] = 1;
                }
                if ($this->options['multiplier'] > self::ED3_MAX_MULT) {
                    $this->options['multiplier'] = self::ED3_MAX_MULT;
                }
            }
            if (isset($_POST['ed3ExtSize'])) {
                $this->options['ed3ExtSize'] = true;
            }
            if (isset($_POST['ed3Cursed'])) {
                $this->options['cursed'] = true;
            }
            if (isset($_POST['ed3TradeGoods'])) {
                $this->options['trade'] = true;
            }
            if (isset($_POST['ed3DracGoods'])) {
                $this->options['drac'] = true;
            }
        }
    }

    private function _getClassName() {
        $classname = "Tgen_DnD_{$this->options['edition']}_CR{$this->options['cr']}";

        return $classname;
    } // end _getClassName()
}