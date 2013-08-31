<?php
class Tgen_Pannotia_Weapon extends Tgen_Pannotia {
    protected $_hoard    = null;
    protected $_weapon   = '';
    protected $bonus     = 1;
    protected $_size     = null;
    protected $baseCost  = 1;
    protected $basePrice = array(
        1  => 2000,
        2  => 8000,
        3  => 18000,
        4  => 32000,
        5  => 50000,
        6  => 72000,
        7  => 98000,
        8  => 128000,
        9  => 162000,
        10 => 200000,
    );

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    protected function calcWeaponCost(&$weapon) {
        $weapon['cost'] += $this->basePrice[$this->baseCost];
        $this->_hoard->cpValue += $weapon['cost'] * 100;
    } // end calcWeaponCost()

    public function _getBaseWeapon() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 80) { // Common ranged
            $weapon['type'] = 'ranged';
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) {
                $weapon['weapon'] = 'Composite longbow (+4 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 500) + 300;
            } elseif ($d100 > 90) {
                $weapon['weapon'] = 'Composite longbow (+3 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 400) + 300;
            } elseif ($d100 > 85) {
                $weapon['weapon'] = 'Composite longbow (+2 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 300) + 300;
            } elseif ($d100 > 80) {
                $weapon['weapon'] = 'Composite longbow (+1 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 200) + 300;
            } elseif ($d100 > 75) {
                $weapon['weapon'] = 'Composite longbow';
                $weapon['cost'] = ($this->_size[1] * 100) + 300;
            } elseif ($d100 > 65) {
                $weapon['weapon'] = 'Longbow';
                $weapon['cost'] = ($this->_size[1] * 75) + 300;
            } elseif ($d100 > 61) {
                $weapon['weapon'] = 'Sling';
                $weapon['cost'] = 300;
            } elseif ($d100 > 56) {
                $weapon['weapon'] = 'Composite shortbow (+2 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 225) + 300;
            } elseif ($d100 > 51) {
                $weapon['weapon'] = 'Composite shortbow (+1 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 150) + 300;
            } elseif ($d100 > 46) {
                $weapon['weapon'] = 'Composite shortbow (+0 Str bonus)';
                $weapon['cost'] = ($this->_size[1] * 75) + 300;
            } elseif ($d100 > 41) {
                $weapon['weapon'] = 'Shortbow';
                $weapon['cost'] = ($this->_size[1] * 30) + 300;
            } elseif ($d100 > 39) {
                $weapon['weapon'] = 'Javelin';
                $weapon['cost'] = ($this->_size[1] * 1) + 300;
            } elseif ($d100 > 35) {
                $weapon['weapon'] = 'Dart';
                $weapon['cost'] = ($this->_size[1] * .5) + 300;
            } elseif ($d100 > 25) {
                $weapon['weapon'] = 'Light crossbow';
                $weapon['cost'] = ($this->_size[1] * 35) + 300;
            } elseif ($d100 > 15) {
                $weapon['weapon'] = 'Heavy crossbow';
                $weapon['cost'] = ($this->_size[1] * 50) + 300;
            } elseif ($d100 > 10) {
                $weapon['weapon'] = 'Throwing axe';
                $weapon['cost'] = ($this->_size[1] * 8) + 300;
            } else {
                $d100 = $this->_getDieRoll(1, 100);
                if ($d100 > 80) {
                    $weapon['weapon'] = 'Sling bullets (50)';
                    $weapon['cost'] = ($this->_size[1] * 50) + 300;
                } elseif ($d100 > 50) {
                    $weapon['weapon'] = 'Crossbow bolts (50)';
                    $weapon['cost'] = ($this->_size[1] * 50) + 300;
                } else {
                    $weapon['weapon'] = 'Arrows (50)';
                    $weapon['cost'] = ($this->_size[1] * 50) + 300;
                }
            }
        } elseif ($d100 > 70) { // Uncommon weapon
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 97) {
                $weapon['weapon'] = 'Whip';
                $weapon['cost'] = ($this->_size[1] * 1) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 94) {
                $weapon['weapon'] = 'Warhammer';
                $weapon['cost'] = ($this->_size[1] * 12) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 91) {
                $weapon['weapon'] = 'Dwarven urgrosh';
                $weapon['cost'] = ($this->_size[1] * 50) + 600;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 89) {
                $weapon['weapon'] = 'Trident';
                $weapon['cost'] = ($this->_size[1] * 15) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 86) {
                $weapon['weapon'] = 'Two-bladed sword';
                $weapon['cost'] = ($this->_size[1] * 100) + 600;
                $weapon['type'] = 'melee';
                $weapon['double'] = true;
            } elseif ($d100 > 84) {
                $weapon['weapon'] = 'Sickle';
                $weapon['cost'] = ($this->_size[1] * 6) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 82) {
                $weapon['weapon'] = 'Shuriken';
                $weapon['cost'] = ($this->_size[1] * 1) + 300;
                $weapon['type'] = 'ranged';
            } elseif ($d100 > 80) {
                $weapon['weapon'] = 'Scythe';
                $weapon['cost'] = ($this->_size[1] * 18) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 78) {
                $weapon['weapon'] = 'Sap';
                $weapon['cost'] = ($this->_size[1] * 1) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 76) {
                $weapon['weapon'] = 'Ranseur';
                $weapon['cost'] = ($this->_size[1] * 10) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 74) {
                $weapon['weapon'] = 'Light pick';
                $weapon['cost'] = ($this->_size[1] * 4) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 72) {
                $weapon['weapon'] = 'Heavy pick';
                $weapon['cost'] = ($this->_size[1] * 8) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 70) {
                $weapon['weapon'] = 'Net';
                $weapon['cost'] = ($this->_size[1] * 20) + 300;
                $weapon['type'] = 'ranged';
            } elseif ($d100 > 67) {
                $weapon['weapon'] = 'Morningstar';
                $weapon['cost'] = ($this->_size[1] * 8) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 64) {
                $weapon['weapon'] = 'Longspear';
                $weapon['cost'] = ($this->_size[1] * 5) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 61) {
                $weapon['weapon'] = 'Lance';
                $weapon['cost'] = ($this->_size[1] * 10) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 58) {
                $weapon['weapon'] = 'Kukri';
                $weapon['cost'] = ($this->_size[1] * 8) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 56) {
                $weapon['weapon'] = 'Handaxe';
                $weapon['cost'] = ($this->_size[1] * 6) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 54) {
                $weapon['weapon'] = 'Light hammer';
                $weapon['cost'] = ($this->_size[1] * 1) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 51) {
                $weapon['weapon'] = 'Gnome hooked hammer';
                $weapon['cost'] = ($this->_size[1] * 20) + 600;
                $weapon['type'] = 'melee';
                $weapon['double'] = true;
            } elseif ($d100 > 48) {
                $weapon['weapon'] = 'Halfspear';
                $weapon['cost'] = ($this->_size[1] * 1) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 45) {
                $weapon['weapon'] = 'Halberd';
                $weapon['cost'] = ($this->_size[1] * 10) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 43) {
                $weapon['weapon'] = 'Guisarme';
                $weapon['cost'] = ($this->_size[1] * 9) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 41) {
                $weapon['weapon'] = 'Greatclub';
                $weapon['cost'] = ($this->_size[1] * 5) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 39) {
                $weapon['weapon'] = 'Glaive';
                $weapon['cost'] = ($this->_size[1] * 8) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 37) {
                $weapon['weapon'] = 'Spiked gauntlet';
                $weapon['cost'] = ($this->_size[1] * 5) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 35) {
                $weapon['weapon'] = 'Gauntlet';
                $weapon['cost'] = ($this->_size[1] * 2) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 31) {
                $weapon['weapon'] = 'Light flail';
                $weapon['cost'] = ($this->_size[1] * 8) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 26) {
                $weapon['weapon'] = 'Heavy flail';
                $weapon['cost'] = ($this->_size[1] * 15) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 23) {
                $weapon['weapon'] = 'Dire flail';
                $weapon['cost'] = ($this->_size[1] * 90) + 600;
                $weapon['type'] = 'melee';
                $weapon['double'] = true;
            } elseif ($d100 > 21) {
                $weapon['weapon'] = 'Falchion';
                $weapon['cost'] = ($this->_size[1] * 75) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 19) {
                $weapon['weapon'] = 'Punching dagger';
                $weapon['cost'] = ($this->_size[1] * 2) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 16) {
                $weapon['weapon'] = 'Repeating crossbow';
                $weapon['cost'] = ($this->_size[1] * 250) + 300;
                $weapon['type'] = 'ranged';
            } elseif ($d100 > 12) {
                $weapon['weapon'] = 'Hand crossbow';
                $weapon['cost'] = ($this->_size[1] * 100) + 300;
                $weapon['type'] = 'ranged';
            } elseif ($d100 > 10) {
                $weapon['weapon'] = 'Club';
                $weapon['cost'] = 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 7) {
                $weapon['weapon'] = 'Spiked chain';
                $weapon['cost'] = ($this->_size[1] * 25) + 300;
                $weapon['type'] = 'melee';
            } elseif ($d100 > 3) {
                $weapon['weapon'] = 'Battleaxe';
                $weapon['cost'] = ($this->_size[1] * 10) + 300;
                $weapon['type'] = 'melee';
            } else {
                $weapon['weapon'] = 'Orc double axe';
                $weapon['cost'] = ($this->_size[1] * 60) + 600;
                $weapon['type'] = 'melee';
                $weapon['double'] = true;
            }
        } else { // Common melee
            $weapon['type'] = 'melee';
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 89) {
                $weapon['weapon'] = 'Dwarven waraxe';
                $weapon['cost'] = ($this->_size[1] * 30) + 300;
            } elseif ($d100 > 84) {
                $weapon['weapon'] = 'Short sword';
                $weapon['cost'] = ($this->_size[1] * 10) + 300;
            } elseif ($d100 > 74) {
                $weapon['weapon'] = 'Bastard sword';
                $weapon['cost'] = ($this->_size[1] * 35) + 300;
            } elseif ($d100 > 70) {
                $weapon['weapon'] = 'Siangham';
                $weapon['cost'] = ($this->_size[1] * 3) + 300;
            } elseif ($d100 > 66) {
                $weapon['weapon'] = 'Shortspear';
                $weapon['cost'] = ($this->_size[1] * 2) + 300;
            } elseif ($d100 > 61) {
                $weapon['weapon'] = 'Scimitar';
                $weapon['cost'] = ($this->_size[1] * 15) + 300;
            } elseif ($d100 > 57) {
                $weapon['weapon'] = 'Rapier';
                $weapon['cost'] = ($this->_size[1] * 20) + 300;
            } elseif ($d100 > 54) {
                $weapon['weapon'] = 'Quarterstaff';
                $weapon['cost'] = 600;
                $weapon['double'] = true;
            } elseif ($d100 > 50) {
                $weapon['weapon'] = 'Nunchaku';
                $weapon['cost'] = ($this->_size[1] * 2) + 300;
            } elseif ($d100 > 45) {
                $weapon['weapon'] = 'Heavy mace';
                $weapon['cost'] = ($this->_size[1] * 12) + 300;
            } elseif ($d100 > 41) {
                $weapon['weapon'] = 'Light mace';
                $weapon['cost'] = ($this->_size[1] * 5) + 300;
            } elseif ($d100 > 28) {
                $weapon['weapon'] = 'Longsword';
                $weapon['cost'] = ($this->_size[1] * 15) + 300;
            } elseif ($d100 > 24) {
                $weapon['weapon'] = 'Kama';
                $weapon['cost'] = ($this->_size[1] * 2) + 300;
            } elseif ($d100 > 14) {
                $weapon['weapon'] = 'Greatsword';
                $weapon['cost'] = ($this->_size[1] * 50) + 300;
            } elseif ($d100 > 4) {
                $weapon['weapon'] = 'Greataxe';
                $weapon['cost'] = ($this->_size[1] * 20) + 300;
            } else {
                $weapon['weapon'] = 'Dagger';
                $weapon['cost'] = ($this->_size[1] * 2) + 300;
            }
        }

        if (!isset($weapon['double']) || !$weapon['double']) {
            $weapon['double'] = false;
        }
        
        return $weapon;
    } // end _getWeaponType()

    public function _getBaneEnemy() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $enemy = 'Vermin';
        } elseif ($d100 > 90) {
            $enemy = 'Undead';
        } elseif ($d100 > 88) {
            $enemy = 'Plants';
        } elseif ($d100 > 87) {
            $enemy = 'Outsiders, water';
        } elseif ($d100 > 84) {
            $enemy = 'Outsiders, lawful';
        } elseif ($d100 > 81) {
            $enemy = 'Outsiders, good';
        } elseif ($d100 > 80) {
            $enemy = 'Outsiders, fire';
        } elseif ($d100 > 77) {
            $enemy = 'Outsiders, evil';
        } elseif ($d100 > 76) {
            $enemy = 'Outsiders, earth';
        } elseif ($d100 > 73) {
            $enemy = 'Outsiders, chaotic';
        } elseif ($d100 > 72) {
            $enemy = 'Outsiders, air';
        } elseif ($d100 > 70) {
            $enemy = 'Oozes';
        } elseif ($d100 > 65) {
            $enemy = 'Monstroug humanoids';
        } elseif ($d100 > 60) {
            $enemy = 'Magical beasts';
        } elseif ($d100 > 57) {
            $enemy = 'Humanoids, orc';
        } elseif ($d100 > 54) {
            $enemy = 'Humanoids, reptilian';
        } elseif ($d100 > 50) {
            $enemy = 'Humanoids, human';
        } elseif ($d100 > 49) {
            $enemy = 'Humanoids, halfling';
        } elseif ($d100 > 46) {
            $enemy = 'Humanoids, goblinoid';
        } elseif ($d100 > 45) {
            $enemy = 'Humanoids, gnome';
        } elseif ($d100 > 44) {
            $enemy = 'Humanoids, gnoll';
        } elseif ($d100 > 42) {
            $enemy = 'Humanoids, elf';
        } elseif ($d100 > 40) {
            $enemy = 'Humanoids, dwarf';
        } elseif ($d100 > 39) {
            $enemy = 'Humanoids, aquatic';
        } elseif ($d100 > 32) {
            $enemy = 'Giants';
        } elseif ($d100 > 27) {
            $enemy = 'Fey';
        } elseif ($d100 > 22) {
            $enemy = 'Elementals';
        } elseif ($d100 > 16) {
            $enemy = 'Dragons';
        } elseif ($d100 > 9) {
            $enemy = 'Constructs';
        } elseif ($d100 > 5) {
            $enemy = 'Animals';
        } else {
            $enemy = 'Aberrations';
        }

        return $enemy;
    } // end _getBaneEnemy()
}