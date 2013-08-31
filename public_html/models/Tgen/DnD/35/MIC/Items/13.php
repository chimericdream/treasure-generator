<?php
class Tgen_DnD_35_MIC_Items_13 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Python rod';
        } elseif ($die > 97) {
            $this->_item = 'Monk\'s belt';
        } elseif ($die > 96) {
            $this->_item = 'Lyre of building';
        } elseif ($die > 95) {
            $this->_item = 'Gem of brightness';
        } elseif ($die > 94) {
            $this->_item = 'Fireflower pendant';
        } elseif ($die > 93) {
            $this->_item = 'Cloak of soulbound resistance, greater';
        } elseif ($die > 92) {
            $this->_item = 'Cannith goggles';
        } elseif ($die > 91) {
            $this->_item = 'Shifter\'s sorrow';
        } elseif ($die > 89) {
            $this->_item = 'Ring of chameleon power';
        } elseif ($die > 88) {
            $this->_item = 'Hat of anonymity';
        } elseif ($die > 87) {
            $this->_item = 'Boccob\'s blessed book';
        } elseif ($die > 86) {
            $this->_item = 'Bow of songs';
        } elseif ($die > 85) {
            $this->_item = 'Rogue blade';
        } elseif ($die > 84) {
            $this->_item = 'Chromatic rod';
        } elseif ($die > 81) {
            $this->_item = 'Divine scroll of resurrection';
        } elseif ($die > 80) {
            $this->_item = 'Hawkfeather armor';
        } elseif ($die > 79) {
            $this->_item = 'Serpent armor';
        } elseif ($die > 77) {
            $this->_item = 'Winged vest';
        } elseif ($die > 76) {
            $this->_item = 'Water cloak';
        } elseif ($die > 75) {
            $this->_item = 'Wand bracelet';
        } elseif ($die > 73) {
            $this->_item = 'Vest of free movement';
        } elseif ($die > 72) {
            $this->_item = 'Spare hand';
        } elseif ($die > 71) {
            $this->_item = 'Shirt of resilience';
        } elseif ($die > 70) {
            $this->_item = 'Runestaff of size alteration';
        } elseif ($die > 69) {
            $this->_item = 'Runestaff of entrapment';
        } elseif ($die > 68) {
            $this->_item = 'Ruby cincture of immutability';
        } elseif ($die > 66) {
            $this->_item = 'Rod of wonder';
        } elseif ($die > 64) {
            $this->_item = 'Ring of spell-battle';
        } elseif ($die > 61) {
            $energy = $this->_getEnergyType();
            $this->_item = "Ring of {$energy} resistance, minor";
        } elseif ($die > 60) {
            $this->_item = 'Riding boots';
        } elseif ($die > 59) {
            $this->_item = 'Psychoactive skin of the claw';
        } elseif ($die > 58) {
            $this->_item = 'Pipes of pain';
        } elseif ($die > 57) {
            $this->_item = 'Medallion of thoughts';
        } elseif ($die > 56) {
            $this->_item = 'Mantle of second chances';
        } elseif ($die > 55) {
            $this->_item = 'Horn of plenty';
        } elseif ($die > 54) {
            $this->_item = 'Golem manual, clay';
        } elseif ($die > 53) {
            $this->_item = 'Goggles of night';
        } elseif ($die > 52) {
            $this->_item = 'Flesheater';
        } elseif ($die > 51) {
            $this->_item = 'Dove\'s harp';
        } elseif ($die > 49) {
            $this->_item = 'Boots of speed';
        } elseif ($die > 48) {
            $this->_item = 'Blood claw choker';
        } elseif ($die > 46) {
            $this->_item = 'Belt of battle';
        } elseif ($die > 44) {
            $this->_item = 'Ring of lightning flashes';
        } elseif ($die > 43) {
            $this->_item = 'Gauntlet of rust';
        } elseif ($die > 42) {
            $this->_item = 'Veil of doors';
        } elseif ($die > 40) {
            $this->_item = 'Runestaff of eyes';
        } elseif ($die > 39) {
            $this->_item = 'Rod of cancellation';
        } elseif ($die > 38) {
            $this->_item = 'Phylactery of undead turning';
        } elseif ($die > 37) {
            $this->_item = 'Metamagic rod, silent';
        } elseif ($die > 36) {
            $this->_item = 'Metamagic rod, sculpting';
        } elseif ($die > 35) {
            $this->_item = 'Metamagic rod, extend';
        } elseif ($die > 34) {
            $this->_item = 'Metamagic rod, enlarge';
        } elseif ($die > 33) {
            $this->_item = 'Gauntlets of mindfire';
        } elseif ($die > 32) {
            $this->_item = 'Cloak of turn resistance';
        } elseif ($die > 31) {
            $this->_item = 'Bracers of lightning';
        } elseif ($die > 29) {
            $this->_item = 'Boots of tracklessness';
        } elseif ($die > 28) {
            $this->_item = 'Amulet of inviolate form';
        } elseif ($die > 27) {
            $this->_item = 'Ring of animal friendship';
        } elseif ($die > 26) {
            $this->_item = 'Eternal wand of repair serious damage';
        } elseif ($die > 25) {
            $this->_item = 'Eternal wand of mass snake\'s swiftness';
        } elseif ($die > 22) {
            $this->_item = 'Eternal wand of lightning bolt';
        } elseif ($die > 20) {
            $this->_item = 'Eternal wand of invisibility sphere';
        } elseif ($die > 19) {
            $this->_item = 'Eternal wand of displacement';
        } elseif ($die > 15) {
            $this->_item = 'Eternal wand of cure serious wounds';
        } elseif ($die > 14) {
            $this->_item = 'Strand of acid pearls';
        } elseif ($die > 12) {
            $this->_item = 'Storm gauntlets';
        } elseif ($die > 11) {
            $this->_item = 'Rod of cats';
        } elseif ($die > 10) {
            $this->_item = 'Rod of metal and mineral detection';
        } elseif ($die > 9) {
            $this->_item = 'Metamagic rod, substitution';
        } elseif ($die > 8) {
            $this->_item = 'Axe of the sea reavers';
        } elseif ($die > 7) {
            $this->_item = 'Talon scepter';
        } elseif ($die > 5) {
            $this->_item = 'Adamantine breastplate';
        } elseif ($die > 4) {
            $this->_item = 'Ghoul shell armor';
        } elseif ($die > 2) {
            $this->_item = 'Foxhide armor';
        } elseif ($die > 1) {
            $this->_item = 'Trident of warning';
        } else {
            $this->_item = 'cape of the mountebank';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_13