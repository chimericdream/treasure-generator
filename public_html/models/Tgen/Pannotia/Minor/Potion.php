<?php
class Tgen_Pannotia_Minor_Potion extends Tgen_Pannotia_Minor {
    protected $_hoard  = null;
    protected $_potion = null;
    
    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }
    
    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_potion = 'Undetectable alignment (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 97) {
            $this->_potion = 'Spider climb (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 96) {
            $this->_potion = 'Shield of faith +3 (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 93) {
            $this->_potion = 'Resist energy (type) 10 (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 91) {
            $this->_potion = 'Remove paralysis (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 89) {
            $this->_potion = 'Protection from arrows 10/magic (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 87) {
            $this->_potion = 'Owl\'s wisdom (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 86) {
            $this->_potion = 'Misdirection (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 84) {
            $dieRoll = $this->_getDieRoll(1, 2);
            if ($dieRoll == 1) {
                $this->_potion = 'Levitate (potion) (300 gp)';
            } else {
                $this->_potion = 'Levitate (oil) (300 gp)';
            }
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 81) {
            $this->_potion = 'Lesser restoration (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 78) {
            $dieRoll = $this->_getDieRoll(1, 2);
            if ($dieRoll == 1) {
                $this->_potion = 'Invisibility (potion) (300 gp)';
            } else {
                $this->_potion = 'Invisibility (oil) (300 gp)';
            }
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 76) {
            $this->_potion = 'Fox\'s cunning (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 74) {
            $this->_potion = 'Eagle\'s splendor (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 71) {
            $this->_potion = 'Delay poision (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 68) {
            $this->_potion = 'Darkvision (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 67) {
            $this->_potion = 'Darkness (oil) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 62) {
            $this->_potion = 'Cure moderate wounds (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 59) {
            $this->_potion = 'Cat\'s grace (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 56) {
            $this->_potion = 'Bull\'s strength (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 53) {
            $this->_potion = 'Blur (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 50) {
            $this->_potion = 'Bear\'s endurance (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 47) {
            $this->_potion = 'Barkskin +2 (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 45) {
            $this->_potion = 'Aid (potion) (300 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 44) {
            $this->_potion = 'Reduce person (potion) (250 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 41) {
            $this->_potion = 'Enlarge person (potion) (250 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 39) {
            $this->_potion = 'Bless weapon (oil) (100 gp)';
            $this->_hoard->cpValue += 100 * 100;
        } elseif ($d100 > 38) {
            $this->_potion = 'Shillelagh (oil) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 35) {
            $this->_potion = 'Shield of faith +2 (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 34) {
            $this->_potion = 'Sanctuary (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 32) {
            $this->_potion = 'Remove fear (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 30) {
            $dieRoll = $this->_getDieRoll(1, 4);
            if ($dieRoll == 1) {
                $this->_potion = 'Protection from good (potion) (50 gp)';
            } else if ($dieRoll == 2) {
                $this->_potion = 'Protection from evil (potion) (50 gp)';
            } else if ($dieRoll == 3) {
                $this->_potion = 'Protection from law (potion) (50 gp)';
            } else {
                $this->_potion = 'Protection from chaos (potion) (50 gp)';
            }
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 29) {
            $this->_potion = 'Pass without trace (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 26) {
            $this->_potion = 'Magic weapon (oil) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 25) {
            $this->_potion = 'Magic stone (oil) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 22) {
            $this->_potion = 'Magic fang (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 19) {
            $this->_potion = 'Mage armor (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 17) {
            $this->_potion = 'Jump (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 15) {
            $this->_potion = 'Hide from undead (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 13) {
            $this->_potion = 'Hide from animals (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 10) {
            $this->_potion = 'Endure elements (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } else {
            $this->_potion = 'Cure light wounds (potion) (50 gp)';
            $this->_hoard->cpValue += 50 * 100;
        }

        return $this->_potion;
    }
}