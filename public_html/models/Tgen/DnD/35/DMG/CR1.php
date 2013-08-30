<?php
class Tgen_DnD_35_CR1 extends Tgen_DnD_35 {
    public function __construct(array $options) {
        parent::__construct($options);
    } // end __construct()

    public function generate() {
        $this->_rollCoins();
        $this->_rollGoods();
        $this->_rollItems();
        $this->_rollTradeGoods();
    } // end generate()

    protected function _rollCoins() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) {
                $die = $this->_getDieRoll(1, 4);
                $this->coins['pp'] += ($die * 10);
            } elseif ($d100 > 52) {
                $die = $this->_getDieRoll(2, 8);
                $this->coins['gp'] += $die * 10;
            } elseif ($d100 > 29) {
                $die = $this->_getDieRoll(1, 8);
                $this->coins['sp'] += $die * 100;
            } elseif ($d100 > 14) {
                $die = $this->_getDieRoll(1, 6);
                $this->coins['cp'] += $die * 1000;
            }
        }
        $this->cpValue += $this->coins['pp'] * 1000;
        $this->cpValue += $this->coins['gp'] * 100;
        $this->cpValue += $this->coins['sp'] * 10;
        $this->cpValue += $this->coins['cp'];
    } // end _rollCoins()

    protected function _rollGoods() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) {
                $this->_getArtObjects(1);
            } elseif ($d100 > 90) {
                $this->_getGems(1);
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) {
                $this->_getMinorItems(1);
            } elseif ($d100 > 71) {
                $this->_getMundaneItems(1);
            }
        }
    } // end _rollItems()

    protected function _rollTradeGoods() {
        if ($this->trade) {
            for ($z = 1; $z <= $this->multiplier; $z++) {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 71) {
                    $this->_getTradeGoods(1);
                }
            }
        }
    } // end _rollTradeGoods()
}