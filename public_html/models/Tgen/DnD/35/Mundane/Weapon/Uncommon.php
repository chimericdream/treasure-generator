<?php
class Tgen_DnD_35_Mundane_Weapon_Uncommon extends Tgen_DnD_35_Mundane_Weapon {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $size = $this->_getSize();
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $price = ($size[1] * 1);
            $this->_item = 'Whip';
        } elseif ($d100 > 94) {
            $price = ($size[1] * 12);
            $this->_item = 'Warhammer';
        } elseif ($d100 > 91) {
            $price = ($size[1] * 50) + 300;
            $this->_item = 'Urgrosh, dwarven';
        } elseif ($d100 > 89) {
            $price = ($size[1] * 15);
            $this->_item = 'Trident';
        } elseif ($d100 > 86) {
            $price = ($size[1] * 100) + 300;
            $this->_item = 'Sword, two-bladed';
        } elseif ($d100 > 84) {
            $price = ($size[1] * 6);
            $this->_item = 'Sickle';
        } elseif ($d100 > 82) {
            $price = ($size[1] * 1);
            $this->_item = 'Shuriken';
        } elseif ($d100 > 80) {
            $price = ($size[1] * 18);
            $this->_item = 'Scythe';
        } elseif ($d100 > 78) {
            $price = ($size[1] * 1);
            $this->_item = 'Sap';
        } elseif ($d100 > 76) {
            $price = ($size[1] * 10);
            $this->_item = 'Ranseur';
        } elseif ($d100 > 74) {
            $price = ($size[1] * 4);
            $this->_item = 'Pick, light';
        } elseif ($d100 > 72) {
            $price = ($size[1] * 8);
            $this->_item = 'Pick, heavy';
        } elseif ($d100 > 70) {
            $price = ($size[1] * 20);
            $this->_item = 'Net';
        } elseif ($d100 > 67) {
            $price = ($size[1] * 8);
            $this->_item = 'Morningstar';
        } elseif ($d100 > 64) {
            $price = ($size[1] * 5);
            $this->_item = 'Longspear';
        } elseif ($d100 > 61) {
            $price = ($size[1] * 10);
            $this->_item = 'Lance';
        } elseif ($d100 > 58) {
            $price = ($size[1] * 8);
            $this->_item = 'Kukri';
        } elseif ($d100 > 56) {
            $price = ($size[1] * 6);
            $this->_item = 'Handaxe';
        } elseif ($d100 > 54) {
            $price = ($size[1] * 1);
            $this->_item = 'Hammer, light';
        } elseif ($d100 > 51) {
            $price = ($size[1] * 20) + 300;
            $this->_item = 'Hammer, gnome hooked';
        } elseif ($d100 > 48) {
            $price = ($size[1] * 1);
            $this->_item = 'Halfspear';
        } elseif ($d100 > 45) {
            $price = ($size[1] * 10);
            $this->_item = 'Halberd';
        } elseif ($d100 > 43) {
            $price = ($size[1] * 9);
            $this->_item = 'Guisarme';
        } elseif ($d100 > 41) {
            $price = ($size[1] * 5);
            $this->_item = 'Greatclub';
        } elseif ($d100 > 39) {
            $price = ($size[1] * 8);
            $this->_item = 'Glaive';
        } elseif ($d100 > 37) {
            $price = ($size[1] * 5);
            $this->_item = 'Gauntlet, spiked';
        } elseif ($d100 > 35) {
            $price = ($size[1] * 2);
            $this->_item = 'Gauntlet';
        } elseif ($d100 > 31) {
            $price = ($size[1] * 8);
            $this->_item = 'Flail, light';
        } elseif ($d100 > 26) {
            $price = ($size[1] * 15);
            $this->_item = 'Flail, heavy';
        } elseif ($d100 > 23) {
            $price = ($size[1] * 90) + 300;
            $this->_item = 'Flail, dire';
        } elseif ($d100 > 21) {
            $price = ($size[1] * 75);
            $this->_item = 'Falchion';
        } elseif ($d100 > 19) {
            $price = ($size[1] * 2);
            $this->_item = 'Dagger, punching';
        } elseif ($d100 > 16) {
            $price = ($size[1] * 250);
            $this->_item = 'Crossbow, repeating';
        } elseif ($d100 > 12) {
            $price = ($size[1] * 100);
            $this->_item = 'Crossbow, hand';
        } elseif ($d100 > 10) {
            $price = ($size[1] * 0);
            $this->_item = 'Club';
        } elseif ($d100 > 7) {
            $price = ($size[1] * 25);
            $this->_item = 'Chain, spiked';
        } elseif ($d100 > 3) {
            $price = ($size[1] * 10);
            $this->_item = 'Battleaxe';
        } else {
            $price = (($size[1] * 1) + 300);
            $this->_item = 'Axe, orc double';
        }

        $price += 300;
        $this->_hoard->cpValue += ($price * 100);
        $this->_item = $size[0] . ' Masterwork ' . $this->_item . ' (' . $price . ' gp)';

        return $this->_item;
    }
}