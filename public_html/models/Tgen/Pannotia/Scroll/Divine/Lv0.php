<?php
class Tgen_Pannotia_Scroll_Divine_Lv0 extends Tgen_Pannotia_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 93) {
            $this->_item = 'virtue (12 gp 5 sp)';
        } elseif ($d100 > 86) {
            $this->_item = 'resistance (12 gp 5 sp)';
        } elseif ($d100 > 79) {
            $this->_item = 'read magic (12 gp 5 sp)';
        } elseif ($d100 > 72) {
            $this->_item = 'purify food and drink (12 gp 5 sp)';
        } elseif ($d100 > 65) {
            $this->_item = 'mending (12 gp 5 sp)';
        } elseif ($d100 > 57) {
            $this->_item = 'light (12 gp 5 sp)';
        } elseif ($d100 > 50) {
            $this->_item = 'know direction (12 gp 5 sp)';
        } elseif ($d100 > 43) {
            $this->_item = 'inflict minor wounds (12 gp 5 sp)';
        } elseif ($d100 > 36) {
            $this->_item = 'guidance (12 gp 5 sp)';
        } elseif ($d100 > 29) {
            $this->_item = 'flare (12 gp 5 sp)';
        } elseif ($d100 > 22) {
            $this->_item = 'detect poison (12 gp 5 sp)';
        } elseif ($d100 > 14) {
            $this->_item = 'detect magic (12 gp 5 sp)';
        } elseif ($d100 > 7) {
            $this->_item = 'cure minor wounds (12 gp 5 sp)';
        } else {
            $this->_item = 'create water (12 gp 5 sp)';
        }

        $this->_hoard->cpValue += 125 * 10;
        return $this->_item;
    }
}