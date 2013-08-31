<?php
class Tgen_DnD_35_MIC_Items_1 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Tower shield, masterwork';
        } elseif ($die > 98) {
            $this->_item = 'Chainmail';
        } elseif ($die > 97) {
            $this->_item = 'Studded leather armor, masterwork';
        } elseif ($die > 96) {
            $this->_item = 'Heavy steel shield, masterwork';
        } elseif ($die > 95) {
            $this->_item = 'Hide armor, masterwork';
        } elseif ($die > 94) {
            $this->_item = 'Leather armor, masterwork';
        } elseif ($die > 93) {
            $this->_item = 'Buckler, masterwork';
        } elseif ($die > 92) {
            $this->_item = 'Light steel shield, masterwork';
        } elseif ($die > 91) {
            $this->_item = 'Heavy wooden shield, masterwork';
        } elseif ($die > 90) {
            $this->_item = 'Light wooden shield, masterwork';
        } elseif ($die > 89) {
            $this->_item = 'Wand of snake\'s swiftness (10 charges)';
        } elseif ($die > 87) {
            $this->_item = 'Wand of shield (10 charges)';
        } elseif ($die > 86) {
            $this->_item = 'Wand of resurgence (10 charges)';
        } elseif ($die > 85) {
            $this->_item = 'Wand of repair light damage (10 charges)';
        } elseif ($die > 84) {
            $this->_item = 'Wand of ray of enfeeblement (10 charges)';
        } elseif ($die > 78) {
            $this->_item = 'Wand of magic missile (CL 1st, 10 charges)';
        } elseif ($die > 74) {
            $this->_item = 'Wand of mage armor (10 charges)';
        } elseif ($die > 73) {
            $this->_item = 'Wand of lesser vigor (10 charges)';
        } elseif ($die > 71) {
            $this->_item = 'Wand of enlarge person (10 charges)';
        } elseif ($die > 63) {
            $this->_item = 'Wand of cure light wounds (10 charges)';
        } elseif ($die > 61) {
            $this->_item = 'Wand of bless (10 charges)';
        } elseif ($die > 60) {
            $this->_item = 'Wand of benign transposition (10 charges)';
        } elseif ($die > 59) {
            $this->_item = 'Unguent of timelessness';
        } elseif ($die > 58) {
            $this->_item = 'Divine scroll of silence';
        } elseif ($die > 57) {
            $this->_item = 'Arcane scroll of see invisibility';
        } elseif ($die > 55) {
            $this->_item = 'Divine scroll of lesser restoration';
        } elseif ($die > 52) {
            $die = $this->_getDieRoll(1, 2);
            $energy = $this->_getEnergyType();
            if ($die == 1) {
                $this->_item = "Arcane scroll of resist {$energy}";
            } else {
                $this->_item = "Divine scroll of resist {$energy}";
            }
        } elseif ($die > 49) {
            $this->_item = 'Divine scroll of remove paralysis';
        } elseif ($die > 45) {
            $this->_item = 'Arcane scroll of knock';
        } elseif ($die > 43) {
            $this->_item = 'Arcane scroll of invisibility';
        } elseif ($die > 42) {
            $this->_item = 'Arcane scroll of glitterdust';
        } elseif ($die > 41) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of ghost touch armor';
            } else {
                $this->_item = 'Divine scroll of ghost touch armor';
            }
        } elseif ($die > 40) {
            $this->_item = 'Divine scroll of find traps';
        } elseif ($die > 39) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of earthbind';
            } else {
                $this->_item = 'Divine scroll of earthbind';
            }
        } elseif ($die > 38) {
            $this->_item = 'Divine scroll of delay poison';
        } elseif ($die > 37) {
            $this->_item = 'Arcane scroll of darkvision';
        } elseif ($die > 34) {
            $this->_item = 'Divine scroll of cure moderate wounds';
        } elseif ($die > 32) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of cat\'s grace';
            } else {
                $this->_item = 'Divine scroll of cat\'s grace';
            }
        } elseif ($die > 30) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of bull\'s strength';
            } else {
                $this->_item = 'Divine scroll of bull\'s strength';
            }
        } elseif ($die > 28) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of bear\'s endurance';
            } else {
                $this->_item = 'Divine scroll of bear\'s endurance';
            }
        } elseif ($die > 27) {
            $this->_item = 'Arcane scroll of baleful transposition';
        } elseif ($die > 26) {
            $this->_item = 'Elixir of love';
        } elseif ($die > 25) {
            $this->_item = 'Daylight pellet';
        } elseif ($die > 21) {
            $this->_item = 'Arcane scroll of identify';
        } elseif ($die > 19) {
            $this->_item = 'Everburning torch';
        } elseif ($die > 18) {
            $this->_item = 'Divine scroll of bless weapon';
        } elseif ($die > 16) {
            $this->_item = 'Oil of bless weapon';
        } elseif ($die > 15) {
            $this->_item = 'Sleep arrow';
        } elseif ($die > 14) {
            $this->_item = 'Crystal of illumination, least';
        } elseif ($die > 11) {
            $this->_item = 'Chain shirt';
        } elseif ($die > 10) {
            $this->_item = 'Climber\'s kit';
        } elseif ($die > 7) {
            $this->_item = 'Wand of read magic (10 charges)';
        } elseif ($die > 4) {
            $this->_item = 'Wand of light (10 charges)';
        } else {
            $this->_item = 'Wand of detect magic (10 charges)';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_1