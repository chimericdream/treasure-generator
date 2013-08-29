<?php
class Tgen_DnD_35MIC_Weapon_5 extends Tgen_DnD_35MIC_Weapon {
    public function generate(array $baseWeapon) {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 95) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_4($this->_hoard, $baseWeapon);
            $this->_item = '+1 ' . $property->generate();
            unset($property);
        } elseif ($die > 88) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $baseWeapon);
            $this->_item = '+2 ' . $property->generate();
            unset($property);
        } elseif ($die > 75) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $baseWeapon);
            $this->_item = '+3 ' . $property->generate();
            unset($property);
        } elseif ($die > 40) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $baseWeapon);
            $this->_item = '+4 ' . $property->generate();
            unset($property);
        } else {
            $this->_item = '+5';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Weapon_5