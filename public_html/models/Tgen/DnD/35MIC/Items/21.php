<?php
class Tgen_DnD_35MIC_Items_21 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 95) {
            $this->_item = 'Third eye dominate';
        } elseif ($die > 90) {
            $this->_item = 'Third eye conceal';
        } elseif ($die > 83) {
            $this->_item = 'Robe of eyes';
        } elseif ($die > 74) {
            $this->_item = 'Ring of universal energy resistance, major';
        } elseif ($die > 68) {
            $this->_item = 'Amulet of the planes';
        } elseif ($die > 59) {
            $this->_item = 'Tome of understanding +4';
        } elseif ($die > 50) {
            $this->_item = 'Tome of leadership and influence +4';
        } elseif ($die > 41) {
            $this->_item = 'Tome of clear thought +4';
        } elseif ($die > 32) {
            $this->_item = 'Manual of quickness in action +4';
        } elseif ($die > 23) {
            $this->_item = 'Manual of gainful exercise + 4';
        } elseif ($die > 14) {
            $this->_item = 'Manual of bodily health +4';
        } elseif ($die > 6) {
            $this->_item = 'Luck blade (2 wishes)';
        } else {
            $this->_item = 'Staff of the woodlands';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_21