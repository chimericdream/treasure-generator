<?php
class Tgen_DnD_35_Scroll_Divine_Lv7 extends Tgen_DnD_35_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_item = 'word of chaos (2,275 gp)';
        } elseif ($d100 > 92) {
            $this->_item = 'transmute metal to wood (2,275 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'symbol of weakness (7,275 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 90) {
            $this->_item = 'symbol of stunning (7,275 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 85) {
            $this->_item = 'sunbeam (2,275 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'summon nature\'s ally VII (2,275 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'summon monster VII (2,275 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'scrying, greater (2,275 gp)';
        } elseif ($d100 > 69) {
            $this->_item = 'resurrection (12,275 gp)';
            $this->_hoard->cpValue += 10000 * 100;
        } elseif ($d100 > 65) {
            $this->_item = 'restoration, greater (4,775 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } elseif ($d100 > 60) {
            $this->_item = 'repulsion (2,275 gp)';
        } elseif ($d100 > 55) {
            $this->_item = 'regenerate (2,275 gp)';
        } elseif ($d100 > 50) {
            $this->_item = 'refuge (3,775 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 45) {
            $this->_item = 'inflict serious wounds, mass (2,275 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'holy word (2,275 gp)';
        } elseif ($d100 > 36) {
            $this->_item = 'ethereal jaunt (2,275 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'dictum (2,275 gp)';
        } elseif ($d100 > 27) {
            $this->_item = 'destruction (2,275 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'cure serious wounds, mass (2,275 gp)';
        } elseif ($d100 > 16) {
            $this->_item = 'creeping doom (2,275 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'control weather (2,275 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'chagestaff (2,275 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'blasphemy (2,275 gp)';
        } else {
            $this->_item = 'animate plants (2,275 gp)';
        }

        $this->_hoard->cpValue += 2275 * 100;
        return $this->_item;
    }
}