<?php
class Tgen_DnD_35_MIC_Items_11 extends Tgen_DnD_35_MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 83) {
            $weapon = $this->_getMagicWeapon(2);
            $this->_item = $weapon;
        } elseif ($die > 82) {
            $this->_item = 'Vambraces of warding';
        } elseif ($die > 81) {
            $this->_item = 'Third eye penetrate';
        } elseif ($die > 80) {
            $this->_item = 'Talisman of undying fortitude';
        } elseif ($die > 79) {
            $this->_item = 'Shirt of the leech';
        } elseif ($die > 78) {
            $this->_item = 'Scrolls of uncertain provenance';
        } elseif ($die > 77) {
            $this->_item = 'Scendblinder';
        } elseif ($die > 76) {
            $this->_item = 'Runestaf of charming';
        } elseif ($die > 72) {
            $this->_item = 'Ring of protection +2';
        } elseif ($die > 71) {
            $this->_item = 'Ring of mind shielding';
        } elseif ($die > 70) {
            $this->_item = 'Ring of entropic deflection';
        } elseif ($die > 69) {
            $this->_item = 'Ring of antivenom';
        } elseif ($die > 68) {
            $this->_item = 'Psionatrix';
        } elseif ($die > 67) {
            $this->_item = 'Mindvault';
        } elseif ($die > 66) {
            $this->_item = 'Mesmerist\'s gloves';
        } elseif ($die > 65) {
            $this->_item = 'Medallion of aerial defense';
        } elseif ($die > 64) {
            $this->_item = 'Mantle of the predator';
        } elseif ($die > 63) {
            $this->_item = 'Lightning tunic';
        } elseif ($die > 62) {
            $this->_item = 'Iron ward diamond, greater';
        } elseif ($die > 59) {
            $this->_item = 'Ioun stone, scarlet and blue sphere';
        } elseif ($die > 56) {
            $this->_item = 'Ioun stone, pink rhomboid';
        } elseif ($die > 53) {
            $this->_item = 'Ioun stone, pink and green sphere';
        } elseif ($die > 50) {
            $this->_item = 'Ioun stone, pale blue rhomboid';
        } elseif ($die > 47) {
            $this->_item = 'Ioun stone, incandescent blue sphere';
        } elseif ($die > 44) {
            $this->_item = 'Ioun stone, deep red sphere';
        } elseif ($die > 43) {
            $this->_item = 'Horned helm';
        } elseif ($die > 42) {
            $this->_item = 'Hand of glory';
        } elseif ($die > 41) {
            $this->_item = 'Golem manual, flesh';
        } elseif ($die > 40) {
            $this->_item = 'Gloves of incarnum theft';
        } elseif ($die > 39) {
            $this->_item = 'Gloves of the balanced hand';
        } elseif ($die > 38) {
            $this->_item = 'Ghost net';
        } elseif ($die > 37) {
            $this->_item = 'gauntlet of Gruumsh';
        } elseif ($die > 36) {
            $this->_item = 'Flesh ring of scorn';
        } elseif ($die > 35) {
            $this->_item = 'Crystal of energy assault, greater';
        } elseif ($die > 34) {
            $this->_item = 'Bloak of stone';
        } elseif ($die > 33) {
            $this->_item = 'Chasuble of fell power';
        } elseif ($die > 32) {
            $this->_item = 'Blast globes';
        } elseif ($die > 31) {
            $this->_item = 'belt of the wide earth';
        } elseif ($die > 28) {
            $this->_item = 'Amulet of natural armor +2';
        } elseif ($die > 27) {
            $this->_item = 'Tome of the stilled tongue';
        } elseif ($die > 26) {
            $this->_item = 'Ring of mystic lightning';
        } elseif ($die > 25) {
            $this->_item = 'Ring of mystic fire';
        } elseif ($die > 24) {
            $this->_item = 'Ring of mystic defiance';
        } elseif ($die > 23) {
            $this->_item = 'Lore gem';
        } elseif ($die > 22) {
            $this->_item = 'Harp of charming';
        } elseif ($die > 21) {
            $this->_item = 'Dreaming blindfold';
        } elseif ($die > 20) {
            $this->_item = 'Boots of levitation';
        } elseif ($die > 19) {
            $this->_item = 'Periapt of health';
        } elseif ($die > 18) {
            $this->_item = 'Bag of holding type III';
        } elseif ($die > 17) {
            $this->_item = 'Stunshot sling';
        } elseif ($die > 16) {
            $this->_item = 'Rod of defiance';
        } elseif ($die > 15) {
            $this->_item = 'Morningstar of the many';
        } elseif ($die > 14) {
            $this->_item = 'Bottle of air';
        } elseif ($die > 13) {
            $this->_item = 'Cloak of the manta ray';
        } elseif ($die > 12) {
            $this->_item = 'Folding boat';
        } elseif ($die > 11) {
            $this->_item = 'Armband of maximized healing';
        } elseif ($die > 10) {
            $this->_item = 'The fist';
        } elseif ($die > 9) {
            $this->_item = 'Veil of whispers';
        } elseif ($die > 8) {
            $this->_item = 'Tomebound eye of Boccob';
        } elseif ($die > 7) {
            $this->_item = 'Robe of useful items';
        } elseif ($die > 6) {
            $this->_item = 'Gloves of flame';
        } elseif ($die > 5) {
            $this->_item = 'Gloves of endless javelins';
        } elseif ($die > 4) {
            $this->_item = 'Boots of skating';
        } elseif ($die > 3) {
            $this->_item = 'Swordbow, great';
        } elseif ($die > 1) {
            $this->_item = 'Wand of stoneskin (10 charges)';
        } else {
            $this->_item = 'Gauntlets of destruction';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35_MIC_Items_11