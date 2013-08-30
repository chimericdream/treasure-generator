<?php
class Tgen_DnD_35MIC_Armor_Property_1 extends Tgen_DnD_35MIC_Armor_Property {
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
        if ($die > 97) {
            $property = 'Quickness';
        } elseif ($die > 94) {
            $property = 'Improved stamina';
        } elseif ($die > 91) {
            $property = 'Improved agility';
        } elseif ($die > 88) {
            $property = 'Landing';
        } elseif ($die > 85) {
            $property = 'Buoyant';
        } elseif ($die > 81) {
            $property = 'Slick';
        } elseif ($die > 77) {
            $property = 'Silent moves';
        } elseif ($die > 73) {
            $property = 'Shadow';
        } elseif ($die > 70) {
            $property = 'Balance';
        } elseif ($die > 67) {
            $property = 'Twilight';
        } elseif ($die > 64) {
            $property = 'Styptic';
        } elseif ($die > 62) {
            $property = 'Soulbound';
        } elseif ($die > 58) {
            $property = 'Nimbleness';
        } elseif ($die > 54) {
            $property = 'Mobility';
        } elseif ($die > 50) {
            $property = 'Ghost ward';
        } elseif ($die > 47) {
            $property = 'Light fortification';
        } elseif ($die > 44) {
            $property = 'Ectoplasmic feedback';
        } elseif ($die > 41) {
            $property = 'Dragondodger';
        } elseif ($die > 38) {
            $property = 'Displacement';
        } elseif ($die > 35) {
            $property = 'Death ward';
        } elseif ($die > 31) {
            $property = 'Blurring';
        } elseif ($die > 27) {
            $property = 'Anchoring';
        } elseif ($die > 24) {
            $property = 'Acidic';
        } elseif ($die > 20) {
            $property = 'Mindarmor';
        } elseif ($die > 17) {
            $property = 'Daylight';
        } elseif ($die > 14) {
            $property = 'Glamered';
        } elseif ($die > 11) {
            $property = 'Commander';
        } elseif ($die > 8) {
            $property = 'Called';
        } elseif ($die > 6) {
            $property = 'Easy travel';
        } elseif ($die > 4) {
            $property = 'Blueshine';
        } elseif ($die > 2) {
            $property = 'Stamina';
        } else {
            $property = 'Agility';
        }
        return $property;
    }

    protected function _generateShield() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 89) {
            $property = 'Variable';
        } elseif ($die > 84) {
            $property = 'Soulbound';
        } elseif ($die > 76) {
            $property = 'Ranged';
        } elseif ($die > 68) {
            $property = 'Ghost ward';
        } elseif ($die > 59) {
            $property = 'Light fortification';
        } elseif ($die > 56) {
            $property = 'Death ward';
        } elseif ($die > 48) {
            $property = 'Blinding';
        } elseif ($die > 40) {
            $property = 'Bashing';
        } elseif ($die > 36) {
            $property = 'Arrow catching';
        } elseif ($die > 32) {
            $property = 'Anchoring';
        } elseif ($die > 29) {
            $property = 'Acidic';
        } elseif ($die > 23) {
            $property = 'Mindarmor';
        } elseif ($die > 17) {
            $property = 'Daylight';
        } elseif ($die > 14) {
            $property = 'Commander';
        } elseif ($die > 7) {
            $property = 'Called';
        } else {
            $property = 'Heartening';
        }
        return $property;
    }
} // end Tgen_DnD_35MIC_Armor_Property_1