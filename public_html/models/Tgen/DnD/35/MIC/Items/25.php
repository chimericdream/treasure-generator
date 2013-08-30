<?php
class Tgen_DnD_35MIC_Items_25 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 88) {
            $this->_item = 'Staff of power';
        } elseif ($die > 58) {
            $weapon = $this->_getMagicWeapon(10);
            $this->_item = $weapon;
        } elseif ($die > 50) {
            $this->_item = 'Vest of the archmagi';
        } elseif ($die > 40) {
            $this->_item = 'Ring of spell storing, major';
        } elseif ($die > 32) {
            $this->_item = 'Ring of elemental command (water)';
        } elseif ($die > 24) {
            $this->_item = 'Ring of elemental command (fire)';
        } elseif ($die > 16) {
            $this->_item = 'Ring of elemental command (earth)';
        } elseif ($die > 8) {
            $this->_item = 'Ring of elemental command (air)';
        } else {
            $this->_item = 'Mirror of life trapping';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_25