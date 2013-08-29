<?php
class Tgen_DnD_35_Mundane_Armor extends Tgen_DnD_35_Mundane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $size = $this->_getSize();
        $d100 = $this->_getDieRoll(1, 100);
        $this->_item = $size[0] . ' ';
        if ($d100 > 90) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 83) {
                $price = ($size[1] * 20) + 150;
                $this->_item .= 'Masterwork heavy steel shield';
            } elseif ($d100 > 60) {
                $price = ($size[1] * 7) + 150;
                $this->_item .= 'Masterwork heavy wooden shield';
                $this->_hoard->cpValue += ($size[1] * 157) * 100;
            } elseif ($d100 > 40) {
                $price = ($size[1] * 9) + 150;
                $this->_item .= 'Masterwork light steel shield';
                $this->_hoard->cpValue += ($size[1] * 159) * 100;
            } elseif ($d100 > 17) {
                $price = ($size[1] * 3) + 150;
                $this->_item .= 'Masterwork light wooden shield';
                $this->_hoard->cpValue += ($size[1] * 153) * 100;
            } else {
                $price = ($size[1] * 15) + 150;
                $this->_item .= 'Masterwork buckler';
            }
        } elseif ($d100 > 80) {
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 50) {
                $price = $size[1] * 257;
                $this->_item .= 'Darkwood shield';
            } else {
                $price = $size[1] * 205;
                $this->_item .= 'Darkwood buckler';
            }
        } elseif ($d100 > 54) {
            $price = $size[1] * 1500;
            $this->_item .= 'Full plate';
        } elseif ($d100 > 34) {
            $price = $size[1] * 600;
            $this->_item .= 'Half-plate';
        } elseif ($d100 > 26) {
            $price = $size[1] * 250;
            $this->_item .= 'Banded mail';
        } elseif ($d100 > 18) {
            $price = $size[1] * 200;
            $this->_item .= 'Breastplate';
        } elseif ($d100 > 12) {
            $price = ($size[1] * 25) + 150;
            $this->_item .= 'Masterwork studded leather';
        } else {
            $price = $size[1] * 100;
            $this->_item .= 'Chain shirt';
        }

        $this->_hoard->cpValue += $price * 100;
        $this->_item = $this->_item . ' (' . $price . ' gp)';

        return $this->_item;
    }
}