<?php
class Tgen_DnD_35MIC_Items_20 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 94) {
            $armor = $this->_getMagicArmor(10);
            $this->_item = $armor;
        } elseif ($die > 92) {
            $this->_item = 'Stone of controlling earth elementals';
        } elseif ($die > 90) {
            $this->_item = 'Ring of wizardry IV';
        } elseif ($die > 88) {
            $this->_item = 'Censer of controlling air elementals';
        } elseif ($die > 86) {
            $this->_item = 'Brazier of commanding fire elementals';
        } elseif ($die > 84) {
            $this->_item = 'Bowl of commanding water elementals';
        } elseif ($die > 82) {
            $this->_item = 'Ring of spell turning';
        } elseif ($die > 67) {
            $weapon = $this->_getMagicWeapon(7);
            $this->_item = $weapon;
        } elseif ($die > 65) {
            $this->_item = 'Eyes of petrification';
        } elseif ($die > 61) {
            $this->_item = 'Ring of three wishes';
        } elseif ($die > 59) {
            $this->_item = 'Memento magica, 8th-level spell';
        } elseif ($die > 57) {
            $this->_item = 'Amulet of mighty fists +4';
        } elseif ($die > 55) {
            $this->_item = 'Strand of prayer beads, greater';
        } elseif ($die > 53) {
            $this->_item = 'Mirror of opposition';
        } elseif ($die > 49) {
            $this->_item = 'Ring of regeneration';
        } elseif ($die > 47) {
            $this->_item = 'Psychoactive skin of the psion';
        } elseif ($die > 43) {
            $this->_item = 'Mantle of spell resistance';
        } elseif ($die > 42) {
            $this->_item = 'Apparatus of Kwalish';
        } elseif ($die > 39) {
            $this->_item = 'Rod of alertness';
        } elseif ($die > 35) {
            $this->_item = 'Tome of understanding +3';
        } elseif ($die > 31) {
            $this->_item = 'Tome of leadership and influence +3';
        } elseif ($die > 27) {
            $this->_item = 'Tome of clear thought +3';
        } elseif ($die > 23) {
            $this->_item = 'Manual of quickness in action +3';
        } elseif ($die > 19) {
            $this->_item = 'Manual of gainful exercise +3';
        } elseif ($die > 15) {
            $this->_item = 'Manual of bodily health +3';
        } elseif ($die > 14) {
            $this->_item = 'Well of many worlds';
        } elseif ($die > 8) {
            $armor = $this->_getMagicArmor(9);
            $this->_item = $armor;
        } elseif ($die > 5) {
            $this->_item = 'Pearl of power, 9th-level spell';
        } elseif ($die > 3) {
            $this->_item = 'Cognizance crystal, 17 points';
        } else {
            $this->_item = 'Staff of earth and stone';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_20