<?php
class Tgen_DnD_35_MIC_Items_18 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 95) {
            $armor = $this->_getMagicArmor(8);
            $this->_item = $armor;
        } elseif ($die > 94) {
            $this->_item = 'Pearl of power, 8th-level spell';
        } elseif ($die > 93) {
            $this->_item = 'Cognizance crystal, 15 points';
        } elseif ($die > 89) {
            $this->_item = 'Bracers of armor +8';
        } elseif ($die > 88) {
            $this->_item = 'Luck blade (1 wish)';
        } elseif ($die > 87) {
            $this->_item = 'Cube of force';
        } elseif ($die > 86) {
            $this->_item = 'Rod of security';
        } elseif ($die > 85) {
            $this->_item = 'Ring of master artifice, greater';
        } elseif ($die > 84) {
            $this->_item = 'Psychoactive skin of the troll';
        } elseif ($die > 83) {
            $this->_item = 'Dwarven thrower';
        } elseif ($die > 82) {
            $this->_item = 'Rod of rulership';
        } elseif ($die > 81) {
            $this->_item = 'Rod of force';
        } elseif ($die > 78) {
            $this->_item = 'Ring of universal energy resistance, minor';
        } elseif ($die > 77) {
            $this->_item = 'Psychoactive skin of fiery response';
        } elseif ($die > 76) {
            $this->_item = 'Darkskull';
        } elseif ($die > 74) {
            $this->_item = 'Carpet of flying, 10 ft. by 10 ft.';
        } elseif ($die > 73) {
            $this->_item = 'staff of defense';
        } elseif ($die > 72) {
            $this->_item = 'Robe of stars';
        } elseif ($die > 71) {
            $this->_item = 'Staff of frost';
        } elseif ($die > 70) {
            $this->_item = 'Eyes of charming';
        } elseif ($die > 68) {
            $this->_item = 'Tome of understanding +2';
        } elseif ($die > 66) {
            $this->_item = 'Tome of leadership and influence +2';
        } elseif ($die > 64) {
            $this->_item = 'Tome of clear thought +2';
        } elseif ($die > 62) {
            $this->_item = 'Manual of quickness in action +2';
        } elseif ($die > 60) {
            $this->_item = 'Manual of gainful exercise +2';
        } elseif ($die > 58) {
            $this->_item = 'Manual of bodily health +2';
        } elseif ($die > 57) {
            $this->_item = 'Dragon\'s eye amulet';
        } elseif ($die > 56) {
            $this->_item = 'Daern\'s instant fortress';
        } elseif ($die > 55) {
            $this->_item = 'Cloak of etherealness';
        } elseif ($die > 54) {
            $this->_item = 'Frost brand';
        } elseif ($die > 53) {
            $this->_item = 'Wings of flying';
        } elseif ($die > 51) {
            $this->_item = 'Metamagic rod, maximize';
        } elseif ($die > 50) {
            $this->_item = 'Metamagic rod, chaining';
        } elseif ($die > 49) {
            $this->_item = 'Memento magica, 6th-level spell';
        } elseif ($die > 48) {
            $this->_item = 'Amulet of mighty fists +3';
        } elseif ($die > 47) {
            $this->_item = 'Demon armor';
        } elseif ($die > 46) {
            $this->_item = 'Crystal ball with detect thoughts';
        } elseif ($die > 45) {
            $this->_item = 'Sun blade';
        } elseif ($die > 44) {
            $this->_item = 'Rapier of puncturing';
        } elseif ($die > 43) {
            $this->_item = 'Absorbing shield';
        } elseif ($die > 42) {
            $this->_item = 'Ollamh harp';
        } elseif ($die > 28) {
            $weapon = $this->_getMagicWeapon(5);
            $this->_item = $weapon;
        } elseif ($die > 27) {
            $this->_item = 'Rod of flailing';
        } elseif ($die > 26) {
            $this->_item = 'Rod of absorption';
        } elseif ($die > 25) {
            $this->_item = 'Ring of spell storing';
        } elseif ($die > 24) {
            $this->_item = 'Ring of shooting stars';
        } elseif ($die > 20) {
            $this->_item = 'Ring of protection +5';
        } elseif ($die > 19) {
            $this->_item = 'Ring of friend shield (pair)';
        } elseif ($die > 18) {
            $this->_item = 'Phoenix cloak';
        } elseif ($die > 17) {
            $this->_item = 'Horn of Valhalla';
        } elseif ($die > 16) {
            $this->_item = 'Crystal ball with see invisibility';
        } elseif ($die > 15) {
            $this->_item = 'Cloudwalker anklets';
        } elseif ($die > 14) {
            $this->_item = 'Cloak of displacement, major';
        } elseif ($die > 13) {
            $this->_item = 'Amulet of natural armor +5';
        } elseif ($die > 7) {
            $armor = $this->_getMagicArmor(7);
            $this->_item = $armor;
        } elseif ($die > 6) {
            $this->_item = 'Pearl of power, 7th-level spell';
        } elseif ($die > 5) {
            $this->_item = 'Cognizance crystal, 13 points';
        } elseif ($die > 2) {
            $this->_item = 'Bracers of armor +7';
        } elseif ($die > 1) {
            $this->_item = 'Boots of teleportation';
        } else {
            $this->_item = 'Staff of illumination';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_18