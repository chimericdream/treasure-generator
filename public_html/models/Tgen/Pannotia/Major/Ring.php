<?php
class Tgen_Pannotia_Major_Ring extends Tgen_Pannotia_Medium {
    protected $_hoard  = null;
    protected $_ring = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_ring = 'Spell storing, major (200,000 gp)';
            $this->_hoard->cpValue += 200000 * 100;
        } elseif ($d100 > 98) {
            $this->_ring = 'Elemental command (water) (200,000 gp)';
            $this->_hoard->cpValue += 200000 * 100;
        } elseif ($d100 > 97) {
            $this->_ring = 'Elemental command (fire) (200,000 gp)';
            $this->_hoard->cpValue += 200000 * 100;
        } elseif ($d100 > 96) {
            $this->_ring = 'Elemental command (earth) (200,000 gp)';
            $this->_hoard->cpValue += 200000 * 100;
        } elseif ($d100 > 95) {
            $this->_ring = 'Elemental command (air) (200,000 gp)';
            $this->_hoard->cpValue += 200000 * 100;
        } elseif ($d100 > 94) {
            $this->_ring = 'Djinni calling (125,000 gp)';
            $this->_hoard->cpValue += 125000 * 100;
        } elseif ($d100 > 92) {
            $this->_ring = 'Wizardry (IV) (100,000 gp)';
            $this->_hoard->cpValue += 100000 * 100;
        } elseif ($d100 > 89) {
            $this->_ring = 'Spell turning (98,280 gp)';
            $this->_hoard->cpValue += 98280 * 100;
        } elseif ($d100 > 88) {
            $this->_ring = 'Three wishes (97,950 gp)';
            $this->_hoard->cpValue += 97950 * 100;
        } elseif ($d100 > 86) {
            $this->_ring = 'Regeneration (90,000 gp)';
            $this->_hoard->cpValue += 90000 * 100;
        } elseif ($d100 > 83) {
            $this->_ring = 'Telekinesis (75,000 gp)';
            $this->_hoard->cpValue += 75000 * 100;
        } elseif ($d100 > 79) {
            $this->_ring = 'Wizardry (III) (70,000 gp)';
            $this->_hoard->cpValue += 70000 * 100;
        } elseif ($d100 > 74) {
            $this->_ring = 'Spell storing (50,000 gp)';
            $this->_hoard->cpValue += 50000 * 100;
        } elseif ($d100 > 70) {
            $this->_ring = 'Shooting stars (50,000 gp)';
            $this->_hoard->cpValue += 50000 * 100;
        } elseif ($d100 > 65) {
            $this->_ring = 'Protection +5 (50,000 gp)';
            $this->_hoard->cpValue += 50000 * 100;
        } elseif ($d100 > 63) {
            $this->_ring = 'Friend shield (pair) (50,000 gp)';
            $this->_hoard->cpValue += 50000 * 100;
        } elseif ($d100 > 60) {
            $this->_ring = 'Energy resistance, greater (44,000 gp)';
            $this->_hoard->cpValue += 44000 * 100;
        } elseif ($d100 > 55) {
            $this->_ring = 'Freedom of movement (40,000 gp)';
            $this->_hoard->cpValue += 40000 * 100;
        } elseif ($d100 > 49) {
            $this->_ring = 'Wizardry (II) (40,000 gp)';
            $this->_hoard->cpValue += 40000 * 100;
        } elseif ($d100 > 39) {
            $this->_ring = 'Protection +4 (32,000 gp)';
            $this->_hoard->cpValue += 32000 * 100;
        } elseif ($d100 > 32) {
            $this->_ring = 'Energy resistance, major (28,000 gp)';
            $this->_hoard->cpValue += 28000 * 100;
        } elseif ($d100 > 28) {
            $this->_ring = 'Blinking (27,000 gp)';
            $this->_hoard->cpValue += 27000 * 100;
        } elseif ($d100 > 25) {
            $this->_ring = 'X-ray vision (25,000 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 19) {
            $this->_ring = 'Evasion (25,000 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 15) {
            $this->_ring = 'Wizardry (I) (20,000 gp)';
            $this->_hoard->cpValue += 20000 * 100;
        } elseif ($d100 > 10) {
            $this->_ring = 'Invisibility (20,000 gp)';
            $this->_hoard->cpValue += 20000 * 100;
        } elseif ($d100 > 7) {
            $this->_ring = 'Spell storing, minor (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } elseif ($d100 > 2) {
            $this->_ring = 'Protection +3 (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } else {
            $this->_ring = 'Energy resistance, minor (12,000 gp)';
            $this->_hoard->cpValue += 12000 * 100;
        }

        return 'Ring of ' . $this->_ring;
    }
}