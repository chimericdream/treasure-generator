<?php
class Tgen_DnD_35_DMG_Scroll_Arcane_Lv3 extends Tgen_DnD_35_DMG_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'wind wall (375 gp)';
        } elseif ($d100 > 95) {
            $this->_item = 'water breathing (375 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'vampiric touch (375 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'tongues (375 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'summon monster III (375 gp)';
        } elseif ($d100 > 86) {
            $this->_item = 'suggestion (375 gp)';
        } elseif ($d100 > 84) {
            $this->_item = 'stinking cloud (375 gp)';
        } elseif ($d100 > 83) {
            $this->_item = 'speak with animals (525 gp)';
            $this->_hoard->cpValue += 150 * 100;
        } elseif ($d100 > 81) {
            $this->_item = 'slow (375 gp)';
        } elseif ($d100 > 79) {
            $this->_item = 'sleet storm (375 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'shrink item (375 gp)';
        } elseif ($d100 > 77) {
            $this->_item = 'sepia snake sigil (875 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 76) {
            $this->_item = 'secret page (375 gp)';
        } elseif ($d100 > 75) {
            $this->_item = 'sculpt sound (525 gp)';
            $this->_hoard->cpValue += 150 * 100;
        } elseif ($d100 > 73) {
            $this->_item = 'ray of exhaustion (375 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'rage (375 gp)';
        } elseif ($d100 > 68) {
            $energyType = $this->_getEnergyType();
            $this->_item = "protection from {$energyType} (375 gp)";
        } elseif ($d100 > 66) {
            $this->_item = 'phantom steed (375 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'nondetection (425 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 62) {
            $this->_item = 'major image (375 gp)';
        } elseif ($d100 > 59) {
            $this->_item = 'magic weapon, greater (375 gp)';
        } elseif ($d100 > 51) {
            $alignment = $this->_getAlignment();
            $this->_item = "magic circle against {$alignment} (375 gp)";
        } elseif ($d100 > 49) {
            $this->_item = 'lightning bolt (375 gp)';
        } elseif ($d100 > 47) {
            $this->_item = 'tiny hut (375 gp)';
        } elseif ($d100 > 44) {
            $this->_item = 'keen edge (375 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'invisibility sphere (375 gp)';
        } elseif ($d100 > 40) {
            $this->_item = 'illusory script (425 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 38) {
            $this->_item = 'hold person (375 gp)';
        } elseif ($d100 > 36) {
            $this->_item = 'heroism (375 gp)';
        } elseif ($d100 > 33) {
            $this->_item = 'haste (375 gp)';
        } elseif ($d100 > 31) {
            $this->_item = 'halt undead (375 gp)';
        } elseif ($d100 > 30) {
            $this->_item = 'good hope (525 gp)';
            $this->_hoard->cpValue += 150 * 100;
        } elseif ($d100 > 29) {
            $this->_item = 'glibness (525 gp)';
            $this->_hoard->cpValue += 150 * 100;
        } elseif ($d100 > 27) {
            $this->_item = 'gentle repose (375 gp)';
        } elseif ($d100 > 25) {
            $this->_item = 'gaseous form (375 gp)';
        } elseif ($d100 > 22) {
            $this->_item = 'fly (375 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'flame arrow (375 gp)';
        } elseif ($d100 > 18) {
            $this->_item = 'fireball (375 gp)';
        } elseif ($d100 > 17) {
            $this->_item = 'explosive runes (375 gp)';
        } elseif ($d100 > 15) {
            $this->_item = 'displacement (375 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'dispel magic (375 gp)';
        } elseif ($d100 > 10) {
            $this->_item = 'deep slumber (375 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'daylight (525 gp)';
            $this->_hoard->cpValue += 150 * 100;
        } elseif ($d100 > 6) {
            $this->_item = 'cure serious wounds (525 gp)';
            $this->_hoard->cpValue += 150 * 100;
        } elseif ($d100 > 4) {
            $this->_item = 'clairaudience/clairvoyance (375 gp)';
        } elseif ($d100 > 2) {
            $this->_item = 'blink (375 gp)';
        } else {
            $this->_item = 'arcane sight (375 gp)';
        }

        $this->_hoard->cpValue += 375 * 100;
        return $this->_item;
    }
}