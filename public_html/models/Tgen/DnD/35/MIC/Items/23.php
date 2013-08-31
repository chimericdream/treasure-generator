<?php
class Tgen_DnD_35_MIC_Items_23 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 83) {
            $this->_item = 'Chaos diamond';
        } elseif ($die > 63) {
            $this->_item = 'Staff of life';
        } elseif ($die > 43) {
            $this->_item = 'Amulet of mighty fists +5';
        } elseif ($die > 25) {
            $this->_item = 'Efreeti bottle';
        } else {
            $this->_item = 'Luck blade (3 wishes)';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_23