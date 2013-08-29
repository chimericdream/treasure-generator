<?php
class Tgen_DnD_35_Minor_Wand extends Tgen_DnD_35_Minor {
    protected $_hoard     = null;
    protected $_wand      = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_wand = 'Web (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 94) {
            $this->_wand = 'Summon monster II (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 91) {
            $this->_wand = 'Silence (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 89) {
            $this->_wand = 'Shatter (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 86) {
            $this->_wand = 'Owl\'s wisdom (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 83) {
            $this->_wand = 'Mirror image (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 80) {
            $this->_wand = 'Melf\'s acid arrow (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 77) {
            $this->_wand = 'Levitate (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 74) {
            $this->_wand = 'Knock (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 71) {
            $this->_wand = 'Invisibility (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 68) {
            $this->_wand = 'Hold person (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 66) {
            $this->_wand = 'Ghoul touch (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 63) {
            $this->_wand = 'Fox\'s cunning (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 60) {
            $this->_wand = 'False life (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 57) {
            $this->_wand = 'Eagle\'s splendor (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 54) {
            $this->_wand = 'Delay poison (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 51) {
            $this->_wand = 'Daylight (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 49) {
            $this->_wand = 'Darkness (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 46) {
            $this->_wand = 'Cure moderate wounds (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 43) {
            $this->_wand = 'Cat\'s grace (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 40) {
            $this->_wand = 'Bull\'s strength (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 37) {
            $this->_wand = 'Bear\'s endurance (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 36) {
            $this->_wand = 'Magic missile (5th) (3,750 gp)';
            $this->_hoard->cpValue += 3750 * 100;
        } elseif ($d100 > 34) {
            $this->_wand = 'Magic missile (3rd) (2,250 gp)';
            $this->_hoard->cpValue += 2250 * 100;
        } elseif ($d100 > 31) {
            $this->_wand = 'Summon monster I (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 28) {
            $this->_wand = 'Shocking grasp (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 25) {
            $this->_wand = 'Magic missile (1st) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 22) {
            $this->_wand = 'Enlarge person (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 19) {
            $this->_wand = 'Detect secret doors (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 16) {
            $this->_wand = 'Cure light wounds (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 13) {
            $this->_wand = 'Color spray (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 10) {
            $this->_wand = 'Charm person (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 7) {
            $this->_wand = 'Charm animal (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 4) {
            $this->_wand = 'Burning hands (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 2) {
            $this->_wand = 'Light (375 gp)';
            $this->_hoard->cpValue += 375 * 100;
        } else {
            $this->_wand = 'Detect magic (375 gp)';
            $this->_hoard->cpValue += 375 * 100;
        }

        return 'Wand of ' . $this->_wand;
    }
}