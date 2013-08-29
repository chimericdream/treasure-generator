<?php
class Tgen_DnD_35_Minor_Ring extends Tgen_DnD_35_Minor {
    protected $_hoard  = null;
    protected $_ring = null;
    
    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }
    
    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_ring = 'Water walking (15,000 gp)';
            $this->_hoard->cpValue += 15000 * 100;
        } elseif ($d100 > 96) {
            $this->_ring = 'Chameleon power (12,700 gp)';
            $this->_hoard->cpValue += 12700 * 100;
        } elseif ($d100 > 93) {
            $this->_ring = 'Energy resistance, minor (12,000 gp)';
            $this->_hoard->cpValue += 12000 * 100;
        } elseif ($d100 > 90) {
            $this->_ring = 'Animal friendship (10,800 gp)';
            $this->_hoard->cpValue += 10800 * 100;
        } elseif ($d100 > 85) {
            $this->_ring = 'the Ram (8,600 gp)';
            $this->_hoard->cpValue += 8600 * 100;
        } elseif ($d100 > 80) {
            $this->_ring = 'Force shield (8,500 gp)';
            $this->_hoard->cpValue += 8500 * 100;
        } elseif ($d100 > 75) {
            $this->_ring = 'Protection +2 (8,000 gp)';
            $this->_hoard->cpValue += 8000 * 100;
        } elseif ($d100 > 70) {
            $this->_ring = 'Mind shielding (8,000 gp)';
            $this->_hoard->cpValue += 8000 * 100;
        } elseif ($d100 > 60) {
            $this->_ring = 'Counterspells (4,000 gp)';
            $this->_hoard->cpValue += 4000 * 100;
        } elseif ($d100 > 52) {
            $this->_ring = 'Swimming (2,500 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } elseif ($d100 > 44) {
            $this->_ring = 'Jumping (2,500 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } elseif ($d100 > 36) {
            $this->_ring = 'Climbing (2,500 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } elseif ($d100 > 28) {
            $this->_ring = 'Sustenance (2,500 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } elseif ($d100 > 18) {
            $this->_ring = 'Feather falling (2,200 gp)';
            $this->_hoard->cpValue += 2200 * 100;
        } else {
            $this->_ring = 'Protection +1 (2,000 gp)';
            $this->_hoard->cpValue += 2000 * 100;
        }

        return 'Ring of ' . $this->_ring;
    }
}