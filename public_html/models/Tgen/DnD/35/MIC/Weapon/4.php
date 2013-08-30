<?php
class Tgen_DnD_35MIC_Weapon_4 extends Tgen_DnD_35MIC_Weapon {
    public function generate(array $baseWeapon) {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 91) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $baseWeapon);
            $this->_item = '+1 ' . $property->generate();
            unset($property);
        } elseif ($die > 79) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $baseWeapon);
            $this->_item = '+2 ' . $property->generate();
            unset($property);
        } elseif ($die > 44) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $baseWeapon);
            $this->_item = '+3 ' . $property->generate();
            unset($property);
        } else {
            $this->_item = '+4';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Weapon_4