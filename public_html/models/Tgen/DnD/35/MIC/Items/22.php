<?php
class Tgen_DnD_35_MIC_Items_22 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 93) {
            $this->_item = 'Tome of understanding +5';
        } elseif ($die > 86) {
            $this->_item = 'Tome of leadership and influence +5';
        } elseif ($die > 79) {
            $this->_item = 'Tome of clear thought +5';
        } elseif ($die > 72) {
            $this->_item = 'Manual of quickness in action +5';
        } elseif ($die > 65) {
            $this->_item = 'Manual of gainful exercise +5';
        } elseif ($die > 58) {
            $this->_item = 'Manual of bodily health +5';
        } elseif ($die > 33) {
            $weapon = $this->_getMagicWeapon(8);
            $this->_item = $weapon;
        } elseif ($die > 29) {
            $this->_item = 'Ring of djinni calling';
        } elseif ($die > 25) {
            $this->_item = 'Helm of brilliance';
        } elseif ($die > 20) {
            $this->_item = 'Metamagic rod, maximize, greater';
        } elseif ($die > 15) {
            $this->_item = 'Metamagic rod, chaining, greater';
        } elseif ($die > 10) {
            $this->_item = 'Memento magica, 9th-level spell';
        } else {
            $this->_item = 'Holy avenger';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_22