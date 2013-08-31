<?php
class Tgen_DnD_35_MIC_Items_4 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Goggles of minute seeing';
        } elseif ($die > 98) {
            $this->_item = 'Potion of greater magic fang +2';
        } elseif ($die > 97) {
            $this->_item = 'Potion of barkskin +5';
        } elseif ($die > 96) {
            $this->_item = 'Oil of magic vestment +2';
        } elseif ($die > 95) {
            $this->_item = 'Oil of greater magic weapon +2';
        } elseif ($die > 94) {
            $this->_item = 'Dust of illusion';
        } elseif ($die > 93) {
            $this->_item = 'Dragon\'s draught, white';
        } elseif ($die > 92) {
            $this->_item = 'Dragon\'s draught, brass';
        } elseif ($die > 91) {
            $this->_item = 'Amber amulet of vermin, giant stag beetle';
        } elseif ($die > 90) {
            $this->_item = 'Pipes of the sewers';
        } elseif ($die > 89) {
            $this->_item = 'Divine scroll of vigorous circle';
        } elseif ($die > 88) {
            $this->_item = 'Arcane scroll of teleport';
        } elseif ($die > 87) {
            $this->_item = 'Arcane scroll of sending';
        } elseif ($die > 86) {
            $this->_item = 'Divine scroll of plane shift';
        } elseif ($die > 85) {
            $this->_item = 'Arcane scroll of mage\'s private sanctum';
        } elseif ($die > 84) {
            $this->_item = 'Arcane scroll of mass fly';
        } elseif ($die > 83) {
            $this->_item = 'Arcane scroll of fire shield, mass';
        } elseif ($die > 82) {
            $this->_item = 'Divine scroll of disrupting weapon';
        } elseif ($die > 81) {
            $this->_item = 'Arcane scroll of dismissal';
        } elseif ($die > 80) {
            $this->_item = 'Arcane scroll of greater dimension door';
        } elseif ($die > 79) {
            $this->_item = 'Arcane scroll of contact other plane';
        } elseif ($die > 78) {
            $this->_item = 'Arcane scroll of break enchantment';
        } elseif ($die > 77) {
            $energy = $this->_getEnergyType();
            $this->_item = "Potion of resist {$energy} 30";
        } elseif ($die > 76) {
            $this->_item = 'Elixir of fire breath';
        } elseif ($die > 75) {
            $this->_item = 'Mithral shirt';
        } elseif ($die > 74) {
            $this->_item = 'Potion of good hope';
        } elseif ($die > 73) {
            $this->_item = 'Mithral heavy shield';
        } elseif ($die > 63) {
            $armor = $this->_getMagicArmor(1);
            $this->_item = $armor;
        } elseif ($die > 62) {
            $this->_item = 'Vest of resistance +1';
        } elseif ($die > 61) {
            $this->_item = 'Truedeath crystal, least';
        } elseif ($die > 60) {
            $this->_item = 'Third eye improvisation';
        } elseif ($die > 59) {
            $this->_item = 'Salve of slipperiness';
        } elseif ($die > 58) {
            $this->_item = 'Ring of brief blessing';
        } elseif ($die > 57) {
            $this->_item = 'Revelation crystal, lesser';
        } elseif ($die > 56) {
            $this->_item = 'Replenishing skin';
        } elseif ($die > 55) {
            $this->_item = 'Reliquary holy symbol';
        } elseif ($die > 54) {
            $this->_item = 'Phylactery of faithfulness';
        } elseif ($die > 53) {
            $this->_item = 'Pearl of power, 1st-level spell';
        } elseif ($die > 52) {
            $this->_item = 'Lightning gauntlets';
        } elseif ($die > 51) {
            $this->_item = 'Glyph seal';
        } elseif ($die > 50) {
            $this->_item = 'Gloves of the starry sky';
        } elseif ($die > 49) {
            $this->_item = 'Gloves of spell disruption';
        } elseif ($die > 48) {
            $this->_item = 'Gauntlets of energy transformation';
        } elseif ($die > 47) {
            $this->_item = 'Fiendslayer crystal, least';
        } elseif ($die > 46) {
            $this->_item = 'Eagle claw talisman';
        } elseif ($die > 45) {
            $this->_item = 'Drums of marching';
        } elseif ($die > 44) {
            $this->_item = 'Dispelling cord';
        } elseif ($die > 43) {
            $this->_item = 'Demolition crystal, least';
        } elseif ($die > 42) {
            $this->_item = 'Crystal of security, lesser';
        } elseif ($die > 41) {
            $this->_item = 'Crystal of screening, lesser';
        } elseif ($die > 40) {
            $this->_item = 'Crystal of return, lesser';
        } elseif ($die > 39) {
            $this->_item = 'Crystal of lifekeeping, lesser';
        } elseif ($die > 38) {
            $this->_item = 'Crystal of illumination, greater';
        } elseif ($die > 37) {
            $this->_item = 'Crystal of aquatic action, lesser';
        } elseif ($die > 36) {
            $this->_item = 'Cognizance crystal, 1 point';
        } elseif ($die > 35) {
            $this->_item = 'Cloak of resistance +1';
        } elseif ($die > 34) {
            $this->_item = 'Cloak of elemental protection';
        } elseif ($die > 33) {
            $this->_item = 'Burning veil';
        } elseif ($die > 32) {
            $this->_item = 'Brooch of stability';
        } elseif ($die > 31) {
            $this->_item = 'Brawler\'s gauntlets';
        } elseif ($die > 30) {
            $this->_item = 'Bracers of armor +1';
        } elseif ($die > 29) {
            $this->_item = 'Arcane scroll of stoneskin';
        } elseif ($die > 28) {
            $this->_item = 'Wand of see invisibility (10 charges)';
        } elseif ($die > 27) {
            $this->_item = 'Wand of scorching ray (10 charges)';
        } elseif ($die > 26) {
            $this->_item = 'Wand of repair moderate damage (10 charges)';
        } elseif ($die > 25) {
            $this->_item = 'Wand of mirror image (10 charges)';
        } elseif ($die > 24) {
            $this->_item = 'Wand of knock (10 charges)';
        } elseif ($die > 23) {
            $this->_item = 'Wand of invisibility (10 charges)';
        } elseif ($die > 22) {
            $this->_item = 'Wand of delay poison (10 charges)';
        } elseif ($die > 21) {
            $this->_item = 'Wand of cure moderate wounds (10 charges)';
        } elseif ($die > 20) {
            $this->_item = 'Wand of cat\'s grace (10 charges)';
        } elseif ($die > 19) {
            $this->_item = 'Wand of bull\'s strength (10 charges)';
        } elseif ($die > 18) {
            $this->_item = 'Wand of blur (10 charges)';
        } elseif ($die > 17) {
            $this->_item = 'Wand of bear\'s endurance (10 charges)';
        } elseif ($die > 16) {
            $this->_item = 'Potion of barkskin +4';
        } elseif ($die > 15) {
            $this->_item = 'Piercer cloak';
        } elseif ($die > 14) {
            $this->_item = 'Pearl of brain lock';
        } elseif ($die > 13) {
            $this->_item = 'Hand of the mage';
        } elseif ($die > 12) {
            $this->_item = 'Crystal of stamina, lesser';
        } elseif ($die > 11) {
            $this->_item = 'Blast disk';
        } elseif ($die > 10) {
            $this->_item = 'Bag of tricks, gray';
        } elseif ($die > 9) {
            $this->_item = 'Acrobat boots';
        } elseif ($die > 8) {
            $this->_item = 'Dust of dryness';
        } elseif ($die > 7) {
            $this->_item = 'Eternal wand of shield';
        } elseif ($die > 6) {
            $this->_item = 'Eternal wand of repair light damage';
        } elseif ($die > 5) {
            $this->_item = 'Eternal wand of ray of enfeeblement';
        } elseif ($die > 4) {
            $alignment = $this->_getAlignment();
            $this->_item = "Eternal wand of protection from {$alignment}";
        } elseif ($die > 3) {
            $this->_item = 'Eternal wand of magic missile';
        } elseif ($die > 2) {
            $this->_item = 'Eternal wand of mage armor';
        } elseif ($die > 1) {
            $this->_item = 'Eternal wand of enlarge person';
        } else {
            $this->_item = 'Eternal wand of cure light wounds';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_4