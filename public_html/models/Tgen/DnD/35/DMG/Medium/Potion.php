<?php
class Tgen_DnD_35_DMG_Medium_Potion extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard  = null;
    protected $_potion = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_potion = 'Water walk (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 97) {
            $this->_potion = 'Water breathing (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 96) {
            $this->_potion = 'Tongues (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 95) {
            $this->_potion = 'Remove disease (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 94) {
            $this->_potion = 'Remove curse (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 93) {
            $this->_potion = 'Remove blindness/deafness (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 91) {
            $this->_potion = 'Rage (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 88) {
            $dieRoll = $this->_getDieRoll(1, 4);
            if ($dieRoll == 1) {
                $this->_potion = 'Protection from energy (acid) (potion) (750 gp)';
            } elseif ($dieRoll == 2) {
                $this->_potion = 'Protection from energy (cold) (potion) (750 gp)';
            } elseif ($dieRoll == 3) {
                $this->_potion = 'Protection from energy (electricity) (potion) (750 gp)';
            } else {
                $this->_potion = 'Protection from energy (fire) (potion) (750 gp)';
            }
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 86) {
            $this->_potion = 'Nondetection (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 83) {
            $this->_potion = 'Neutralize poison (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 81) {
            $this->_potion = 'Magic vestment +1 (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 80) {
            $dieRoll = $this->_getDieRoll(1, 4);
            if ($dieRoll == 1) {
                $this->_potion = 'Magic circle against good (potion) (750 gp)';
            } else if ($dieRoll == 2) {
                $this->_potion = 'Magic circle against evil (potion) (750 gp)';
            } else if ($dieRoll == 3) {
                $this->_potion = 'Magic circle against law (potion) (750 gp)';
            } else {
                $this->_potion = 'Magic circle against chaos (potion) (750 gp)';
            }
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 78) {
            $this->_potion = 'Keen edge (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 75) {
            $this->_potion = 'Heroism (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 73) {
            $this->_potion = 'Haste (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 71) {
            $this->_potion = 'Greater magic weapon +1 (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 69) {
            $this->_potion = 'Greater magic fang +1 (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 68) {
            $this->_potion = 'Gaseous form (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 65) {
            $this->_potion = 'Fly (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 64) {
            $this->_potion = 'Flame arrow (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 61) {
            $this->_potion = 'Displacement (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 60) {
            $this->_potion = 'Daylight (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 55) {
            $this->_potion = 'Cure serious wounds (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 52) {
            $dieRoll = $this->_getDieRoll(1, 4);
            if ($dieRoll == 1) {
                $this->_potion = 'Resist energy (acid) 20 (potion) (700 gp)';
            } elseif ($dieRoll == 2) {
                $this->_potion = 'Resist energy (cold) 20 (potion) (700 gp)';
            } elseif ($dieRoll == 3) {
                $this->_potion = 'Resist energy (electricity) 20 (potion) (700 gp)';
            } else {
                $this->_potion = 'Resist energy (fire) 20 (potion) (700 gp)';
            }
            $this->_hoard->cpValue += 700 * 100;
        } elseif ($d100 > 51) {
            $this->_potion = 'Shield of faith +4 (potion) (600 gp)';
            $this->_hoard->cpValue += 600 * 100;
        } elseif ($d100 > 50) {
            $this->_potion = 'Barkskin +3 (potion) (600 gp)';
            $this->_hoard->cpValue += 600 * 100;
        } elseif ($d100 > 49) {
            $this->_potion = 'Undetectable alignment (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 48) {
            $this->_potion = 'Spider climb (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 46) {
            $this->_potion = 'Shield of faith +3 (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 44) {
            $dieRoll = $this->_getDieRoll(1, 4);
            if ($dieRoll == 1) {
                $this->_potion = 'Resist energy (acid) 10 (potion) (300 gp)';
            } elseif ($dieRoll == 2) {
                $this->_potion = 'Resist energy (cold) 10 (potion) (300 gp)';
            } elseif ($dieRoll == 3) {
                $this->_potion = 'Resist energy (electricity) 10 (potion) (300 gp)';
            } else {
                $this->_potion = 'Resist energy (fire) 10 (potion) (300 gp)';
            }
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 43) {
            $this->_potion = 'Remove paralysis (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 42) {
            $this->_potion = 'Protection from arrows 10/magic (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 40) {
            $this->_potion = 'Owl\'s wisdom (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 39) {
            $this->_potion = 'Misdirection (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 38) {
            $dieRoll = $this->_getDieRoll(1, 2);
            if ($dieRoll == 1) {
                $this->_potion = 'Levitate (potion) (300 gp)';
            } else {
                $this->_potion = 'Levitate (oil) (300 gp)';
            }
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 37) {
            $this->_potion = 'Lesser restoration (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 35) {
            $dieRoll = $this->_getDieRoll(1, 2);
            if ($dieRoll == 1) {
                $this->_potion = 'Invisibility (potion) (300 gp)';
            } else {
                $this->_potion = 'Invisibility (oil) (300 gp)';
            }
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 33) {
            $this->_potion = 'Fox\'s cunning (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 31) {
            $this->_potion = 'Eagle\'s splendor (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 30) {
            $this->_potion = 'Delay poision (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 28) {
            $this->_potion = 'Darkvision (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 27) {
            $this->_potion = 'Darkness (oil) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 19) {
            $this->_potion = 'Cure moderate wounds (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 16) {
            $this->_potion = 'Cat\'s grace (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 13) {
            $this->_potion = 'Bull\'s strength (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 10) {
            $this->_potion = 'Blur (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 7) {
            $this->_potion = 'Bear\'s endurance (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 6) {
            $this->_potion = 'Barkskin +2 (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 5) {
            $this->_potion = 'Aid (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 4) {
            $this->_potion = 'Reduce person (potion) (250 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 2) {
            $this->_potion = 'Enlarge person (potion) (250 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } else {
            $this->_potion = 'Bless weapon (oil) (100 gp)';
            $this->_hoard->cpValue += 100 * 100;
        }

        return $this->_potion;
    }
}