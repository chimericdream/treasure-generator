<?php
class Tgen_DnD_35_DMG_Scroll_Divine_Lv3 extends Tgen_DnD_35_DMG_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'wind wall (375 gp)';
        } elseif ($d100 > 96) {
            $this->_item = 'water walk (375 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'water breathing (375 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'summon nature\'s ally III (375 gp)';
        } elseif ($d100 > 89) {
            $this->_item = 'summon monster III (375 gp)';
        } elseif ($d100 > 87) {
            $this->_item = 'stone shape (375 gp)';
        } elseif ($d100 > 85) {
            $this->_item = 'spike growth (375 gp)';
        } elseif ($d100 > 83) {
            $this->_item = 'speak with plants (375 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'speak with dead (375 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'snare (375 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'sleet storm (375 gp)';
        } elseif ($d100 > 73) {
            $this->_item = 'searing light (375 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'remove disease (375 gp)';
        } elseif ($d100 > 69) {
            $this->_item = 'remove curse (375 gp)';
        } elseif ($d100 > 66) {
            $this->_item = 'remove blindness/deafness (375 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'quench (375 gp)';
        } elseif ($d100 > 62) {
            $energyType = $this->_getEnergyType();
            $this->_item = "protection from {$energyType} (375 gp)";
        } elseif ($d100 > 59) {
            $this->_item = 'prayer (375 gp)';
        } elseif ($d100 > 57) {
            $this->_item = 'plant growth (375 gp)';
        } elseif ($d100 > 55) {
            $this->_item = 'obscure object (375 gp)';
        } elseif ($d100 > 52) {
            $this->_item = 'neutralize poison (375 gp)';
        } elseif ($d100 > 50) {
            $this->_item = 'meld into stone (375 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'magic vestment (375 gp)';
        } elseif ($d100 > 46) {
            $this->_item = 'magic fang, greater (375 gp)';
        } elseif ($d100 > 40) {
            $alignment = $this->_getAlignment();
            $this->_item = "magic circle against {$alignment} (375 gp)";
        } elseif ($d100 > 38) {
            $this->_item = 'locate object (375 gp)';
        } elseif ($d100 > 36) {
            $this->_item = 'invisibility purge (375 gp)';
        } elseif ($d100 > 34) {
            $this->_item = 'inflict serious wounds (375 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'helping hand (375 gp)';
        } elseif ($d100 > 31) {
            $this->_item = 'heal mount (375 gp)';
        } elseif ($d100 > 29) {
            $this->_item = 'glyph of warding (575 gp)';
            $this->_hoard->cpValue += 200 * 100;
        } elseif ($d100 > 27) {
            $this->_item = 'dominate animal (375 gp)';
        } elseif ($d100 > 25) {
            $this->_item = 'dispel magic (375 gp)';
        } elseif ($d100 > 23) {
            $this->_item = 'diminish plants (375 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'deeper darkness (375 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'daylight (375 gp)';
        } elseif ($d100 > 18) {
            $this->_item = 'darkvision (375 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'cure serious wounds (375 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'create food and water (375 gp)';
        } elseif ($d100 > 10) {
            $this->_item = 'continual flame (425 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 8) {
            $this->_item = 'contagion (375 gp)';
        } elseif ($d100 > 6) {
            $this->_item = 'call lightning (375 gp)';
        } elseif ($d100 > 4) {
            $this->_item = 'blindness/deafness (375 gp)';
        } elseif ($d100 > 2) {
            $this->_item = 'bestow curse (375 gp)';
        } else {
            $this->_item = 'animate dead (625 gp)';
            $this->_hoard->cpValue += 250 * 100;
        }

        $this->_hoard->cpValue += 375 * 100;
        return $this->_item;
    }
}