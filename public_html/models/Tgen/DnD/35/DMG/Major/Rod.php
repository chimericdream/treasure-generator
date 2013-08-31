<?php
class Tgen_DnD_35_DMG_Major_Rod extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard  = null;
    protected $_rod = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
	if ($d100 > 99) {
		$this->_rod = 'Metamagic, Quicken, greater (170,000 gp)';
		$this->_hoard->cpValue += 170000 * 100;
	} elseif ($d100 > 98) {
		$this->_rod = 'Metamagic, Maximize, greater (121,500 gp)';
		$this->_hoard->cpValue += 121500 * 100;
	} elseif ($d100 > 96) {
		$this->_rod = 'Alertness (85,000 gp)';
		$this->_hoard->cpValue += 85000 * 100;
	} elseif ($d100 > 94) {
		$this->_rod = 'Metamagic, Quicken (75,500 gp)';
		$this->_hoard->cpValue += 75500 * 100;
	} elseif ($d100 > 92) {
		$this->_rod = 'Metamagic, Empower, greater (73,000 gp)';
		$this->_hoard->cpValue += 73000 * 100;
	} elseif ($d100 > 90) {
		$this->_rod = 'Lordly might (70,000 gp)';
		$this->_hoard->cpValue += 70000 * 100;
	} elseif ($d100 > 88) {
		$this->_rod = 'Security (61,000 gp)';
		$this->_hoard->cpValue += 61000 * 100;
	} elseif ($d100 > 86) {
		$this->_rod = 'Rulership (60,000 gp)';
		$this->_hoard->cpValue += 60000 * 100;
	} elseif ($d100 > 84) {
		$this->_rod = 'Metamagic, Maximize (54,000 gp)';
		$this->_hoard->cpValue += 54000 * 100;
	} elseif ($d100 > 80) {
		$this->_rod = 'Flailing (50,000 gp)';
		$this->_hoard->cpValue += 50000 * 100;
	} elseif ($d100 > 77) {
		$this->_rod = 'Absorption (50,000 gp)';
		$this->_hoard->cpValue += 50000 * 100;
	} elseif ($d100 > 73) {
		$this->_rod = 'Negation (37,000 gp)';
		$this->_hoard->cpValue += 37000 * 100;
	} elseif ($d100 > 69) {
		$this->_rod = 'Metamagic, Quicken, lesser (35,000 gp)';
		$this->_hoard->cpValue += 35000 * 100;
	} elseif ($d100 > 64) {
		$this->_rod = 'Thunder and lightning (33,000 gp)';
		$this->_hoard->cpValue += 33000 * 100;
	} elseif ($d100 > 58) {
		$this->_rod = 'Metamagic, Empower (32,500 gp)';
		$this->_hoard->cpValue += 32500 * 100;
	} elseif ($d100 > 53) {
		$this->_rod = 'Withering (25,000 gp)';
		$this->_hoard->cpValue += 25000 * 100;
	} elseif ($d100 > 48) {
		$this->_rod = 'Splendor (25,000 gp)';
		$this->_hoard->cpValue += 25000 * 100;
	} elseif ($d100 > 42) {
		$this->_rod = 'Metamagic, Silent, greater (24,500 gp)';
		$this->_hoard->cpValue += 24500 * 100;
	} elseif ($d100 > 36) {
		$this->_rod = 'Metamagic, Extend, greater (24,500 gp)';
		$this->_hoard->cpValue += 24500 * 100;
	} elseif ($d100 > 30) {
		$this->_rod = 'Metamagic, Enlarge, greater (24,500 gp)';
		$this->_hoard->cpValue += 24500 * 100;
	} elseif ($d100 > 25) {
		$this->_rod = 'Enemy detection (23,500 gp)';
		$this->_hoard->cpValue += 23500 * 100;
	} elseif ($d100 > 21) {
		$this->_rod = 'the Viper (19,000 gp)';
		$this->_hoard->cpValue += 19000 * 100;
	} elseif ($d100 > 18) {
		$this->_rod = 'Flame extinguishing (15,000 gp)';
		$this->_hoard->cpValue += 15000 * 100;
	} elseif ($d100 > 14) {
		$this->_rod = 'the Python (13,000 gp)';
		$this->_hoard->cpValue += 13000 * 100;
	} elseif ($d100 > 10) {
		$this->_rod = 'Wonder (12,000 gp)';
		$this->_hoard->cpValue += 12000 * 100;
	} elseif ($d100 > 8) {
		$this->_rod = 'Metamagic, Silent (11,000 gp)';
		$this->_hoard->cpValue += 11000 * 100;
	} elseif ($d100 > 6) {
		$this->_rod = 'Metamagic, Extend (11,000 gp)';
		$this->_hoard->cpValue += 11000 * 100;
	} elseif ($d100 > 4) {
		$this->_rod = 'Metamagic, Enlarge (11,000 gp)';
		$this->_hoard->cpValue += 11000 * 100;
	} else {
		$this->_rod = 'Cancellation (11,000 gp)';
		$this->_hoard->cpValue += 11000 * 100;
	}

        return 'Rod of ' . $this->_rod;
    }
}