<?php
class Tgen_Pannotia extends Tgen {
    const MAX_CR     = 20;
    const MAX_MULT   = 100;
    private $options = array(
        'multiplier' => 1,
        'cr'         => 1,
        'cursed'     => false,
        'ed3ExtSize' => false,
    );

    public function __construct() {}

    public function generate() {
        $this->_setOptions();
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

    private function _setOptions() {
        if (isset($_POST['pannotia_CR']) && ctype_digit($_POST['pannotia_CR'])) {
            $this->options['cr'] = (int) $_POST['pannotia_CR'];
            if ($this->options['cr'] < 1 || $this->options['cr'] > self::MAX_CR) {
                $this->options['cr'] = 1;
            }
        }
    }

    private function _getClassName() {
        $classname = "Tgen_Pannotia_CR{$this->options['cr']}";

        return $classname;
    } // end _getClassName()
}