<?php
class Tgen_DnD_35_DMG_Medium_Rod extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard  = null;
    protected $_rod = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_rod = 'Metamagic, Quicken, lesser (35,000 gp)';
            $this->_hoard->cpValue += 35000 * 100;
        } elseif ($d100 > 97) {
            $this->_rod = 'Metamagic, Empower (32,500 gp)';
            $this->_hoard->cpValue += 32500 * 100;
        } elseif ($d100 > 89) {
            $this->_rod = 'the Viper (19,000 gp)';
            $this->_hoard->cpValue += 19000 * 100;
        } elseif ($d100 > 83) {
            $this->_rod = 'Flame extinguishing (15,000 gp)';
            $this->_hoard->cpValue += 15000 * 100;
        } elseif ($d100 > 79) {
            $this->_rod = 'Metamagic, Maximize, lesser (14,000 gp)';
            $this->_hoard->cpValue += 14000 * 100;
        } elseif ($d100 > 71) {
            $this->_rod = 'the Python (13,000 gp)';
            $this->_hoard->cpValue += 13000 * 100;
        } elseif ($d100 > 65) {
            $this->_rod = 'Wonder (12,000 gp)';
            $this->_hoard->cpValue += 12000 * 100;
        } elseif ($d100 > 61) {
            $this->_rod = 'Metamagic, Silent (11,000 gp)';
            $this->_hoard->cpValue += 11000 * 100;
        } elseif ($d100 > 57) {
            $this->_rod = 'Metamagic, Extend (11,000 gp)';
            $this->_hoard->cpValue += 11000 * 100;
        } elseif ($d100 > 53) {
            $this->_rod = 'Metamagic, Enlarge (11,000 gp)';
            $this->_hoard->cpValue += 11000 * 100;
        } elseif ($d100 > 42) {
            $this->_rod = 'Cancellation (11,000 gp)';
            $this->_hoard->cpValue += 11000 * 100;
        } elseif ($d100 > 35) {
            $this->_rod = 'Metal and mineral detection (10,500 gp)';
            $this->_hoard->cpValue += 10500 * 100;
        } elseif ($d100 > 28) {
            $this->_rod = 'Metamagic, Empower, lesser (9,000 gp)';
            $this->_hoard->cpValue += 9000 * 100;
        } elseif ($d100 > 21) {
            $this->_rod = 'Immovable (5,000 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 14) {
            $this->_rod = 'Metamagic, Silent, lesser (3,000 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        } elseif ($d100 > 7) {
            $this->_rod = 'Metamagic, Extend, lesser (3,000 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        } else {
            $this->_rod = 'Metamagic, Enlarge, lesser (3,000 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        }

        return 'Rod of ' . $this->_rod;
    }
}