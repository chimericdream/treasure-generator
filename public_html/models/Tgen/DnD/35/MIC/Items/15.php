<?php
class Tgen_DnD_35MIC_Items_15 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 96) {
            $armor = $this->_getMagicArmor(5);
            $this->_item = $armor;
        } elseif ($die > 95) {
            $this->_item = 'Vest of resistance +5';
        } elseif ($die > 94) {
            $this->_item = 'Runestaff of transmutation';
        } elseif ($die > 93) {
            $this->_item = 'Runestaff of evocation';
        } elseif ($die > 92) {
            $this->_item = 'Runestaff of conjuration';
        } elseif ($die > 91) {
            $this->_item = 'Rod of withering';
        } elseif ($die > 90) {
            $this->_item = 'Rod of splendor';
        } elseif ($die > 89) {
            $this->_item = 'Ring of X-ray vision';
        } elseif ($die > 88) {
            $this->_item = 'Ring of master artifice';
        } elseif ($die > 87) {
            $this->_item = 'Ring of evasion';
        } elseif ($die > 86) {
            $this->_item = 'Pearl of power, 5th-level spell';
        } elseif ($die > 85) {
            $this->_item = 'Magic siphon';
        } elseif ($die > 84) {
            $this->_item = 'Eyes of doom';
        } elseif ($die > 83) {
            $this->_item = 'Cognizance crystal, 9 points';
        } elseif ($die > 81) {
            $this->_item = 'Cloak of resistance +5';
        } elseif ($die > 80) {
            $this->_item = 'Bracers of armor +5';
        } elseif ($die > 79) {
            $this->_item = 'Bracers of archery, greater';
        } elseif ($die > 78) {
            $this->_item = 'Staff of swarming insects';
        } elseif ($die > 77) {
            $this->_item = 'Plate armor of the deep';
        } elseif ($die > 76) {
            $this->_item = 'Quarterstaff of battle';
        } elseif ($die > 75) {
            $this->_item = 'Metamagic rod, silent, greater';
        } elseif ($die > 74) {
            $this->_item = 'Metamagic rod, sculpting, greater';
        } elseif ($die > 73) {
            $this->_item = 'Metamagic rod, extend, greater';
        } elseif ($die > 72) {
            $this->_item = 'Metamagic rod, enlarge, greater';
        } elseif ($die > 71) {
            $this->_item = 'Metamagic rod, substitution, greater';
        } elseif ($die > 70) {
            $this->_item = 'Overhead shield';
        } elseif ($die > 69) {
            $this->_item = 'Third eye sense';
        } elseif ($die > 68) {
            $this->_item = 'Shroud of scales';
        } elseif ($die > 67) {
            $this->_item = 'Runestaff of earth and stone';
        } elseif ($die > 66) {
            $this->_item = 'Psychoactive skin of fiendish embrace';
        } elseif ($die > 65) {
            $this->_item = 'Psychoactive skin of celestial embrace';
        } elseif ($die > 64) {
            $this->_item = 'Mind blade gauntlet';
        } elseif ($die > 63) {
            $this->_item = 'Memento magica, 4th-level spell';
        } elseif ($die > 62) {
            $this->_item = 'Helm of underwater action';
        } elseif ($die > 61) {
            $this->_item = 'Cloak of displacement, minor';
        } elseif ($die > 60) {
            $this->_item = 'Amulet of mighty fists +2';
        } elseif ($die > 59) {
            $this->_item = 'Circlet of blasting, major';
        } elseif ($die > 58) {
            $this->_item = 'Rod of enemy detection';
        } elseif ($die > 57) {
            $this->_item = 'Mattock of the titans';
        } elseif ($die > 56) {
            $this->_item = 'Nine lives stealer';
        } elseif ($die > 55) {
            $this->_item = 'Runestaff of the artisan';
        } elseif ($die > 54) {
            $this->_item = 'Celestial armor';
        } elseif ($die > 53) {
            $this->_item = 'Sword of the planes';
        } elseif ($die > 52) {
            $this->_item = 'Sword of subtlety';
        } elseif ($die > 51) {
            $this->_item = 'Lash of sands';
        } elseif ($die > 50) {
            $this->_item = 'Luck blade (0 wishes)';
        } elseif ($die > 49) {
            $this->_item = 'Turquoise veil';
        } elseif ($die > 48) {
            $this->_item = 'Mask of the skull';
        } elseif ($die > 47) {
            $this->_item = 'Golem manual, stone';
        } elseif ($die > 46) {
            $this->_item = 'Cloak of battle';
        } elseif ($die > 45) {
            $this->_item = 'Boots of the mountain king, greater';
        } elseif ($die > 44) {
            $this->_item = 'Exoskeleton armor';
        } elseif ($die > 43) {
            $this->_item = 'Runestaff of divination';
        } elseif ($die > 42) {
            $this->_item = 'Rope of entanglement';
        } elseif ($die > 41) {
            $this->_item = 'Robe of arcane might';
        } elseif ($die > 40) {
            $this->_item = 'Gwaeron\'s belt';
        } elseif ($die > 39) {
            $this->_item = 'Figurine of wondrous power, ivory goats';
        } elseif ($die > 38) {
            $this->_item = 'Flame tongue';
        } elseif ($die > 37) {
            $this->_item = 'Chain of obeisance';
        } elseif ($die > 36) {
            $this->_item = 'Cudgel that never forgets';
        } elseif ($die > 35) {
            $this->_item = 'Ruby blade';
        } elseif ($die > 34) {
            $this->_item = 'Dagger of denial';
        } elseif ($die > 33) {
            $this->_item = 'Water whip';
        } elseif ($die > 32) {
            $this->_item = 'stone of good luck';
        } elseif ($die > 31) {
            $this->_item = 'Scarab of stabilization';
        } elseif ($die > 30) {
            $this->_item = 'Rune staff of frost';
        } elseif ($die > 29) {
            $this->_item = 'Ring of wizardry I';
        } elseif ($die > 28) {
            $this->_item = 'Ring of invisibility';
        } elseif ($die > 27) {
            $this->_item = 'Ring of arcane might';
        } elseif ($die > 25) {
            $this->_item = 'Portable hole';
        } elseif ($die > 24) {
            $this->_item = 'Lens of the desert';
        } elseif ($die > 22) {
            $this->_item = 'Ioun stone, pearly white spindle';
        } elseif ($die > 20) {
            $this->_item = 'Ioun stone, pale lavender ellipsoid';
        } elseif ($die > 19) {
            $this->_item = 'Horn of blasting';
        } elseif ($die > 18) {
            $this->_item = 'Eyes of power leech, vampiric';
        } elseif ($die > 17) {
            $this->_item = 'Crystal mask of insight';
        } elseif ($die > 15) {
            $this->_item = 'Casting gloves';
        } elseif ($die > 13) {
            $this->_item = 'Carpet of flying, 5 ft. by 5 ft.';
        } elseif ($die > 12) {
            $this->_item = 'Bone ring';
        } elseif ($die > 11) {
            $this->_item = 'Beholder crown';
        } elseif ($die > 10) {
            $this->_item = 'Viper rod';
        } elseif ($die > 9) {
            $this->_item = 'Runestaff of transportation';
        } elseif ($die > 8) {
            $this->_item = 'Runestaff of illusion';
        } elseif ($die > 7) {
            $this->_item = 'Bracelet of friends';
        } elseif ($die > 6) {
            $this->_item = 'banded mail of luck';
        } elseif ($die > 5) {
            $this->_item = 'Trident of fish command';
        } elseif ($die > 4) {
            $this->_item = 'Rod of freedom';
        } elseif ($die > 3) {
            $this->_item = 'Rod of enervating strike';
        } elseif ($die > 2) {
            $this->_item = 'Dragonrider armor';
        } elseif ($die > 1) {
            $this->_item = 'Cli lyre';
        } else {
            $this->_item = 'Assassin\'s dagger';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_15