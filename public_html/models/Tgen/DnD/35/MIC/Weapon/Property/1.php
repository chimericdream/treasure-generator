<?php
class Tgen_DnD_35_MIC_Weapon_Property_1 extends Tgen_DnD_35_MIC_Weapon_Property {
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
        if ($die > 99) {
            $property = 'Whirling';
        } elseif ($die > 98) {
            $property = 'Weakening';
        } elseif ($die > 97) {
            $property = 'Warning';
        } elseif ($die > 95) {
            $property = 'Vicious';
        } elseif ($die > 94) {
            $property = 'Venomous';
        } elseif ($die > 93) {
            $property = 'Thundering';
        } elseif ($die > 92) {
            $property = 'Throwing';
        } elseif ($die > 91) {
            $property = 'Sweeping';
        } elseif ($die > 90) {
            $property = 'Sundering';
        } elseif ($die > 89) {
            $property = 'Stygian';
        } elseif ($die > 88) {
            $property = 'Stunning surge';
        } elseif ($die > 87) {
            $property = 'Spellstrike';
        } elseif ($die > 84) {
            $property = 'Spell storing';
        } elseif ($die > 83) {
            $property = 'Soulbound';
        } elseif ($die > 80) {
            $property = 'Shock';
        } elseif ($die > 79) {
            $property = 'Shielding';
        } elseif ($die > 78) {
            $property = 'Shattermantle';
        } elseif ($die > 77) {
            $property = 'Screaming';
        } elseif ($die > 76) {
            $property = 'Sacred';
        } elseif ($die > 75) {
            $property = 'Revealing';
        } elseif ($die > 74) {
            $property = 'Resounding';
        } elseif ($die > 73) {
            $property = 'Psychokinetic';
        } elseif ($die > 72) {
            $property = 'Profane';
        } elseif ($die > 71) {
            $property = 'Power storing';
        } elseif ($die > 70) {
            $property = 'Paralyzing';
        } elseif ($die > 68) {
            $property = 'Morphing';
        } elseif ($die > 67) {
            $property = 'Mindfeeder';
        } elseif ($die > 66) {
            $property = 'Mighty smiting';
        } elseif ($die > 64) {
            $property = 'Mighty cleaving';
        } elseif ($die > 63) {
            $property = 'Merciful';
        } elseif ($die > 62) {
            $property = 'Maiming';
        } elseif ($die > 61) {
            $property = 'Magebane';
        } elseif ($die > 59) {
            $property = 'Lucky';
        } elseif ($die > 58) {
            $property = 'Knockback';
        } elseif ($die > 57) {
            $property = 'Ki focus';
        } elseif ($die > 53) {
            $property = 'Keen';
        } elseif ($die > 52) {
            $property = 'Impaling';
        } elseif ($die > 50) {
            $property = 'Impact';
        } elseif ($die > 49) {
            $property = 'Illusion bane';
        } elseif ($die > 48) {
            $property = 'Hunting';
        } elseif ($die > 46) {
            $property = 'Heavenly burst';
        } elseif ($die > 45) {
            $property = 'Harmonizing';
        } elseif ($die > 43) {
            $property = 'Ghost touch';
        } elseif ($die > 40) {
            $property = 'Frost';
        } elseif ($die > 37) {
            $property = 'Flaming';
        } elseif ($die > 35) {
            $property = 'Eager';
        } elseif ($die > 34) {
            $property = 'Dragondoom';
        } elseif ($die > 33) {
            $property = 'Divine wrath';
        } elseif ($die > 32) {
            $property = 'Dispelling';
        } elseif ($die > 30) {
            $property = 'Dislocator';
        } elseif ($die > 29) {
            $property = 'Dessicating';
        } elseif ($die > 28) {
            $property = 'Defensive surge';
        } elseif ($die > 26) {
            $property = 'Defending';
        } elseif ($die > 25) {
            $property = 'Deadly precision';
        } elseif ($die > 23) {
            $property = 'Corrosive';
        } elseif ($die > 22) {
            $property = 'Charging';
        } elseif ($die > 21) {
            $property = 'Chargebreaker';
        } elseif ($die > 20) {
            $property = 'Brutal surge';
        } elseif ($die > 19) {
            $property = 'Brash';
        } elseif ($die > 18) {
            $property = 'Bloodstone';
        } elseif ($die > 16) {
            $property = 'Bloodfeeding';
        } elseif ($die > 15) {
            $property = 'Blessed';
        } elseif ($die > 14) {
            $property = 'Binding';
        } elseif ($die > 13) {
            $property = 'Berserker';
        } elseif ($die > 11) {
            $property = 'Bane (' . $this->_getBaneEnemy() . ')';
        } elseif ($die > 9) {
            $property = 'Slow burst';
        } elseif ($die > 7) {
            $property = 'Sizing';
        } elseif ($die > 6) {
            $property = 'Shadowstrike';
        } elseif ($die > 5) {
            $property = 'Hideaway';
        } elseif ($die > 4) {
            $property = 'Everbright';
        } elseif ($die > 2) {
            $property = 'Changeling';
        } elseif ($die > 1) {
            $property = 'Aquatic';
        } else {
            $property = 'Illuminating';
        }

