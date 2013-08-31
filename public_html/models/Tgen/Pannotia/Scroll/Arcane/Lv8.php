<?php
class Tgen_Pannotia_Scroll_Arcane_Lv8 extends Tgen_Pannotia_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'trap the soul (13,000 gp)';
            $this->_hoard->cpValue += 10000 * 100;
        } elseif ($d100 > 94) {
            $this->_item = 'temporal stasis (3,500 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 92) {
            $this->_item = 'sympathy (4,500 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 91) {
            $this->_item = 'symbol of insanity (8,000 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 90) {
            $this->_item = 'symbol of death (8,000 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 87) {
            $this->_item = 'sunburst (3,000 gp)';
        } elseif ($d100 > 84) {
            $this->_item = 'summon monster VIII (3,000 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'shout, greater (3,000 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'shadow evocation, greater (3,000 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'screen (3,000 gp)';
        } elseif ($d100 > 73) {
            $this->_item = 'scintillating pattern (3,000 gp)';
        } elseif ($d100 > 70) {
            $this->_item = 'prying eyes, greater (3,000 gp)';
        } elseif ($d100 > 66) {
            $this->_item = 'protection from spells (3,500 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 63) {
            $this->_item = 'prismatic wall (3,000 gp)';
        } elseif ($d100 > 60) {
            $this->_item = 'power word stun (3,000 gp)';
        } elseif ($d100 > 57) {
            $this->_item = 'polymorph any object (3,000 gp)';
        } elseif ($d100 > 54) {
            $this->_item = 'polar ray (3,000 gp)';
        } elseif ($d100 > 51) {
            $this->_item = 'planar binding, greater (3,000 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'irresistible dance (3,000 gp)';
        } elseif ($d100 > 44) {
            $this->_item = 'telekinetic sphere (3,000 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'momen of prescience (3,000 gp)';
        } elseif ($d100 > 38) {
            $this->_item = 'mind blank (3,000 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'maze (3,000 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'iron body (3,000 gp)';
        } elseif ($d100 > 29) {
            $this->_item = 'incendiary cloud (3,000 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'horrid wilting (3,000 gp)';
        } elseif ($d100 > 22) {
            $this->_item = 'discern location (3,000 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'dimensional lock (3,000 gp)';
        } elseif ($d100 > 16) {
            $this->_item = 'demand (3,600 gp)';
            $this->_hoard->cpValue += 600 * 100;
        } elseif ($d100 > 13) {
            $this->_item = 'create greater undead (3,000 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'clone (4,000 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 8) {
            $this->_item = 'charm monster, mass (3,000 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'binding (8,500 gp)';
            $this->_hoard->cpValue += 5500 * 100;
        } elseif ($d100 > 2) {
            $this->_item = 'clenched fist (3,000 gp)';
        } else {
            $this->_item = 'antipathy (3,000 gp)';
        }

        $this->_hoard->cpValue += 3000 * 100;
        return $this->_item;
    }
}