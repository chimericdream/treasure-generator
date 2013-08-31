<?php
class Tgen_Pannotia_Scroll extends Tgen_Pannotia {
    protected $_hoard  = null;
    protected $_item   = null;
    protected $_scroll = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generateMinor() {
        $this->_getScrollType();
        $this->_item = $this->_scroll->generateMinor();
        unset($this->_scroll);
        return $this->_item;
    } // end _generate()

    public function generateMedium() {
        $this->_getScrollType();
        $this->_item = $this->_scroll->generateMedium();
        unset($this->_scroll);
        return $this->_item;
    } // end _generate()

    public function generateMajor() {
        $this->_getScrollType();
        $this->_item = $this->_scroll->generateMajor();
        unset($this->_scroll);
        return $this->_item;
    } // end _generate()

    protected function _getScrollType() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 70) { // Divine Scroll
            $this->_scroll = new Tgen_Pannotia_Scroll_Divine($this->_hoard);
        } else { // Arcane Scroll
            $this->_scroll = new Tgen_Pannotia_Scroll_Arcane($this->_hoard);
        }
    }

    protected function _getEnergyType() {
        $dieRoll = $this->_getDieRoll(1, 5);
        if ($dieRoll == 1) {
            return 'acid';
        } elseif ($dieRoll == 2) {
            return 'cold';
        } elseif ($dieRoll == 3) {
            return 'electricity';
        } elseif ($dieRoll == 4) {
            return 'fire';
        } else {
            return 'sonic';
        }
    }

    protected function _getAlignment() {
        $dieRoll = $this->_getDieRoll(1, 4);
        if ($dieRoll == 1) {
            return 'good';
        } else if ($dieRoll == 2) {
            return 'evil';
        } else if ($dieRoll == 3) {
            return 'law';
        } else {
            return 'chaos';
        }
    }
}