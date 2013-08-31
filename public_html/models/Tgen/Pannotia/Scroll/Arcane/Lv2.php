<?php
class Tgen_Pannotia_Scroll_Arcane_Lv2 extends Tgen_Pannotia_Scroll_Arcane {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_Pannotia $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_item = 'whispering wind (150 gp)';
        } elseif ($d100 > 97) {
            $this->_item = 'web (150 gp)';
        } elseif ($d100 > 96) {
            $this->_item = 'touch of idiocy (150 gp)';
        } elseif ($d100 > 95) {
            $this->_item = 'hideous laughter (150 gp)';
        } elseif ($d100 > 93) {
            $this->_item = 'summon swarm (150 gp)';
        } elseif ($d100 > 91) {
            $this->_item = 'summon monster II (150 gp)';
        } elseif ($d100 > 89) {
            $this->_item = 'spider climb (150 gp)';
        } elseif ($d100 > 88) {
            $this->_item = 'spectral hand (150 gp)';
        } elseif ($d100 > 87) {
            $this->_item = 'sound burst (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 86) {
            $this->_item = 'silence (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 85) {
            $this->_item = 'shatter (150 gp)';
        } elseif ($d100 > 82) {
            $this->_item = 'see invisibility (150 gp)';
        } elseif ($d100 > 80) {
            $this->_item = 'scorching ray (150 gp)';
        } elseif ($d100 > 79) {
            $this->_item = 'scare (150 gp)';
        } elseif ($d100 > 78) {
            $this->_item = 'rope trick (150 gp)';
        } elseif ($d100 > 75) {
            $energyType = $this->_getEnergyType();
            $this->_item = "resist {$energyType} (150 gp)";
        } elseif ($d100 > 73) {
            $this->_item = 'pyrotechnics (150 gp)';
        } elseif ($d100 > 70) {
            $this->_item = 'protection from arrows (150 gp)';
        } elseif ($d100 > 67) {
            $this->_item = 'owl\'s wisdom (150 gp)';
        } elseif ($d100 > 66) {
            $this->_item = 'obscure object (150 gp)';
        } elseif ($d100 > 65) {
            $this->_item = 'misdirection (150 gp)';
        } elseif ($d100 > 63) {
            $this->_item = 'mirror image (150 gp)';
        } elseif ($d100 > 62) {
            $this->_item = 'minor image (150 gp)';
        } elseif ($d100 > 60) {
            $this->_item = 'acid arrow (150 gp)';
        } elseif ($d100 > 59) {
            $this->_item = 'magic mouth (160 gp)';
            $this->_hoard->cpValue += 10 * 100;
        } elseif ($d100 > 58) {
            $this->_item = 'locate object (150 gp)';
        } elseif ($d100 > 56) {
            $this->_item = 'levitate (150 gp)';
        } elseif ($d100 > 55) {
            $this->_item = 'Leomund\'s trap (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 52) {
            $this->_item = 'knock (150 gp)';
        } elseif ($d100 > 49) {
            $this->_item = 'invisibility (150 gp)';
        } elseif ($d100 > 47) {
            $this->_item = 'hypnotic pattern (150 gp)';
        } elseif ($d100 > 46) {
            $this->_item = 'gust of wind (150 gp)';
        } elseif ($d100 > 44) {
            $this->_item = 'glitterdust (150 gp)';
        } elseif ($d100 > 43) {
            $this->_item = 'ghoul touch (150 gp)';
        } elseif ($d100 > 40) {
            $this->_item = 'fox\'s cunning (150 gp)';
        } elseif ($d100 > 39) {
            $this->_item = 'fog cloud (150 gp)';
        } elseif ($d100 > 37) {
            $this->_item = 'flaming sphere (150 gp)';
        } elseif ($d100 > 35) {
            $this->_item = 'false life (150 gp)';
        } elseif ($d100 > 34) {
            $this->_item = 'enthrall (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 31) {
            $this->_item = 'eagle\'s splendor (150 gp)';
        } elseif ($d100 > 29) {
            $this->_item = 'disguise self (150 gp)';
        } elseif ($d100 > 27) {
            $this->_item = 'detect thoughts (150 gp)';
        } elseif ($d100 > 26) {
            $this->_item = 'delay poison (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 25) {
            $this->_item = 'daze monster (150 gp)';
        } elseif ($d100 > 22) {
            $this->_item = 'darkvision (150 gp)';
        } elseif ($d100 > 21) {
            $this->_item = 'darkness (150 gp)';
        } elseif ($d100 > 20) {
            $this->_item = 'cure moderate wounds (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 19) {
            $this->_item = 'continual flame (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 17) {
            $this->_item = 'command undead (150 gp)';
        } elseif ($d100 > 14) {
            $this->_item = 'cat\'s grace (150 gp)';
        } elseif ($d100 > 13) {
            $this->_item = 'calm emotions (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } elseif ($d100 > 10) {
            $this->_item = 'bull\'s strength (150 gp)';
        } elseif ($d100 > 8) {
            $this->_item = 'blur (150 gp)';
        } elseif ($d100 > 6) {
            $this->_item = 'blindnes/deafness (150 gp)';
        } elseif ($d100 > 3) {
            $this->_item = 'bear\'s endurance (150 gp)';
        } elseif ($d100 > 2) {
            $this->_item = 'arcane lock (175 gp)';
            $this->_hoard->cpValue += 25 * 100;
        } elseif ($d100 > 1) {
            $this->_item = 'animal trance (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        } else {
            $this->_item = 'animal messenger (200 gp)';
            $this->_hoard->cpValue += 50 * 100;
        }

        $this->_hoard->cpValue += 150 * 100;
        return $this->_item;
    }
}