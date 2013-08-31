<?php
class Tgen_DnD_35_DMG_Scroll_Arcane_Lv0 extends Tgen_DnD_35_DMG_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 96) {
            $this->_item = 'touch of fatigue (12 gp 5 sp)';
        } elseif ($d100 > 94) {
            $this->_item = 'summon instrument (12 gp 5 sp)';
        } elseif ($d100 > 87) {
            $this->_item = 'resistance (12 gp 5 sp)';
        } elseif ($d100 > 81) {
            $this->_item = 'read magic (12 gp 5 sp)';
        } elseif ($d100 > 77) {
            $this->_item = 'ray of frost (12 gp 5 sp)';
        } elseif ($d100 > 72) {
            $this->_item = 'prestidigitation (12 gp 5 sp)';
        } elseif ($d100 > 67) {
            $this->_item = 'open/close (12 gp 5 sp)';
        } elseif ($d100 > 62) {
            $this->_item = 'message (12 gp 5 sp)';
        } elseif ($d100 > 57) {
            $this->_item = 'mending (12 gp 5 sp)';
        } elseif ($d100 > 52) {
            $this->_item = 'mage hand (12 gp 5 sp)';
        } elseif ($d100 > 50) {
            $this->_item = 'lullaby (12 gp 5 sp)';
        } elseif ($d100 > 44) {
            $this->_item = 'light (12 gp 5 sp)';
        } elseif ($d100 > 42) {
            $this->_item = 'know direction (12 gp 5 sp)';
        } elseif ($d100 > 37) {
            $this->_item = 'ghost sound (12 gp 5 sp)';
        } elseif ($d100 > 32) {
            $this->_item = 'flare (12 gp 5 sp)';
        } elseif ($d100 > 28) {
            $this->_item = 'disrupt undead (12 gp 5 sp)';
        } elseif ($d100 > 24) {
            $this->_item = 'detect poison (12 gp 5 sp)';
        } elseif ($d100 > 17) {
            $this->_item = 'detect magic (12 gp 5 sp)';
        } elseif ($d100 > 13) {
            $this->_item = 'daze (12 gp 5 sp)';
        } elseif ($d100 > 8) {
            $this->_item = 'dancing lights (12 gp 5 sp)';
        } elseif ($d100 > 4) {
            $this->_item = 'arcane mark (12 gp 5 sp)';
        } else {
            $this->_item = 'acid splash (12 gp 5 sp)';
        }

        $this->_hoard->cpValue += 125 * 10;

        return $this->_item;
    }
}