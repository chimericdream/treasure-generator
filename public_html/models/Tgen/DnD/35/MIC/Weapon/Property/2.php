<?php
class Tgen_DnD_35_MIC_Weapon_Property_2 extends Tgen_DnD_35_MIC_Weapon_Property {
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
        if ($die > 98) {
            $prop = new Tgen_DnD_35_MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop->generate() . ' and ' . $prop->generate();
        } elseif ($die > 95) {
            $property = 'Wounding';
        } elseif ($die > 93) {
            $property = 'Vampiric';
        } elseif ($die > 91) {
            $property = 'Unholy';
        } elseif ($die > 88) {
            $property = 'Transmuting';
        } elseif ($die > 86) {
            $property = 'Terran';
        } elseif ($die > 83) {
            $property = 'Stunning';
        } elseif ($die > 79) {
            $property = 'Shocking burst';
        } elseif ($die > 77) {
            $property = 'Screaming burst';
        } elseif ($die > 75) {
            $property = 'Sacred burst';
        } elseif ($die > 73) {
            $property = 'Psychokinetic burst';
        } elseif ($die > 71) {
            $property = 'Psychic';
        } elseif ($die > 69) {
            $property = 'Psibane';
        } elseif ($die > 67) {
            $property = 'Profane burst';
        } elseif ($die > 65) {
            $property = 'Parrying';
        } elseif ($die > 63) {
            $property = 'Paralytic burst';
        } elseif ($die > 61) {
            $property = 'Minecrusher';
        } elseif ($die > 59) {
            $property = 'Metalline';
        } elseif ($die > 57) {
            $property = 'Incorporeal binding';
        } elseif ($die > 55) {
            $property = 'Impedance';
        } elseif ($die > 54) {
            $property = 'Ignan';
        } elseif ($die > 51) {
            $property = 'Icy burst';
        } elseif ($die > 48) {
            $property = 'Holy';
        } elseif ($die > 46) {
            $property = 'Ghost strike';
        } elseif ($die > 44) {
            $property = 'Fleshgrinding';
        } elseif ($die > 41) {
            $property = 'Flaming burst';
        } elseif ($die > 39) {
            $property = 'Fiercebane';
        } elseif ($die > 37) {
            $property = 'Enervating';
        } elseif ($die > 35) {
            $energy = ucfirst($this->_getSurgeType());
            $property = "{$energy} surge";
        } elseif ($die > 33) {
            $property = 'Energy aura';
        } elseif ($die > 31) {
            $property = 'Doom burst';
        } elseif ($die > 29) {
            $property = 'Domineering';
        } elseif ($die > 27) {
            $property = 'Disruption';
        } elseif ($die > 25) {
            $property = 'Greater dispelling';
        } elseif ($die > 23) {
            $property = 'Great dislocator';
        } elseif ($die > 22) {
            $property = 'Disarming';
        } elseif ($die > 20) {
            $property = 'Dessicating burst';
        } elseif ($die > 18) {
            $property = 'Consumptive';
        } elseif ($die > 16) {
            $property = 'Collision';
        } elseif ($die > 14) {
            $property = 'Blurstrike';
        } elseif ($die > 12) {
            $property = 'Blindsighted';
        } elseif ($die > 10) {
            $property = 'banishing';
        } elseif ($die > 8) {
            $property = 'Axiomatic';
        } elseif ($die > 7) {
            $property = 'Auran';
        } elseif ($die > 6) {
            $property = 'Aquan';
        } elseif ($die > 4) {
            $property = 'Anarchic';
        } elseif ($die > 2) {
            $property = 'Acidic burst';
        } elseif ($die > 1) {
            $property = 'Manifester';
        } else {
            $property = 'Vanishing';
        }

        return $property;
    } // end _generateMelee()

    protected function _generateRanged() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 98) {
            $prop = new Tgen_DnD_35_MIC_Weapon_Property_1($this->_hoard, $this->_baseWeapon);
            $property = $prop->generate() . ' and ' . $prop->generate();
        } elseif ($die > 96) {
            $property = 'Unholy';
        } elseif ($die > 92) {
            $property = 'Transmuting';
        } elseif ($die > 91) {
            $property = 'Terran';
        } elseif ($die > 88) {
            $property = 'Stunning';
        } elseif ($die > 82) {
            $property = 'Shocking burst';
        } elseif ($die > 79) {
            $property = 'Screaming burst';
        } elseif ($die > 77) {
            $property = 'Sacred burst';
        } elseif ($die > 75) {
            $property = 'Psychokinetic burst';
        } elseif ($die > 73) {
            $property = 'Psychic';
        } elseif ($die > 71) {
            $property = 'Psibane';
        } elseif ($die > 69) {
            $property = 'Profane burst';
        } elseif ($die > 67) {
            $property = 'Parrying';
        } elseif ($die > 65) {
            $property = 'Paralytic burst';
        } elseif ($die > 63) {
            $property = 'Mindcrusher';
        } elseif ($die > 60) {
            $property = 'Metalline';
        } elseif ($die > 57) {
            $property = 'Impedance';
        } elseif ($die > 56) {
            $property = 'Ignan';
        } elseif ($die > 51) {
            $property = 'Icy burst';
        } elseif ($die > 48) {
            $property = 'Holy';
        } elseif ($die > 45) {
            $property = 'Force';
        } elseif ($die > 40) {
            $property = 'Flaming burst';
        } elseif ($die > 38) {
            $property = 'Fiercebane';
        } elseif ($die > 36) {
            $property = 'Enervating';
        } elseif ($die > 33) {
            $property = 'Energy aura';
        } elseif ($die > 30) {
            $property = 'Doom burst';
        } elseif ($die > 28) {
            $property = 'Domineering';
        } elseif ($die > 26) {
            $property = 'Greater dispelling';
        } elseif ($die > 23) {
            $property = 'Great dislocator';
        } elseif ($die > 21) {
            $property = 'Disarming';
        } elseif ($die > 19) {
            $property = 'Dessicating burst';
        } elseif ($die > 17) {
            $property = 'Consumptive';
        } elseif ($die > 15) {
            $property = 'Collision';
        } elseif ($die > 12) {
            $property = 'Blindsighted';
        } elseif ($die > 10) {
            $property = 'Banishing';
        } elseif ($die > 8) {
            $property = 'Axiomatic';
        } elseif ($die > 7) {
            $property = 'Auran';
        } elseif ($die > 6) {
            $property = 'Aquan';
        } elseif ($die > 4) {
            $property = 'Anarchic';
        } elseif ($die > 1) {
            $property = 'Acidic burst';
        } else {
            $property = 'Manifester';
        }

        return $property;
    } // end _generateRanged()
} // end Tgen_DnD_35_MIC_Weapon_Property_2