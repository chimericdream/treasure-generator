<?php
class Tgen_DnD_35_DMG_Major_Potion extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard  = null;
    protected $_potion = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_potion = 'Magic vestment +5 (oil) (3,000 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        } elseif ($d100 > 98) {
            $this->_potion = 'Greater magic weapon +5 (oil) (3,000 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        } elseif ($d100 > 97) {
            $this->_potion = 'Greater magic fang +5 (potion) (3,000 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        } elseif ($d100 > 95) {
            $this->_potion = 'Magic vestment +4 (oil) (2,400 gp)';
            $this->_hoard->cpValue += 2400 * 100;
        } elseif ($d100 > 93) {
            $this->_potion = 'Greater magic weapon +4 (oil) (2,400 gp)';
            $this->_hoard->cpValue += 2400 * 100;
        } elseif ($d100 > 91) {
            $this->_potion = 'Greater magic fang +4 (potion) (2,400 gp)';
            $this->_hoard->cpValue += 2400 * 100;
        } elseif ($d100 > 88) {
            $this->_potion = 'Magic vestment +3 (oil) (1,800 gp)';
            $this->_hoard->cpValue += 1800 * 100;
        } elseif ($d100 > 85) {
            $this->_potion = 'Greater magic weapon +3 (oil) (1,800 gp)';
            $this->_hoard->cpValue += 1800 * 100;
        } elseif ($d100 > 82) {
            $this->_potion = 'Greater magic fang +3 (potion) (1,800 gp)';
            $this->_hoard->cpValue += 1800 * 100;
        } elseif ($d100 > 81) {
            $this->_potion = 'Protection from arrows 15/magic (potion) (1,500 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 77) {
            $this->_potion = 'Magic vestment +2 (oil) (1,200 gp)';
            $this->_hoard->cpValue += 1200 * 100;
        } elseif ($d100 > 73) {
            $this->_potion = 'Greater magic weapon +2 (oil) (1,200 gp)';
            $this->_hoard->cpValue += 1200 * 100;
        } elseif ($d100 > 69) {
            $this->_potion = 'Greater magic fang +2 (potion) (1,200 gp)';
            $this->_hoard->cpValue += 1200 * 100;
        } elseif ($d100 > 68) {
            $this->_potion = 'Barkskin +5 (potion) (1,200 gp)';
            $this->_hoard->cpValue += 1200 * 100;
        } elseif ($d100 > 65) {
            $dieRoll = $this->_getDieRoll(1, 4);
            if ($dieRoll == 1) {
                $this->_potion = 'Resist enerty (acid) 30 (potion) (1,100 gp)';
            } elseif ($dieRoll == 2) {
                $this->_potion = 'Resist enerty (cold) 30 (potion) (1,100 gp)';
            } elseif ($dieRoll == 3) {
                $this->_potion = 'Resist enerty (electricity) 30 (potion) (1,100 gp)';
            } else {
                $this->_potion = 'Resist enerty (fire) 30 (potion) (1,100 gp)';
            }
            $this->_hoard->cpValue += 1100 * 100;
        } elseif ($d100 > 64) {
            $this->_potion = 'Good hope (potion) (1,050 gp)';
            $this->_hoard->cpValue += 1050 * 100;
        } elseif ($d100 > 63) {
            $this->_potion = 'Shield of faith +5 (potion) (900 gp)';
            $this->_hoard->cpValue += 900 * 100;
        } elseif ($d100 > 61) {
            $this->_potion = 'Barkskin +4 (potion) (900 gp)';
            $this->_hoard->cpValue += 900 * 100;
        } elseif ($d100 > 60) {
            $this->_potion = 'Water walk (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 59) {
            $this->_potion = 'Water breathing (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 58) {
            $this->_potion = 'Tongues (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 57) {
            $this->_potion = 'Remove disease (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 56) {
            $this->_potion = 'Remove curse (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 55) {
            $this->_potion = 'Remove blindness/deafness (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 54) {
            $this->_potion = 'Rage (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 52) {
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
        } elseif ($d100 > 50) {
            $this->_potion = 'Nondetection (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 47) {
            $this->_potion = 'Neutralize poison (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 46) {
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
        } elseif ($d100 > 44) {
            $this->_potion = 'Keen edge (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 41) {
            $this->_potion = 'Heroism (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 39) {
            $this->_potion = 'Haste (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 38) {
            $this->_potion = 'Gaseous form (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 33) {
            $this->_potion = 'Fly (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 32) {
            $this->_potion = 'Flame arrow (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 29) {
            $this->_potion = 'Displacement (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 28) {
            $this->_potion = 'Daylight (oil) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 20) {
            $this->_potion = 'Cure serious wounds (potion) (750 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 18) {
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
        } elseif ($d100 > 16) {
            $this->_potion = 'Shield of faith +4 (potion) (600 gp)';
            $this->_hoard->cpValue += 600 * 100;
        } elseif ($d100 > 15) {
            $this->_potion = 'Barkskin +3 (potion) (600 gp)';
            $this->_hoard->cpValue += 600 * 100;
        } elseif ($d100 > 14) {
            $this->_potion = 'Undetectable alignment (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 13) {
            $this->_potion = 'Shield of faith +3 (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 12) {
            $this->_potion = 'Remove paralysis (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 11) {
            $this->_potion = 'Lesser restoration (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 9) {
            $dieRoll = $this->_getDieRoll(1, 2);
            if ($dieRoll == 1) {
                $this->_potion = 'Invisibility (potion) (300 gp)';
            } else {
                $this->_potion = 'Invisibility (oil) (300 gp)';
            }
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 7) {
            $this->_potion = 'Darkvision (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 2) {
            $this->_potion = 'Cure moderate wounds (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } else {
            $this->_potion = 'Blur (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        }
        
        return $this->_potion;
    }
}