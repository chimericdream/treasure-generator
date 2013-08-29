<?php
class Tgen_DnD_35_Minor extends Tgen_DnD_35 {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 91) { // Wondrous Items
            $wondrous = new Tgen_DnD_35_Minor_Wondrous($this->_hoard);
            $this->_item = $wondrous->generate();
            unset($wondrous);
        } elseif ($d100 > 81) { // Wands
            $wands = new Tgen_DnD_35_Minor_Wand($this->_hoard);
            $this->_item = $wands->generate();
            unset($wands);
        } elseif ($d100 > 46) { // Scrolls
            $scroll = new Tgen_DnD_35_Scroll($this->_hoard);
            $this->_item = $scroll->generateMinor();
            unset($scroll);
        } elseif ($d100 > 44) { // Rings
            $ring = new Tgen_DnD_35_Minor_Ring($this->_hoard);
            $this->_item = $ring->generate();
            unset($ring);
        } elseif ($d100 > 9) { // Potions
            $potion = new Tgen_DnD_35_Minor_Potion($this->_hoard);
            $this->_item = $potion->generate();
            unset($potion);
        } elseif ($d100 > 4) { // Weapons
            $weapon = new Tgen_DnD_35_Minor_Weapon($this->_hoard);
            $this->_item = $weapon->generate();
            unset($weapon);
        } else { // Armor & Shields
            $armor = new Tgen_DnD_35_Minor_Armor($this->_hoard);
            $this->_item = $armor->generate();
            unset($armor);
        }
        return $this->_item;
    } // end _generate()
}