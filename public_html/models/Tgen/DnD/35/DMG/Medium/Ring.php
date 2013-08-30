<?php
class Tgen_DnD_35_Medium_Ring extends Tgen_DnD_35_Medium {
    protected $_hoard  = null;
    protected $_ring = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_ring = 'Energy resistance, major (28,000 gp)';
            $this->_hoard->cpValue += 28000 * 100;
        } elseif ($d100 > 93) {
            $this->_ring = 'Blinking (27,000 gp)';
            $this->_hoard->cpValue += 27000 * 100;
        } elseif ($d100 > 90) {
            $this->_ring = 'X-ray vision (25,000 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 85) {
            $this->_ring = 'Evasion (25,000 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 81) {
            $this->_ring = 'Wizardry (I) (20,000 gp)';
            $this->_hoard->cpValue += 20000 * 100;
        } elseif ($d100 > 76) {
            $this->_ring = 'Invisibility (20,000 gp)';
            $this->_hoard->cpValue += 20000 * 100;
        } elseif ($d100 > 71) {
            $this->_ring = 'Spell storing, minor (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } elseif ($d100 > 66) {
            $this->_ring = 'Protection +3 (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } elseif ($d100 > 61) {
            $this->_ring = 'Water walking (15,000 gp)';
            $this->_hoard->cpValue += 15000 * 100;
        } elseif ($d100 > 56) {
            $this->_ring = 'Chameleon power (12,700 gp)';
            $this->_hoard->cpValue += 12700 * 100;
        } elseif ($d100 > 51) {
            $this->_ring = 'Energy resistance, minor (12,000 gp)';
            $this->_hoard->cpValue += 12000 * 100;
        } elseif ($d100 > 46) {
            $this->_ring = 'Animal friendship (10,800 gp)';
            $this->_hoard->cpValue += 10800 * 100;
        } elseif ($d100 > 40) {
            $this->_ring = 'Swimming, improved (10,000 gp)';
            $this->_hoard->cpValue += 10000 * 100;
        } elseif ($d100 > 34) {
            $this->_ring = 'Jumping, improved (10,000 gp)';
            $this->_hoard->cpValue += 10000 * 100;
        } elseif ($d100 > 28) {
            $this->_ring = 'Climbing, improved (10,000 gp)';
            $this->_hoard->cpValue += 10000 * 100;
        } elseif ($d100 > 23) {
            $this->_ring = 'the Ram (8,600 gp)';
            $this->_hoard->cpValue += 8600 * 100;
        } elseif ($d100 > 18) {
            $this->_ring = 'Force shield (8,500 gp)';
            $this->_hoard->cpValue += 8500 * 100;
        } elseif ($d100 > 8) {
            $this->_ring = 'Protection +2 (8,000 gp)';
            $this->_hoard->cpValue += 8000 * 100;
        } elseif ($d100 > 5) {
            $this->_ring = 'Mind shielding (8,000 gp)';
            $this->_hoard->cpValue += 8000 * 100;
        } else {
            $this->_ring = 'Counterspells (4,000 gp)';
            $this->_hoard->cpValue += 4000 * 100;
        }

        return 'Ring of ' . $this->_ring;
    }
}