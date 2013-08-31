<?php
class Tgen_DnD_35_MIC_Items_Half extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 98) {
            $this->_item = 'Universal solvent';
        } elseif ($die > 94) {
            $this->_item = 'Thieves\' tools, masterwork';
        } elseif ($die > 92) {
            $this->_item = 'Tanglefoot bag';
        } elseif ($die > 90) {
            $this->_item = 'Skill shard';
        } elseif ($die > 88) {
            $this->_item = 'Quall\'s feather token, anchor';
        } elseif ($die > 85) {
            $this->_item = 'Potion of lesser vigor';
        } elseif ($die > 83) {
            $this->_item = 'Potion of shield of faith +2';
        } elseif ($die > 81) {
            $this->_item = 'Potion of remove fear';
        } elseif ($die > 78) {
            $alignment = $this->_getAlignment();
            $this->_item = "Potion of protection from {$alignment}";
        } elseif ($die > 75) {
            $this->_item = 'Potion of magic fang';
        } elseif ($die > 71) {
            $this->_item = 'Potion of mage armor';
        } elseif ($die > 68) {
            $this->_item = 'Potion of enlarge person';
        } elseif ($die > 65) {
            $this->_item = 'Potion of endure elements';
        } elseif ($die > 56) {
            $this->_item = 'Potion of cure light wounds';
        } elseif ($die > 53) {
            $this->_item = 'Oil of magic weapon';
        } elseif ($die > 51) {
            $this->_item = 'Healer\'s kit';
        } elseif ($die > 49) {
            $this->_item = 'Disguise kit';
        } elseif ($die > 47) {
            $this->_item = 'Blessed bandage (5)';
        } elseif ($die > 45) {
            $this->_item = 'Antitoxin';
        } elseif ($die > 43) {
            $this->_item = 'Thunderstone';
        } elseif ($die > 42) {
            $this->_item = 'Divine scroll of lesser vigor';
        } elseif ($die > 41) {
            $this->_item = 'Divine scroll of speak with animals';
        } elseif ($die > 40) {
            $this->_item = 'Divine scroll of snake\'s swiftness';
        } elseif ($die > 39) {
            $this->_item = 'Divine scroll of sign';
        } elseif ($die > 38) {
            $this->_item = 'Divine scroll of sanctuary';
        } elseif ($die > 37) {
            $this->_item = 'Divine scroll of resurgence';
        } elseif ($die > 36) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of remove fear';
            } else {
                $this->_item = 'Divine scroll of remove fear';
            }
        } elseif ($die > 32) {
            $alignment = $this->_getAlignment();
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = "Arcane scroll of protection from {$alignment}";
            } else {
                $this->_item = "Divine scroll of protection from {$alignment}";
            }
        } elseif ($die > 31) {
            $this->_item = 'Arcane scroll of mount';
        } elseif ($die > 30) {
            $this->_item = 'Arcane scroll of hail of stone';
        } elseif ($die > 29) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of endure elements';
            } else {
                $this->_item = 'Divine scroll of endure elements';
            }
        } elseif ($die > 28) {
            $this->_item = 'Arcane scroll of disguise self';
        } elseif ($die > 26) {
            $this->_item = 'Divine scroll of cure light wounds';
        } elseif ($die > 25) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of comprehend languages';
            } else {
                $this->_item = 'Divine scroll of comprehend languages';
            }
        } elseif ($die > 24) {
            $this->_item = 'Divine scroll of blessed aim';
        } elseif ($die > 23) {
            $this->_item = 'Arcane scroll of benign transposition';
        } elseif ($die > 22) {
            $this->_item = 'Divine scroll of aspect of the wolf';
        } elseif ($die > 20) {
            $this->_item = 'Holy water';
        } elseif ($die > 18) {
            $this->_item = 'Holy symbol, silver';
        } elseif ($die > 16) {
            $this->_item = 'Smokesticks';
        } elseif ($die > 13) {
            $this->_item = 'Rope, silk (100 ft.)';
        } elseif ($die > 11) {
            $this->_item = 'Alchemist\'s fire';
        } elseif ($die > 10) {
            $this->_item = 'Divine scroll of purify food and drink';
        } elseif ($die > 9) {
            $this->_item = 'Arcane scroll of message';
        } elseif ($die > 8) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of light';
            } else {
                $this->_item = 'Divine scroll of light';
            }
        } elseif ($die > 7) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of detect magic';
            } else {
                $this->_item = 'Divine scroll of detect magic';
            }
        } elseif ($die > 6) {
            $this->_item = 'Divine scroll of dawn';
        } elseif ($die > 5) {
            $this->_item = 'Arcane scroll of dancing lights';
        } elseif ($die > 4) {
            $this->_item = 'Divine scroll of create water';
        } elseif ($die > 3) {
            $this->_item = 'Arcane scroll of caltrops';
        } elseif ($die > 1) {
            $this->_item = 'Lantern, bullseye';
        } else {
            $this->_item = 'Acid';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_Half