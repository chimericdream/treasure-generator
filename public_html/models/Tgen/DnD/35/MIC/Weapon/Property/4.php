<?php
class Tgen_DnD_35MIC_Weapon_Property_4 extends Tgen_DnD_35MIC_Weapon_Property {
    public function generate() {
        if ($this->_baseWeapon['type'] == 'melee') {
            $this->_property = $this->_generateMelee();
        } else {
            $this->_property = $this->_generateRanged();
        }

        return $this->_property;
    }

    protected function _generateMelee() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 83) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ', '
                      . $prop1->generate() . ', and '
                      . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 64) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ' and '
                      . $prop2->generate();
            unset($prop2);
        } elseif ($die > 41) {
            $prop3 = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop3->generate() . ' and '
                      . $prop1->generate();
            unset($prop3, $prop1);
        } elseif ($die > 19) {
            $property = 'Dancing';
        } else {
            $property = 'Brilliant energy';
        }

        return $property;
    } // end _generateMelee()

    protected function _generateRanged() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 82) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ', '
                      . $prop1->generate() . ', and '
                      . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 61) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ' and '
                      . $prop2->generate();
            unset($prop2);
        } elseif ($die > 31) {
            $prop3 = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop3->generate() . ' and '
                      . $prop1->generate();
            unset($prop3, $prop1);
        } else {
            $property = 'Brilliant energy';
        }

        return $property;
    } // end _generateRanged()
} // end Tgen_DnD_35MIC_Weapon_Property_4