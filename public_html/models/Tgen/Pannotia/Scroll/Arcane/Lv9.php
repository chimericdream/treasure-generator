<?php
class Tgen_Pannotia_Scroll_Arcane_Lv9 extends Tgen_Pannotia_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_item = 'wish (28,825 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 95) {
            $this->_item = 'weird (3,825 gp)';

        } elseif ($d100 > 91) {
            $this->_item = 'wail of the banshee (3,825 gp)';

        } elseif ($d100 > 86) {
            $this->_item = 'time stop (3,825 gp)';

        } elseif ($d100 > 83) {
            $this->_item = 'teleportation circle (4,825 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 79) {
            $this->_item = 'summon monster IX (3,825 gp)';

        } elseif ($d100 > 76) {
            $this->_item = 'soul bind (3,825 gp)';

        } elseif ($d100 > 70) {
            $this->_item = 'shapechange (3,825 gp)';

        } elseif ($d100 > 66) {
            $this->_item = 'shades (3,825 gp)';

        } elseif ($d100 > 62) {
            $this->_item = 'refuge (3,825 gp)';

        } elseif ($d100 > 58) {
            $this->_item = 'prismatic sphere (3,825 gp)';

        } elseif ($d100 > 53) {
            $this->_item = 'power word kill (3,825 gp)';

        } elseif ($d100 > 49) {
            $this->_item = 'mage\'s disjunction (3,825 gp)';

        } elseif ($d100 > 44) {
            $this->_item = 'meteor swarm (3,825 gp)';

        } elseif ($d100 > 40) {
            $this->_item = 'imprisonment (3,825 gp)';

        } elseif ($d100 > 36) {
            $this->_item = 'hold monster, mass (3,825 gp)';

        } elseif ($d100 > 31) {
            $this->_item = 'gate (8,825 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 25) {
            $this->_item = 'freedom (3,825 gp)';

        } elseif ($d100 > 21) {
            $this->_item = 'foresight (3,825 gp)';

        } elseif ($d100 > 16) {
            $this->_item = 'etherealness (3,825 gp)';

        } elseif ($d100 > 12) {
            $this->_item = 'energy drain (3,825 gp)';

        } elseif ($d100 > 7) {
            $this->_item = 'dominate monster (3,825 gp)';

        } elseif ($d100 > 3) {
            $this->_item = 'crushing hand (3,825 gp)';

        } else {
            $this->_item = 'astral projection (4,870 gp)';
            $this->_hoard->cpValue += 1045 * 100;
        }

        $this->_hoard->cpValue += 3825 * 100;
        return $this->_item;
    }
}