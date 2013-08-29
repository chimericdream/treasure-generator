<?php
class Tgen_DnD_35_Scroll_Arcane_Lv7 extends Tgen_DnD_35_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_item = 'waves of exhaustion (2,275 gp)';
        } elseif ($d100 > 95) {
            $this->_item = 'vision (2,275 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'teleport, greater (2,275 gp)';
        } elseif ($d100 > 87) {
            $this->_item = 'teleport object (2,275 gp)';
        } elseif ($d100 > 86) {
            $this->_item = 'symbol of weakness (7,275 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 85) {
            $this->_item = 'symbol of stunning (7,275 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 82) {
            $this->_item = 'summon monster VII (2,275 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'statue (2,275 gp)';
        } elseif ($d100 > 77) {
            $this->_item = 'spell turning (2,275 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'simulacrum (7,275 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 73) {
            $this->_item = 'shadow conjuration, greater (2,275 gp)';
        } elseif ($d100 > 70) {
            $this->_item = 'sequester (2,275 gp)';
        } elseif ($d100 > 67) {
            $this->_item = 'scrying, greater (2,275 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'reverse gravity (2,275 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'project image (2,280 gp)';
            $this->_hoard->cpValue += 5 * 100;
        } elseif ($d100 > 57) {
            $this->_item = 'prismatic spray (2,275 gp)';
        } elseif ($d100 > 54) {
            $this->_item = 'power word blind (2,275 gp)';
        } elseif ($d100 > 51) {
            $this->_item = 'plane shift (2,275 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'phase door (2,275 gp)';
        } elseif ($d100 > 45) {
            $this->_item = 'mage\'s sword (2,275 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'mage\'s magnificent mansion (2,275 gp)';
        } elseif ($d100 > 42) {
            $this->_item = 'limited wish (3,775 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 38) {
            $this->_item = 'invisibility, mass (2,275 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'insanity (2,275 gp)';
        } elseif ($d100 > 31) {
            $this->_item = 'hold person, mass (2,275 gp)';
        } elseif ($d100 > 28) {
            $this->_item = 'forcecage (2,275 gp)';
        } elseif ($d100 > 25) {
            $this->_item = 'finger of death (2,275 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'ethereal jaunt (2,275 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'instant summons (3,275 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 16) {
            $this->_item = 'delayed blast fireball (2,275 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'control weather (2,275 gp)';
        } elseif ($d100 > 10) {
            $this->_item = 'control undead (2,275 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'grasping hand (2,275 gp)';
        } elseif ($d100 > 3) {
            $this->_item = 'banishment (2,275 gp)';
        } else {
            $this->_item = 'arcane sight, greater (2,275 gp)';
        }

        $this->_hoard->cpValue += 2275 * 100;
        return $this->_item;
    }
}