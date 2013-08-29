<?php
class Tgen_DnD_35MIC_Armor_Property_3 extends Tgen_DnD_35MIC_Armor_Property {
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
            $prop2 = new Tgen_DnD_35MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $prop1 = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $property = $prop2->generate() . ' and ' . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 96) {
            $property = 'Sonic resistance';
        } elseif ($die > 91) {
            $property = 'Fire resistance';
        } elseif ($die > 86) {
            $property = 'Electricity resistance';
        } elseif ($die > 81) {
            $property = 'Cold resistance';
        } elseif ($die > 76) {
            $property = 'Acid resistance';
        } elseif ($die > 73) {
            $property = 'Wild';
        } elseif ($die > 69) {
            $property = 'Vanishing';
        } elseif ($die > 64) {
            $property = 'Spell resistance (15)';
        } elseif ($die > 62) {
            $property = 'Greater soulbound';
        } elseif ($die > 59) {
            $property = 'Roaring';
        } elseif ($die > 55) {
            $property = 'Invulnerability';
        } elseif ($die > 51) {
            $property = 'Ghost touch';
        } elseif ($die > 46) {
            $property = 'Moderate fortification';
        } elseif ($die > 42) {
            $property = 'Greater blurring';
        } elseif ($die > 37) {
            $property = 'Improved slick';
        } elseif ($die > 31) {
            $property = 'Improved silent moves';
        } elseif ($die > 26) {
            $property = 'Improved shadow';
        } elseif ($die > 22) {
            $property = 'Fearsome';
        } elseif ($die > 17) {
            $property = 'Blinkinb';
        } elseif ($die > 13) {
            $property = 'Bane blind';
        } elseif ($die > 9) {
            $property = 'Greater stamina';
        } elseif ($die > 5) {
            $property = 'Greater agility';
        } elseif ($die > 1) {
            $property = 'Improved balance';
        } else {
            $property = 'Deepdweller';
        }

        return $property;
    }

    protected function _generateShield() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 98) {
            $prop2 = new Tgen_DnD_35MIC_Armor_Property_2($this->_hoard, $this->_baseArmor);
            $prop1 = new Tgen_DnD_35MIC_Armor_Property_1($this->_hoard, $this->_baseArmor);
            $property = $prop2->generate() . ' and ' . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 90) {
            $property = 'Sonic resistance';
        } elseif ($die > 81) {
            $property = 'Fire resistance';
        } elseif ($die > 72) {
            $property = 'Electricity resistance';
        } elseif ($die > 63) {
            $property = 'Cold resistance';
        } elseif ($die > 54) {
            $property = 'Acid resistance';
        } elseif ($die > 49) {
            $property = 'Wild';
        } elseif ($die > 42) {
            $property = 'Vanishing';
        } elseif ($die > 33) {
            $property = 'Spell resistance (15)';
        } elseif ($die > 30) {
            $property = 'Greater soulbound';
        } elseif ($die > 22) {
            $property = 'Ghost touch';
        } elseif ($die > 14) {
            $property = 'Moderate fortification';
        } elseif ($die > 7) {
            $property = 'Averter';
        } else {
            $property = 'Fearsome';
        }

        return $property;
    }
} // end Tgen_DnD_35MIC_Armor_Property_3