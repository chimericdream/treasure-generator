<?php
class Tgen_DnD_35_DMG_Scroll_Arcane_Lv5 extends Tgen_DnD_35_DMG_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'waves of fatigue (1,125 gp)';
        } elseif ($d100 > 95) {
            $this->_item = 'wall of stone (1,125 gp)';
        } elseif ($d100 > 92) {
            $this->_item = 'wall of force (1,125 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'transmute rock to mud (1,125 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'transmute mud to rock (1,125 gp)';
        } elseif ($d100 > 83) {
            $this->_item = 'teleport (1,125 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'telekinesis (1,125 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'symbol of sleep (2,125 gp)';
            $this->_hoard->cpValue += 1000;
        } elseif ($d100 > 79) {
            $this->_item = 'symbol of pain (2,125 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 77) {
            $this->_item = 'summon monster V (1,125 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'song of discord (1,625 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 74) {
            $this->_item = 'shadow evocation (1,125 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'sending (1,125 gp)';
        } elseif ($d100 > 69) {
            $this->_item = 'seeming (1,125 gp)';
        } elseif ($d100 > 67) {
            $this->_item = 'telepathic bond (1,125 gp)';
        } elseif ($d100 > 65) {
            $this->_item = 'prying eyes (1,125 gp)';
        } elseif ($d100 > 63) {
            $this->_item = 'planar binding, lesser (1,125 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'persistent image (1,125 gp)';
        } elseif ($d100 > 60) {
            $this->_item = 'permanency (10,125 gp)';
            $this->_hoard->cpValue += 9000 * 100;
        } elseif ($d100 > 57) {
            $this->_item = 'passwall (1,125 gp)';
        } elseif ($d100 > 53) {
            $this->_item = 'overland flight (1,125 gp)';
        } elseif ($d100 > 51) {
            $this->_item = 'nightmare (1,125 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'mage\'s private sanctum (1,125 gp)';
        } elseif ($d100 > 47) {
            $this->_item = 'mage\'s faithful hound (1,125 gp)';
        } elseif ($d100 > 45) {
            $this->_item = 'mirage arcana (1,125 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'mind fog (1,125 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'major creation (1,125 gp)';
        } elseif ($d100 > 40) {
            $this->_item = 'magic jar (1,125 gp)';
        } elseif ($d100 > 39) {
            $this->_item = 'secret chest (1,125 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'hold monster (1,125 gp)';
        } elseif ($d100 > 33) {
            $this->_item = 'feeblemind (1,125 gp)';
        } elseif ($d100 > 31) {
            $this->_item = 'false vision (1,375 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 29) {
            $this->_item = 'fabricate (1,125 gp)';
        } elseif ($d100 > 28) {
            $this->_item = 'dream (1,125 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'dominate person (1,125 gp)';
        } elseif ($d100 > 23) {
            $this->_item = 'dispel magic, greater (1,625 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 20) {
            $this->_item = 'dismissal (1,125 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'cure light wounds, mass (1,625 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 17) {
            $this->_item = 'contact other plane (1,125 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'cone of cold (1,125 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'cloudkill (1,125 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'break enchantment (1,125 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'blight (1,125 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'interposing hand (1,125 gp)';
        } elseif ($d100 > 2) {
            $this->_item = 'baleful polymorph (1,125 gp)';
        } else {
            $this->_item = 'animal growth (1,125 gp)';
        }

        $this->_hoard->cpValue += 1125 * 100;
        return $this->_item;
    }
}