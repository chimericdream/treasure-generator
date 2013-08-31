<?php
class Tgen_DnD_35_MIC_Armor_2 extends Tgen_DnD_35_MIC_Armor {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 62) {
            $property = new Tgen_DnD_35_MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $this->_item = array(
                'bonus'    => '+1',
                'property' => $property->generate(),
            );
            unset($property);
        } else {
            $this->_item = array(
                'bonus'    => '+2',
                'property' => '',
            );
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Armor_2