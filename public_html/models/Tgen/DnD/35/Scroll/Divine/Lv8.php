<?php
class Tgen_DnD_35_Scroll_Divine_Lv8 extends Tgen_DnD_35_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 96) {
            $this->_item = 'whirlwind (3,000 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'unholy aura (3,000 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'symbol of insanity (8,000 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 89) {
            $this->_item = 'symbol of death (8,000 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 84) {
            $this->_item = 'sunburst (3,000 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'summon nature\'s ally VIII (3,000 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'summon monster VIII (3,000 gp)';
        } elseif ($d100 > 72) {
            $this->_item = 'spell immunity, greater (3,000 gp)';
        } elseif ($d100 > 69) {
            $this->_item = 'shield of law (3,000 gp)';
        } elseif ($d100 > 65) {
            $this->_item = 'reverse gravity (3,000 gp)';
        } elseif ($d100 > 60) {
            $this->_item = 'repel metal or stone (3,000 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'planar ally, greater (5,500 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } elseif ($d100 > 52) {
            $this->_item = 'inflict critical wounds, mass (3,000 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'holy aura (3,000 gp)';
        } elseif ($d100 > 45) {
            $this->_item = 'fire storm (3,000 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'finger of death (3,000 gp)';
        } elseif ($d100 > 36) {
            $this->_item = 'earthquake (3,000 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'discern location (3,000 gp)';
        } elseif ($d100 > 27) {
            $this->_item = 'dimensional lock (3,000 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'cure critical wounds, mass (3,000 gp)';
        } elseif ($d100 > 17) {
            $this->_item = 'create greater undead (3,600 gp)';
            $this->_hoard->cpValue += 600 * 100;
        } elseif ($d100 > 13) {
            $this->_item = 'control plants (3,000 gp)';
        } elseif ($d100 > 10) {
            $this->_item = 'cloak of chaos (3,000 gp)';
        } elseif ($d100 > 4) {
            $this->_item = 'antimagic field (3,000 gp)';
        } else {
            $this->_item = 'animal shapes (3,000 gp)';
        }

        $this->_hoard->cpValue += 3000 * 100;
        return $this->_item;
    }
}