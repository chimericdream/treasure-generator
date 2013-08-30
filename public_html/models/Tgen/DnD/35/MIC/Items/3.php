<?php
class Tgen_DnD_35MIC_Items_3 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Divine scroll of restoration';
        } elseif ($die > 98) {
            $this->_item = 'Rope of stone';
        } elseif ($die > 97) {
            $this->_item = 'Porcupine elixir';
        } elseif ($die > 96) {
            $this->_item = 'Ephod of authority';
        } elseif ($die > 95) {
            $this->_item = 'Armband of elusive action';
        } elseif ($die > 94) {
            $this->_item = 'Everlasting feedbag';
        } elseif ($die > 93) {
            $this->_item = 'Bag of endless caltrops';
        } elseif ($die > 92) {
            $this->_item = 'Amber amulet of vermin, giant wasp';
        } elseif ($die > 91) {
            $this->_item = 'Wand of magic missile (CL 5th, 10 charges)';
        } elseif ($die > 90) {
            $this->_item = 'Scrying beacon';
        } elseif ($die > 89) {
            $this->_item = 'Powder of the black veil';
        } elseif ($die > 88) {
            $this->_item = 'Potion of water breathing';
        } elseif ($die > 87) {
            $this->_item = 'Potion of vigor';
        } elseif ($die > 86) {
            $this->_item = 'Potion of remove disease';
        } elseif ($die > 85) {
            $this->_item = 'Potion of remove curse';
        } elseif ($die > 84) {
            $this->_item = 'Potion of remove blindness/deafness';
        } elseif ($die > 83) {
            $energy = $this->_getEnergyType();
            $this->_item = "Potion of protection from {$energy}";
        } elseif ($die > 82) {
            $this->_item = 'Potion of neutralize poison';
        } elseif ($die > 81) {
            $alignment = $this->_getAlignment();
            $this->_item = "Potion of magic circle against {$alignment}";
        } elseif ($die > 80) {
            $this->_item = 'Potion of heroism';
        } elseif ($die > 79) {
            $this->_item = 'Potion of haste';
        } elseif ($die > 78) {
            $this->_item = 'Potion of greater magic fang +1';
        } elseif ($die > 77) {
            $this->_item = 'Potion of gaseous form';
        } elseif ($die > 76) {
            $this->_item = 'Potion of fly';
        } elseif ($die > 75) {
            $this->_item = 'Potion of displacement';
        } elseif ($die > 73) {
            $this->_item = 'Potion of cure serious wounds';
        } elseif ($die > 72) {
            $this->_item = 'Oil of magic vestment +1';
        } elseif ($die > 71) {
            $this->_item = 'Oil of keen edge';
        } elseif ($die > 70) {
            $this->_item = 'Oil of greater magic weapon +1';
        } elseif ($die > 69) {
            $this->_item = 'Healing belt';
        } elseif ($die > 68) {
            $this->_item = 'Crest of bravery';
        } elseif ($die > 67) {
            $this->_item = 'Soulvoid orb';
        } elseif ($die > 66) {
            $this->_item = 'Divine scroll of tongues';
        } elseif ($die > 65) {
            $this->_item = 'Divine scroll of sending';
        } elseif ($die > 64) {
            $this->_item = 'Divine scroll of revenance';
        } elseif ($die > 63) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of remove curse';
            } else {
                $this->_item = 'Divine scroll of remove curse';
            }
        } elseif ($die > 62) {
            $this->_item = 'Divine scroll of panacea';
        } elseif ($die > 61) {
            $this->_item = 'Arcane scroll of Leomund\'s secure shelter';
        } elseif ($die > 60) {
            $this->_item = 'Arcane scroll of know vulnerabilities';
        } elseif ($die > 59) {
            $this->_item = 'Arcane scroll of greater invisibility';
        } elseif ($die > 58) {
            $this->_item = 'Arcane scroll of ice storm';
        } elseif ($die > 57) {
            $this->_item = 'Divine scroll of freedom of movement';
        } elseif ($die > 56) {
            $this->_item = 'Divine scroll of dismissal';
        } elseif ($die > 55) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of dimensional anchor';
            } else {
                $this->_item = 'Divine scroll of dimensional anchor';
            }
        } elseif ($die > 54) {
            $this->_item = 'Divine scroll of death ward';
        } elseif ($die > 53) {
            $this->_item = 'Arcane scroll of darkvision, mass';
        } elseif ($die > 52) {
            $this->_item = 'Divine scroll of cure critical wounds';
        } elseif ($die > 51) {
            $this->_item = 'Divine scroll of air walk';
        } elseif ($die > 50) {
            $energy = $this->_getEnergyType();
            $this->_item = "Potion of resist {$energy} 20";
        } elseif ($die > 49) {
            $this->_item = 'Amber amulet of vermin, large monstrous spider';
        } elseif ($die > 48) {
            $this->_item = 'Amber amulet of vermin, huge monstrous scorpion';
        } elseif ($die > 47) {
            $this->_item = 'Amber amulet of vermin, huge monstrous centipede';
        } elseif ($die > 46) {
            $this->_item = 'Amber amulet of vermin, giant queen ant';
        } elseif ($die > 45) {
            $this->_item = 'Amber amulet of vermin, giant praying mantis';
        } elseif ($die > 44) {
            $this->_item = 'Wink brooch';
        } elseif ($die > 43) {
            $this->_item = 'Potion of shield of faith +4';
        } elseif ($die > 42) {
            $this->_item = 'Potion of barkskin +3';
        } elseif ($die > 41) {
            $this->_item = 'Pearl of speech';
        } elseif ($die > 40) {
            $this->_item = 'Lenses of bright vision';
        } elseif ($die > 39) {
            $this->_item = 'Boots of stomping';
        } elseif ($die > 38) {
            $this->_item = 'Boods of agile leaping';
        } elseif ($die > 37) {
            $this->_item = 'Necklace of copper dragon scales';
        } elseif ($die > 36) {
            $this->_item = 'Watch lamp';
        } elseif ($die > 35) {
            $this->_item = 'Troll gut rope';
        } elseif ($die > 34) {
            $this->_item = 'Talisman of the disk';
        } elseif ($die > 33) {
            $this->_item = 'Symbol of transfiguration';
        } elseif ($die > 32) {
            $this->_item = 'Shiftweave';
        } elseif ($die > 31) {
            $this->_item = 'Rubicund frenzy, least';
        } elseif ($die > 30) {
            $this->_item = 'Restful crystal';
        } elseif ($die > 29) {
            $this->_item = 'Reach gauntlets';
        } elseif ($die > 28) {
            $this->_item = 'Quall\'s feather token, whip';
        } elseif ($die > 27) {
            $this->_item = 'Phoenix ash threat, least';
        } elseif ($die > 26) {
            $this->_item = 'Magic bedroll';
        } elseif ($die > 25) {
            $this->_item = 'Iron ward diamond, least';
        } elseif ($die > 24) {
            $this->_item = 'Elixir of truth';
        } elseif ($die > 23) {
            $this->_item = 'Elixir of adamantine blood';
        } elseif ($die > 22) {
            $this->_item = 'Dust of dispersion';
        } elseif ($die > 21) {
            $this->_item = 'Crystal of mind cloaking, least';
        } elseif ($die > 20) {
            $this->_item = 'Crystal of glancing blows, least';
        } elseif ($die > 19) {
            $this->_item = 'Crystal of bent sight';
        } elseif ($die > 18) {
            $this->_item = 'Crystal of arrow deflection, least';
        } elseif ($die > 17) {
            $this->_item = 'Crystal of arcane steel, least';
        } elseif ($die > 16) {
            $this->_item = 'Crystal of adaptation, least';
        } elseif ($die > 15) {
            $this->_item = 'Clasp of energy protection, least';
        } elseif ($die > 14) {
            $this->_item = 'Crystal of energy assault, least';
        } elseif ($die > 13) {
            $this->_item = 'Chronocharm of the uncaring mage';
        } elseif ($die > 12) {
            $this->_item = 'Chronocharm of the laughing rogue';
        } elseif ($die > 11) {
            $this->_item = 'Chronocharm of the horizon walker';
        } elseif ($die > 10) {
            $this->_item = 'Chronocharm of the grand master';
        } elseif ($die > 9) {
            $this->_item = 'Chronocharm of the fateweaver';
        } elseif ($die > 8) {
            $this->_item = 'Chronocharm of the celestial wanderer';
        } elseif ($die > 7) {
            $this->_item = 'Brute gauntlets';
        } elseif ($die > 6) {
            $this->_item = 'Boots of landing';
        } elseif ($die > 5) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arrow of biting';
            } else {
                $this->_item = 'Bolt of biting';
            }
        } elseif ($die > 4) {
            $this->_item = 'Anarchist\'s gloves';
        } elseif ($die > 3) {
            $this->_item = 'Amulet of aquatic salvation';
        } elseif ($die > 2) {
            $this->_item = 'Amber amulet of vermin, giant bee';
        } elseif ($die > 1) {
            $this->_item = 'Quall\'s feather token, swan boat';
        } else {
            $this->_item = 'Glitter stone';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_3