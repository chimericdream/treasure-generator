<?php
class Tgen_Pannotia_Scroll_Arcane_Lv1 extends Tgen_Pannotia_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'ventriloquism (25 gp)';
        } elseif ($d100 > 96) {
            $this->_item = 'unseen servant (25 gp)';
        } elseif ($d100 > 95) {
            $this->_item = 'undetectable alignment (50 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 93) {
            $this->_item = 'true strike (25 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'floating disk (25 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'summon monster I (25 gp)';
        } elseif ($d100 > 86) {
            $this->_item = 'sleep (25 gp)';
        } elseif ($d100 > 84) {
            $this->_item = 'silent image (25 gp)';
        } elseif ($d100 > 82) {
            $this->_item = 'shocking grasp (25 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'shield (25 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'remove fear (50 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 76) {
            $this->_item = 'reduce person (25 gp)';
        } elseif ($d100 > 74) {
            $this->_item = 'ray of enfeeblement (25 gp)';
        } elseif ($d100 > 66) {
            $alignment = $this->_getAlignment();
            $this->_item = "protection from {$alignment} (25 gp)";
        } elseif ($d100 > 64) {
            $this->_item = 'obscuring mist (25 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'magic aura (25 gp)';
        } elseif ($d100 > 59) {
            $this->_item = 'mount (25 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'magic weapon (25 gp)';
        } elseif ($d100 > 54) {
            $this->_item = 'magic missile (25 gp)';
        } elseif ($d100 > 51) {
            $this->_item = 'mage armor (25 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'jump (25 gp)';
        } elseif ($d100 > 47) {
            $this->_item = 'identify (125 gp)';
            $this->_hoard->cpValue += 100 * 100;
        } elseif ($d100 > 45) {
            $this->_item = 'hypnotism (25 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'hold portal (25 gp)';
        } elseif ($d100 > 41) {
            $this->_item = 'grease (25 gp)';
        } elseif ($d100 > 40) {
            $this->_item = 'feather fall (25 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'expeditious retreat (25 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'erase (25 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'enlarge person (25 gp)';
        } elseif ($d100 > 29) {
            $this->_item = 'endure elements (25 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'disguise self (25 gp)';
        } elseif ($d100 > 24) {
            $this->_item = 'detect undead (25 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'detect secret doors (25 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'cure light wounds (50 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 19) {
            $this->_item = 'confusion, lesser (50 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 16) {
            $this->_item = 'comprehend languages (25 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'color spray (25 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'chill touch (25 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'charm person (25 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'cause fear (25 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'burning hands (25 gp)';
        } elseif ($d100 > 3) {
            $this->_item = 'animate rope (25 gp)';
        } else {
            $this->_item = 'alarm (25 gp)';
        }

        $this->_hoard->cpValue += 25 * 100;
        return $this->_item;
    }
}