<?php
class Tgen_DnD_35_Scroll_Arcane_Lv4 extends Tgen_DnD_35_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_item = 'zone of silence (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 96) {
            $this->_item = 'wall of ice (700 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'wall of fire (700 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'summon monster IV (700 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'stoneskin (950 gp)';
            $this->_hoard->cpValue += 250 * 100;
        } elseif ($d100 > 86) {
            $this->_item = 'stone shape (700 gp)';
        } elseif ($d100 > 85) {
            $this->_item = 'speak with plants (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 83) {
            $this->_item = 'solid fog (700 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'shout (700 gp)';
        } elseif ($d100 > 79) {
            $this->_item = 'shadow conjuration (700 gp)';
        } elseif ($d100 > 77) {
            $this->_item = 'scrying (700 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'repel vermin (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 73) {
            $this->_item = 'remove curse (700 gp)';
        } elseif ($d100 > 71) {
            $this->_item = 'reduce person, mass (700 gp)';
        } elseif ($d100 > 70) {
            $this->_item = 'mnemonic enhancer (700 gp)';
        } elseif ($d100 > 68) {
            $this->_item = 'rainbow pattern (700 gp)';
        } elseif ($d100 > 66) {
            $this->_item = 'polymorph (700 gp)';
        } elseif ($d100 > 64) {
            $this->_item = 'phantasmal killer (700 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'resilient sphere (700 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'neutralize poison (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 60) {
            $this->_item = 'modify memory (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 58) {
            $this->_item = 'minor creation (700 gp)';
        } elseif ($d100 > 57) {
            $this->_item = 'locate creature (700 gp)';
        } elseif ($d100 > 55) {
            $this->_item = 'secure shelter (700 gp)';
        } elseif ($d100 > 52) {
            $this->_item = 'invisibility, greater (700 gp)';
        } elseif ($d100 > 50) {
            $this->_item = 'illusory wall (700 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'ice storm (700 gp)';
        } elseif ($d100 > 46) {
            $this->_item = 'hallucinatory terrain (700 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'globe of invulnerability, lesser (700 gp)';
        } elseif ($d100 > 42) {
            $this->_item = 'geas, lesser (700 gp)';
        } elseif ($d100 > 39) {
            $this->_item = 'freedom of movement (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 37) {
            $this->_item = 'fire trap (725 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 34) {
            $this->_item = 'fire shield (700 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'fear (700 gp)';
        } elseif ($d100 > 30) {
            $this->_item = 'black tentacles (700 gp)';
        } elseif ($d100 > 28) {
            $this->_item = 'enlarge person, mass (700 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'enervation (700 gp)';
        } elseif ($d100 > 23) {
            $this->_item = 'dimensional anchor (700 gp)';
        } elseif ($d100 > 19) {
            $this->_item = 'dimension door (700 gp)';
        } elseif ($d100 > 18) {
            $this->_item = 'detect scrying (700 gp)';
        } elseif ($d100 > 17) {
            $this->_item = 'cure critical wounds (1,000 gp)';
            $this->_hoard->cpValue += 300 * 100;
        } elseif ($d100 > 15) {
            $this->_item = 'crushing despair (700 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'contagion (700 gp)';
        } elseif ($d100 > 10) {
            $this->_item = 'confusion (700 gp)';
        } elseif ($d100 > 7) {
            $this->_item = 'charm monster (700 gp)';
        } elseif ($d100 > 5) {
            $this->_item = 'bestow curse (700 gp)';
        } elseif ($d100 > 2) {
            $this->_item = 'arcane eye (700 gp)';
        } else {
            $this->_item = 'animate dead (1,050 gp)';
            $this->_hoard->cpValue += 350 * 100;
        }

        $this->_hoard->cpValue += 700 * 100;
        return $this->_item;
    }
}