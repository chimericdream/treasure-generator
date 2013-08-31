<?php
class Tgen_DnD_35_MIC_Weapon_6 extends Tgen_DnD_35_MIC_Weapon {
    public function generate(array $baseWeapon) {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 95) {
            $property = new Tgen_DnD_35_MIC_Weapon_Property_5($this->_hoard, $baseWeapon);
            $this->_item = '+1 ' . $property->generate();
            unset($property);
        } elseif ($die > 89) {
            $property = new Tgen_DnD_35_MIC_Weapon_Property_4($this->_hoard, $baseWeapon);
            $this->_item = '+2 ' . $property->generate();
            unset($property);
        } elseif ($die > 77) {
            $property = new Tgen_DnD_35_MIC_Weapon_Property_3($this->_hoard, $baseWeapon);
            $this->_item = '+3 ' . $property->generate();
            unset($property);
        } elseif ($die > 43) {
            $property = new Tgen_DnD_35_MIC_Weapon_Property_2($this->_hoard, $baseWeapon);
            $this->_item = '+4 ' . $property->generate();
            unset($property);
        } else {
            $property = new Tgen_DnD_35_MIC_Weapon_Property_1($this->_hoard, $baseWeapon);
            $this->_item = '+5 ' . $property->generate();
            unset($property);
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Weapon_6