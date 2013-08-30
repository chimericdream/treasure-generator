<?php
class Tgen_DnD_35_DMG_Mundane_Alchemical extends Tgen_DnD_35_DMG_Mundane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 88) {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Thunderstones (' . $die . ' stones, 30 gp each)';
            $this->_hoard->cpValue += ($die * 30) * 100;
        } elseif ($d100 > 74) {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Tanglefoot bags (' . $die . ' bags, 50 gp each)';
            $this->_hoard->cpValue += ($die * 50) * 100;
        } elseif ($d100 > 62) {
            $this->_item = 'Everburning torch (110 gp)';
            $this->_hoard->cpValue += 110 * 100;
        } elseif ($d100 > 48) {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Antitoxin (' . $die . ' doses, 50 gp each)';
            $this->_hoard->cpValue += ($die * 50) * 100;
        } elseif ($d100 > 36) {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Holy water (' . $die . ' flasks, 25 gp each)';
            $this->_hoard->cpValue += ($die * 25) * 100;
        } elseif ($d100 > 24) {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Smokesticks (' . $die . ' sticks, 20 gp each)';
            $this->_hoard->cpValue += ($die * 20) * 100;
        } elseif ($d100 > 12) {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Acid (' . $die . ' flasks, 10 gp each)';
            $this->_hoard->cpValue += ($die * 10) * 100;
        } else {
            $die = $this->_getDieRoll(1, 4);
            $this->_item = 'Alchemists fire (' . $die . ' flasks, 20 gp each)';
            $this->_hoard->cpValue += ($die * 20) * 100;
        }

        return $this->_item;
    }
}