<?php
class Tgen_DnD_35MIC_Weapon_Property_5 extends Tgen_DnD_35MIC_Weapon_Property {
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
        if ($die > 80) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ', '
                      . $prop1->generate() . ', '
                      . $prop1->generate() . ', and '
                      . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 60) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ', '
                      . $prop2->generate() . ', and '
                      . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 40) {
            $prop3 = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $this->_baseWeapon);
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $property = $prop3->generate() . ' and '
                      . $prop2->generate();
            unset($prop3, $prop2);
        } elseif ($die > 20) {
            $prop4 = new Tgen_DnD_35MIC_Weapon_Property_4($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop4->generate() . ' and '
                      . $prop1->generate();
            unset($prop4, $prop1);
        } else {
            $property = 'Vorpal';
        }

        return $property;
    } // end _generateMelee()

    protected function _generateRanged() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 91) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ', '
                      . $prop1->generate() . ', '
                      . $prop1->generate() . ', and '
                      . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 71) {
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ', '
                      . $prop2->generate() . ', and '
                      . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 38) {
            $prop3 = new Tgen_DnD_35MIC_Weapon_Property_3($this->_hoard, $this->_baseWeapon);
            $prop2 = new Tgen_DnD_35MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $property = $prop3->generate() . ' and '
                      . $prop2->generate();
            unset($prop3, $prop2);
        } else {
            $prop4 = new Tgen_DnD_35MIC_Weapon_Property_4($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop4->generate() . ' and '
                      . $prop1->generate();
            unset($prop4, $prop1);
        }

        return $property;
    } // end _generateRanged()
} // end Tgen_DnD_35MIC_Weapon_Property_5