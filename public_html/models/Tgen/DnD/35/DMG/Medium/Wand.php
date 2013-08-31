<?php
class Tgen_DnD_35_DMG_Medium_Wand extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard     = null;
    protected $_wand      = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_wand = 'Searing light (6th) (13,500 gp)';
            $this->_hoard->cpValue += 13500 * 100;
        } elseif ($d100 > 98) {
            $this->_wand = 'Lightning bolt (6th) (13,500 gp)';
            $this->_hoard->cpValue += 13500 * 100;
        } elseif ($d100 > 97) {
            $this->_wand = 'Fireball (6th) (13,500 gp)';
            $this->_hoard->cpValue += 13500 * 100;
        } elseif ($d100 > 94) {
            $this->_wand = 'Summon monster III (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 91) {
            $this->_wand = 'Suggestion (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 89) {
            $this->_wand = 'Slow (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 87) {
            $this->_wand = 'Major image (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 83) {
            $this->_wand = 'Lightning bolt (5th) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 81) {
            $this->_wand = 'Keen edge (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 77) {
            $this->_wand = 'Fireball (5th) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 74) {
            $this->_wand = 'Dispel magic (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 70) {
            $this->_wand = 'Cure serious wounds (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 68) {
            $this->_wand = 'Contagion (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 67) {
            $this->_wand = 'Charm person, heightened (3rd-level spell) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 64) {
            $this->_wand = 'Call lightning (5th) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 62) {
            $this->_wand = 'Magic missile (9th) (6,750 gp)';
            $this->_hoard->cpValue += 6750 * 100;
        } elseif ($d100 > 59) {
            $this->_wand = 'Magic missile (7th) (5,250 gp)';
            $this->_hoard->cpValue += 5250 * 100;
        } elseif ($d100 > 57) {
            $this->_wand = 'Web (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 56) {
            $this->_wand = 'Summon monster II (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 54) {
            $this->_wand = 'Silence (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 53) {
            $this->_wand = 'Shatter (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 49) {
            $this->_wand = 'Owl\'s wisdom (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 47) {
            $this->_wand = 'Mirror image (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 45) {
            $this->_wand = 'Melf\'s acid arrow (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 44) {
            $this->_wand = 'Levitate (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 42) {
            $this->_wand = 'Knock (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 39) {
            $this->_wand = 'Invisibility (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 38) {
            $this->_wand = 'Hold person (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 37) {
            $this->_wand = 'Ghoul touch (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 33) {
            $this->_wand = 'Fox\'s cunning (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 31) {
            $this->_wand = 'False life (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 27) {
            $this->_wand = 'Eagle\'s splendor (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 24) {
            $this->_wand = 'Delay poison (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 22) {
            $this->_wand = 'Daylight (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 20) {
            $this->_wand = 'Darkness (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 15) {
            $this->_wand = 'Cure moderate wounds (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 11) {
            $this->_wand = 'Cat\'s grace (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 7) {
            $this->_wand = 'Bull\'s strength (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } elseif ($d100 > 3) {
            $this->_wand = 'Bear\'s endurance (4,500 gp)';
            $this->_hoard->cpValue += 4500 * 100;
        } else {
            $this->_wand = 'Magic missile (5th) (3,750 gp)';
            $this->_hoard->cpValue += 3750 * 100;
        }

        return 'Wand of ' . $this->_wand;
    }
}