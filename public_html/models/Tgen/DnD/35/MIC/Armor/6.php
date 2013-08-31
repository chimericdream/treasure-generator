<?php
class Tgen_DnD_35_MIC_Armor_6 extends Tgen_DnD_35_MIC_Armor {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 95) {
            $property = new Tgen_DnD_35_MIC_Armor_Property_5($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+1',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 89) {
            $property = new Tgen_DnD_35_MIC_Armor_Property_4($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+2',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 77) {
            $property = new Tgen_DnD_35_MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+3',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 43) {
            $property = new Tgen_DnD_35_MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+4',
                'property' => $property->generate(),
            );
            unset($property);
        } else {
            $property = new Tgen_DnD_35_MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+5',
                'property' => $property->generate(),
            );
            unset($property);
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Armor_6