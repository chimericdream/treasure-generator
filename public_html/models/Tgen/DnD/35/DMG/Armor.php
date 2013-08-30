<?php
class Tgen_DnD_35_Armor extends Tgen_DnD_35 {
    protected $_hoard    = null;
    protected $_armor    = '';
    protected $bonus     = 1;
    protected $_size     = null;
    protected $baseCost  = 1;
    protected $costMod   = 0;
    protected $basePrice = array(
        1  => 1000,
        2  => 4000,
        3  => 9000,
        4  => 16000,
        5  => 25000,
        6  => 36000,
        7  => 49000,
        8  => 64000,
        9  => 81000,
        10 => 100000,
    );

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    protected function calcArmorCost(&$armor) {
        $armor['cost'] += $this->basePrice[$this->baseCost] + $this->costMod;
        $this->_hoard->cpValue += $armor['cost'] * 100;
    } // end calcArmorCost()

    public function getBaseArmor() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 60) {
            $armor['armor'] = 'Padded armor';
            $armor['cost'] = ($this->_size[1] * 5) + 150;
        } elseif ($d100 > 59) {
            $armor['armor'] = 'Leather armor';
            $armor['cost'] = ($this->_size[1] * 10) + 140;
        } elseif ($d100 > 58) {
            $armor['armor'] = 'Studded leather armor';
            $armor['cost'] = ($this->_size[1] * 25) + 150;
        } elseif ($d100 > 57) {
            $armor['armor'] = 'Chain shirt';
            $armor['cost'] = ($this->_size[1] * 100) + 150;
        } elseif ($d100 > 44) {
            $armor['armor'] = 'Hide armor';
            $armor['cost'] = ($this->_size[1] * 15) + 150;
        } elseif ($d100 > 43) {
            $armor['armor'] = 'Scale mail';
            $armor['cost'] = ($this->_size[1] * 100) + 150;
        } elseif ($d100 > 42) {
            $armor['armor'] = 'Chainmail';
            $armor['cost'] = ($this->_size[1] * 150) + 150;
        } elseif ($d100 > 32) {
            $armor['armor'] = 'Breastplate';
            $armor['cost'] = ($this->_size[1] * 200) + 150;
        } elseif ($d100 > 17) {
            $armor['armor'] = 'Splint mail';
            $armor['cost'] = ($this->_size[1] * 200) + 150;
        } elseif ($d100 > 2) {
            $armor['armor'] = 'Banded mail';
            $armor['cost'] = ($this->_size[1] * 250) + 150;
        } elseif ($d100 > 1) {
            $armor['armor'] = 'Half-plate';
            $armor['cost'] = ($this->_size[1] * 600) + 150;
        } else {
            $armor['armor'] = 'Full plate';
            $armor['cost'] = ($this->_size[1] * 1500) + 150;
        }

        return $armor;
    }

    public function getBaseShield() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 95) {
            $armor['armor'] = 'Buckler';
            $armor['cost'] = ($this->_size[1] * 15) + 150;
        } elseif ($d100 > 30) {
            $armor['armor'] = 'Light wooden shield';
            $armor['cost'] = ($this->_size[1] * 3) + 150;
        } elseif ($d100 > 20) {
            $armor['armor'] = 'Light steel shield';
            $armor['cost'] = ($this->_size[1] * 9) + 150;
        } elseif ($d100 > 15) {
            $armor['armor'] = 'Heavy wooden shield';
            $armor['cost'] = ($this->_size[1] * 7) + 150;
        } elseif ($d100 > 10) {
            $armor['armor'] = 'Heavy steel shield';
            $armor['cost'] = ($this->_size[1] * 20) + 150;
        } else {
            $armor['armor'] = 'Tower shield';
            $armor['cost'] = ($this->_size[1] * 30) + 150;
        }

        return $armor;
    }

    public function _generateCastersShieldScroll() {
        $die = $this->_getDieRoll(1, 2);
        $spell = '';
        if ($die == 1) {
            $die = $this->_getDieRoll(1, 100);
            if ($die > 80) {
                $scroll = new Tgen_DnD_35_Scroll_Arcane($this->_hoard);
            } else {
                $scroll = new Tgen_DnD_35_Scroll_Divine($this->_hoard);
            }
            $spell = 'with a scroll of: ' . $scroll->generateMedium() . ' ';
            $spell = preg_replace('/((Divine|Arcane) scroll\(s\) of: )/', '', $spell);
            $spell = preg_replace('/ \([\d,]+ gp\)/', '', $spell);
            if (preg_match_all('/;/', $spell, $matches) == 1) {
                $spell = preg_replace('/;/', ' and $1', $spell);
            } else {
                $spell = preg_replace('/; ([^;]+) $/', '; and $1', $spell);
            }
            unset($scroll);
        }
        return $spell;
    }
}