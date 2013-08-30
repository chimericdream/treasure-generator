<?php
class Tgen_DnD_35MIC_Items_12 extends Tgen_DnD_35MIC_Items {
    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = 'Vest of the master evoker';
        } elseif ($die > 98) {
            $this->_item = 'Truedeath crystal, greater';
        } elseif ($die > 97) {
            $this->_item = 'Third eye powerthieve';
        } elseif ($die > 96) {
            $this->_item = 'Third eye gather';
        } elseif ($die > 95) {
            $this->_item = 'Third eye concentrate';
        } elseif ($die > 94) {
            $this->_item = 'Third eye aware';
        } elseif ($die > 93) {
            $this->_item = 'Stone horse, courser';
        } elseif ($die > 92) {
            $this->_item = 'Soulstone';
        } elseif ($die > 91) {
            $this->_item = 'Soul anchor';
        } elseif ($die > 90) {
            $this->_item = 'Sandals of springing';
        } elseif ($die > 89) {
            $this->_item = 'Rod of undead mastery';
        } elseif ($die > 88) {
            $this->_item = 'Rod of reversal';
        } elseif ($die > 87) {
            $this->_item = 'Robe of mysterious conjuration';
        } elseif ($die > 86) {
            $this->_item = 'Ring of soulbound protection';
        } elseif ($die > 85) {
            $this->_item = 'Ring of self-sufficiency';
        } elseif ($die > 84) {
            $this->_item = 'Ring of improved swimming';
        } elseif ($die > 83) {
            $this->_item = 'Ring of improved jumping';
        } elseif ($die > 82) {
            $this->_item = 'Ring of improved climbing';
        } elseif ($die > 81) {
            $this->_item = 'Ring of avoidance';
        } elseif ($die > 80) {
            $this->_item = 'Psychoactive skin of power damping';
        } elseif ($die > 79) {
            $this->_item = 'Mind blade gauntlet, lesser';
        } elseif ($die > 78) {
            $this->_item = 'Lenses of true form';
        } elseif ($die > 77) {
            $this->_item = 'Ioun stone, dark blue rhomboid';
        } elseif ($die > 76) {
            $this->_item = 'Glove of storing';
        } elseif ($die > 75) {
            $this->_item = 'Ghoul gauntlets';
        } elseif ($die > 74) {
            $this->_item = 'Figurine of wondrous power, ebony fly';
        } elseif ($die > 73) {
            $this->_item = 'Figurine of wondrous power, bronze griffon';
        } elseif ($die > 72) {
            $this->_item = 'Fiendhelm';
        } elseif ($die > 71) {
            $this->_item = 'Eyes of power leech';
        } elseif ($die > 70) {
            $this->_item = 'Druid\'s vestment';
        } elseif ($die > 69) {
            $this->_item = 'Crystal of mind cloaking, greater';
        } elseif ($die > 68) {
            $this->_item = 'Crystal mask of visual insight';
        } elseif ($die > 67) {
            $this->_item = 'Crystal mask of psionic craft';
        } elseif ($die > 66) {
            $this->_item = 'Crystal mask of mindarmor';
        } elseif ($die > 65) {
            $this->_item = 'Crystal mask of dread';
        } elseif ($die > 64) {
            $this->_item = 'Crystal mask of discernment';
        } elseif ($die > 63) {
            $this->_item = 'Crystal mask of detection';
        } elseif ($die > 62) {
            $this->_item = 'Bracers of wind';
        } elseif ($die > 61) {
            $this->_item = 'Bag of holding type IV';
        } elseif ($die > 60) {
            $this->_item = 'Runestaff of the assassin';
        } elseif ($die > 59) {
            $this->_item = 'Angelhelm';
        } elseif ($die > 58) {
            $this->_item = 'Strand of prayer beads, lesser';
        } elseif ($die > 57) {
            $this->_item = 'Sword of mighty thews';
        } elseif ($die > 56) {
            $this->_item = 'rapier of unerring direction';
        } elseif ($die > 55) {
            $this->_item = 'Rapier of desperate measures';
        } elseif ($die > 54) {
            $this->_item = 'Sword of virtue beyond reproach';
        } elseif ($die > 53) {
            $this->_item = 'Pick of piercing';
        } elseif ($die > 52) {
            $this->_item = 'Dawnstar';
        } elseif ($die > 51) {
            $this->_item = 'Spear of retribution';
        } elseif ($die > 50) {
            $this->_item = 'Skewer-of-gnomes';
        } elseif ($die > 49) {
            $this->_item = 'Lion\'s shield';
        } elseif ($die > 48) {
            $this->_item = 'Wight hide shield';
        } elseif ($die > 47) {
            $this->_item = 'Figurine of wondrous power, serpentine owl';
        } elseif ($die > 46) {
            $this->_item = 'Dwarf crusher';
        } elseif ($die > 43) {
            $armor = $this->_getMagicArmor(3);
            $this->_item = $armor;
        } elseif ($die > 42) {
            $this->_item = 'Vest of resistance +3';
        } elseif ($die > 41) {
            $this->_item = 'Stunning spike';
        } elseif ($die > 40) {
            $this->_item = 'Shirt of the treant';
        } elseif ($die > 39) {
            $this->_item = 'Shirt of chains';
        } elseif ($die > 38) {
            $this->_item = 'Shirt of bone';
        } elseif ($die > 37) {
            $this->_item = 'Scepter of the netherworld';
        } elseif ($die > 36) {
            $this->_item = 'Sandals of the light step';
        } elseif ($die > 35) {
            $this->_item = 'Rod of the recluse';
        } elseif ($die > 34) {
            $this->_item = 'Retributive amulet';
        } elseif ($die > 33) {
            $this->_item = 'Pearl of power, 3rd-level spell';
        } elseif ($die > 32) {
            $this->_item = 'Necklace of adaptation';
        } elseif ($die > 31) {
            $this->_item = 'Mirror of time hop';
        } elseif ($die > 30) {
            $this->_item = 'Metamagic rod, reach, lesser';
        } elseif ($die > 29) {
            $this->_item = 'Metamagic rod, empower, lesser';
        } elseif ($die > 28) {
            $this->_item = 'Helm of the hunter';
        } elseif ($die > 27) {
            $this->_item = 'Decanter of endless water';
        } elseif ($die > 26) {
            $this->_item = 'Daern\'s instant tent';
        } elseif ($die > 25) {
            $this->_item = 'Cognizance crystal, 5 points';
        } elseif ($die > 24) {
            $this->_item = 'Cloak of resistance +3';
        } elseif ($die > 23) {
            $this->_item = 'Cat\'s-eye brooch';
        } elseif ($die > 22) {
            $this->_item = 'Bracers of armor +3';
        } elseif ($die > 21) {
            $this->_item = 'Blindfold of true darkness';
        } elseif ($die > 20) {
            $this->_item = 'Battle bridle';
        } elseif ($die > 19) {
            $this->_item = 'Ankh of ascension';
        } elseif ($die > 18) {
            $this->_item = 'Necklace of fireballs type VII';
        } elseif ($die > 17) {
            $this->_item = 'Ring of the ram';
        } elseif ($die > 16) {
            $this->_item = 'Ring of force shield';
        } elseif ($die > 15) {
            $this->_item = 'Crown of flames';
        } elseif ($die > 14) {
            $this->_item = 'Runestaff of fire';
        } elseif ($die > 13) {
            $this->_item = 'Candle of invocation';
        } elseif ($die > 12) {
            $this->_item = 'Axe of ancestral virtue';
        } elseif ($die > 11) {
            $this->_item = 'Forceful skylance';
        } elseif ($die > 10) {
            $this->_item = 'blazing skylance';
        } elseif ($die > 9) {
            $this->_item = 'Warlock\'s scepter';
        } elseif ($die > 8) {
            $this->_item = 'Dagger of venom';
        } elseif ($die > 7) {
            $this->_item = 'Fanged mask';
        } elseif ($die > 6) {
            $this->_item = 'Owlfeather armor';
        } elseif ($die > 5) {
            $this->_item = 'Dragonfang gauntlets';
        } elseif ($die > 4) {
            $this->_item = 'Millennial chainmail';
        } elseif ($die > 3) {
            $this->_item = 'Mace of the ark children';
        } elseif ($die > 2) {
            $this->_item = 'Necklace of fireballs type VI';
        } elseif ($die > 1) {
            $this->_item = 'Deck of illusions';
        } else {
            $this->_item = 'Canaith mandolin';
        }

        return $this->_item;
    }
} // end Tgen_DnD_35MIC_Items_12