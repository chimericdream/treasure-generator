<?php
class Tgen_DnD_35MIC_Items_8 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 96) {
            $armor = $this->_getMagicArmor(2);
            $this->_item = $armor;
        } elseif ($die > 95) {
            $this->_item = 'Wilding clasp';
        } elseif ($die > 94) {
            $this->_item = 'Vest of resistance +2';
        } elseif ($die > 93) {
            $this->_item = 'Veil of storms';
        } elseif ($die > 92) {
            $this->_item = 'Torc of power preservation';
        } elseif ($die > 91) {
            $this->_item = 'Surcoat of valor';
        } elseif ($die > 90) {
            $this->_item = 'Stormfire ring';
        } elseif ($die > 89) {
            $this->_item = 'Stone salve';
        } elseif ($die > 88) {
            $this->_item = 'Scry shroud';
        } elseif ($die > 87) {
            $this->_item = 'Rod of sure striking';
        } elseif ($die > 86) {
            $this->_item = 'Rod of silence';
        } elseif ($die > 85) {
            $this->_item = 'Ring of counterspells';
        } elseif ($die > 84) {
            $this->_item = 'Periapt of Wisdom +2';
        } elseif ($die > 83) {
            $this->_item = 'Pendant of joy';
        } elseif ($die > 82) {
            $this->_item = 'Pearl of power, 2nd-level spell';
        } elseif ($die > 81) {
            $this->_item = 'Nolzur\'s marvelous pigments';
        } elseif ($die > 80) {
            $this->_item = 'Necklace of warning';
        } elseif ($die > 79) {
            $this->_item = 'Mask of the tiger';
        } elseif ($die > 78) {
            $this->_item = 'Mask of mental armor';
        } elseif ($die > 77) {
            $this->_item = 'Keoghtom\'s ointment';
        } elseif ($die > 76) {
            $this->_item = 'Ioun stone, clear spindle';
        } elseif ($die > 75) {
            $this->_item = 'Headband of intellect +2';
        } elseif ($die > 74) {
            $this->_item = 'Goggles of the golden sun';
        } elseif ($die > 73) {
            $this->_item = 'Glyph seal, greater';
        } elseif ($die > 72) {
            $this->_item = 'Gloves of Dexterity +2';
        } elseif ($die > 71) {
            $this->_item = 'Gloves of arrow snaring';
        } elseif ($die > 70) {
            $this->_item = 'Gauntlets of the talon';
        } elseif ($die > 69) {
            $this->_item = 'Gauntlets of ogre power';
        } elseif ($die > 68) {
            $this->_item = 'Gauntlets of ghost fighting';
        } elseif ($die > 67) {
            $this->_item = 'Dragon mask';
        } elseif ($die > 66) {
            $this->_item = 'Crystal of return, greater';
        } elseif ($die > 65) {
            $this->_item = 'Crystal of mind cloaking, lesser';
        } elseif ($die > 64) {
            $this->_item = 'Cognizance crystal, 3 points';
        } elseif ($die > 63) {
            $this->_item = 'Cloak of resistance +3';
        } elseif ($die > 62) {
            $this->_item = 'Cloak of Charisma +2';
        } elseif ($die > 61) {
            $this->_item = 'Bracers of repulsion';
        } elseif ($die > 60) {
            $this->_item = 'Bracers of armor +2';
        } elseif ($die > 59) {
            $this->_item = 'Bracers of accuracy';
        } elseif ($die > 58) {
            $this->_item = 'Boots of the unending journey';
        } elseif ($die > 57) {
            $this->_item = 'Amulet of health +2';
        } elseif ($die > 56) {
            $this->_item = 'Divine scroll of heal, mass';
        } elseif ($die > 55) {
            $this->_item = 'Arcane scroll of freedom';
        } elseif ($die > 54) {
            $this->_item = 'Figurine of wondrous power, silver raven';
        } elseif ($die > 53) {
            $this->_item = 'Shadow maniple';
        } elseif ($die > 52) {
            $this->_item = 'Rending gauntlets';
        } elseif ($die > 51) {
            $this->_item = 'Mithral bells';
        } elseif ($die > 50) {
            $this->_item = 'Mirror of suggestion';
        } elseif ($die > 49) {
            $this->_item = 'Enveloping pit';
        } elseif ($die > 48) {
            $this->_item = 'Belt of ultimate athleticism';
        } elseif ($die > 47) {
            $this->_item = 'True strike gauntlets';
        } elseif ($die > 46) {
            $this->_item = 'Sleeping spike';
        } elseif ($die > 45) {
            $this->_item = 'Shard of the sun';
        } elseif ($die > 44) {
            $this->_item = 'Rod of escape';
        } elseif ($die > 43) {
            $this->_item = 'Ring of mystic healing';
        } elseif ($die > 42) {
            $this->_item = 'Raptor\'s mask';
        } elseif ($die > 41) {
            $this->_item = 'Radiant sphere';
        } elseif ($die > 40) {
            $this->_item = 'Quicksilver boots';
        } elseif ($die > 39) {
            $this->_item = 'Mask of mastery';
        } elseif ($die > 38) {
            $this->_item = 'Lockpicking ring';
        } elseif ($die > 37) {
            $this->_item = 'Lens of detection';
        } elseif ($die > 36) {
            $this->_item = 'Finned gauntlets';
        } elseif ($die > 35) {
            $this->_item = 'Dust of disappearance';
        } elseif ($die > 34) {
            $this->_item = 'Dragon\'s draught, green';
        } elseif ($die > 33) {
            $this->_item = 'Dragon\'s draught, bronze';
        } elseif ($die > 32) {
            $this->_item = 'Crystal of alacrity';
        } elseif ($die > 31) {
            $this->_item = 'bag of flames';
        } elseif ($die > 30) {
            $this->_item = 'Mithralmist shirt';
        } elseif ($die > 29) {
            $this->_item = 'Scout\'s headband';
        } elseif ($die > 28) {
            $this->_item = 'Hair shirt of suffering';
        } elseif ($die > 27) {
            $this->_item = 'Bow of the wintermoon';
        } elseif ($die > 26) {
            $this->_item = 'badge of glory';
        } elseif ($die > 25) {
            $this->_item = 'Crystal of adamant weaponry, greater';
        } elseif ($die > 24) {
            $this->_item = 'Crystal of adamant armor, greater';
        } elseif ($die > 23) {
            $this->_item = 'Dragonhide plate';
        } elseif ($die > 22) {
            $this->_item = 'Torc of the titans';
        } elseif ($die > 21) {
            $this->_item = 'Survival pouch';
        } elseif ($die > 20) {
            $this->_item = 'Spellmight bracers';
        } elseif ($die > 19) {
            $this->_item = 'Reins of ascension';
        } elseif ($die > 18) {
            $this->_item = 'Mask of blood';
        } elseif ($die > 17) {
            $this->_item = 'Domain draught';
        } elseif ($die > 16) {
            $this->_item = 'Skirmisher boots';
        } elseif ($die > 15) {
            $this->_item = 'Rags of restraint';
        } elseif ($die > 14) {
            $this->_item = 'Hellcat gauntlets';
        } elseif ($die > 13) {
            $this->_item = 'Formless vest';
        } elseif ($die > 12) {
            $this->_item = 'Eyes of expanded vision';
        } elseif ($die > 11) {
            $this->_item = 'Bracers of the blast barrier';
        } elseif ($die > 10) {
            $this->_item = 'Vanguard treads';
        } elseif ($die > 9) {
            $this->_item = 'Summoner\'s totem';
        } elseif ($die > 8) {
            $this->_item = 'Rod of bodily restoration';
        } elseif ($die > 7) {
            $this->_item = 'Rapidstrike bracers';
        } elseif ($die > 6) {
            $this->_item = 'Pipes of frenzied revelry';
        } elseif ($die > 5) {
            $this->_item = 'Orb of mental renewal';
        } elseif ($die > 4) {
            $this->_item = 'Hexbands';
        } elseif ($die > 3) {
            $this->_item = 'Gloves of the uldra savant';
        } elseif ($die > 2) {
            $this->_item = 'Chime of harmonic agony';
        } elseif ($die > 1) {
            $this->_item = 'Caster\'s shield';
        } else {
            $this->_item = 'Brooch of avoidance';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_8