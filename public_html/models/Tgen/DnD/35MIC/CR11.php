<?php
class Tgen_DnD_35MIC_CR11 extends Tgen_DnD_35MIC {
    public function __construct(array $options) {
        parent::__construct($options);
    } // end __construct()

    public function generate() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 99) {
                $die = $this->_getDieRoll(4, 10);
                $this->coins['pp'] += $die * 10;
                $this->_getGoods('G', 1);
                $this->_getGoods('F', 1);
                $this->_getLvItems(11, 1);
            } elseif ($d100 > 91) {
                $die = $this->_getDieRoll(3, 10);
                $this->coins['pp'] += $die * 10;
                $this->_getGoods('G', 1);
                $this->_getGoods('F', 1);
                $this->_getLvItems(10, 1);
            } elseif ($d100 > 83) {
                $die = $this->_getDieRoll(4, 10);
                $this->coins['pp'] += $die * 10;
                $this->_getGoods('G', 1);
                $this->_getGoods('E', 1);
                $this->_getLvItems(9, 1);
            } elseif ($d100 > 78) {
                $die = $this->_getDieRoll(4, 10);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('G', 1);
                $this->_getGoods('F', 1);
                $this->_getLvItems(8, 1);
            } elseif ($d100 > 60) {
                $die = $this->_getDieRoll(6, 4);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('F', 2);
                $this->_getGoods('D', 1);
                $this->_getLvItems(8, 1);
            } elseif ($d100 > 44) {
                $die = $this->_getDieRoll(6, 4);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('G', 1);
                $this->_getLvItems(7, 1);
                $this->_getLvItems(2, 1);
            } elseif ($d100 > 21) {
                $die = $this->_getDieRoll(4, 8);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('F', 2);
                $this->_getLvItems(7, 1);
            } elseif ($d100 > 10) {
                $die = $this->_getDieRoll(4, 6);
                $this->coins['gp'] += $die * 100;
                $this->_getGoods('F', 1);
                $this->_getLvItems(7, 1);
            } elseif ($d100 > 7) {
                $die = $this->_getDieRoll(4, 6);
                $this->coins['sp'] += $die * 1000;
                $this->_getGoods('F', 1);
                $this->_getGoods('E', 1);
                $this->_getLvItems(6, 1);
            } else {
                $die = $this->_getDieRoll(6, 4);
                $this->coins['sp'] += $die * 1000;
                $this->_getGoods('F', 1);
                $this->_getLvItems(6, 1);
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
                if ($d100 > 39) {
                    $this->_getTradeGoods($this->_getDieRoll(1, 8));
                }
            }
        }
    } // end _rollTradeGoods()
}