<?php
class Tgen_DnD_35MIC_Armor_3 extends Tgen_DnD_35MIC_Armor {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 91) {
            $property = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+1',
                'property' => $property->generate() . ' and '
                           .  $property->generate(),
            );
            unset($property);
        } elseif ($die > 79) {
            $property = new Tgen_DnD_35MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+1',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 44) {
            $property = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+2',
                'property' => $property->generate(),
            );
            unset($property);
        } else {
            $this->_item = array(
                'bonus'    => '+3',
                'property' => '',
            );
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Armor_3