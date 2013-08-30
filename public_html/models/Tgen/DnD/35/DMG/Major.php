<?php
class Tgen_DnD_35_Major extends Tgen_DnD_35 {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 80) { // Wondrous Items
            $wondrous = new Tgen_DnD_35_Major_Wondrous($this->_hoard);
            $this->_item = $wondrous->generate();
            unset($wondrous);
        } elseif ($d100 > 75) { // Wands
            $wands = new Tgen_DnD_35_Major_Wand($this->_hoard);
            $this->_item = $wands->generate();
            unset($wands);
        } elseif ($d100 > 55) { // Staffs
            $staffs = new Tgen_DnD_35_Major_Staff($this->_hoard);
            $this->_item = $staffs->generate();
            unset($staffs);
        } elseif ($d100 > 45) { // Scrolls
            $scroll = new Tgen_DnD_35_Scroll($this->_hoard);
            $this->_item = $scroll->generateMajor();
            unset($scroll);
        } elseif ($d100 > 35) { // Rods
            $rods = new Tgen_DnD_35_Major_Rod($this->_hoard);
            $this->_item = $rods->generate();
            unset($rods);
        } elseif ($d100 > 25) { // Rings
            $ring = new Tgen_DnD_35_Major_Ring($this->_hoard);
            $this->_item = $ring->generate();
            unset($ring);
        } elseif ($d100 > 20) { // Potions
            $potion = new Tgen_DnD_35_Major_Potion($this->_hoard);
            $this->_item = $potion->generate();
            unset($potion);
        } elseif ($d100 > 10) { // Weapons
            $weapon = new Tgen_DnD_35_Major_Weapon($this->_hoard);
            $this->_item = $weapon->generate();
            unset($weapon);
        } else { // Armor & Shields
            $armor = new Tgen_DnD_35_Major_Armor($this->_hoard);
            $this->_item = $armor->generate();
            unset($armor);
        }
        return $this->_item;
    } // end _generate()
}