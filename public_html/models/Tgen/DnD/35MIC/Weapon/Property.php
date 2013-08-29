<?php
abstract class Tgen_DnD_35MIC_Weapon_Property extends Tgen_DnD_35MIC_Weapon {
    protected $_baseWeapon = null;

    public function  __construct(Tgen_DnD_3 $hoard, array $baseWeapon) {
        $this->_baseWeapon = $baseWeapon;
        $this->_hoard = $hoard;
    }

    abstract protected function _generateMelee();
    abstract protected function _generateRanged();
} // end Tgen_DnD_35MIC_Weapon_Property