<?php
class Tgen_DnD_35_MIC_Armor_Property_2 extends Tgen_DnD_35_MIC_Armor_Property {
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
        if ($die > 93) {
            $property = 'Magic-eating';
        } elseif ($die > 88) {
            $property = 'Woodwalk';
        } elseif ($die > 80) {
            $property = 'Spell resistance (13)';
        } elseif ($die > 73) {
            $property = 'Spearblock';
        } elseif ($die > 67) {
            $property = 'Retaliation';
        } elseif ($die > 60) {
            $property = 'Hammerblock';
        } elseif ($die > 51) {
            $property = 'Energy immunity';
        } elseif ($die > 43) {
            $property = 'Energy defense';
        } elseif ($die > 39) {
            $property = 'Beastskin';
        } elseif ($die > 32) {
            $property = 'Axeblock';
        } elseif ($die > 25) {
            $property = 'Greater anchoring';
        } elseif ($die > 17) {
            $property = 'Healing';
        } elseif ($die > 8) {
            $property = 'Speed';
        } elseif ($die > 3) {
            $property = 'Linked';
        } else {
            $property = 'Gilled';
        }

        return $property;
    }

    protected function _generateShield() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 91) {
            $property = 'Spell resistance (13)';
        } elseif ($die > 83) {
            $property = 'Spearblock';
        } elseif ($die > 75) {
            $property = 'Hammerblock';
        } elseif ($die > 66) {
            $energy = '';
            do {
                $energy = ucfirst($this->_getEnergyType());
            } while ($energy != 'Sonic');
            $property = "{$energy} immunity";
        } elseif ($die > 57) {
            $property = 'Energy defense';
        } elseif ($die > 49) {
            $property = 'Ectoplasmic wall';
        } elseif ($die > 41) {
            $property = 'Axeblock';
        } elseif ($die > 33) {
            $property = 'Arrow deflection';
        } elseif ($die > 24) {
            $property = 'Animated';
        } elseif ($die > 20) {
            $property = 'Greater anchoring';
        } elseif ($die > 13) {
            $property = 'Speed';
        } elseif ($die > 8) {
            $property = 'Manifester';
        } else {
            $property = 'Linked';
        }

        return $property;
    }
} // end Tgen_DnD_35_MIC_Armor_Property_2