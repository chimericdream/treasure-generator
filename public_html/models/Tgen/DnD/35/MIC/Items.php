<?php
class Tgen_DnD_35_MIC_Items extends Tgen_DnD_35_MIC {
    protected $_item = '';
    protected $_hoard = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    protected function _getEnergyType() {
        $dieRoll = $this->_getDieRoll(1, 5);
        if ($dieRoll == 1) {
            return 'acid';
        } elseif ($dieRoll == 2) {
            return 'cold';
        } elseif ($dieRoll == 3) {
            return 'electricity';
        } elseif ($dieRoll == 4) {
            return 'fire';
        } else {
            return 'sonic';
        }
    }

    protected function _getAlignment() {
        $dieRoll = $this->_getDieRoll(1, 4);
        if ($dieRoll == 1) {
            return 'good';
        } else if ($dieRoll == 2) {
            return 'evil';
        } else if ($dieRoll == 3) {
            return 'law';
        } else {
            return 'chaos';
        }
    }

    protected function _getMagicWeapon($bonus) {
        $baseWeapon = $this->_getBaseWeapon();
        if ($bonus == 1) {
            $weapon = '+1';
        } else {
            $classname = "Tgen_DnD_35_MIC_Weapon_{$bonus}";
            if (class_exists($classname)) {
                $item = new $classname($this);
                $weapon = $item->generate($baseWeapon);
                unset($item);
            }
        }
        return "{$weapon} {$baseWeapon['name']}";
    }

    protected function _getMagicArmor($bonus) {
        $baseArmor = $this->_getBaseArmor();
        if ($bonus == 1) {
            $armor = array(
                'bonus'    => '+1',
                'property' => '',
            );
        } else {
            $classname = "Tgen_DnD_35_MIC_Armor_{$bonus}";
            if (class_exists($classname)) {
                $item = new $classname($this, $baseArmor);
                $armor = $item->generate();
                unset($item);
            }
        }
        $arm = "{$armor['bonus']} {$baseArmor['name']}";
        if ($armor['property'] != '') {
            $arm .= " with {$armor['property']}";
        }
        return $arm;
    }

    protected function _getBaseWeapon() {
        $weapon = new Tgen_DnD_35_MIC_Weapon($this->_hoard);
        $baseWeapon = $weapon->generate();
        return $baseWeapon;
    }

    protected function _getBaseArmor() {
        $armor = new Tgen_DnD_35_MIC_Armor($this->_hoard, array());
        $baseArmor = $armor->generate();
        return $baseArmor;
    }
} // end Tgen_DnD_35_MIC_Items