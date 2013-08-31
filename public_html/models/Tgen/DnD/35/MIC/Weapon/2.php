<?php
class Tgen_DnD_35_MIC_Weapon_2 extends Tgen_DnD_35_MIC_Weapon {
    public function generate(array $baseWeapon) {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 62) {
            $property = new Tgen_DnD_35_MIC_Weapon_Property_1($this->_hoard, $baseWeapon);
            $this->_item = '+1 ' . $property->generate();
            unset($property);
        } else {
            $this->_item = '+2';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Weapon_2