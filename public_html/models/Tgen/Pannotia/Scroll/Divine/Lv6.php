<?php
class Tgen_Pannotia_Scroll_Divine_Lv6 extends Tgen_Pannotia_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $this->_item = 'word of recall (1,650 gp)';
        } elseif ($d100 > 94) {
            $this->_item = 'wind walk (1,650 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'undeath to death (2,150 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } elseif ($d100 > 88) {
            $this->_item = 'transport via plants (1,650 gp)';
        } elseif ($d100 > 87) {
            $this->_item = 'symbol of persuasion (6,650 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 86) {
            $this->_item = 'symbol of fear (2,650 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 83) {
            $this->_item = 'summon nature\'s ally VI (1,650 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'summon monster VI (1,650 gp)';
        } elseif ($d100 > 77) {
            $this->_item = 'stone tell (1,650 gp)';
        } elseif ($d100 > 74) {
            $this->_item = 'spellstaff (1,650 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'repel wood (1,650 gp)';
        } elseif ($d100 > 69) {
            $this->_item = 'planar ally (2,400 gp)';
            $this->_hoard->cpValue += 750 * 100;
        } elseif ($d100 > 65) {
            $this->_item = 'owl\'s wisdom, mass (1,650 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'move earth (1,650 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'liveoak (1,650 gp)';
        } elseif ($d100 > 58) {
            $this->_item = 'ironwood (1,650 gp)';
        } elseif ($d100 > 55) {
            $this->_item = 'inflict moderate wounds, mass (1,650 gp)';
        } elseif ($d100 > 52) {
            $this->_item = 'heroes\' feast (1,650 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'heal (1,650 gp)';
        } elseif ($d100 > 46) {
            $this->_item = 'harm (1,650 gp)';
        } elseif ($d100 > 45) {
            $this->_item = 'glyph of warding, greater (1,650 gp)';
        } elseif ($d100 > 44) {
            $this->_item = 'geas/quest (1,650 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'forbiddance (4,650 gp)';
            $this->_hoard->cpValue += 3000 * 100;
        } elseif ($d100 > 40) {
            $this->_item = 'fire seeds (1,650 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'find the path (1,650 gp)';
        } elseif ($d100 > 33) {
            $this->_item = 'eagle\'s splendor, mass (1,650 gp)';
        } elseif ($d100 > 29) {
            $this->_item = 'dispel magic, greater (1,650 gp)';
        } elseif ($d100 > 25) {
            $this->_item = 'cure moderate wounds, mass (1,650 gp)';
        } elseif ($d100 > 24) {
            $this->_item = 'create undead (1,650 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'cat\'s grace, mass (1,650 gp)';
        } elseif ($d100 > 16) {
            $this->_item = 'bull\'s strength, mass (1,650 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'blade barrier (1,650 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'bear\'s endurance, mass (1,650 gp)';
        } elseif ($d100 > 6) {
            $this->_item = 'banishment (1,650 gp)';
        } elseif ($d100 > 3) {
            $this->_item = 'antilife shell (1,650 gp)';
        } else {
            $this->_item = 'animate objects (1,650 gp)';
        }

        $this->_hoard->cpValue += 1650 * 100;
        return $this->_item;
    }
}