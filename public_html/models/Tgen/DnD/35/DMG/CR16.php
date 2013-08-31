<?php
class Tgen_DnD_35_DMG_CR16 extends Tgen_DnD_35_DMG {
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
                $die = $this->_getDieRoll(1, 12);
                $this->coins['gp'] += $die * 1000;
            }
        }
        $this->cpValue += $this->coins['pp'] * 1000;
        $this->cpValue += $this->coins['gp'] * 100;
    } // end _rollCoins()

    protected function _rollGoods() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 64) {
                $this->_getArtObjects($this->_getDieRoll(2, 10));
            } elseif ($d100 > 7) {
                $this->_getGems($this->_getDieRoll(4, 6));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 90) {
                $this->_getMajorItems(1);
            } elseif ($d100 > 46) {
                $this->_getMediumItems($this->_getDieRoll(1, 3));
            } elseif ($d100 > 40) {
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