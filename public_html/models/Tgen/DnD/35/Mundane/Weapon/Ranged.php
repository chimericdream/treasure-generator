<?php
class Tgen_DnD_35_Mundane_Weapon_Ranged extends Tgen_DnD_35_Mundane_Weapon {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $size = $this->_getSize();
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 95) {
            $price = ($size[1] * 500);
            $this->_item = 'Longbow, composite (+4 Str bonus)';
        } elseif ($d100 > 90) {
            $price = ($size[1] * 400);
            $this->_item = 'Longbow, composite (+3 Str bonus)';
        } elseif ($d100 > 85) {
            $price = ($size[1] * 300);
            $this->_item = 'Longbow, composite (+2 Str bonus)';
        } elseif ($d100 > 80) {
            $price = ($size[1] * 200);
            $this->_item = 'Longbow, composite (+1 Str bonus)';
        } elseif ($d100 > 75) {
            $price = ($size[1]);
            $this->_item = 'Longbow, composite';
        } elseif ($d100 > 65) {
            $price = ($size[1] * 75);
            $this->_item = 'Longbow';
        } elseif ($d100 > 61) {
            $price = ($size[1] * 300);
            $this->_item = 'Sling';
        } elseif ($d100 > 56) {
            $price = ($size[1] * 225);
            $this->_item = 'Shortbow, composite (+2 Str bonus)';
        } elseif ($d100 > 51) {
            $price = ($size[1] * 150);
            $this->_item = 'Shortbow, composite (+1 Str bonus)';
        } elseif ($d100 > 46) {
            $price = ($size[1] * 75);
            $this->_item = 'Shortbow, composite (+0 Str bonus)';
        } elseif ($d100 > 41) {
            $price = ($size[1] * 30);
            $this->_item = 'Shortbow';
        } elseif ($d100 > 39) {
            $price = ($size[1] * 1);
            $this->_item = 'Javelin';
        } elseif ($d100 > 35) {
            $price = ($size[1] * .5);
            $this->_item = 'Dart';
        } elseif ($d100 > 25) {
            $price = ($size[1] * 35);
            $this->_item = 'Crossbow, light';
        } elseif ($d100 > 15) {
            $price = ($size[1] * 50);
            $this->_item = 'Crossbow, heavy';
        } elseif ($d100 > 10) {
            $price = ($size[1] * 8);
            $this->_item = 'Axe, throwing';
        } else {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 80) {
                $price = ($size[1] * 50);
                $this->_item = 'Bullets, sling (50)';
            } elseif ($d100 > 50) {
                $price = ($size[1] * 50);
                $this->_item = 'Bolts, crossbow (50)';
            } else {
                $price = ($size[1] * 50);
                $this->_item = 'Arrows (50)';
            }
        }

        $price += 300;
        $this->_hoard->cpValue += ($price * 100);
        $this->_item = $size[0] . ' Masterwork ' . $this->_item . ' (' . $price . ' gp)';

        return $this->_item;
    }
}