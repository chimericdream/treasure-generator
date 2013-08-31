<?php
class Tgen_DnD_35_MIC_Items_5 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Sphere of awakening';
        } elseif ($die > 97) {
            $this->_item = 'Quiver of Ehlonna';
        } elseif ($die > 95) {
            $this->_item = 'Potion of greater magic fang +3';
        } elseif ($die > 94) {
            $this->_item = 'Pipes of sounding';
        } elseif ($die > 92) {
            $this->_item = 'Oil of magic vestment +3';
        } elseif ($die > 89) {
            $this->_item = 'Oil of greater magic weapon +3';
        } elseif ($die > 88) {
            $this->_item = 'Hat of disguise';
        } elseif ($die > 87) {
            $this->_item = 'Githborn talisman';
        } elseif ($die > 85) {
            $this->_item = 'Dust of appearance';
        } elseif ($die > 83) {
            $this->_item = 'Divine scroll of wind walk';
        } elseif ($die > 81) {
            $this->_item = 'Arcane scroll of stone to flesh';
        } elseif ($die > 80) {
            $this->_item = 'Arcane scroll of shadow walk';
        } elseif ($die > 76) {
            $this->_item = 'Divine scroll of heal';
        } elseif ($die > 73) {
            $this->_item = 'Divine scroll of harm';
        } elseif ($die > 72) {
            $this->_item = 'Divine scroll of ghost trap';
        } elseif ($die > 71) {
            $this->_item = 'Divine scroll of find the path';
        } elseif ($die > 70) {
            $energy = $this->_getEnergyType();
            $this->_item = "Divine scroll of {$energy} immunity";
        } elseif ($die > 67) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of greater dispel magic';
            } else {
                $this->_item = 'Divine scroll of greater dispel magic';
            }
        } elseif ($die > 64) {
            $this->_item = 'Arcane scroll of disintegrate';
        } elseif ($die > 63) {
            $this->_item = 'Arcane scroll of cloak of the sea';
        } elseif ($die > 62) {
            $this->_item = 'Arcane scroll of chain lightning';
        } elseif ($die > 61) {
            $this->_item = 'Divine scroll of blade barrier';
        } elseif ($die > 59) {
            $this->_item = 'Necklace of fireballs type I';
        } elseif ($die > 57) {
            $this->_item = 'Full plate, masterwork';
        } elseif ($die > 55) {
            $this->_item = 'Rhino elixir';
        } elseif ($die > 53) {
            $this->_item = 'Headband of the lorebinder';
        } elseif ($die > 51) {
            $this->_item = 'Tome of worldly memory';
        } elseif ($die > 49) {
            $this->_item = 'Boots of the mountain king';
        } elseif ($die > 47) {
            $this->_item = 'Boots of dragonstriding';
        } elseif ($die > 46) {
            $this->_item = 'Belt of one mighty blow';
        } elseif ($die > 45) {
            $this->_item = 'Bear helm';
        } elseif ($die > 44) {
            $this->_item = 'Artificer\'s monocle';
        } elseif ($die > 43) {
            $this->_item = 'Memento magica, 1st-level spell';
        } elseif ($die > 42) {
            $this->_item = 'Medal of steadfast honor';
        } elseif ($die > 41) {
            $this->_item = 'Javelin of lightning';
        } elseif ($die > 40) {
            $this->_item = 'Inquisitor bracers';
        } elseif ($die > 39) {
            $this->_item = 'Hammersphere';
        } elseif ($die > 38) {
            $this->_item = 'Exploding spike';
        } elseif ($die > 37) {
            $this->_item = 'Enduring amulet';
        } elseif ($die > 36) {
            $this->_item = 'Empowered spellshard, 1st-level spell';
        } elseif ($die > 35) {
            $this->_item = 'Crystal of life drinking, lesser';
        } elseif ($die > 34) {
            $this->_item = 'Crystal of adaptation, lesser';
        } elseif ($die > 33) {
            $this->_item = 'Clasp of energy protection, lesser';
        } elseif ($die > 32) {
            $this->_item = 'Camouflage paint';
        } elseif ($die > 31) {
            $this->_item = 'Brooch of shielding';
        } elseif ($die > 30) {
            $this->_item = 'Bracers of great collision';
        } elseif ($die > 29) {
            $this->_item = 'Aroma of dreams';
        } elseif ($die > 28) {
            $this->_item = 'Steadfast boots';
        } elseif ($die > 27) {
            $this->_item = 'Standard of valor';
        } elseif ($die > 26) {
            $this->_item = 'Spool of endless rope';
        } elseif ($die > 24) {
            $this->_item = 'Sending stones (pair)';
        } elseif ($die > 23) {
            $this->_item = 'Rod of sliding';
        } elseif ($die > 22) {
            $this->_item = 'Rod of frost';
        } elseif ($die > 21) {
            $this->_item = 'Lenses of revelation';
        } elseif ($die > 20) {
            $this->_item = 'Ehlonna\'s seed pouch';
        } elseif ($die > 19) {
            $this->_item = 'Cobra straps';
        } elseif ($die > 18) {
            $this->_item = 'Cloak of predatory vigor';
        } elseif ($die > 17) {
            $this->_item = 'Bracers of quick strike';
        } elseif ($die > 16) {
            $this->_item = 'Blighter\'s hex-eye';
        } elseif ($die > 15) {
            $this->_item = 'Bag of boulders';
        } elseif ($die > 14) {
            $this->_item = 'Badge of valor';
        } elseif ($die > 13) {
            $this->_item = 'Armband of confrontation';
        } elseif ($die > 12) {
            $this->_item = 'Arcane thieves\' tools';
        } elseif ($die > 11) {
            $this->_item = 'Anklet of translocation';
        } elseif ($die > 10) {
            $this->_item = 'Crystal of adamant weaponry, lesser';
        } elseif ($die > 9) {
            $this->_item = 'Crystal of adamant armor, lesser';
        } elseif ($die > 8) {
            $this->_item = 'Divine scroll of true seeing';
        } elseif ($die > 7) {
            $this->_item = 'Wyrmfang amulet';
        } elseif ($die > 6) {
            $this->_item = 'Wand of magic missile (CL 9th, 10 charges)';
        } elseif ($die > 5) {
            $this->_item = 'Snakeblood tooth';
        } elseif ($die > 4) {
            $this->_item = 'Scrying shard';
        } elseif ($die > 3) {
            $this->_item = 'Salve of minor spell resistance';
        } elseif ($die > 2) {
            $this->_item = 'Medal of gallantry';
        } elseif ($die > 1) {
            $this->_item = 'Fochlucan bandore';
        } else {
            $this->_item = 'Beetle elixir';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_5