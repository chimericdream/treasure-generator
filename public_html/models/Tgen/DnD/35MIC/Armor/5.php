<?php
class Tgen_DnD_35MIC_Armor_5 extends Tgen_DnD_35MIC_Armor {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 95) {
            $property = new Tgen_DnD_35MIC_Armor_Property_4($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+1',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 88) {
            $property = new Tgen_DnD_35MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+2',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 75) {
            $property = new Tgen_DnD_35MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+3',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 40) {
            $property = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+4',
                'property' => $property->generate(),
            );
            unset($property);
        } else {
            $this->_item = array(
                'bonus'    => '+5',
                'property' => '',
            );
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Armor_5