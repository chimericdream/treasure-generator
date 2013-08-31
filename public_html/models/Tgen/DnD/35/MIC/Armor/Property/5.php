<?php
class Tgen_DnD_35_MIC_Armor_Property_5 extends Tgen_DnD_35_MIC_Armor_Property {
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
        if ($die > 99) {
            $prop3 = new Tgen_DnD_35_MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $prop2 = new Tgen_DnD_35_MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $property = $prop3->generate() . ' and ' . $prop2->generate();
            unset($prop3, $prop2);
        } elseif ($die > 98) {
            $prop4 = new Tgen_DnD_35_MIC_Armor_Property_4($this->_hoard, $this->_baseArmor);
            $prop1 = new Tgen_DnD_35_MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $property = $prop4->generate() . ' and ' . $prop1->generate();
            unset($prop4, $prop1);
        } elseif ($die > 94) {
            $property = 'Greater sonic resistance';
        } elseif ($die > 88) {
            $property = 'Greater fire resistance';
        } elseif ($die > 82) {
            $property = 'Greater electricity resistance';
        } elseif ($die > 76) {
            $property = 'Greater cold resistance';
        } elseif ($die > 70) {
            $property = 'Greater acid resistance';
        } elseif ($die > 68) {
            $property = 'Undead controlling';
        } elseif ($die > 63) {
            $property = 'Etherealness';
        } elseif ($die > 56) {
            $property = 'Improved sonic resistance';
        } elseif ($die > 48) {
            $property = 'Improved fire resistance';
        } elseif ($die > 40) {
            $property = 'Improved electricity resistance';
        } elseif ($die > 32) {
            $property = 'Improved cold resistance';
        } elseif ($die > 24) {
            $property = 'Improved acid resistance';
        } elseif ($die > 19) {
            $property = 'Masking';
        } elseif ($die > 15) {
            $property = 'Aporter';
        } elseif ($die > 9) {
            $property = 'Spell resistance (19)';
        } elseif ($die > 4) {
            $property = 'Freedom';
        } else {
            $property = 'Heavy fortification';
        }

        return $property;
    }

    protected function _generateShield() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $prop3 = new Tgen_DnD_35_MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $prop2 = new Tgen_DnD_35_MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $property = $prop3->generate() . ' and ' . $prop2->generate();
            unset($prop3, $prop2);
        } elseif ($die > 98) {
            $prop4 = new Tgen_DnD_35_MIC_Armor_Property_4($this->_hoard, $this->_baseArmor);
            $prop1 = new Tgen_DnD_35_MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $property = $prop4->generate() . ' and ' . $prop1->generate();
            unset($prop4, $prop1);
        } elseif ($die > 93) {
            $property = 'Greater sonic resistance';
        } elseif ($die > 87) {
            $property = 'Greater fire resistance';
        } elseif ($die > 81) {
            $property = 'Greater electricity resistance';
        } elseif ($die > 75) {
            $property = 'Greater cold resistance';
        } elseif ($die > 69) {
            $property = 'Greater acid resistance';
        } elseif ($die > 67) {
            $property = 'Undead controlling';
        } elseif ($die > 60) {
            $property = 'Improved sonic resistance';
        } elseif ($die > 52) {
            $property = 'Improved fire resistance';
        } elseif ($die > 44) {
            $property = 'Improved electricity resistance';
        } elseif ($die > 36) {
            $property = 'Improved cold resistance';
        } elseif ($die > 28) {
            $property = 'Improved acid resistance';
        } elseif ($die > 24) {
            $property = 'Aporter';
        } elseif ($die > 18) {
            $property = 'Time buttress';
        } elseif ($die > 11) {
            $property = 'Spell resistance (19)';
        } elseif ($die > 4) {
            $property = 'Reflecting';
        } else {
            $property = 'Heavy fortification';
        }

        return $property;
    }
} // end Tgen_DnD_35_MIC_Armor_Property_5