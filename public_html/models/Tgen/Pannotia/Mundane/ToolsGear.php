<?php
class Tgen_Pannotia_Mundane_ToolsGear extends Tgen_Pannotia_Mundane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 95) {
            $this->_item = 'Thieve\'s tools, masterwork (50 gp)';
            $this->_hoard->cpValue += 50;
        } elseif ($d100 > 88) {
            $this->_item = 'Musical instrument, masterwork (100 gp)';
            $this->_hoard->cpValue += 100;
        } elseif ($d100 > 81) {
            $this->_item = 'Magnifying glass (100 gp)';
            $this->_hoard->cpValue += 100;
        } elseif ($d100 > 77) {
            $this->_item = 'Hourglass (25 gp)';
            $this->_hoard->cpValue += 25;
        } elseif ($d100 > 73) {
            $this->_item = 'Holy symbol, silver (25 gp)';
            $this->_hoard->cpValue += 25;
        } elseif ($d100 > 68) {
            $this->_item = 'Healer\'s kit (50 gp)';
            $this->_hoard->cpValue += 50;
        } elseif ($d100 > 63) {
            $this->_item = 'Digsuise kit (50 gp)';
            $this->_hoard->cpValue += 50;
        } elseif ($d100 > 58) {
            $this->_item = 'Climber\'s kit (80 gp)';
            $this->_hoard->cpValue += 80;
        } elseif ($d100 > 53) {
            $this->_item = 'Artisan\'s tools, masterwork (55 gp)';
            $this->_hoard->cpValue += 55;
        } elseif ($d100 > 46) {
            $this->_item = 'Spyglass (1,000 gp)';
            $this->_hoard->cpValue += 1000;
        } elseif ($d100 > 43) {
            $this->_item = 'Rope, silk (50 ft.) (10 gp)';
            $this->_hoard->cpValue += 10;
        } elseif ($d100 > 40) {
            $this->_item = 'Mirror, small steel (10 gp)';
            $this->_hoard->cpValue += 10;
        } elseif ($d100 > 35) {
            $this->_item = 'Manacles, masterwork (50 gp)';
            $this->_hoard->cpValue += 50;
        } elseif ($d100 > 28) {
            $this->_item = 'Lock, superior (150 gp)';
            $this->_hoard->cpValue += 150;
        } elseif ($d100 > 21) {
            $this->_item = 'Lock, good (80 gp)';
            $this->_hoard->cpValue += 80;
        } elseif ($d100 > 16) {
            $this->_item = 'Lock, average (40 gp)';
            $this->_hoard->cpValue += 40;
        } elseif ($d100 > 11) {
            $this->_item = 'Lock, simple (20 gp)';
            $this->_hoard->cpValue += 20;
        } elseif ($d100 > 6) {
            $this->_item = 'Lantern, bullseye (12 gp)';
            $this->_hoard->cpValue += 12;
        } elseif ($d100 > 3) {
            $this->_item = 'Crowbar (2 gp)';
            $this->_hoard->cpValue += 2;
        } else {
            $this->_item = 'Backpack, empty (2 gp)';
            $this->_hoard->cpValue += 2;
        }

        return $this->_item;
    }
}