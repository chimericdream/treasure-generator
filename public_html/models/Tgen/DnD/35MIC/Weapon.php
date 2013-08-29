<?php
class Tgen_DnD_35MIC_Weapon extends Tgen_DnD_35MIC {
    protected $_hoard = null;

    public function __construct(Tgen_DnD_3 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $this->_item['double'] = false;
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = $this->generate();
        } elseif ($die > 98) {
            $this->_item = array(
                    'name'  => 'Whip',
                    'price' => 301,
                    'type'  => 'melee',
            );
        } elseif ($die > 97) {
            $this->_item = array(
                    'name'  => 'Warhammer',
                    'price' => 312,
                    'type'  => 'melee',
            );
        } elseif ($die > 96) {
            $this->_item = array(
                    'name'  => 'Dwarven waraxe',
                    'price' => 330,
                    'type'  => 'melee',
            );
        } elseif ($die > 95) {
            $this->_item = array(
                    'name'   => 'Dwarven urgrosh',
                    'price'  => 650,
                    'type'   => 'melee',
                    'double' => true,
            );
        } elseif ($die > 94) {
            $this->_item = array(
                    'name'  => 'Trident',
                    'price' => 315,
                    'type'  => 'melee',
            );
        } elseif ($die > 93) {
            $this->_item = array(
                    'name'   => 'Two-bladed sword',
                    'price'  => 700,
                    'type'   => 'melee',
                    'double' => true,
            );
        } elseif ($die > 91) {
            $this->_item = array(
                    'name'  => 'Short sword',
                    'price' => 310,
                    'type'  => 'melee',
            );
        } elseif ($die > 89) {
            $this->_item = array(
                    'name'  => 'Bastard sword',
                    'price' => 335,
                    'type'  => 'melee',
            );
        } elseif ($die > 88) {
            $this->_item = array(
                    'name'  => 'Spear',
                    'price' => 302,
                    'type'  => 'melee',
            );
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {$this->_item['type'] = 'ranged';}
        } elseif ($die > 86) {
            $this->_item = array(
                    'name'  => 'Sling',
                    'price' => 300,
                    'type'  => 'ranged',
            );
        } elseif ($die > 85) {
            $this->_item = array(
                    'name'  => 'Sickle',
                    'price' => 306,
                    'type'  => 'melee',
            );
        } elseif ($die > 84) {
            $this->_item = array(
                    'name'  => 'Siangham',
                    'price' => 303,
                    'type'  => 'melee',
            );
        } elseif ($die > 83) {
            $this->_item = array(
                    'name'  => 'Shuriken',
                    'price' => 301,
                    'type'  => 'ranged',
            );
        } elseif ($die > 81) {
            $this->_item = array(
                    'name'  => 'Shortspear',
                    'price' => 301,
                    'type'  => 'melee',
            );
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {$this->_item['type'] = 'ranged';}
        } elseif ($die > 80) {
            $this->_item = array(
                    'name'  => 'Composite shortbow (+5 Str bonus)',
                    'price' => 825,
                    'type'  => 'ranged',
            );
        } elseif ($die > 79) {
            $this->_item = array(
                    'name'  => 'Composite shortbow (+4 Str bonus)',
                    'price' => 725,
                    'type'  => 'ranged',
            );
        } elseif ($die > 78) {
            $this->_item = array(
                    'name'  => 'Composite shortbow (+3 Str bonus)',
                    'price' => 625,
                    'type'  => 'ranged',
            );
        } elseif ($die > 77) {
            $this->_item = array(
                    'name'  => 'Composite shortbow (+2 Str bonus)',
                    'price' => 525,
                    'type'  => 'ranged',
            );
        } elseif ($die > 76) {
            $this->_item = array(
                    'name'  => 'Composite shortbow (+1 Str bonus)',
                    'price' => 450,
                    'type'  => 'ranged',
            );
        } elseif ($die > 75) {
            $this->_item = array(
                    'name'  => 'Composite shortbow (+0 Str bonus)',
                    'price' => 375,
                    'type'  => 'ranged',
            );
        } elseif ($die > 73) {
            $this->_item = array(
                    'name'  => 'Shortbow',
                    'price' => 330,
                    'type'  => 'ranged',
            );
        } elseif ($die > 72) {
            $this->_item = array(
                    'name'  => 'Scythe',
                    'price' => 318,
                    'type'  => 'melee',
            );
        } elseif ($die > 70) {
            $this->_item = array(
                    'name'  => 'Scimitar',
                    'price' => 315,
                    'type'  => 'melee',
            );
        } elseif ($die > 69) {
            $this->_item = array(
                    'name'  => 'Sap',
                    'price' => 301,
                    'type'  => 'melee',
            );
        } elseif ($die > 68) {
            $this->_item = array(
                    'name'  => 'Sai',
                    'price' => 301,
                    'type'  => 'melee',
            );
        } elseif ($die > 66) {
            $this->_item = array(
                    'name'  => 'Rapier',
                    'price' => 320,
                    'type'  => 'melee',
            );
        } elseif ($die > 65) {
            $this->_item = array(
                    'name'  => 'Ranseur',
                    'price' => 310,
                    'type'  => 'melee',
            );
        } elseif ($die > 63) {
            $this->_item = array(
                    'name'   => 'Quarterstaff',
                    'price'  => 600,
                    'type'   => 'melee',
                    'double' => true,
            );
        } elseif ($die > 62) {
            $this->_item = array(
                    'name'  => 'Light pick',
                    'price' => 304,
                    'type'  => 'melee',
            );
        } elseif ($die > 61) {
            $this->_item = array(
                    'name'  => 'Heavy pick',
                    'price' => 308,
                    'type'  => 'melee',
            );
        } elseif ($die > 60) {
            $this->_item = array(
                    'name'  => 'Nunchaku',
                    'price' => 302,
                    'type'  => 'melee',
            );
        } elseif ($die > 59) {
            $this->_item = array(
                    'name'  => 'Net',
                    'price' => 320,
                    'type'  => 'melee',
            );
        } elseif ($die > 58) {
            $this->_item = array(
                    'name'  => 'Morningstar',
                    'price' => 308,
                    'type'  => 'melee',
            );
        } elseif ($die > 57) {
            $this->_item = array(
                    'name'  => 'Light mace',
                    'price' => 305,
                    'type'  => 'melee',
            );
        } elseif ($die > 55) {
            $this->_item = array(
                    'name'  => 'Heavy mace',
                    'price' => 312,
                    'type'  => 'melee',
            );
        } elseif ($die > 53) {
            $this->_item = array(
                    'name'  => 'Longsword',
                    'price' => 315,
                    'type'  => 'melee',
            );
        } elseif ($die > 52) {
            $this->_item = array(
                    'name'  => 'Longspear',
                    'price' => 305,
                    'type'  => 'melee',
            );
        } elseif ($die > 51) {
            $this->_item = array(
                    'name'  => 'Composite longbow (+5 Str bonus)',
                    'price' => 900,
                    'type'  => 'ranged',
            );
        } elseif ($die > 50) {
            $this->_item = array(
                    'name'  => 'Composite longbow (+4 Str bonus)',
                    'price' => 800,
                    'type'  => 'ranged',
            );
        } elseif ($die > 49) {
            $this->_item = array(
                    'name'  => 'Composite longbow (+3 Str bonus)',
                    'price' => 700,
                    'type'  => 'ranged',
            );
        } elseif ($die > 48) {
            $this->_item = array(
                    'name'  => 'Composite longbow (+2 Str bonus)',
                    'price' => 600,
                    'type'  => 'ranged',
            );
        } elseif ($die > 47) {
            $this->_item = array(
                    'name'  => 'Composite longbow (+1 Str bonus)',
                    'price' => 500,
                    'type'  => 'ranged',
            );
        } elseif ($die > 46) {
            $this->_item = array(
                    'name'  => 'Composite longbow (+0 Str bonus)',
                    'price' => 400,
                    'type'  => 'ranged',
            );
        } elseif ($die > 44) {
            $this->_item = array(
                    'name'  => 'Longbow',
                    'price' => 375,
                    'type'  => 'ranged',
            );
        } elseif ($die > 43) {
            $this->_item = array(
                    'name'  => 'Lance',
                    'price' => 310,
                    'type'  => 'melee',
            );
        } elseif ($die > 42) {
            $this->_item = array(
                    'name'  => 'Kukri',
                    'price' => 308,
                    'type'  => 'melee',
            );
        } elseif ($die > 41) {
            $this->_item = array(
                    'name'  => 'Kama',
                    'price' => 302,
                    'type'  => 'melee',
            );
        } elseif ($die > 40) {
            $this->_item = array(
                    'name'  => 'Javelin',
                    'price' => 301,
                    'type'  => 'ranged',
            );
        } elseif ($die > 39) {
            $this->_item = array(
                    'name'  => 'Handaxe',
                    'price' => 306,
                    'type'  => 'melee',
            );
        } elseif ($die > 38) {
            $this->_item = array(
                    'name'  => 'Light hammer',
                    'price' => 301,
                    'type'  => 'melee',
            );
        } elseif ($die > 37) {
            $this->_item = array(
                    'name'   => 'Gnome hooked hanner',
                    'price'  => 620,
                    'type'   => 'melee',
                    'double' => true,
            );
        } elseif ($die > 36) {
            $this->_item = array(
                    'name'  => 'Halberd',
                    'price' => 310,
                    'type'  => 'melee',
            );
        } elseif ($die > 35) {
            $this->_item = array(
                    'name'  => 'Guisarme',
                    'price' => 309,
                    'type'  => 'melee',
            );
        } elseif ($die > 33) {
            $this->_item = array(
                    'name'  => 'Greatsword',
                    'price' => 350,
                    'type'  => 'melee',
            );
        } elseif ($die > 32) {
            $this->_item = array(
                    'name'  => 'Greatclub',
                    'price' => 305,
                    'type'  => 'melee',
            );
        } elseif ($die > 30) {
            $this->_item = array(
                    'name'  => 'Greataxe',
                    'price' => 320,
                    'type'  => 'melee',
            );
        } elseif ($die > 29) {
            $this->_item = array(
                    'name'  => 'Glaive',
                    'price' => 308,
                    'type'  => 'melee',
            );
        } elseif ($die > 28) {
            $this->_item = array(
                    'name'  => 'Spiked gauntlet',
                    'price' => 305,
                    'type'  => 'melee',
            );
        } elseif ($die > 27) {
            $this->_item = array(
                    'name'  => 'Gauntlet',
                    'price' => 302,
                    'type'  => 'melee',
            );
        } elseif ($die > 26) {
            $this->_item = array(
                    'name'  => 'Light flail',
                    'price' => 308,
                    'type'  => 'melee',
            );
        } elseif ($die > 25) {
            $this->_item = array(
                    'name'  => 'Heavy flail',
                    'price' => 315,
                    'type'  => 'melee',
            );
        } elseif ($die > 24) {
            $this->_item = array(
                    'name'   => 'Dire flail',
                    'price'  => 690,
                    'type'   => 'melee',
                    'double' => true,
            );
        } elseif ($die > 23) {
            $this->_item = array(
                    'name'  => 'Falchion',
                    'price' => 375,
                    'type'  => 'melee',
            );
        } elseif ($die > 22) {
            $this->_item = array(
                    'name'  => 'Dart',
                    'price' => 300,
                    'type'  => 'ranged',
            );
        } elseif ($die > 21) {
            $this->_item = array(
                    'name'  => 'Punching dagger',
                    'price' => 302,
                    'type'  => 'melee',
            );
        } elseif ($die > 19) {
            $this->_item = array(
                    'name'  => 'Dagger',
                    'price' => 302,
                    'type'  => 'melee',
            );
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {$this->_item['type'] = 'ranged';}
        } elseif ($die > 18) {
            $this->_item = array(
                    'name'  => 'Light repeating crossbow',
                    'price' => 550,
                    'type'  => 'ranged',
            );
        } elseif ($die > 17) {
            $this->_item = array(
                    'name'  => 'Heavy repeating crossbow',
                    'price' => 700,
                    'type'  => 'ranged',
            );
        } elseif ($die > 15) {
            $this->_item = array(
                    'name'  => 'Light crossbow',
                    'price' => 335,
                    'type'  => 'ranged',
            );
        } elseif ($die > 13) {
            $this->_item = array(
                    'name'  => 'Heavy crossbow',
                    'price' => 350,
                    'type'  => 'ranged',
            );
        } elseif ($die > 12) {
            $this->_item = array(
                    'name'  => 'Hand crossbow',
                    'price' => 400,
                    'type'  => 'ranged',
            );
        } elseif ($die > 11) {
            $this->_item = array(
                    'name'  => 'Club',
                    'price' => 300,
                    'type'  => 'melee',
            );
        } elseif ($die > 10) {
            $this->_item = array(
                    'name'  => 'Spiked chain',
                    'price' => 325,
                    'type'  => 'melee',
            );
        } elseif ($die > 8) {
            $this->_item = array(
                    'name'  => 'Sling bullets (50)',
                    'price' => 350,
                    'type'  => 'ranged',
            );
        } elseif ($die > 6) {
            $this->_item = array(
                    'name'  => 'Crossbow bolts (50)',
                    'price' => 350,
                    'type'  => 'ranged',
            );
        } elseif ($die > 5) {
            $this->_item = array(
                    'name'  => 'Bolas',
                    'price' => 305,
                    'type'  => 'ranged',
            );
        } elseif ($die > 4) {
            $this->_item = array(
                    'name'  => 'Battleaxe',
                    'price' => 310,
                    'type'  => 'melee',
            );
        } elseif ($die > 3) {
            $this->_item = array(
                    'name'  => 'Throwing axe',
                    'price' => 308,
                    'type'  => 'ranged',
            );
        } elseif ($die > 2) {
            $this->_item = array(
                    'name'  => 'Orc double axe',
                    'price' => 660,
                    'type'  => 'melee',
            );
        } else {
            $this->_item = array(
                    'name'  => 'Arrows (50)',
                    'price' => 350,
                    'type'  => 'ranged',
            );
        }

        $this->_hoard->cpValue += ($this->_item['price'] * 100);
        return $this->_item;
    }

    protected function _getEnergyType() {
        $dieRoll = $this->_getDieRoll(1, 5);
        if ($dieRoll == 1) {
            return 'acid';
        } elseif ($dieRoll == 2) {
            return 'cold';
        } elseif ($dieRoll == 3) {
            return 'electricity';
        } elseif ($dieRoll == 4) {
            return 'fire';
        } else {
            return 'sonic';
        }
    }

    protected function _getSurgeType() {
        $dieRoll = $this->_getDieRoll(1, 4);
        if ($dieRoll == 1) {
            return 'corrosive';
        } elseif ($dieRoll == 2) {
            return 'flaming';
        } elseif ($dieRoll == 3) {
            return 'frost';
        } else {
            return 'shock';
        }
    }
} // end Tgen_DnD_35MIC_Weapon