        return $property;
    } // end _generateMelee()

    protected function _generateRanged() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 98) {
            $property = 'Weakening';
        } elseif ($die > 96) {
            $property = 'Warning';
        } elseif ($die > 94) {
            $property = 'Venomous';
        } elseif ($die > 91) {
            $property = 'Thundering';
        } elseif ($die > 89) {
            $property = 'Stygian';
        } elseif ($die > 87) {
            $property = 'Stunning surge';
        } elseif ($die > 86) {
            $property = 'Spellstrike';
        } elseif ($die > 85) {
            $property = 'Soulbound';
        } elseif ($die > 83) {
            $property = 'Shock';
        } elseif ($die > 81) {
            $property = 'Shattermantle';
        } elseif ($die > 79) {
            $property = 'Seeking';
        } elseif ($die > 77) {
            $property = 'Screaming';
        } elseif ($die > 75) {
            $property = 'Sacred';
        } elseif ($die > 73) {
            $property = 'Revealing';
        } elseif ($die > 71) {
            $property = 'Returning';
        } elseif ($die > 68) {
            $property = 'Quick loading';
        } elseif ($die > 66) {
            $property = 'Psychokinetic';
        } elseif ($die > 64) {
            $property = 'Profane';
        } elseif ($die > 61) {
            $property = 'Precise';
        } elseif ($die > 60) {
            $property = 'Power storing';
        } elseif ($die > 58) {
            $property = 'Morphing';
        } elseif ($die > 56) {
            $property = 'Mindfeeder';
        } elseif ($die > 55) {
            $property = 'Merciful';
        } elseif ($die > 53) {
            $property = 'Maiming';
        } elseif ($die > 51) {
            $property = 'Magebane';
        } elseif ($die > 49) {
            $property = 'Lucky';
        } elseif ($die > 47) {
            $property = 'Knockback';
        } elseif ($die > 45) {
            $property = 'Impact';
        } elseif ($die > 43) {
            $property = 'Illusion bane';
        } elseif ($die > 41) {
            $property = 'Hunting';
        } elseif ($die > 39) {
            $property = 'Heavenly burst';
        } elseif ($die > 36) {
            $property = 'Frost';
        } elseif ($die > 33) {
            $property = 'Flaming';
        } elseif ($die > 31) {
            $property = 'Dragonhunter';
        } elseif ($die > 29) {
            $property = 'Divine wrath';
        } elseif ($die > 27) {
            $property = 'Distance';
        } elseif ($die > 25) {
            $property = 'Dispelling';
        } elseif ($die > 24) {
            $property = 'Dislocator';
        } elseif ($die > 22) {
            $property = 'Dessicating';
        } elseif ($die > 20) {
            $property = 'Deadly precision';
        } elseif ($die > 18) {
            $property = 'Corrosive';
        } elseif ($die > 16) {
            $property = 'Blessed';
        } elseif ($die > 15) {
            $property = 'Binding';
        } elseif ($die > 13) {
            $property = 'Bane (' . $this->_getBaneEnemy() . ')';
        } elseif ($die > 11) {
            $property = 'Arcane might';
        } elseif ($die > 9) {
            $property = 'Slow burst';
        } elseif ($die > 7) {
            $property = 'Sizing';
        } elseif ($die > 5) {
            $property = 'Shadowstrike';
        } elseif ($die > 3) {
            $property = 'Hideaway';
        } elseif ($die > 2) {
            $property = 'Everbright';
        } elseif ($die > 1) {
            $property = 'Aquatic';
        } else {
            $property = 'Illuminating';
        }

        return $property;
    } // end _generateRanged()

    protected function _getBaneEnemy() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $enemy = 'Vermin';
        } elseif ($d100 > 90) {
            $enemy = 'Undead';
        } elseif ($d100 > 88) {
            $enemy = 'Plants';
        } elseif ($d100 > 87) {
            $enemy = 'Outsiders, water';
        } elseif ($d100 > 84) {
            $enemy = 'Outsiders, lawful';
        } elseif ($d100 > 81) {
            $enemy = 'Outsiders, good';
        } elseif ($d100 > 80) {
            $enemy = 'Outsiders, fire';
        } elseif ($d100 > 77) {
            $enemy = 'Outsiders, evil';
        } elseif ($d100 > 76) {
            $enemy = 'Outsiders, earth';
        } elseif ($d100 > 73) {
            $enemy = 'Outsiders, chaotic';
        } elseif ($d100 > 72) {
            $enemy = 'Outsiders, air';
        } elseif ($d100 > 70) {
            $enemy = 'Oozes';
        } elseif ($d100 > 65) {
            $enemy = 'Monstroug humanoids';
        } elseif ($d100 > 60) {
            $enemy = 'Magical beasts';
        } elseif ($d100 > 57) {
            $enemy = 'Humanoids, orc';
        } elseif ($d100 > 54) {
            $enemy = 'Humanoids, reptilian';
        } elseif ($d100 > 50) {
            $enemy = 'Humanoids, human';
        } elseif ($d100 > 49) {
            $enemy = 'Humanoids, halfling';
        } elseif ($d100 > 46) {
            $enemy = 'Humanoids, goblinoid';
        } elseif ($d100 > 45) {
            $enemy = 'Humanoids, gnome';
        } elseif ($d100 > 44) {
            $enemy = 'Humanoids, gnoll';
        } elseif ($d100 > 42) {
            $enemy = 'Humanoids, elf';
        } elseif ($d100 > 40) {
            $enemy = 'Humanoids, dwarf';
        } elseif ($d100 > 39) {
            $enemy = 'Humanoids, aquatic';
        } elseif ($d100 > 32) {
            $enemy = 'Giants';
        } elseif ($d100 > 27) {
            $enemy = 'Fey';
        } elseif ($d100 > 22) {
            $enemy = 'Elementals';
        } elseif ($d100 > 16) {
            $enemy = 'Dragons';
        } elseif ($d100 > 9) {
            $enemy = 'Constructs';
        } elseif ($d100 > 5) {
            $enemy = 'Animals';
        } else {
            $enemy = 'Aberrations';
        }

        return $enemy;
    } // end _getBaneEnemy()
} // end Tgen_DnD_35_MIC_Weapon_Property_1