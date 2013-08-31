<?php
class Tgen_DnD_35_DMG_Medium_Staff extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard  = null;
    protected $_staff = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 95) {
            $this->_staff = 'Defense (58,250 gp)';
            $this->_hoard->cpValue += 58250 * 100;
        } elseif ($d100 > 90) {
            $this->_staff = 'Frost (56,250 gp)';
            $this->_hoard->cpValue += 56250 * 100;
        } elseif ($d100 > 75) {
            $this->_staff = 'Illumination (48,250 gp)';
            $this->_hoard->cpValue += 48250 * 100;
        } elseif ($d100 > 60) {
            $this->_staff = 'Size alteration (29,000 gp)';
            $this->_hoard->cpValue += 29000 * 100;
        } elseif ($d100 > 40) {
            $this->_staff = 'Healing (27,750 gp)';
            $this->_hoard->cpValue += 27750 * 100;
        } elseif ($d100 > 30) {
            $this->_staff = 'Swarming insects (24,750 gp)';
            $this->_hoard->cpValue += 24750 * 100;
        } elseif ($d100 > 15) {
            $this->_staff = 'Fire (17,750 gp)';
            $this->_hoard->cpValue += 17750 * 100;
        } else {
            $this->_staff = 'Charming (16,500 gp)';
            $this->_hoard->cpValue += 16500 * 100;
        }

        return 'Staff of ' . $this->_staff;
    }
}