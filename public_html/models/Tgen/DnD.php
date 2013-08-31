<?php
class Tgen_DnD extends Tgen {
    const ED3_MAX_CR = 20;
    const ED3_MAX_MULT = 100;

    public    $cpValue    = 0;       // Total CP value for the hoard

    public    $multiplier = 1;
    public    $trade      = false;
    public    $drac       = false;
    public    $cursed     = false;
    public    $extSize    = false;

    public    $coins      = array(
            'cp' => 0,
            'sp' => 0,
            'gp' => 0,
            'pp' => 0,
    );
    public    $goods      = array();
    public    $items      = array();
    public    $tradeGoods = array();
    public    $options    = array();

    public function __construct(array $options) {
        $this->multiplier = $options['multiplier'];
        $this->trade      = $options['trade'];
        $this->drac       = $options['drac'];
        $this->cursed     = $options['cursed'];
        $this->extSize    = $options['extSize'];
        $this->options    = $options;
    }

    public function generate() {}

    public function loadToView(array &$templatevars) {
        $this->_sortTreasure();
        $templatevars['treasure'] = true;
        $templatevars['coins'] = $this->coins;
        $templatevars['goods'] = $this->goods;
        $templatevars['items'] = $this->items;
        $templatevars['tradeGoods'] = $this->tradeGoods;
        $templatevars['totalValue'] = $this->_formatValue($this->cpValue);
        $templatevars['cpValue'] = $this->cpValue;
        $templatevars['tgenoptions'] = $this->options;
    }

    private function _sortTreasure() {
        if (is_array($this->goods)) {
            sort($this->goods);
        }
        $dupes = array_count_values($this->goods);
        $this->goods = array_unique($this->goods);
        foreach ($this->goods as &$item) {
            if ($dupes[$item] > 1) {
                $item .= " [Qty: {$dupes[$item]}]";
            }
        }
        $dupes = null;
        if (is_array($this->items)) {
            sort($this->items);
        }
        $dupes = array_count_values($this->items);
        $this->items = array_unique($this->items);
        foreach ($this->items as &$item) {
            if ($dupes[$item] > 1) {
                $item .= " [Qty: {$dupes[$item]}]";
            }
        }
        $dupes = null;
        $this->_combineDuplicateTradeGoods();
    }

    private function _combineDuplicateTradeGoods() {
        if (!is_array($this->tradeGoods)) {
            return;
        }

        sort($this->tradeGoods);

        $qty      = 0;
        $i        = 0;
        $currItem = '';
        $currItemIndex = 0;
        $matches  = array();
        $pattern  = '/^(?P<item>[^(]+)(?: \((?P<qty>\d+)(?P<therest>.+)?\))?$/';

        foreach ($this->tradeGoods as $item) {
            if (preg_match($pattern, $item, $matches) != 0) {
                if ($i > 0 && $currItem == $matches['item']) {
                    $qty += $matches['qty'];
                    echo " --- currItem = {$currItem}; qty = {$qty}<br />";
                    $this->tradeGoods[$currItemIndex] = $matches['item']
                          . ' (' . $qty . $matches['therest'];
                    unset($this->tradeGoods[$i]);
                } else {
                    $qty = $matches['qty'];
                    $currItem = $matches['item'];
                    $currItemIndex = $i;
                }
            }
            $matches = array();
            $i++;
        }
        sort($this->tradeGoods);
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