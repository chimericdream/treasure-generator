<?php
class Tgen_Pannotia extends Tgen {
    const MAX_CR   = 20;
    const MAX_MULT = 100;

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

    protected function _getArtObjects($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2 && $this->drac) {
                $drac = new Tgen_DnD_30_Draconomicon($this);
                $this->goods[] = $drac->generate();
                unset($drac);
            } else {
                $art = new Tgen_Pannotia_Art($this);
                $this->goods[] = $art->generate();
                unset($art);
            }
        }
    } // end _getArtObjects()

    protected function _getGems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $gem = new Tgen_Pannotia_Gem($this);
            $this->goods[] = $gem->generate();
            unset($gem);
        }
    } // end _getGems()

    protected function _getMundaneItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $mundane = new Tgen_Pannotia_Mundane($this);
            $this->items[] = $mundane->generate();
            unset($mundane);
        }        
    } // end _getMundaneItems()

    protected function _getMinorItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || $this->cursed == false) { // No cursed Item
                $minor = new Tgen_Pannotia_Minor($this);
                $this->items[] = $minor->generate();
                unset($minor);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMinorItems()

    protected function _getMediumItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || !$this->cursed) { // No cursed Item
                $medium = new Tgen_Pannotia_Medium($this);
                $this->items[] = $medium->generate();
                unset($medium);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMediumItems()

    protected function _getMajorItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || !$this->cursed) { // No cursed Item
                $major = new Tgen_Pannotia_Major($this);
                $this->items[] = $major->generate();
                unset($major);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMajorItems()

    protected function _getCursedItem() {
        $cursed = new Tgen_Pannotia_CursedItem($this);
        $this->items[] = $cursed->generate();
        unset($cursed);
    } // end _getCursedItem()

    protected function _getSize() {
        if ($this->extSize) {
            return $this->_getExtendedSize();
        } else {
            return $this->_getStandardSize();
        }
    } // end _getSize()

    protected function _getStandardSize() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 10) {
            $size[0] = '<acronym title="Normal base price for the item">Medium</acronym>';
            $size[1] = 1;
        } else {
            $size[0] = '<acronym title="Normal base price for the item">Small</acronym>';
            $size[1] = 1;
        }

        return $size;
    }

    protected function _getExtendedSize() {
        $d200 = $this->_getDieRoll(1, 200);
        if ($d200 > 199) {
            $size[0] = '<acronym title="*8 to the base price of the item">Colossal</acronym>';
            $size[1] = 8;
        } elseif ($d200 > 196) {
            $size[0] = '<acronym title="*4 to the base price of the item">Gargantuan</acronym>';
            $size[1] = 4;
        } elseif ($d200 > 190) {
            $size[0] = '<acronym title="*2 to the base price of the item">Huge</acronym>';
            $size[1] = 2;
        } elseif ($d200 > 160) {
            $size[0] = '<acronym title="Normal base price for the item">Large</acronym>';
            $size[1] = 1;
        } elseif ($d200 > 40) {
            $size[0] = '<acronym title="Normal base price for the item">Medium</acronym>';
            $size[1] = 1;
        } elseif ($d200 > 10) {
            $size[0] = '<acronym title="Normal base price for the item">Small</acronym>';
            $size[1] = 1;
        } elseif ($d200 > 4) {
            $size[0] = '<acronym title="*2 to the base price of the item">Tiny</acronym>';
            $size[1] = 2;
        } elseif ($d200 > 1) {
            $size[0] = '<acronym title="*4 to the base price of the item">Diminutive</acronym>';
            $size[1] = 4;
        } else {
            $size[0] = '<acronym title="*8 to the base price of the item">Fine</acronym>';
            $size[1] = 8;
        }

        return $size;
    }

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
                    if (empty($matches['qty'])) {
                        $qty++;
                    } else {
                        $qty += $matches['qty'];
                    }
                    $this->tradeGoods[$currItemIndex] = $matches['item'];
                    if (!empty($qty) || !empty($matches['therest'])) {
                        if (!empty($matches['therest'])) {
                            $this->tradeGoods[$currItemIndex] .= ' (' . $qty . $matches['therest'] . ')';
                        } else {
                            if ($qty > 1) {
                                $this->tradeGoods[$currItemIndex] .= ' [Qty: ' . $qty . ']';
                            }
                        }
                    }
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
        $this->_setOptions();
    } // end _validateForm()

    private function _setOptions() {
        if (isset($_POST['Pannotia_CR']) && ctype_digit($_POST['Pannotia_CR'])) {
            $this->options['cr'] = (int) $_POST['Pannotia_CR'];
            if ($this->options['cr'] < 1 || $this->options['cr'] > self::MAX_CR) {
                $this->options['cr'] = 1;
            }
        }
        if (isset($_POST['Pannotia_Mult']) && ctype_digit($_POST['Pannotia_Mult'])) {
            $this->options['multiplier'] = (int) $_POST['Pannotia_Mult'];
            if ($this->options['multiplier'] < 1) {
                $this->options['multiplier'] = 1;
            }
            if ($this->options['multiplier'] > self::MAX_MULT) {
                $this->options['multiplier'] = self::MAX_MULT;
            }
        }
        if (isset($_POST['Pannotia_ExtSize'])) {
            $this->options['extSize'] = true;
        }
        if (isset($_POST['Pannotia_Cursed'])) {
            $this->options['cursed'] = true;
        }
    }

    private function _getClassName() {
        $classname = "Tgen_Pannotia_CR{$this->options['cr']}";

        return $classname;
    } // end _getClassName()
}