<?php
class Tgen_DnD_35_DMG_Scroll_Divine_Lv2 extends Tgen_DnD_35_DMG_Scroll_Divine {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $this->_item = 'zone of truth (150 gp)';
        } elseif ($d100 > 97) {
            $this->_item = 'wood shape (150 gp)';
        } elseif ($d100 > 95) {
            $this->_item = 'warp wood (150 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'undetectable alignment (150 gp)';
        } elseif ($d100 > 92) {
            $this->_item = 'tree shape (150 gp)';
        } elseif ($d100 > 90) {
            $this->_item = 'summon swarm (150 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'summon nature\'s ally II (150 gp)';
        } elseif ($d100 > 86) {
            $this->_item = 'summon monster II (150 gp)';
        } elseif ($d100 > 85) {
            $this->_item = 'status (150 gp)';
        } elseif ($d100 > 83) {
            $this->_item = 'spiritual weapon (150 gp)';
        } elseif ($d100 > 81) {
            $this->_item = 'spider climb (150 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'speak with plants (150 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'sound burst (150 gp)';
        } elseif ($d100 > 77) {
            $this->_item = 'soften earth and stone (150 gp)';
        } elseif ($d100 > 76) {
            $this->_item = 'snare (150 gp)';
        } elseif ($d100 > 74) {
            $this->_item = 'silence (150 gp)';
        } elseif ($d100 > 72) {
            $this->_item = 'shield other (150 gp)';
        } elseif ($d100 > 70) {
            $this->_item = 'shatter (150 gp)';
        } elseif ($d100 > 67) {
            $this->_item = 'restoration, lesser (150 gp)';
        } elseif ($d100 > 64) {
            $energyType = $this->_getEnergyType();
            $this->_item = "resist {$energyType} (150 gp)";
        } elseif ($d100 > 62) {
            $this->_item = 'remove paralysis (150 gp)';
        } elseif ($d100 > 61) {
            $this->_item = 'reduce animal (150 gp)';
        } elseif ($d100 > 58) {
            $this->_item = 'owl\'s wisdom (150 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'make whole (150 gp)';
        } elseif ($d100 > 54) {
            $this->_item = 'inflict moderate wounds (150 gp)';
        } elseif ($d100 > 51) {
            $this->_item = 'hold person (150 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'hold animal (150 gp)';
        } elseif ($d100 > 48) {
            $this->_item = 'heat metal (150 gp)';
        } elseif ($d100 > 47) {
            $this->_item = 'gust of wind (150 gp)';
        } elseif ($d100 > 46) {
            $this->_item = 'gentle repose (150 gp)';
        } elseif ($d100 > 44) {
            $this->_item = 'fog cloud (150 gp)';
        } elseif ($d100 > 42) {
            $this->_item = 'flaming sphere (150 gp)';
        } elseif ($d100 > 40) {
            $this->_item = 'flame blade (150 gp)';
        } elseif ($d100 > 39) {
            $this->_item = 'fire trap (175 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 37) {
            $this->_item = 'find traps (150 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'enthrall (150 gp)';
        } elseif ($d100 > 32) {
            $this->_item = 'eagle\'s splendor (150 gp)';
        } elseif ($d100 > 30) {
            $this->_item = 'desecrate (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 27) {
            $this->_item = 'delay poison (150 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'death knell (150 gp)';
        } elseif ($d100 > 24) {
            $this->_item = 'darkness (150 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'cure moderate wounds (150 gp)';
        } elseif ($d100 > 18) {
            $this->_item = 'consecrate (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 17) {
            $this->_item = 'chill metal (150 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'cat\'s grace (150 gp)';
        } elseif ($d100 > 12) {
            $this->_item = 'calm emotions (150 gp)';
        } elseif ($d100 > 9) {
            $this->_item = 'bull\'s strength (150 gp)';
        } elseif ($d100 > 6) {
            $this->_item = 'bear\'s endurance (150 gp)';
        } elseif ($d100 > 4) {
            $this->_item = 'barkskin (150 gp)';
        } elseif ($d100 > 2) {
            $this->_item = 'augury (175 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 1) {
            $this->_item = 'animal trance (150 gp)';
        } else {
            $this->_item = 'animal messenger (150 gp)';
        }

        $this->_hoard->cpValue += 150 * 100;
        return $this->_item;
    }
}