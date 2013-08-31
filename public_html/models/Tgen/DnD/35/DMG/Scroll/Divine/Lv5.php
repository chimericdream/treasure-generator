<?php
class Tgen_DnD_35_DMG_Scroll_Divine_Lv5 extends Tgen_DnD_35_DMG_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_item = 'wall of thorns (1,125 gp)';
        } elseif ($d100 > 94) {
            $this->_item = 'wall of stone (1,125 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'wall of fire (1,125 gp)';
        } elseif ($d100 > 89) {
            $this->_item = 'unhallow (6,125 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 85) {
            $this->_item = 'true seeing (1,375 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 82) {
            $this->_item = 'transmute rock to mud (1,125 gp)';
        } elseif ($d100 > 79) {
            $this->_item = 'transmute mud to rock (1,125 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'symbol of sleep (2,125 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 77) {
            $this->_item = 'symbol of pain (2,125 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 74) {
            $this->_item = 'summon nature\'s ally V (1,125 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'summon monster V (1,125 gp)';
        } elseif ($d100 > 69) {
            $this->_item = 'stoneskin (1,375 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 66) {
            $this->_item = 'spell resistance (1,125 gp)';
        } elseif ($d100 > 63) {
            $this->_item = 'slay living (1,125 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'scrying (1,125 gp)';
        } elseif ($d100 > 58) {
            $this->_item = 'righteous might (1,125 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'raise dead (6,125 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 53) {
            $this->_item = 'plane shift (1,125 gp)';
        } elseif ($d100 > 52) {
            $this->_item = 'mark of justice (1,125 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'insect plague (1,125 gp)';
        } elseif ($d100 > 46) {
            $this->_item = 'inflict light wounds, mass (1,125 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'ice storm (1,125 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'hallow (6,125 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 38) {
            $this->_item = 'flame strike (1,125 gp)';
        } elseif ($d100 > 34) {
            $this->_item = 'disrupting weapon (1,125 gp)';
        } elseif ($d100 > 30) {
            $alignment = $this->_getAlignment();
            $this->_item = "dispel {$alignment} (1,125 gp)";
        } elseif ($d100 > 24) {
            $this->_item = 'cure light wounds, mass (1,125 gp)';
        } elseif ($d100 > 22) {
            $this->_item = 'control winds (1,125 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'commune with nature (1,125 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'commune (1,625 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 16) {
            $this->_item = 'command, greater (1,125 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'call lightning storm (1,125 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'break enchantment (1,125 gp)';
        } elseif ($d100 > 6) {
            $this->_item = 'baleful polymorph (1,125 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'awaken (2,375 gp)';
            $this->_hoard->cpValue += 1250 * 100;
        } elseif ($d100 > 3) {
            $this->_item = 'atonment (3,625 gp)';
            $this->_hoard->cpValue += 2500 * 100;
        } else {
            $this->_item = 'animal growth (1,125 gp)';
        }

        $this->_hoard->cpValue += 1125 * 100;
        return $this->_item;
    }
}