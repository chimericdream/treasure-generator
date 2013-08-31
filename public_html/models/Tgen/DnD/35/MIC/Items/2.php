<?php
class Tgen_DnD_35_MIC_Items_2 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Revelation crystal, least';
        } elseif ($die > 97) {
            $this->_item = 'Quall\'s feather token, tree';
        } elseif ($die > 96) {
            $this->_item = 'Life ring';
        } elseif ($die > 95) {
            $this->_item = 'Essentia jewel';
        } elseif ($die > 93) {
            $this->_item = 'Electric eel elixir';
        } elseif ($die > 92) {
            $this->_item = 'Crystal of screening, least';
        } elseif ($die > 91) {
            $this->_item = 'Crystal of life drinking, least';
        } elseif ($die > 90) {
            $this->_item = 'Crystal of illumination, lesser';
        } elseif ($die > 89) {
            $this->_item = 'Charm of countersong';
        } elseif ($die > 88) {
            $this->_item = 'Amulet of toxin delay';
        } elseif ($die > 87) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of water breathing';
            } else {
                $this->_item = 'Divine scroll of water breathing';
            }
        } elseif ($die > 86) {
            $this->_item = 'Divine scroll of mass lesser vigor';
        } elseif ($die > 85) {
            $this->_item = 'Divine scroll of vigor';
        } elseif ($die > 84) {
            $this->_item = 'Arcane scroll of tongues';
        } elseif ($die > 83) {
            $this->_item = 'Divine scroll of speak with dead';
        } elseif ($die > 82) {
            $this->_item = 'Divine scroll of mass snake\'s swiftness';
        } elseif ($die > 81) {
            $this->_item = 'Divine scroll of remove disease';
        } elseif ($die > 80) {
            $this->_item = 'Divine scroll of remove curse';
        } elseif ($die > 79) {
            $this->_item = 'Divine scroll of remove blindness/deafness';
        } elseif ($die > 78) {
            $energy = $this->_getEnergyType();
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = "Arcane scroll of protection from {$energy}";
            } else {
                $this->_item = "Divine scroll of protection from {$energy}";
            }
        } elseif ($die > 77) {
            $this->_item = 'Divine scroll of neutralize poison';
        } elseif ($die > 73) {
            $alignment = $this->_getAlignment();
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = "Arcane scroll of magic circle against {$alignment}";
            } else {
                $this->_item = "Divine scroll of magic circle against {$alignment}";
            }
        } elseif ($die > 72) {
            $this->_item = 'Arcane scroll of lightning bolt';
        } elseif ($die > 71) {
            $this->_item = 'Divine scroll of invisibility purge';
        } elseif ($die > 70) {
            $this->_item = 'Arcane scroll of haste';
        } elseif ($die > 69) {
            $this->_item = 'Arcane scroll of fly';
        } elseif ($die > 68) {
            $this->_item = 'Arcane scroll of fireball';
        } elseif ($die > 67) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of dispel magic';
            } else {
                $this->_item = 'Divine scroll of dispel magic';
            }
        } elseif ($die > 66) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of daylight';
            } else {
                $this->_item = 'Divine scroll of daylight';
            }
        } elseif ($die > 64) {
            $this->_item = 'Divine scroll of cure serious wounds';
        } elseif ($die > 63) {
            $this->_item = 'Divine scroll of create food and water';
        } elseif ($die > 61) {
            $this->_item = 'Everlasting rations';
        } elseif ($die > 60) {
            $this->_item = 'Breastplate, masterwork';
        } elseif ($die > 59) {
            $this->_item = 'Cold iron longsword, masterwork';
        } elseif ($die > 58) {
            $this->_item = 'Silver dagger, masterwork';
        } elseif ($die > 55) {
            $weapon = $this->_getBaseWeapon();
            $this->_item = "Masterwork {$weapon['name']}";
        } elseif ($die > 54) {
            $this->_item = 'Screaming bolt';
        } elseif ($die > 53) {
            $this->_item = 'Stench stone';
        } elseif ($die > 52) {
            $this->_item = 'Quall\'s feather token, bird';
        } elseif ($die > 51) {
            $this->_item = 'Potion of spider climb';
        } elseif ($die > 50) {
            $this->_item = 'Potion of shield of faith +3';
        } elseif ($die > 48) {
            $energy = $this->_getEnergyType();
            $this->_item = "Potion of resist {$energy} 10";
        } elseif ($die > 46) {
            $this->_item = 'Potion of remove paralysis';
        } elseif ($die > 45) {
            $this->_item = 'Potion of owl\'s wisdom';
        } elseif ($die > 44) {
            $this->_item = 'Potion of levitate';
        } elseif ($die > 42) {
            $this->_item = 'Potion of lesser restoration';
        } elseif ($die > 41) {
            $this->_item = 'Potion of invisibility';
        } elseif ($die > 40) {
            $this->_item = 'Potion of fox\'s cunning';
        } elseif ($die > 39) {
            $this->_item = 'Potion of eagle\'s splendor';
        } elseif ($die > 38) {
            $this->_item = 'Potion of delay poison';
        } elseif ($die > 37) {
            $this->_item = 'Potion of darkvision';
        } elseif ($die > 33) {
            $this->_item = 'Potion of cure moderate wounds';
        } elseif ($die > 32) {
            $this->_item = 'Potion of cat\'s grace';
        } elseif ($die > 31) {
            $this->_item = 'Potion of bull\'s strength';
        } elseif ($die > 30) {
            $this->_item = 'Potion of blur';
        } elseif ($die > 29) {
            $this->_item = 'Potion of bear\'s endurance';
        } elseif ($die > 28) {
            $this->_item = 'Potion of barkskin +2';
        } elseif ($die > 27) {
            $this->_item = 'Oil of darkness';
        } elseif ($die > 26) {
            $this->_item = 'Fountainhead arrow';
        } elseif ($die > 25) {
            $this->_item = 'Elixir of flaming fists';
        } elseif ($die > 24) {
            $this->_item = 'Crystal of stamina, least';
        } elseif ($die > 23) {
            $this->_item = 'Crystal of security, least';
        } elseif ($die > 22) {
            $this->_item = 'Crystal of return, least';
        } elseif ($die > 21) {
            $this->_item = 'Blight stone';
        } elseif ($die > 20) {
            $this->_item = 'Crystal of adamant weaponry, least';
        } elseif ($die > 19) {
            $this->_item = 'Crystal of adamant armor, least';
        } elseif ($die > 18) {
            $this->_item = 'Silversheen';
        } elseif ($die > 17) {
            $this->_item = 'Safewing emblem';
        } elseif ($die > 16) {
            $this->_item = 'Jumping caltrops';
        } elseif ($die > 15) {
            $this->_item = 'Incense of concentration';
        } elseif ($die > 14) {
            $this->_item = 'Elixir of vision';
        } elseif ($die > 13) {
            $this->_item = 'Elixir of swimming';
        } elseif ($die > 12) {
            $this->_item = 'Elixir of sneaking';
        } elseif ($die > 11) {
            $this->_item = 'Elixir of hiding';
        } elseif ($die > 10) {
            $this->_item = 'Dust of tracelessness';
        } elseif ($die > 9) {
            $this->_item = 'Crystal of aquatic action, least';
        } elseif ($die > 8) {
            $this->_item = 'Darkwood buckler';
        } elseif ($die > 7) {
            $this->_item = 'Darkwood shield';
        } elseif ($die > 6) {
            $this->_item = 'Chain shirt, masterwork';
        } elseif ($die > 5) {
            $this->_item = 'Tanglepatch';
        } elseif ($die > 4) {
            $this->_item = 'Skill shard, greater';
        } elseif ($die > 3) {
            $this->_item = 'Quall\'s feather token, fan';
        } elseif ($die > 2) {
            $this->_item = 'Everfull mug';
        } elseif ($die > 1) {
            $this->_item = 'Crystal of lifekeeping, least';
        } else {
            $this->_item = 'Arcane scroll of arcane lock';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_2