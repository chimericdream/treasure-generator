<?php
class Tgen_DnD_35MIC_Armor_8 extends Tgen_DnD_35MIC_Armor {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 91) {
            $property = new Tgen_DnD_35MIC_Armor_Property_5($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+3',
                'property' => $property->generate(),
            );
            unset($property);
        } elseif ($die > 79) {
            $property = new Tgen_DnD_35MIC_Armor_Property_4($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+4',
                'property' => $property->generate(),
            );
            unset($property);
        } else {
            $property = new Tgen_DnD_35MIC_Armor_Property_3($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+5',
                'property' => $property->generate(),
            );
            unset($property);
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Armor_8