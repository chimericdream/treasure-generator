<?php
class Tgen_Pannotia_Medium extends Tgen_Pannotia {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 83) { // Wondrous Items
            $wondrous = new Tgen_Pannotia_Medium_Wondrous($this->_hoard);
            $this->_item = $wondrous->generate();
            unset($wondrous);
        } elseif ($d100 > 68) { // Wands
            $wands = new Tgen_Pannotia_Medium_Wand($this->_hoard);
            $this->_item = $wands->generate();
            unset($wands);
        } elseif ($d100 > 65) { // Staffs
            $staffs = new Tgen_Pannotia_Medium_Staff($this->_hoard);
            $this->_item = $staffs->generate();
            unset($staffs);
        } elseif ($d100 > 50) { // Scrolls
            $scroll = new Tgen_Pannotia_Scroll($this->_hoard);
            $this->_item = $scroll->generateMedium();
            unset($scroll);
        } elseif ($d100 > 40) { // Rods
            $rods = new Tgen_Pannotia_Medium_Rod($this->_hoard);
            $this->_item = $rods->generate();
            unset($rods);
        } elseif ($d100 > 30) { // Rings
            $ring = new Tgen_Pannotia_Medium_Ring($this->_hoard);
            $this->_item = $ring->generate();
            unset($ring);
        } elseif ($d100 > 20) { // Potions
            $potion = new Tgen_Pannotia_Medium_Potion($this->_hoard);
            $this->_item = $potion->generate();
            unset($potion);
        } elseif ($d100 > 10) { // Weapons
            $weapon = new Tgen_Pannotia_Medium_Weapon($this->_hoard);
            $this->_item = $weapon->generate();
            unset($weapon);
        } else { // Armor & Shields
            $armor = new Tgen_Pannotia_Medium_Armor($this->_hoard);
            $this->_item = $armor->generate();
            unset($armor);
        }
        return $this->_item;
    } // end _generate()
}