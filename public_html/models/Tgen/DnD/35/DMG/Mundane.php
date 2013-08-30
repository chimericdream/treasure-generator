<?php
class Tgen_DnD_35_Mundane extends Tgen_DnD_35 {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 83) { // Tools & Gear
            $item = new Tgen_DnD_35_Mundane_ToolsGear($this->_hoard);
        } elseif ($d100 > 50) { // Weapons
            $item = new Tgen_DnD_35_Mundane_Weapon($this->_hoard);
        } elseif ($d100 > 17) { // Armor
            $item = new Tgen_DnD_35_Mundane_Armor($this->_hoard);
        } else { // Alchemical Item
            $item = new Tgen_DnD_35_Mundane_Alchemical($this->_hoard);
        }

        $this->_item = $item->generate();
        unset($item);

        return $this->_item;
    } // end _generate()
}