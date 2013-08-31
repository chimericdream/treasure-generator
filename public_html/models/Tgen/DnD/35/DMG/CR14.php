<?php
class Tgen_DnD_35_DMG_CR14 extends Tgen_DnD_35_DMG {
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
                $die = $this->_getDieRoll(1, 12);
                $this->coins['pp'] += ($die * 100);
            } elseif ($d100 > 8) {
                $die = $this->_getDieRoll(1, 6);
                $this->coins['gp'] += $die * 1000;
            }
        }
        $this->cpValue += $this->coins['pp'] * 1000;
        $this->cpValue += $this->coins['gp'] * 100;
    } // end _rollCoins()

    protected function _rollGoods() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 66) {
                $this->_getArtObjects($this->_getDieRoll(2, 6));
            } elseif ($d100 > 11) {
                $this->_getGems($this->_getDieRoll(2, 8));
            }
        }
    } // end _rollGoods()

    protected function _rollItems() {
        for ($z = 1; $z <= $this->multiplier; $z++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 92) {
                $this->_getMajorItems(1);
            } elseif ($d100 > 58) {
                $this->_getMediumItems(1);
            } elseif ($d100 > 19) {
                $this->_getMinorItems($this->_getDieRoll(1, 6));
            }
        }
    } // end _rollItems()

    protected function _rollTradeGoods() {
        if ($this->trade) {
            for ($z = 1; $z <= $this->multiplier; $z++) {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 39) {
                    $this->_getTradeGoods($this->_getDieRoll(2, 6));
                }
            }
        }
    } // end _rollTradeGoods()
}