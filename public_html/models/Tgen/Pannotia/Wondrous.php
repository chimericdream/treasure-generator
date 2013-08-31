<?php
class Tgen_Pannotia_Wondrous extends Tgen_Pannotia {
    protected $_hoard     = null;
    protected $_item      = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100) - 1;
        $this->_item = $this->_itemArray[$d100]['desc'];
        $this->_hoard->cpValue += $this->_itemArray[$d100]['price'] * 100;

        return $this->_item;
    }
}