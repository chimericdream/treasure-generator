<?php
class Tgen_DnD_35_Mundane_Weapon extends Tgen_DnD_35_Mundane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 70) {
            $item = new Tgen_DnD_35_Mundane_Weapon_Ranged($this->_hoard);
        } elseif ($d100 > 50) {
            $item = new Tgen_DnD_35_Mundane_Weapon_Uncommon($this->_hoard);
        } else {
            $item = new Tgen_DnD_35_Mundane_Weapon_Melee($this->_hoard);
        }

        $this->_item = $item->generate();
        unset($item);

        return $this->_item;
    }
}