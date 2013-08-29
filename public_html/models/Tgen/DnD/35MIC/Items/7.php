<?php
class Tgen_DnD_35MIC_Items_7 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Adamantine battleaxe';
        } elseif ($die > 98) {
            $this->_item = 'Adamantine dagger';
        } elseif ($die > 97) {
            $this->_item = 'Third eye clarity';
        } elseif ($die > 96) {
            $this->_item = 'Talisman of undead mastery';
        } elseif ($die > 95) {
            $this->_item = 'Soulsmite gauntlets';
        } elseif ($die > 94) {
            $this->_item = 'Divine scroll of sunburst';
        } elseif ($die > 93) {
            $this->_item = 'Arcane scroll of polar ray';
        } elseif ($die > 92) {
            $this->_item = 'Arcane scroll of greater plane shift';
        } elseif ($die > 91) {
            $this->_item = 'Arcane scroll of mind blank';
        } elseif ($die > 90) {
            $this->_item = 'Arcane scroll of iron body';
        } elseif ($die > 89) {
            $this->_item = 'Arcane scroll of invisibility, superior';
        } elseif ($die > 88) {
            $this->_item = 'Arcane scroll of horrid wilting';
        } elseif ($die > 87) {
            $this->_item = 'Arcane scroll of ghostform';
        } elseif ($die > 86) {
            $this->_item = 'Divine scroll of fire storm';
        } elseif ($die > 85) {
            $this->_item = 'Divine scroll of earthquake';
        } elseif ($die > 84) {
            $this->_item = 'Divine scroll of discern location';
        } elseif ($die > 83) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of dimensional lock';
            } else {
                $this->_item = 'Divine scroll of dimensional lock';
            }
        } elseif ($die > 82) {
            $this->_item = 'Divine scroll of death ward, mass';
        } elseif ($die > 81) {
            $this->_item = 'Divine scroll of cure critical wounds, mass';
        } elseif ($die > 80) {
            $this->_item = 'Divine scroll of brilliant aura';
        } elseif ($die > 79) {
            $this->_item = 'Rope of climbing';
        } elseif ($die > 78) {
            $this->_item = 'Potion of greater magic fang +5';
        } elseif ($die > 77) {
            $this->_item = 'Oil of magic vestment +5';
        } elseif ($die > 76) {
            $this->_item = 'Oil of greater magic weapon +5';
        } elseif ($die > 75) {
            $this->_item = 'Metamagic rod, silent, lesser';
        } elseif ($die > 74) {
            $this->_item = 'Metamagic rod, sculpting, lesser';
        } elseif ($die > 73) {
            $this->_item = 'Metamagic rod, extend, lesser';
        } elseif ($die > 72) {
            $this->_item = 'Metamagic rod, enlarge, lesser';
        } elseif ($die > 71) {
            $this->_item = 'Horseshoes of speed';
        } elseif ($die > 70) {
            $this->_item = 'Heartseeking amulet';
        } elseif ($die > 69) {
            $this->_item = 'Gloves of object reading';
        } elseif ($die > 68) {
            $this->_item = 'Gloves of manual prowess';
        } elseif ($die > 67) {
            $this->_item = 'Fiendslayer crystal, lesser';
        } elseif ($die > 66) {
            $this->_item = 'Essentia helm';
        } elseif ($die > 65) {
            $this->_item = 'Empowered spellshard, 2nd-level spell';
        } elseif ($die > 64) {
            $this->_item = 'Demolition crystal, lesser';
        } elseif ($die > 63) {
            $this->_item = 'Crystal of security, greater';
        } elseif ($die > 62) {
            $this->_item = 'Crystal of screening, greater';
        } elseif ($die > 61) {
            $this->_item = 'Crystal of glancing blows, lesser';
        } elseif ($die > 60) {
            $this->_item = 'Crystal of aquatic action, greater';
        } elseif ($die > 59) {
            $this->_item = 'Crystal of adaptation, greater';
        } elseif ($die > 58) {
            $this->_item = 'Corsair\'s eye patch';
        } elseif ($die > 57) {
            $this->_item = 'Cord of favor';
        } elseif ($die > 56) {
            $this->_item = 'Contact medallion';
        } elseif ($die > 55) {
            $this->_item = 'Clasp of energy protection, greater';
        } elseif ($die > 54) {
            $this->_item = 'Circlet of solace';
        } elseif ($die > 53) {
            $this->_item = 'Chime of opening';
        } elseif ($die > 52) {
            $this->_item = 'Burnoose of 1,001 thorns';
        } elseif ($die > 51) {
            $this->_item = 'Belt of growth';
        } elseif ($die > 50) {
            $this->_item = 'Bead of force';
        } elseif ($die > 49) {
            $this->_item = 'Bag of tricks, rust';
        } elseif ($die > 48) {
            $this->_item = 'Meteoric knife';
        } elseif ($die > 47) {
            $this->_item = 'Infinite scrollcase';
        } elseif ($die > 46) {
            $this->_item = 'Boots of desperation';
        } elseif ($die > 45) {
            $this->_item = 'Aberrant sphere';
        } elseif ($die > 44) {
            $this->_item = 'Wand of searing light (CL 6th, 10 charges)';
        } elseif ($die > 43) {
            $this->_item = 'Stone of alarm';
        } elseif ($die > 42) {
            $this->_item = 'Panther mask';
        } elseif ($die > 41) {
            $this->_item = 'Necklace of fireballs type II';
        } elseif ($die > 40) {
            $this->_item = 'Metamagic rod, substitution, lesser';
        } elseif ($die > 39) {
            $this->_item = 'Crystal of stamina, greater';
        } elseif ($die > 38) {
            $this->_item = 'Crystal of energy assault, lesser';
        } elseif ($die > 37) {
            $this->_item = 'Third eye freedom';
        } elseif ($die > 36) {
            $this->_item = 'Bands of blood rage';
        } elseif ($die > 35) {
            $this->_item = 'Vanisher cloak';
        } elseif ($die > 34) {
            $this->_item = 'Tunic of steady spellcasting';
        } elseif ($die > 33) {
            $this->_item = 'Third eye expose';
        } elseif ($die > 32) {
            $this->_item = 'Third eye dampening';
        } elseif ($die > 31) {
            $this->_item = 'Spellsight spectacles';
        } elseif ($die > 30) {
            $this->_item = 'Ring of swimming';
        } elseif ($die > 29) {
            $this->_item = 'Ring of sustenance';
        } elseif ($die > 28) {
            $this->_item = 'Ring of jumping';
        } elseif ($die > 27) {
            $this->_item = 'Ring of climbing';
        } elseif ($die > 26) {
            $this->_item = 'Icy strand of the north';
        } elseif ($die > 25) {
            $this->_item = 'Golembane scarab';
        } elseif ($die > 24) {
            $this->_item = 'Goggles of foefinding';
        } elseif ($die > 23) {
            $this->_item = 'Gloves of eldritch admixture';
        } elseif ($die > 22) {
            $this->_item = 'Eyes of the eagle';
        } elseif ($die > 21) {
            $this->_item = 'Crystal of arrow deflection, lesser';
        } elseif ($die > 20) {
            $this->_item = 'Crystal mask of languages';
        } elseif ($die > 19) {
            $this->_item = 'Crystal mask of knowledge';
        } elseif ($die > 18) {
            $this->_item = 'Crystal anchor of alertness';
        } elseif ($die > 17) {
            $this->_item = 'Counterstrike bracers';
        } elseif ($die > 16) {
            $this->_item = 'Cloak of quills';
        } elseif ($die > 15) {
            $this->_item = 'Cloak of elvenkind';
        } elseif ($die > 14) {
            $this->_item = 'Censer of the last breath';
        } elseif ($die > 13) {
            $this->_item = 'Candle of truth';
        } elseif ($die > 12) {
            $this->_item = 'Boots of the winterlands';
        } elseif ($die > 11) {
            $this->_item = 'Boots of jumping';
        } elseif ($die > 10) {
            $this->_item = 'Boots of elvenkind';
        } elseif ($die > 9) {
            $this->_item = 'Bag of holding type I';
        } elseif ($die > 8) {
            $this->_item = 'Sovereign glue';
        } elseif ($die > 7) {
            $this->_item = 'Arcane scroll of revenance';
        } elseif ($die > 6) {
            $this->_item = 'Robe of bones';
        } elseif ($die > 5) {
            $this->_item = 'Potion of greater magic fang +4';
        } elseif ($die > 4) {
            $this->_item = 'Oil of magic vestment +4';
        } elseif ($die > 3) {
            $this->_item = 'Oil of greater magic weapon +4';
        } elseif ($die > 2) {
            $this->_item = 'Dragon\'s draught, copper';
        } elseif ($die > 1) {
            $this->_item = 'Dragon\'s draught, black';
        } else {
            $this->_item = 'Divine scroll of restoration, mass';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_7