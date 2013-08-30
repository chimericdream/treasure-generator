<?php
class Tgen_DnD_35_CR7 extends Tgen_DnD_35 {
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
                $die = $this->_getDieRoll(1, 10);
                $this->coins['pp'] += ($die * 10);
            } elseif ($d100 > 41) {
                $die = $this->_getDieRoll(1, 6);
                $this->coins['gp'] += $die * 100;
            } elseif ($d100 > 21) {
                $die = $this->_getDieRoll(4, 12);
                $this->coins['sp'] += $die * 100;
            } elseif ($d100 > 11) {
                $die = $this->_getDieRoll(3, 10);
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
            if ($d100 > 88) {
                $this->_getArtObjects($this->_getDieRoll(1, 4));
            } elseif ($d100 > 48) {
                $this->_getGems($this->_getDieRoll(1, 4));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 97) {
                $this->_getMediumItems(1);
            } elseif ($d100 > 51) {
                $this->_getMinorItems($this->_getDieRoll(1, 3));
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