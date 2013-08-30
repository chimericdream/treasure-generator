<?php
class Tgen_DnD_35MIC_Armor_Property_4 extends Tgen_DnD_35MIC_Armor_Property {
    public function generate() {
        if ($this->_baseArmor['type'] == 'armor') {
            $this->_property = $this->_generateArmor();
        } else {
            $this->_property = $this->_generateShield();
        }

        return $this->_property;
    }

    protected function _generateArmor() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 89) {
            $prop2 = new Tgen_DnD_35MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $property = $prop2->generate() . ' and ' . $prop2->generate();
            unset($prop2, $prop1);
        } elseif ($die > 78) {
            $prop3 = new Tgen_DnD_35MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $prop1 = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $property = $prop3->generate() . ' and ' . $prop1->generate();
            unset($prop3, $prop1);
        } elseif ($die > 69) {
            $property = 'Greater slick';
        } elseif ($die > 58) {
            $property = 'Greater silent moves';
        } elseif ($die > 48) {
            $property = 'Greater shadow';
        } elseif ($die > 38) {
            $property = 'Greater balance';
        } elseif ($die > 28) {
            $property = 'Greater healing';
        } elseif ($die > 19) {
            $property = 'Menacing';
        } elseif ($die > 7) {
            $property = 'Spell resistance (17)';
        } else {
            $property = 'Radiant';
        }

        return $property;
    }

    protected function _generateShield() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 62) {
            $prop2 = new Tgen_DnD_35MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $property = $prop2->generate() . ' and ' . $prop2->generate();
            unset($prop2, $prop1);
        } elseif ($die > 37) {
            $prop3 = new Tgen_DnD_35MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $prop1 = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $property = $prop3->generate() . ' and ' . $prop1->generate();
            unset($prop3, $prop1);
        } else {
            $property = 'Spell resistance (17)';
        }

        return $property;
    }
} // end Tgen_DnD_35MIC_Armor_Property_4