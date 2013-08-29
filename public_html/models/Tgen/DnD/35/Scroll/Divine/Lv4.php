<?php
class Tgen_DnD_35_Scroll_Divine_Lv4 extends Tgen_DnD_35_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'tree stride (700 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'tongues (700 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'summon nature\'s ally IV (700 gp)';
        } elseif ($d100 > 87) {
            $this->_item = 'summon monster IV (700 gp)';
        } elseif ($d100 > 85) {
            $this->_item = 'spike stones (700 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'spell immunity (700 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'sending (700 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'rusting grasp (700 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'restoration (800 gp)';
            $this->_hoard->cpValue += 100 * 100;
        } elseif ($d100 > 69) {
            $this->_item = 'repel vermin (700 gp)';
        } elseif ($d100 > 67) {
            $this->_item = 'reincarnate (700 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'poison (700 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'planar ally, lesser (1,200 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 60) {
            $this->_item = 'nondetection (750 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 57) {
            $this->_item = 'magic weapon, greater (700 gp)';
        } elseif ($d100 > 54) {
            $this->_item = 'inflict critical wounds (700 gp)';
        } elseif ($d100 > 51) {
            $this->_item = 'imbue with spell ability (700 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'holy sword (700 gp)';
        } elseif ($d100 > 47) {
            $this->_item = 'giant vermin (700 gp)';
        } elseif ($d100 > 42) {
            $this->_item = 'freedom of movement (700 gp)';
        } elseif ($d100 > 39) {
            $this->_item = 'divine power (700 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'divination (725 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 34) {
            $this->_item = 'dismissal (700 gp)';
        } elseif ($d100 > 31) {
            $this->_item = 'discern lies (700 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'dimensional anchor (700 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'death ward (700 gp)';
        } elseif ($d100 > 15) {
            $this->_item = 'cure critical wounds (700 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'control water (700 gp)';
        } elseif ($d100 > 11) {
            $this->_item = 'command plants (700 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'break enchantment (700 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'blight (700 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'antiplant shell (700 gp)';
        } else {
            $this->_item = 'air walk (700 gp)';
        }

        $this->_hoard->cpValue += 700 * 100;
        return $this->_item;
    }
}