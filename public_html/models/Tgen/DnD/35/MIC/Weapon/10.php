<?php
class Tgen_DnD_35MIC_Weapon_10 extends Tgen_DnD_35MIC_Weapon {
    public function generate(array $baseWeapon) {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 91) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $baseWeapon);
            $this->_item = '+4 ' . $property->generate()
                         . ' and ' . $property->generate();
            unset($property);
        } elseif ($die > 79) {
            $property = new Tgen_DnD_35MIC_Weapon_Property_5($this->_hoard, $baseWeapon);
            $this->_item = '+5 ' . $property->generate();
            unset($property);
        } else {
            $property = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $baseWeapon);
            $this->_item = '+5 ' . $property->generate();
            unset($property);
            $property = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $baseWeapon);
            $this->_item .= ' and ' . $property->generate();
            unset($property);
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Weapon_10