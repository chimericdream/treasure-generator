<?php
class Tgen_DnD_35_Major_Wand extends Tgen_DnD_35_Medium {
    protected $_hoard     = null;
    protected $_wand      = null;

    public function __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_wand = 'Stoneskin (33,500 gp)';
            $this->_hoard->cpValue += 33500 * 100;
        } elseif ($d100 > 97) {
            $this->_wand = 'Restoration (26,000 gp)';
            $this->_hoard->cpValue += 26000 * 100;
        } elseif ($d100 > 96) {
            $this->_wand = 'Unholy blight (8th) (24,000 gp)';
            $this->_hoard->cpValue += 24000 * 100;
        } elseif ($d100 > 95) {
            $this->_wand = 'Order\'s wrath (8th) (24,000 gp)';
            $this->_hoard->cpValue += 24000 * 100;
        } elseif ($d100 > 94) {
            $this->_wand = 'Holy smite (8th) (24,000 gp)';
            $this->_hoard->cpValue += 24000 * 100;
        } elseif ($d100 > 93) {
            $this->_wand = 'Chaos hammer (8th) (24,000 gp)';
            $this->_hoard->cpValue += 24000 * 100;
        } elseif ($d100 > 92) {
            $this->_wand = 'Lightning bolt (10th) (22,500 gp)';
            $this->_hoard->cpValue += 22500 * 100;
        } elseif ($d100 > 91) {
            $this->_wand = 'Fireball (10th) (22,500 gp)';
            $this->_hoard->cpValue += 22500 * 100;
        } elseif ($d100 > 90) {
            $this->_wand = 'Dispel magic (10th) (22,500 gp)';
            $this->_hoard->cpValue += 22500 * 100;
        } elseif ($d100 > 86) {
            $this->_wand = 'Wall of ice (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 82) {
            $this->_wand = 'Wall of fire (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 79) {
            $this->_wand = 'Summon monster IV (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 78) {
            $this->_wand = 'Suggestion, heightened (4th level) (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 77) {
            $this->_wand = 'Ray of enfeeblement, heightened (4th level) (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 74) {
            $this->_wand = 'Polymorph (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 72) {
            $this->_wand = 'Poison (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 68) {
            $this->_wand = 'Neutralize poison (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 65) {
            $this->_wand = 'Inflict critical wounds (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 60) {
            $this->_wand = 'Ice storm (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 59) {
            $this->_wand = 'Hold person, heightened (4th level) (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 55) {
            $this->_wand = 'Greater invisibility (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 52) {
            $this->_wand = 'Fear (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 50) {
            $this->_wand = 'Dimensional anchor (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 45) {
            $this->_wand = 'Cure critical wounds (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 41) {
            $this->_wand = 'Charm monster (21,000 gp)';
            $this->_hoard->cpValue += 21000 * 100;
        } elseif ($d100 > 39) {
            $this->_wand = 'Lightning bolt (8th) (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } elseif ($d100 > 37) {
            $this->_wand = 'Fireball (8th) (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } elseif ($d100 > 35) {
            $this->_wand = 'Call lightning (8th) (18,000 gp)';
            $this->_hoard->cpValue += 18000 * 100;
        } elseif ($d100 > 33) {
            $this->_wand = 'Searing light (6th) (13,500 gp)';
            $this->_hoard->cpValue += 13500 * 100;
        } elseif ($d100 > 31) {
            $this->_wand = 'Lightning bolt (6th) (13,500 gp)';
            $this->_hoard->cpValue += 13500 * 100;
        } elseif ($d100 > 29) {
            $this->_wand = 'Fireball (6th) (13,500 gp)';
            $this->_hoard->cpValue += 13500 * 100;
        } elseif ($d100 > 27) {
            $this->_wand = 'Summon monster III (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 25) {
            $this->_wand = 'Suggestion (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 23) {
            $this->_wand = 'Slow (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 21) {
            $this->_wand = 'Major image (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 19) {
            $this->_wand = 'Lightning bolt (5th) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 17) {
            $this->_wand = 'Keen edge (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 15) {
            $this->_wand = 'Fireball (5th) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 13) {
            $this->_wand = 'Dispel magic (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 10) {
            $this->_wand = 'Cure serious wounds (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 8) {
            $this->_wand = 'Contagion (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 7) {
            $this->_wand = 'Charm person, heightened (3rd-level spell) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 5) {
            $this->_wand = 'Call lightning (5th) (11,250 gp)';
            $this->_hoard->cpValue += 11250 * 100;
        } elseif ($d100 > 2) {
            $this->_wand = 'Magic missile (9th) (6,750 gp)';
            $this->_hoard->cpValue += 6750 * 100;
        } else {
            $this->_wand = 'Magic missile (7th) (5,250 gp)';
            $this->_hoard->cpValue += 5250 * 100;
        }

        return 'Wand of ' . $this->_wand;
    }
}