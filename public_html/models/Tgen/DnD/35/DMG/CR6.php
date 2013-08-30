<?php
class Tgen_DnD_35_CR6 extends Tgen_DnD_35 {
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
                $die = $this->_getDieRoll(1, 12);
                $this->coins['pp'] += ($die * 10);
            } elseif ($d100 > 37) {
                $die = $this->_getDieRoll(1, 10);
                $this->coins['gp'] += $die * 100;
            } elseif ($d100 > 18) {
                $die = $this->_getDieRoll(1, 8);
                $this->coins['sp'] += $die * 1000;
            } elseif ($d100 > 10) {
                $die = $this->_getDieRoll(1, 6);
                $this->coins['cp'] += $die * 10000;
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
            if ($d100 > 92) {
                $this->_getArtObjects($this->_getDieRoll(1, 4));
            } elseif ($d100 > 56) {
                $this->_getGems($this->_getDieRoll(1, 4));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 99) {
                $this->_getMediumItems(1);
            } elseif ($d100 > 59) {
                $this->_getMinorItems($this->_getDieRoll(1, 3));
            } elseif ($d100 > 54) {
                $this->_getMundaneItems($this->_getDieRoll(1, 4));
            }
        }
    } // end _rollItems()

    protected function _rollTradeGoods() {
        if ($this->trade) {
            for ($z = 1; $z <= $this->multiplier; $z++) {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 49) {
                    $this->_getTradeGoods($this->_getDieRoll(1, 6));
                }
            }
        }
    } // end _rollTradeGoods()
}