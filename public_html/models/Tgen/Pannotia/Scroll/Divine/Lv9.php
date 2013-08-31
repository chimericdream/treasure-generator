<?php
class Tgen_Pannotia_Scroll_Divine_Lv9 extends Tgen_Pannotia_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_item = 'true resurrection (28,825 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 95) {
            $this->_item = 'sympathy (5,325 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 89) {
            $this->_item = 'summon nature\'s ally IX (3,825 gp)';
        } elseif ($d100 > 83) {
            $this->_item = 'summon monster IX (3,825 gp)';
        } elseif ($d100 > 77) {
            $this->_item = 'storm of vengeance (3,825 gp)';
        } elseif ($d100 > 72) {
            $this->_item = 'soul bind (3,825 gp)';
        } elseif ($d100 > 66) {
            $this->_item = 'shapechange (3,825 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'shambler (3,825 gp)';
        } elseif ($d100 > 55) {
            $this->_item = 'regenerate (3,825 gp)';
        } elseif ($d100 > 53) {
            $this->_item = 'miracle (28,825 gp)';
            $this->_hoard->cpValue += 25000 * 100;
        } elseif ($d100 > 46) {
            $this->_item = 'implosion (3,825 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'heal, mass (3,825 gp)';
        } elseif ($d100 > 31) {
            $this->_item = 'gate (8,825 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 25) {
            $this->_item = 'foresight (3,825 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'etherealness (3,825 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'energy drain (3,825 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'elemental swarm (3,825 gp)';
        } elseif ($d100 > 4) {
            $this->_item = 'astral projection (4,870 gp)';
            $this->_hoard->cpValue += 1045 * 100;
        } else {
            $this->_item = 'antipathy (3,825 gp)';
        }

        $this->_hoard->cpValue += 3825 * 100;
        return $this->_item;
    }
}