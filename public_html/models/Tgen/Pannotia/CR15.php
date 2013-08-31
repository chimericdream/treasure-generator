<?php
class Tgen_Pannotia_CR15 extends Tgen_Pannotia {
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
            if ($d100 > 74) {
                $die = $this->_getDieRoll(3, 4);
                $this->coins['pp'] += ($die * 100);
            } elseif ($d100 > 3) {
                $die = $this->_getDieRoll(1, 8);
                $this->coins['gp'] += $die * 1000;
            }
        }
        $this->cpValue += $this->coins['pp'] * 1000;
        $this->cpValue += $this->coins['gp'] * 100;
    } // end _rollCoins()

    protected function _rollGoods() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 65) {
                $this->_getArtObjects($this->_getDieRoll(2, 8));
            } elseif ($d100 > 9) {
                $this->_getGems($this->_getDieRoll(2, 10));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 90) {
                $this->_getMajorItems(1);
            } elseif ($d100 > 46) {
                $this->_getMediumItems(1);
            } elseif ($d100 > 11) {
                $this->_getMinorItems($this->_getDieRoll(1, 10));
            }
        }
    } // end _rollItems()

    protected function _rollTradeGoods() {
        if ($this->trade) {
            for ($z = 1; $z <= $this->multiplier; $z++) {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 39) {
                    $this->_getTradeGoods($this->_getDieRoll(3, 6));
                }
            }
        }
    } // end _rollTradeGoods()
}