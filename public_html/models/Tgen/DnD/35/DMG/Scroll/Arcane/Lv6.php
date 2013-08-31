<?php
class Tgen_DnD_35_DMG_Scroll_Arcane_Lv6 extends Tgen_DnD_35_DMG_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_item = 'wall of iron (1,700 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 95) {
            $this->_item = 'veil (1,650 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'undeath to death (2,150 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 90) {
            $this->_item = 'true seeing (1,900 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 88) {
            $this->_item = 'transformation (1,950 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 87) {
            $this->_item = 'sympathetic vibration (2,400 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 86) {
            $this->_item = 'symbol of persuasion (6,650 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 85) {
            $this->_item = 'symbol of fear (2,650 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 83) {
            $this->_item = 'summon monster VI (1,650 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'suggestion, mass (1,650 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'stone to flesh (1,650 gp)';
        } elseif ($d100 > 75) {
            $this->_item = 'shadow walk (1,650 gp)';
        } elseif ($d100 > 73) {
            $this->_item = 'repulsion (1,650 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'programmed image (1,675 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 69) {
            $this->_item = 'planar binding (1,650 gp)';
        } elseif ($d100 > 67) {
            $this->_item = 'permanent image (1,650 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'owl\'s wisdom, mass (1,650 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'freezing sphere (1,650 gp)';
        } elseif ($d100 > 60) {
            $this->_item = 'move earth (1,650 gp)';
        } elseif ($d100 > 59) {
            $this->_item = 'mage\'s lucubration (1,650 gp)';
        } elseif ($d100 > 57) {
            $this->_item = 'mislead (1,650 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'legend lore (1,900 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 54) {
            $this->_item = 'heroism, greater (1,650 gp)';
        } elseif ($d100 > 53) {
            $this->_item = 'heroes\' feast (2,400 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 52) {
            $this->_item = 'guards and wards (1,650 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'globe of invulnerability (1,650 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'geas/quest (1,650 gp)';
        } elseif ($d100 > 45) {
            $this->_item = 'fox\'s cunning, mass (1,650 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'flesh to stone (1,650 gp)';
        } elseif ($d100 > 42) {
            $this->_item = 'find the path (2,400 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 40) {
            $this->_item = 'eyebite (1,650 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'eagle\'s splendor, mass (1,650 gp)';
        } elseif ($d100 > 33) {
            $this->_item = 'dispel magic, greater (1,650 gp)';
        } elseif ($d100 > 30) {
            $this->_item = 'disintegrate (1,650 gp)';
        } elseif ($d100 > 29) {
            $this->_item = 'cure moderate wounds, mass (2,400 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 28) {
            $this->_item = 'create undead (2,350 gp)';
            $this->_hoard->cpValue += 700 * 100;
        } elseif ($d100 > 26) {
            $this->_item = 'control water (1,650 gp)';
        } elseif ($d100 > 25) {
            $this->_item = 'contingency (1,650 gp)';
        } elseif ($d100 > 23) {
            $this->_item = 'circle of death (2,150 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 22) {
            $this->_item = 'chain lightning (1,650 gp)';
        } elseif ($d100 > 17) {
            $this->_item = 'cat\'s grace, mass (1,650 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'bull\'s strength, mass (1,650 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'forceful hand (1,650 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'bear\'s endurance, mass (1,650 gp)';
        } elseif ($d100 > 6) {
            $this->_item = 'antimagic field (1,650 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'animate objects (2,400 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 2) {
            $this->_item = 'analyze dweomer (1,650 gp)';
        } else {
            $this->_item = 'acid fog (1,650 gp)';
        }

        $this->_hoard->cpValue += 1650 * 100;
        return $this->_item;
    }
}