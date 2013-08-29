<?php
class Tgen_DnD_35MIC_CR2 extends Tgen_DnD_35MIC {
    public function __construct(array $options) {
        parent::__construct($options);
    } // end __construct()

    public function generate() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 99) {
                $die = $this->_getDieRoll(2, 8);
                $this->coins['pp'] += $die * 10;
                $this->_getGoods('B', 1);
                $this->_getLvItems(2, 1);
            } elseif ($d100 > 91) {
                $die = $this->_getDieRoll(1, 12);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('B', 1);
                $this->_getLvItems(2, 1);
            } elseif ($d100 > 83) {
                $die = $this->_getDieRoll(1, 10);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('A', 2);
                $this->_getLvItems(1, 2);
            } elseif ($d100 > 78) {
                $die = $this->_getDieRoll(1, 10);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('B', 1);
                $this->_getLvItems(1, 1);
                $this->_getHalfLevItems(1);
            } elseif ($d100 > 60) {
                $die = $this->_getDieRoll(1, 4);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('B', 1);
                $this->_getLvItems(1, 2);
                $this->_getHalfLevItems(1);
            } elseif ($d100 > 44) {
                $die = $this->_getDieRoll(1, 4);
                $this->coins['sp'] += $die * 1000;
                $this->_getGoods('A', 1);
                $this->_getGoods('B', 1);
                $this->_getLvItems(1, 2);
            } elseif ($d100 > 21) {
                $die = $this->_getDieRoll(1, 6);
                $this->coins['sp'] += $die * 1000;
                $this->_getLvItems(1, 1);
                $this->_getHalfLevItems(1);
            } elseif ($d100 > 10) {
                $die = $this->_getDieRoll(2, 4);
                $this->coins['sp'] += $die * 100;
                $this->_getLvItems(1, 1);
            } elseif ($d100 > 7) {
                $die = $this->_getDieRoll(3, 6);
                $this->coins['sp'] += $die * 100;
                $this->_getGoods('A', 2);
            } else {
                $die = $this->_getDieRoll(2, 12);
                $this->coins['cp'] += $die * 1000;
            }
            $this->cpValue += $this->coins['pp'] * 1000;
            $this->cpValue += $this->coins['gp'] * 100;
            $this->cpValue += $this->coins['sp'] * 10;
            $this->cpValue += $this->coins['cp'];
            $this->_rollTradeGoods();
        }
    } // end generate()

    protected function _rollTradeGoods() {
        if ($this->trade) {
            for ($z = 1; $z <= $this->multiplier; $z++) {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 49) {
                    $this->_getTradeGoods(1);
                }
            }
        }
    } // end _rollTradeGoods()
}