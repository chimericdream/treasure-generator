<?php
class Tgen_DnD_35MIC_Armor extends Tgen_DnD_35MIC {
    protected $_hoard = null;
    protected $_baseArmor = null;

    public function __construct(Tgen_DnD_3 $hoard, array $baseArmor) {
        $this->_hoard = $hoard;
        $this->_baseArmor = $baseArmor;
    }

    public function generate() {
        $die = $this->_getDieRoll(1, 100);
        if ($die > 99) {
            $this->_item = array(
                    'name'  => 'Tower shield',
                    'price' => 180,
                    'type'  => 'shield',
            );
        } elseif ($die > 98) {
            $this->_item = array(
                    'name'  => 'Heavy steel shield',
                    'price' => 170,
                    'type'  => 'shield',
            );
        } elseif ($die > 96) {
            $this->_item = array(
                    'name'  => 'Heavy wooden shield',
                    'price' => 157,
                    'type'  => 'shield',
            );
        } elseif ($die > 95) {
            $this->_item = array(
                    'name'  => 'Light steel shield',
                    'price' => 159,
                    'type'  => 'shield',
            );
        } elseif ($die > 93) {
            $this->_item = array(
                    'name'  => 'Light wooden shield',
                    'price' => 153,
                    'type'  => 'shield',
            );
        } elseif ($die > 92) {
            $this->_item = array(
                    'name'  => 'Buckler',
                    'price' => 165,
                    'type'  => 'shield',
            );
        } elseif ($die > 85) {
            $this->_item = array(
                    'name'  => 'Full plate',
                    'price' => 1650,
                    'type'  => 'armor',
            );
        } elseif ($die > 81) {
            $this->_item = array(
                    'name'  => 'Half-plate',
                    'price' => 750,
                    'type'  => 'armor',
            );
        } elseif ($die > 77) {
            $this->_item = array(
                    'name'  => 'Banded mail',
                    'price' => 400,
                    'type'  => 'armor',
            );
        } elseif ($die > 74) {
            $this->_item = array(
                    'name'  => 'Splint mail',
                    'price' => 350,
                    'type'  => 'armor',
            );
        } elseif ($die > 59) {
            $this->_item = array(
                    'name'  => 'Breastplate',
                    'price' => 350,
                    'type'  => 'armor',
            );
        } elseif ($die > 55) {
            $this->_item = array(
                    'name'  => 'Chainmail',
                    'price' => 300,
                    'type'  => 'armor',
            );
        } elseif ($die > 52) {
            $this->_item = array(
                    'name'  => 'Scale mail',
                    'price' => 200,
                    'type'  => 'armor',
            );
        } elseif ($die > 37) {
            $this->_item = array(
                    'name'  => 'Hide armor',
                    'price' => 165,
                    'type'  => 'armor',
            );
        } elseif ($die > 21) {
            $this->_item = array(
                    'name'  => 'Chain shirt',
                    'price' => 250,
                    'type'  => 'armor',
            );
        } elseif ($die > 6) {
            $this->_item = array(
                    'name'  => 'Studded leather armor',
                    'price' => 175,
                    'type'  => 'armor',
            );
        } elseif ($die > 2) {
            $this->_item = array(
                    'name'  => 'Leather armor',
                    'price' => 160,
                    'type'  => 'armor',
            );
        } else {
            $this->_item = array(
                    'name'  => 'Padded armor',
                    'price' => 155,
                    'type'  => 'armor',
            );
        }

        $this->_hoard->cpValue += ($this->_item['price'] * 100);
        return $this->_item;
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
} // end Tgen_DnD_35MIC_Armor