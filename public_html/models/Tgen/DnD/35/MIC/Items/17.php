<?php
class Tgen_DnD_35_MIC_Items_17 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Tentacle rod, greater';
        } elseif ($die > 98) {
            $this->_item = 'Runestaff of fiendish darkness';
        } elseif ($die > 97) {
            $this->_item = 'Orb of storms';
        } elseif ($die > 95) {
            $this->_item = 'Sylvan scimitar';
        } elseif ($die > 92) {
            $this->_item = 'Runestaff of insanity';
        } elseif ($die > 90) {
            $this->_item = 'Strand of prayer beads';
        } elseif ($die > 88) {
            $this->_item = 'Ring of nine lives';
        } elseif ($die > 83) {
            $energy = $this->_getEnergyType();
            $this->_item = "Ring of {$energy} resistance, greater";
        } elseif ($die > 82) {
            $this->_item = 'Golem manual, greater stone';
        } elseif ($die > 80) {
            $this->_item = 'Boots of temporal acceleration';
        } elseif ($die > 79) {
            $this->_item = 'Mind blade gauntlet, greater';
        } elseif ($die > 78) {
            $this->_item = 'Crystal ball';
        } elseif ($die > 76) {
            $this->_item = 'Earthplate armor';
        } elseif ($die > 75) {
            $this->_item = 'Life-drinker';
        } elseif ($die > 73) {
            $this->_item = 'Scarab of invulnerability';
        } elseif ($die > 71) {
            $this->_item = 'Ring of wizardry II';
        } elseif ($die > 65) {
            $this->_item = 'Ring of freedom of movement';
        } elseif ($die > 64) {
            $this->_item = 'Ring gates';
        } elseif ($die > 63) {
            $this->_item = 'Psychoactive skin of the spider';
        } elseif ($die > 62) {
            $this->_item = 'Prychoactive skin of iron';
        } elseif ($die > 59) {
            $this->_item = 'Ioun stone, lavender and green ellipsoid';
        } elseif ($die > 57) {
            $this->_item = 'amulet of second chances';
        } elseif ($die > 55) {
            $this->_item = 'Rod of celestial might';
        } elseif ($die > 54) {
            $this->_item = 'Mace of terror';
        } elseif ($die > 52) {
            $this->_item = 'Runestaff of power';
        } elseif ($die > 51) {
            $this->_item = 'Explosive sling';
        } elseif ($die > 49) {
            $this->_item = 'Scarab of protection';
        } elseif ($die > 47) {
            $this->_item = 'Robe of thunder';
        } elseif ($die > 45) {
            $this->_item = 'Memento magica, 5th-level spell';
        } elseif ($die > 43) {
            $this->_item = 'Runestaff of the undead slayer';
        } elseif ($die > 41) {
            $this->_item = 'Rod of negation';
        } elseif ($die > 40) {
            $this->_item = 'Robe of the inferno';
        } elseif ($die > 39) {
            $this->_item = 'Vampire hide armor';
        } elseif ($die > 30) {
            $armor = $this->_getMagicArmor(6);
            $this->_item = $armor;
        } elseif ($die > 29) {
            $this->_item = 'Truelight lantern';
        } elseif ($die > 27) {
            $this->_item = 'Ring of positive protection';
        } elseif ($die > 25) {
            $this->_item = 'Ring of negative protection';
        } elseif ($die > 22) {
            $this->_item = 'Periapt of Wisdom +6';
        } elseif ($die > 20) {
            $this->_item = 'Pearl of power, 6th-level spell';
        } elseif ($die > 19) {
            $this->_item = 'Ioun stone, vibrant purple prism';
        } elseif ($die > 16) {
            $this->_item = 'Headband of intellect +6';
        } elseif ($die > 13) {
            $this->_item = 'Gloves of Dexterity +6';
        } elseif ($die > 12) {
            $this->_item = 'Cognizance crystal, 11 points';
        } elseif ($die > 11) {
            $this->_item = 'Cloak of the salamander, greater';
        } elseif ($die > 8) {
            $this->_item = 'Cloak of Charisma +6';
        } elseif ($die > 6) {
            $this->_item = 'Bracers of armor +6';
        } elseif ($die > 3) {
            $this->_item = 'Belt of giant strength +6';
        } else {
            $this->_item = 'Amulet of health +6';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_17