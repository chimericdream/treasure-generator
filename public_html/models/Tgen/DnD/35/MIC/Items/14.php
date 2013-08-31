<?php
/**
 * NOT DONE YET
 */
class Tgen_DnD_35_MIC_Items_14 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 92) {
            $weapon = $this->_getMagicWeapon(3);
            $this->_item = $weapon;
        } elseif ($die > 91) {
            $this->_item = 'Surge crystal';
        } elseif ($die > 90) {
            $this->_item = 'Runestaff of forced happiness';
        } elseif ($die > 89) {
            $this->_item = 'Rogue\'s vest';
        } elseif ($die > 88) {
            $this->_item = 'Ring of spell storing, minor';
        } elseif ($die > 87) {
            $this->_item = 'Ring of protection +3';
        } elseif ($die > 86) {
            $this->_item = 'Ring of the icy soul';
        } elseif ($die > 85) {
            $this->_item = 'Ring of divergence';
        } elseif ($die > 84) {
            $this->_item = 'Ioun stone, iridescent spindle';
        } elseif ($die > 83) {
            $this->_item = 'Goggles of the ebon hunter';
        } elseif ($die > 82) {
            $this->_item = 'Dragondoom scepter';
        } elseif ($die > 81) {
            $this->_item = 'Chasuble of fell power, greater';
        } elseif ($die > 80) {
            $this->_item = 'Amulet of natural armor +3';
        } elseif ($die > 79) {
            $this->_item = 'Winged shield';
        } elseif ($die > 78) {
            $this->_item = 'Tigerskin armor';
        } elseif ($die > 77) {
            $this->_item = 'Figurine of wondrous power, marble elephant';
        } elseif ($die > 76) {
            $this->_item = 'Broom of flying';
        } elseif ($die > 75) {
            $this->_item = 'Armor of the fallen leaves';
        } elseif ($die > 74) {
            $this->_item = 'chime of interruption';
        } elseif ($die > 73) {
            $this->_item = 'Staff of charming';
        } elseif ($die > 72) {
            $this->_item = 'Dwarven plate';
        } elseif ($die > 71) {
            $this->_item = 'Figurine of wondrous power, golden lions';
        } elseif ($die > 70) {
            $this->_item = 'Zombie hide armor';
        } elseif ($die > 66) {
            $armor = $this->_getMagicArmor(4);
            $this->_item = $armor;
        } elseif ($die > 65) {
            $this->_item = 'Winged boots';
        } elseif ($die > 64) {
            $this->_item = 'War wizard cloak';
        } elseif ($die > 63) {
            $this->_item = 'Vest of resistance +4';
        } elseif ($die > 62) {
            $this->_item = 'Shadow veil';
        } elseif ($die > 61) {
            $this->_item = 'Serpent veil';
        } elseif ($die > 60) {
            $this->_item = 'Scabbard of keen edges';
        } elseif ($die > 59) {
            $this->_item = 'Runestaff of vision';
        } elseif ($die > 58) {
            $this->_item = 'Runestaff of the undying';
        } elseif ($die > 57) {
            $this->_item = 'Ring of greater counterspells';
        } elseif ($die > 56) {
            $this->_item = 'Ring of dragon friendship';
        } elseif ($die > 55) {
            $this->_item = 'Periapt of Wisdom +4';
        } elseif ($die > 54) {
            $this->_item = 'Pearl of power, 4th-level spell';
        } elseif ($die > 53) {
            $this->_item = 'Headband of intellect +4';
        } elseif ($die > 52) {
            $this->_item = 'Goggles of draconic vision';
        } elseif ($die > 51) {
            $this->_item = 'Gloves of Dexterity +4';
        } elseif ($die > 50) {
            $this->_item = 'Cognizance crystal, 7 points';
        } elseif ($die > 49) {
            $this->_item = 'Cloak of resistance +4';
        } elseif ($die > 48) {
            $this->_item = 'Cloak of Charisma +4';
        } elseif ($die > 47) {
            $this->_item = 'Braders of armor +4';
        } elseif ($die > 46) {
            $this->_item = 'Belt of giant strength +4';
        } elseif ($die > 45) {
            $this->_item = 'Amulet of health +4';
        } elseif ($die > 44) {
            $this->_item = 'Amulet of catapsi';
        } elseif ($die > 43) {
            $this->_item = 'Figurine of wondrous power, onyx dog';
        } elseif ($die > 42) {
            $this->_item = 'Pearl of the sirines';
        } elseif ($die > 41) {
            $this->_item = 'Horn of the tritons';
        } elseif ($die > 40) {
            $this->_item = 'Third eye repudiate';
        } elseif ($die > 39) {
            $this->_item = 'Spider rod';
        } elseif ($die > 38) {
            $this->_item = 'Shirt of the moon';
        } elseif ($die > 37) {
            $this->_item = 'Shirt of slaadskin';
        } elseif ($die > 36) {
            $this->_item = 'Shirt of ironskin';
        } elseif ($die > 35) {
            $this->_item = 'Shirt of the inevitable';
        } elseif ($die > 34) {
            $this->_item = 'Shirt of the fey';
        } elseif ($die > 33) {
            $this->_item = 'Shirt of demonskin';
        } elseif ($die > 32) {
            $this->_item = 'Shirt of angels';
        } elseif ($die > 31) {
            $this->_item = 'Runestaff of opening';
        } elseif ($die > 30) {
            $this->_item = 'Rod of whips';
        } elseif ($die > 29) {
            $this->_item = 'Rod of flame extinguishing';
        } elseif ($die > 28) {
            $this->_item = 'Ring of water walking';
        } elseif ($die > 27) {
            $this->_item = 'Quiver of energy';
        } elseif ($die > 26) {
            $this->_item = 'Psychoactive skin of the chameleon';
        } elseif ($die > 25) {
            $this->_item = 'Psychoactive skin of nimbleness';
        } elseif ($die > 24) {
            $this->_item = 'Periapt of wound closure';
        } elseif ($die > 23) {
            $this->_item = 'Moonstone mask';
        } elseif ($die > 22) {
            $this->_item = 'Incarnum focus (DM\'s choice)';
        } elseif ($die > 21) {
            $this->_item = 'Desperation chain';
        } elseif ($die > 20) {
            $this->_item = 'Circlet of rapid casting';
        } elseif ($die > 19) {
            $this->_item = 'Blindhelm';
        } elseif ($die > 18) {
            $this->_item = 'Banner of the storm\'s eye';
        } elseif ($die > 17) {
            $this->_item = 'Badge of the svirfneblin';
        } elseif ($die > 16) {
            $this->_item = 'Belt of dwarvenkind';
        } elseif ($die > 15) {
            $this->_item = 'Stone horse, destrier';
        } elseif ($die > 14) {
            $this->_item = 'Bearskin armor';
        } elseif ($die > 13) {
            $this->_item = 'Wight armor';
        } elseif ($die > 12) {
            $this->_item = 'Electric eel hide';
        } elseif ($die > 11) {
            $this->_item = 'Veil of allure';
        } elseif ($die > 10) {
            $this->_item = 'Tentacle rod';
        } elseif ($die > 9) {
            $this->_item = 'Runestaff of night';
        } elseif ($die > 8) {
            $this->_item = 'Metamagic rod, maximize, lesser';
        } elseif ($die > 7) {
            $this->_item = 'Metamagic rod, chaining, lesser';
        } elseif ($die > 6) {
            $this->_item = 'Harrow rod';
        } elseif ($die > 5) {
            $this->_item = 'Gloves of the titan\'s grip';
        } elseif ($die > 4) {
            $this->_item = 'Cloak of arachnida';
        } elseif ($die > 3) {
            $this->_item = 'Choker of life protection';
        } elseif ($die > 2) {
            $this->_item = 'Memento magica, 3rd-level spell';
        } elseif ($die > 1) {
            $this->_item = 'Breastplate of terror';
        } else {
            $this->_item = 'Kyton armor';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_14