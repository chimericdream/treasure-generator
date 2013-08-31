<?php
class Tgen_Pannotia_Scroll_Divine_Lv1 extends Tgen_Pannotia_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'summon nature\'s ally I (25 gp)';
        } elseif ($d100 > 96) {
            $this->_item = 'summon monster I (25 gp)';
        } elseif ($d100 > 94) {
            $this->_item = 'speak with animals (25 gp)';
        } elseif ($d100 > 92) {
            $this->_item = 'shillelagh (25 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'shield of faith (25 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'sanctuary (25 gp)';
        } elseif ($d100 > 86) {
            $this->_item = 'remove fear (25 gp)';
        } elseif ($d100 > 82) {
            $alignment = $this->_getAlignment();
            $this->_item = "protection from {$alignment} (25 gp)";
        } elseif ($d100 > 80) {
            $this->_item = 'produce flame (25 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'pass without trace (25 gp)';
        } elseif ($d100 > 74) {
            $this->_item = 'obscuring mist (25 gp)';
        } elseif ($d100 > 72) {
            $this->_item = 'magic weapon (25 gp)';
        } elseif ($d100 > 68) {
            $this->_item = 'magic stone (25 gp)';
        } elseif ($d100 > 66) {
            $this->_item = 'magic fang (25 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'longstrider (25 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'jump (25 gp)';
        } elseif ($d100 > 60) {
            $this->_item = 'inflict light wounds (25 gp)';
        } elseif ($d100 > 58) {
            $this->_item = 'hide from undead (25 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'hide from animals (25 gp)';
        } elseif ($d100 > 54) {
            $this->_item = 'goodberry (25 gp)';
        } elseif ($d100 > 52) {
            $this->_item = 'faerie fire (25 gp)';
        } elseif ($d100 > 50) {
            $this->_item = 'entropic shield (25 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'entangle (25 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'endure elements (25 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'doom (25 gp)';
        } elseif ($d100 > 39) {
            $this->_item = 'divine favor (25 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'detect undead (25 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'detect snares and pits (25 gp)';
        } elseif ($d100 > 32) {
            $alignment = $this->_getAlignment();
            $this->_item = "detect {$alignment} (25 gp)";
        } elseif ($d100 > 30) {
            $this->_item = 'detect animals or plants (25 gp)';
        } elseif ($d100 > 28) {
            $this->_item = 'deathwatch (25 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'curse water (50 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 21) {
            $this->_item = 'cure light wounds (25 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'comprehend languages (25 gp)';
        } elseif ($d100 > 16) {
            $this->_item = 'command (25 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'charm animal (25 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'cause fear (25 gp)';
        } elseif ($d100 > 10) {
            $this->_item = 'calm animals (25 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'bless weapon (100 gp)';
            $this->_hoard->cpValue += 75 * 100;
        } elseif ($d100 > 6) {
            $this->_item = 'bless water (50 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 3) {
            $this->_item = 'bless (25 gp)';
        } elseif ($d100 > 1) {
            $this->_item = 'bane (25 gp)';
        } else {
            $this->_item = 'alarm (100 gp)';
            $this->_hoard->cpValue += 75 * 100;
        }

        $this->_hoard->cpValue += 25 * 100;
        return $this->_item;
    }
}