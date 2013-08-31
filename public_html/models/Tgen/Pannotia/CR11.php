<?php
class Tgen_Pannotia_CR11 extends Tgen_Pannotia {
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
            if ($d100 > 75) {
                $die = $this->_getDieRoll(4, 10);
                $this->coins['pp'] += ($die * 10);
            } elseif ($d100 > 14) {
                $die = $this->_getDieRoll(4, 8);
                $this->coins['gp'] += $die * 100;
            } elseif ($d100 > 8) {
                $die = $this->_getDieRoll(3, 10);
                $this->coins['sp'] += $die * 1000;
            }
        }
        $this->cpValue += $this->coins['pp'] * 1000;
        $this->cpValue += $this->coins['gp'] * 100;
        $this->cpValue += $this->coins['sp'] * 10;
    } // end _rollCoins()

    protected function _rollGoods() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 74) {
                $this->_getArtObjects($this->_getDieRoll(1, 6));
            } elseif ($d100 > 24) {
                $this->_getGems($this->_getDieRoll(1, 10));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 98) {
                $this->_getMajorItems(1);
            } elseif ($d100 > 84) {
                $this->_getMediumItems(1);
            } elseif ($d100 > 31) {
                $this->_getMinorItems($this->_getDieRoll(1, 4));
            }
        }
    } // end _rollItems()

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