<?php
class Tgen_DnD_35MIC_Items_16 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 98) {
            $this->_item = 'Runestaff of time';
        } elseif ($die > 97) {
            $this->_item = 'metamagic rod, quicken, lesser';
        } elseif ($die > 96) {
            $this->_item = 'Golem manual, iron';
        } elseif ($die > 94) {
            $this->_item = 'carpet of flying, 5 ft. by 10 ft.';
        } elseif ($die > 93) {
            $this->_item = 'Amulet of proof against detection and location';
        } elseif ($die > 92) {
            $this->_item = 'Runestaff of illumination';
        } elseif ($die > 91) {
            $this->_item = 'Impervious vestment';
        } elseif ($die > 90) {
            $this->_item = 'Rod of thunder and lightning';
        } elseif ($die > 89) {
            $this->_item = 'Metamagic rod, reach';
        } elseif ($die > 88) {
            $this->_item = 'Metamagic rod, empower';
        } elseif ($die > 87) {
            $this->_item = 'Anstruth harp';
        } elseif ($die > 69) {
            $weapon = $this->_getMagicWeapon(4);
            $this->_item = $weapon;
        } elseif ($die > 68) {
            $this->_item = 'Runestaff of necromancy';
        } elseif ($die > 67) {
            $this->_item = 'Runestaff of enchantment';
        } elseif ($die > 66) {
            $this->_item = 'Runestaff of abjuration';
        } elseif ($die > 63) {
            $this->_item = 'Ring of protection +4';
        } elseif ($die > 62) {
            $this->_item = 'Psychoactive skin of the defender';
        } elseif ($die > 59) {
            $this->_item = 'Amulet of natural armor +4';
        } elseif ($die > 58) {
            $this->_item = 'Runestaff of ethereal action';
        } elseif ($die > 57) {
            $this->_item = 'Runestaff of the architect';
        } elseif ($die > 56) {
            $this->_item = 'Robe of blending';
        } elseif ($die > 54) {
            $this->_item = 'Rings of force armor (pair)';
        } elseif ($die > 53) {
            $this->_item = 'Ring of vanishing';
        } elseif ($die > 51) {
            $this->_item = 'Lantern of revealing';
        } elseif ($die > 49) {
            $this->_item = 'Ioun stone, pale green prism';
        } elseif ($die > 47) {
            $this->_item = 'Ioun stone, orange prism';
        } elseif ($die > 46) {
            $this->_item = 'Drums of panic';
        } elseif ($die > 45) {
            $this->_item = 'Staff of size alteration';
        } elseif ($die > 38) {
            $this->_item = 'Divine scroll of true resurrection';
        } elseif ($die > 36) {
            $this->_item = 'Staff of fire';
        } elseif ($die > 35) {
            $this->_item = 'Figurine of wondrous power, obsidian stted';
        } elseif ($die > 33) {
            $energy = $this->_getEnergyType();
            $this->_item = "Ring of {$energy} resistance, major";
        } elseif ($die > 32) {
            $this->_item = 'Dimensional shackles';
        } elseif ($die > 30) {
            $this->_item = 'Staff of healing';
        } elseif ($die > 28) {
            $this->_item = 'Tome of understanding +1';
        } elseif ($die > 26) {
            $this->_item = 'Tome of leadership and influence +1';
        } elseif ($die > 24) {
            $this->_item = 'Tome of clear thought +1';
        } elseif ($die > 22) {
            $this->_item = 'Manual of quickness in action +1';
        } elseif ($die > 20) {
            $this->_item = 'Manual of gainful exercise +1';
        } elseif ($die > 18) {
            $this->_item = 'Manual of bodily health +1';
        } elseif ($die > 17) {
            $this->_item = 'Runestaff of destruction';
        } elseif ($die > 16) {
            $this->_item = 'Robe of scintillating colors';
        } elseif ($die > 15) {
            $this->_item = 'Ring of blinking';
        } elseif ($die > 14) {
            $this->_item = 'Periapt of proof against poison';
        } elseif ($die > 13) {
            $this->_item = 'Helm of telepathy';
        } elseif ($die > 12) {
            $this->_item = 'Cube of frost resistance';
        } elseif ($die > 11) {
            $this->_item = 'Mithral full plate of speed';
        } elseif ($die > 10) {
            $this->_item = 'Scourge of pain';
        } elseif ($die > 9) {
            $this->_item = 'Runestaff of cacophony';
        } elseif ($die > 8) {
            $this->_item = 'Ring of soulbound protection, greater';
        } elseif ($die > 7) {
            $this->_item = 'Iron bands of Bilarro';
        } elseif ($die > 6) {
            $this->_item = 'Cloak of thorns';
        } elseif ($die > 5) {
            $this->_item = 'Cloak of the bat';
        } elseif ($die > 4) {
            $this->_item = 'Bracers of dawn';
        } elseif ($die > 3) {
            $this->_item = 'Sword of life stealing';
        } elseif ($die > 2) {
            $this->_item = 'Oathbow';
        } elseif ($die > 1) {
            $this->_item = 'Breastplate of command';
        } else {
            $this->_item = 'Maul of the titans';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_16