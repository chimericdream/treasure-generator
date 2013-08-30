<?php
class Tgen_DnD_35MIC_Items_6 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Sandals of sprinting';
        } elseif ($die > 98) {
            $this->_item = 'Repelling gauntlets';
        } elseif ($die > 97) {
            $this->_item = 'Rod of fumbling';
        } elseif ($die > 96) {
            $this->_item = 'Cloak of weaponry';
        } elseif ($die > 95) {
            $this->_item = 'Brute ring';
        } elseif ($die > 94) {
            $this->_item = 'Bracers of opportunity';
        } elseif ($die > 93) {
            $this->_item = 'Bracers of arcane freedom';
        } elseif ($die > 92) {
            $this->_item = 'Amulet of tears';
        } elseif ($die > 91) {
            $this->_item = 'Slaying arrow';
        } elseif ($die > 90) {
            $this->_item = 'Arcane scroll of teleport, greater';
        } elseif ($die > 89) {
            $this->_item = 'Divine scroll of sunbeam';
        } elseif ($die > 88) {
            $this->_item = 'Arcane scroll of spell turning';
        } elseif ($die > 87) {
            $this->_item = 'Divine scroll of regenerate';
        } elseif ($die > 86) {
            $this->_item = 'Arcane scroll of mage\'s magnificent mansion';
        } elseif ($die > 85) {
            $this->_item = 'Arcane scroll of invisibility, mass';
        } elseif ($die > 84) {
            $die = $this->_getDieRoll(1, 2);
            if ($die == 1) {
                $this->_item = 'Arcane scroll of ethereal jaunt';
            } else {
                $this->_item = 'Divine scroll of ethereal jaunt';
            }
        } elseif ($die > 83) {
            $energy = $this->_getEnergyType();
            $this->_item = "Arcane scroll of {$energy} immunity";
        } elseif ($die > 82) {
            $this->_item = 'Arcane scroll of banishment';
        } elseif ($die > 81) {
            $this->_item = 'Wand of vigor (10 charges)';
        } elseif ($die > 80) {
            $this->_item = 'Wand of repair serious damage (10 charges)';
        } elseif ($die > 79) {
            $this->_item = 'Wand of mass lesser vigor (10 charges)';
        } elseif ($die > 78) {
            $this->_item = 'Wand of lightning bolt (10 charges)';
        } elseif ($die > 77) {
            $this->_item = 'Wand of invisibility sphere (10 charges)';
        } elseif ($die > 76) {
            $this->_item = 'Wand of haste (10 charges)';
        } elseif ($die > 75) {
            $this->_item = 'Wand of fly (10 charges)';
        } elseif ($die > 74) {
            $this->_item = 'Wand of fireball (10 charges)';
        } elseif ($die > 73) {
            $this->_item = 'Wand of displacement (10 charges)';
        } elseif ($die > 72) {
            $this->_item = 'Wand of dispel magic (10 charges)';
        } elseif ($die > 71) {
            $this->_item = 'Wand of cure serious wounds (10 charges)';
        } elseif ($die > 70) {
            $this->_item = 'Wand of call lightning (10 charges)';
        } elseif ($die > 69) {
            $this->_item = 'Healing salve';
        } elseif ($die > 68) {
            $this->_item = 'Elemental gem';
        } elseif ($die > 67) {
            $this->_item = 'Ring of feather falling';
        } elseif ($die > 66) {
            $this->_item = 'Gloves of agile striking';
        } elseif ($die > 65) {
            $this->_item = 'Shield of mercy';
        } elseif ($die > 64) {
            $this->_item = 'Divine scroll of revivify';
        } elseif ($die > 63) {
            $this->_item = 'Third eye surge';
        } elseif ($die > 62) {
            $this->_item = 'Mac-Fuirmidh cithern';
        } elseif ($die > 61) {
            $this->_item = 'Enemy spirit pouch';
        } elseif ($die > 60) {
            $this->_item = 'Amulet of incarnum shielding';
        } elseif ($die > 53) {
            $weapon = $this->_getMagicWeapon(1);
            $this->_item = $weapon;
        } elseif ($die > 52) {
            $this->_item = 'Vest of defense';
        } elseif ($die > 51) {
            $this->_item = 'Torc of displacement';
        } elseif ($die > 50) {
            $this->_item = 'Spellsink scarab';
        } elseif ($die > 49) {
            $this->_item = 'Slashing sand';
        } elseif ($die > 48) {
            $this->_item = 'Silkslick belt';
        } elseif ($die > 47) {
            $this->_item = 'Sepulchral vest';
        } elseif ($die > 46) {
            $this->_item = 'Rubicund frenzy, lesser';
        } elseif ($die > 45) {
            $this->_item = 'Rod of viscid globs';
        } elseif ($die > 44) {
            $this->_item = 'Rod of grievous wounds';
        } elseif ($die > 43) {
            $this->_item = 'Rock boots';
        } elseif ($die > 42) {
            $this->_item = 'Ring of silent spells';
        } elseif ($die > 41) {
            $this->_item = 'Ring of the darkhidden';
        } elseif ($die > 40) {
            $this->_item = 'Ring of protection +1';
        } elseif ($die > 39) {
            $this->_item = 'Ring of piercing spells';
        } elseif ($die > 38) {
            $this->_item = 'Ring of four winds';
        } elseif ($die > 37) {
            $this->_item = 'Ring of floating';
        } elseif ($die > 36) {
            $this->_item = 'Ring of communication';
        } elseif ($die > 35) {
            $this->_item = 'Rearguard\'s cape';
        } elseif ($die > 34) {
            $this->_item = 'Phoenix ash threat, lesser';
        } elseif ($die > 33) {
            $this->_item = 'Pearl of breath crisis';
        } elseif ($die > 32) {
            $this->_item = 'Orb of environmental adaptation';
        } elseif ($die > 31) {
            $this->_item = 'Mask of sweet air';
        } elseif ($die > 30) {
            $this->_item = 'Iron ward diamond, lesser';
        } elseif ($die > 29) {
            $this->_item = 'Horn of fog';
        } elseif ($die > 28) {
            $this->_item = 'Handy haversack';
        } elseif ($die > 27) {
            $this->_item = 'Helm of tactics';
        } elseif ($die > 26) {
            $this->_item = 'Helm of battle';
        } elseif ($die > 25) {
            $this->_item = 'Headband of conscious effort';
        } elseif ($die > 24) {
            $this->_item = 'Greatreach bracers';
        } elseif ($die > 23) {
            $this->_item = 'Goodberry bracelet';
        } elseif ($die > 22) {
            $this->_item = 'Goggles of lifesight';
        } elseif ($die > 21) {
            $this->_item = 'Gloves of lightning';
        } elseif ($die > 20) {
            $this->_item = 'Gloves of fortunate striking';
        } elseif ($die > 19) {
            $this->_item = 'Gauntlets of throwing';
        } elseif ($die > 18) {
            $this->_item = 'Gauntlets of giantfelling';
        } elseif ($die > 17) {
            $this->_item = 'Gauntlets of extended range';
        } elseif ($die > 16) {
            $this->_item = 'Gauntlets of arrow reflection';
        } elseif ($die > 15) {
            $this->_item = 'Field provisions box';
        } elseif ($die > 14) {
            $this->_item = 'Dragon spirit cincture';
        } elseif ($die > 13) {
            $this->_item = 'Dragon spirit amulet';
        } elseif ($die > 12) {
            $this->_item = 'Dimension stride boots';
        } elseif ($die > 11) {
            $this->_item = 'Devastation gauntlets';
        } elseif ($die > 10) {
            $this->_item = 'Crystal of arcane steel, lesser';
        } elseif ($die > 9) {
            $this->_item = 'Caustic veil';
        } elseif ($die > 8) {
            $this->_item = 'Cape of the viper';
        } elseif ($die > 7) {
            $this->_item = 'Caduceus bracers';
        } elseif ($die > 6) {
            $this->_item = 'Bracers of the entangling blast';
        } elseif ($die > 5) {
            $this->_item = 'Boots of the battle charger';
        } elseif ($die > 4) {
            $this->_item = 'Belt of theft-healing';
        } elseif ($die > 3) {
            $this->_item = 'Amulet of teamwork';
        } elseif ($die > 2) {
            $this->_item = 'Amulet of retributive healing';
        } elseif ($die > 1) {
            $this->_item = 'Amulet of natural armor +1';
        } else {
            $this->_item = 'Adamantine mind blade gauntlets';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_6