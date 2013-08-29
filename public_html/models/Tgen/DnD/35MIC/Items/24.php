<?php
class Tgen_DnD_35MIC_Items_24 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 81) {
            $this->_item = 'Ring of universal energy resistance, greater';
        } elseif ($die > 73) {
            $this->_item = 'Mirror of mental prowess';
        } elseif ($die > 61) {
            $this->_item = 'Staff of passage';
        } elseif ($die > 51) {
            $this->_item = 'Metamagic rod, quicken, greater';
        } elseif ($die > 40) {
            $this->_item = 'Iron flask';
        } elseif ($die > 30) {
            $this->_item = 'Cubic gate';
        } else {
            $weapon = $this->_getMagicWeapon(9);
            $this->_item = $weapon;
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_24