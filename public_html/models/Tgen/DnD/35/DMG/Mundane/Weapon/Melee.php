<?php
class Tgen_DnD_35_Mundane_Weapon_Melee extends Tgen_DnD_35_Mundane_Weapon {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $size = $this->_getSize();
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 89) {
            $price = ($size[1] * 30);
            $this->_item = 'Waraxe, dwarven';
        } elseif ($d100 > 84) {
            $price = ($size[1] * 10);
            $this->_item = 'Sword, short';
        } elseif ($d100 > 74) {
            $price = ($size[1] * 35);
            $this->_item = 'Sword, bastard';
        } elseif ($d100 > 70) {
            $price = ($size[1] * 3);
            $this->_item = 'Siangham';
        } elseif ($d100 > 66) {
            $price = ($size[1] * 2);
            $this->_item = 'Shortspear';
        } elseif ($d100 > 61) {
            $price = ($size[1] * 15);
            $this->_item = 'Scimitar';
        } elseif ($d100 > 57) {
            $price = ($size[1] * 20);
            $this->_item = 'Rapier';
        } elseif ($d100 > 54) {
            $price = ($size[1] * 0) + 300;
            $this->_item = 'Quarterstaff';
        } elseif ($d100 > 50) {
            $price = ($size[1] * 2);
            $this->_item = 'Nunchaku';
        } elseif ($d100 > 45) {
            $price = ($size[1] * 12);
            $this->_item = 'Mace, heavy';
        } elseif ($d100 > 41) {
            $price = ($size[1] * 5);
            $this->_item = 'Mace, light';
        } elseif ($d100 > 28) {
            $price = ($size[1] * 15);
            $this->_item = 'Longsword';
        } elseif ($d100 > 24) {
            $price = ($size[1] * 2);
            $this->_item = 'Kama';
        } elseif ($d100 > 14) {
            $price = ($size[1] * 50);
            $this->_item = 'Greatsword';
        } elseif ($d100 > 4) {
            $price = ($size[1] * 20);
            $this->_item = 'Greataxe';
        } else {
            $price = ($size[1] * 2);
            $this->_item = 'Dagger';
        }


        $price += 300;
        $this->_hoard->cpValue += ($price * 100);
        $this->_item = $size[0] . ' Masterwork ' . $this->_item . ' (' . $price . ' gp)';

        return $this->_item;
    }
}