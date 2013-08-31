<?php
abstract class Tgen_DnD_35_MIC_Armor_Property extends Tgen_DnD_35_MIC_Armor {
    protected $_baseArmor = null;

    public function  __construct(Tgen_DnD_35 $hoard, array $baseArmor) {
        $this->_baseArmor = $baseArmor;
        $this->_hoard = $hoard;
    }

    abstract protected function _generateArmor();
    abstract protected function _generateShield();
} // end Tgen_DnD_35_MIC_Armor_Property