<?php
class Tgen_DnD_35_MIC_Weapon_Property_3 extends Tgen_DnD_35_MIC_Weapon_Property {
    public function generate() {
        if ($this->_baseWeapon['type'] == 'melee') {
            $this->_property = $this->_generateMelee();
        } else {
            $this->_property = $this->_generateRanged();
        }

        return $this->_property;
    }

    protected function _generateMelee() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 92) {
            $prop2 = new Tgen_DnD_35_MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35_MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ' and ' . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 84) {
            $property = 'Illusion theft';
        } elseif ($die > 76) {
            $property = 'Unholy surge';
        } elseif ($die > 66) {
            $property = 'Speed';
        } elseif ($die > 61) {
            $property = 'Souldrinking';
        } elseif ($die > 57) {
            $property = 'Soulbreaker';
        } elseif ($die > 54) {
            $property = 'Greater soulbound';
        } elseif ($die > 47) {
            $property = 'Necrotic focus';
        } elseif ($die > 39) {
            $property = 'Implacable';
        } elseif ($die > 32) {
            $property = 'Holy surge';
        } elseif ($die > 25) {
            $property = 'Ethereal reaver';
        } elseif ($die > 17) {
            $property = 'Cursespewing';
        } elseif ($die > 9) {
            $property = 'Bodyfeeder';
        } else {
            $property = 'Prismatic burst';
        }

        return $property;
    } // end _generateMelee()

    protected function _generateRanged() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 89) {
            $prop2 = new Tgen_DnD_35_MIC_Weapon_Property_2($this->_hoard, $this->_baseWeapon);
            $prop1 = new Tgen_DnD_35_MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop2->generate() . ' and ' . $prop1->generate();
            unset($prop2, $prop1);
        } elseif ($die > 78) {
            $property = 'Illusion theft';
        } elseif ($die > 64) {
            $property = 'Speed';
        } elseif ($die > 59) {
            $property = 'Souldrinking';
        } elseif ($die > 53) {
            $property = 'Soulbreaker';
        } elseif ($die > 45) {
            $property = 'Greater soulbound';
        } elseif ($die > 32) {
            $property = 'Implacable';
        } elseif ($die > 23) {
            $property = 'Cursespewing';
        } elseif ($die > 12) {
            $property = 'Bodyfeeder';
        } else {
            $property = 'Prismatic burst';
        }

        return $property;
    } // end _generateRanged()
} // end Tgen_DnD_35_MIC_Weapon_Property_3