<?php
class Tgen_DnD_35_DMG_Scroll_Divine extends Tgen_DnD_35_DMG_Scroll {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generateMinor() {
        $dieRoll = $this->_getDieRoll(1, 3);
        $scrolls = array();
        for ($i = 1; $i <= $dieRoll; $i++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) { // 3rd Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv3($this->_hoard);
            } elseif ($d100 > 50) { // 2nd Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv2($this->_hoard);
            } elseif ($d100 > 5) { // 1st Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv1($this->_hoard);
            } else { // 0 Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv0($this->_hoard);
            }
            $scrolls[] = $spells->generate();
            unset($spells);
        }
        $this->_item = 'Divine scroll(s) of: ' . implode('; ', $scrolls);

        return $this->_item;
    } // end generateMinor()

    public function generateMedium() {
        $dieRoll = $this->_getDieRoll(1, 4);
        $scrolls = array();
        for ($i = 1; $i <= $dieRoll; $i++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) { // 5th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv5($this->_hoard);
            } elseif ($d100 > 65) { // 4th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv4($this->_hoard);
            } elseif ($d100 > 5) { // 3rd Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv3($this->_hoard);
            } else { // 2nd Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv2($this->_hoard);
            }
            $scrolls[] = $spells->generate();
            unset($spells);
        }
        $this->_item = 'Divine scroll(s) of: ' . implode('; ', $scrolls);

        return $this->_item;
    } // end generateMedium()

    public function generateMajor() {
        $dieRoll = $this->_getDieRoll(1, 6);
        $scrolls = array();
        for ($i = 1; $i <= $dieRoll; $i++) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 95) { // 9th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv9($this->_hoard);
            } elseif ($d100 > 85) { // 8th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv8($this->_hoard);
            } elseif ($d100 > 70) { // 7th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv7($this->_hoard);
            } elseif ($d100 > 50) { // 6th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv6($this->_hoard);
            } elseif ($d100 > 5) { // 5th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv5($this->_hoard);
            } else { // 4th Level spells
                $spells = new Tgen_DnD_35_DMG_Scroll_Divine_Lv4($this->_hoard);
            }
            $scrolls[] = $spells->generate();
            unset($spells);
        }
        $this->_item = 'Divine scroll(s) of: ' . implode('; ', $scrolls);

        return $this->_item;
    } // end generateMajor()
}