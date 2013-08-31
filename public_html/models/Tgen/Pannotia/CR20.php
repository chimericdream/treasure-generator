<?php
class Tgen_Pannotia_CR20 extends Tgen_Pannotia {
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
            if ($d100 > 65) {
                $die = $this->_getDieRoll(4, 10);
                $this->coins['pp'] += ($die * 100);
            } elseif ($d100 > 2) {
                $die = $this->_getDieRoll(4, 8);
                $this->coins['gp'] += $die * 1000;
            }
        }
        $this->cpValue += $this->coins['pp'] * 1000;
        $this->cpValue += $this->coins['gp'] * 100;
    } // end _rollCoins()

    protected function _rollGoods() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 38) {
                $this->_getArtObjects($this->_getDieRoll(7, 7));
            } elseif ($d100 > 2) {
                $this->_getGems($this->_getDieRoll(4, 10));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 65) {
                $this->_getMajorItems($this->_getDieRoll(1, 3));
            } elseif ($d100 > 25) {
                $this->_getMediumItems($this->_getDieRoll(1, 4));
            }
        }
    } // end _rollItems()

    protected function _rollTradeGoods() {
        if ($this->trade) {
            for ($z = 1; $z <= $this->multiplier; $z++) {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 39) {
                    $this->_getTradeGoods($this->_getDieRoll(3, 8));
                }
            }
        }
    } // end _rollTradeGoods()
}