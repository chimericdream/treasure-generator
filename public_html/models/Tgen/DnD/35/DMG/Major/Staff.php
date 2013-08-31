<?php
class Tgen_DnD_35_DMG_Major_Staff extends Tgen_DnD_35_DMG_Medium {
    protected $_hoard  = null;
    protected $_staff = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
	if ($d100 > 97) {
		$this->_staff = 'Power (211,000 gp)';
		$this->_hoard->cpValue += 211000 * 100;
	} elseif ($d100 > 92) {
		$this->_staff = 'Passage (170,500 gp)';
		$this->_hoard->cpValue += 170500 * 100;
	} elseif ($d100 > 87) {
		$this->_staff = 'Life (155,750 gp)';
		$this->_hoard->cpValue += 155750 * 100;
	} elseif ($d100 > 82) {
		$this->_staff = 'the Woodlands (101,250 gp)';
		$this->_hoard->cpValue += 101250 * 100;
	} elseif ($d100 > 77) {
		$this->_staff = 'Earth and stone (80,500 gp)';
		$this->_hoard->cpValue += 80500 * 100;
	} elseif ($d100 > 73) {
		$this->_staff = 'Divination (73,500 gp)';
		$this->_hoard->cpValue += 73500 * 100;
	} elseif ($d100 > 68) {
		$this->_staff = 'Transmutation (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 63) {
		$this->_staff = 'Necromancy (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 58) {
		$this->_staff = 'Illusion (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 53) {
		$this->_staff = 'Evocation (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 48) {
		$this->_staff = 'Enchantment (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 43) {
		$this->_staff = 'Conjuration (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 38) {
		$this->_staff = 'Abjuration (65,000 gp)';
		$this->_hoard->cpValue += 65000 * 100;
	} elseif ($d100 > 31) {
		$this->_staff = 'Defense (58,250 gp)';
		$this->_hoard->cpValue += 58250 * 100;
	} elseif ($d100 > 24) {
		$this->_staff = 'Frost (56,250 gp)';
		$this->_hoard->cpValue += 56250 * 100;
	} elseif ($d100 > 19) {
		$this->_staff = 'Illumination (48,250 gp)';
		$this->_hoard->cpValue += 48250 * 100;
	} elseif ($d100 > 17) {
		$this->_staff = 'Size alteration (29,000 gp)';
		$this->_hoard->cpValue += 29000 * 100;
	} elseif ($d100 > 11) {
		$this->_staff = 'Healing (27,750 gp)';
		$this->_hoard->cpValue += 27750 * 100;
	} elseif ($d100 > 9) {
		$this->_staff = 'Swarming insects (24,750 gp)';
		$this->_hoard->cpValue += 24750 * 100;
	} elseif ($d100 > 3) {
		$this->_staff = 'Fire (17,750 gp)';
		$this->_hoard->cpValue += 17750 * 100;
	} else {
		$this->_staff = 'Charming (16,500 gp)';
		$this->_hoard->cpValue += 16500 * 100;
        }

        return 'Staff of ' . $this->_staff;
    }
}