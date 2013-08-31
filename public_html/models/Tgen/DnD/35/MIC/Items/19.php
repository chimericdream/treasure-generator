<?php
class Tgen_DnD_35_MIC_Items_19 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 96) {
            $this->_item = 'Crystal ball with true seeing';
        } elseif ($die > 94) {
            $this->_item = 'Psychoactive skin of the hero';
        } elseif ($die > 91) {
            $this->_item = 'Mantle of faith';
        } elseif ($die > 87) {
            $this->_item = 'Metamagic rod, quicken';
        } elseif ($die > 85) {
            $this->_item = 'Mace of smiting';
        } elseif ($die > 81) {
            $this->_item = 'Runestaff of passage';
        } elseif ($die > 77) {
            $this->_item = 'Robe of the archmagi';
        } elseif ($die > 73) {
            $this->_item = 'Ring of telekinesis';
        } elseif ($die > 70) {
            $this->_item = 'Gem of seeing';
        } elseif ($die > 66) {
            $this->_item = 'Staff of divination';
        } elseif ($die > 62) {
            $this->_item = 'Memento magica, 7th-level spell';
        } elseif ($die > 60) {
            $this->_item = 'Helm of teleportation';
        } elseif ($die > 56) {
            $this->_item = 'Metamagic rod, reach, greater';
        } elseif ($die > 52) {
            $this->_item = 'Metamagic rod, empower, greater';
        } elseif ($die > 36) {
            $weapon = $this->_getMagicWeapon(6);
            $this->_item = $weapon;
        } elseif ($die > 32) {
            $this->_item = 'Rod of lordly might';
        } elseif ($die > 28) {
            $this->_item = 'Ring of wizardry III';
        } elseif ($die > 25) {
            $this->_item = 'Pearl of power, two spells';
        } elseif ($die > 23) {
            $this->_item = 'Horn of blasting, major';
        } elseif ($die > 21) {
            $this->_item = 'Crystal ball with telepathy';
        } elseif ($die > 18) {
            $this->_item = 'Staff of transmutation';
        } elseif ($die > 15) {
            $this->_item = 'Staff of necromancy';
        } elseif ($die > 12) {
            $this->_item = 'Staff of illusion';
        } elseif ($die > 9) {
            $this->_item = 'Staff of evocation';
        } elseif ($die > 6) {
            $this->_item = 'Staff of enchantment';
        } elseif ($die > 3) {
            $this->_item = 'Staff of conjuration';
        } else {
            $this->_item = 'Staff of abjuration';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_19