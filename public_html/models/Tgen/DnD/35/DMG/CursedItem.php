<?php
class Tgen_DnD_35_DMG_CursedItem extends Tgen_DnD_35_DMG {
    protected $_hoard = null;
    protected $_item  = null;

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $this->_item = 'Scarab of death (80,000 gp)';
            $this->_hoard->cpValue += 80000 * 100;
        } elseif ($d100 > 98) {
            $this->_item = 'Cloak of poisonousness (62,000 gp)';
            $this->_hoard->cpValue += 62000 * 100;
        } elseif ($d100 > 97) {
            $this->_item = 'Necklace of strangulation (60,000 gp)';
            $this->_hoard->cpValue += 60000 * 100;
        } elseif ($d100 > 96) {
            $this->_item = 'Crystal hypnosis ball';
            $this->_hoard->cpValue += 0;
        } elseif ($d100 > 92) {
            $this->_item = 'Boots of dancing (30,000 gp)';
            $this->_hoard->cpValue += 30000 * 100;
        } elseif ($d100 > 88) {
            $this->_item = 'Sword, berserking (17,500 gp)';
            $this->_hoard->cpValue += 17500 * 100;
        } elseif ($d100 > 85) {
            $this->_item = 'Periapt of foul rotting (17,000 gp)';
            $this->_hoard->cpValue += 17000 * 100;
        } elseif ($d100 > 80) {
            $this->_item = 'Robe of vermin (16,500 gp)';
            $this->_hoard->cpValue += 16500 * 100;
        } elseif ($d100 > 75) {
            $this->_item = 'Mace of blood (16,000 gp)';
            $this->_hoard->cpValue += 16000 * 100;
        } elseif ($d100 > 72) {
            $this->_item = 'Bag of devouring';
            $this->_hoard->cpValue += 0;
        } elseif ($d100 > 70) {
            $this->_item = 'Net of snaring (10,000 gp)';
            $this->_hoard->cpValue += 10000 * 100;
        } elseif ($d100 > 68) {
            $this->_item = 'Armor of arrow attraction (9,000 gp)';
            $this->_hoard->cpValue += 9000 * 100;
        } elseif ($d100 > 64) {
            $this->_item = 'Longspear, cursed backbiter (7,500 gp)';
            $this->_hoard->cpValue += 7500 * 100;
        } elseif ($d100 > 63) {
            $this->_item = 'Vacuous grimoire (6,000 gp)';
            $this->_hoard->cpValue += 6000 * 100;
        } elseif ($d100 > 61) {
            $this->_item = 'Robe of powerlessness (5,500 gp)';
            $this->_hoard->cpValue += 5500 * 100;
        } elseif ($d100 > 60) {
            $this->_item = 'Broom of animated attack (5,200 gp)';
            $this->_hoard->cpValue += 5200 * 100;
        } elseif ($d100 > 55) {
            $this->_item = 'Potion of poison (5,000 gp)';
            $this->_hoard->cpValue += 5000 * 100;
        } elseif ($d100 > 54) {
            $this->_item = 'Helm of opposite alignment (4,000 gp)';
            $this->_hoard->cpValue += 4000 * 100;
        } elseif ($d100 > 52) {
            $this->_item = 'Dust of sneezing and choking (2,400 gp)';
            $this->_hoard->cpValue += 2400 * 100;
        } elseif ($d100 > 46) {
            $this->_item = 'Flask of curses (2,100 gp)';
            $this->_hoard->cpValue += 2100 * 100;
        } elseif ($d100 > 43) {
            $this->_item = 'Medallion of thought projection (1,800 gp)';
            $this->_hoard->cpValue += 1800 * 100;
        } elseif ($d100 > 40) {
            $this->_item = 'Armor of rage (1,600 gp)';
            $this->_hoard->cpValue += 1600 * 100;
        } elseif ($d100 > 35) {
            $this->_item = '-2 longsword, cursed (1,500 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 30) {
            $this->_item = 'Gauntlets of fumbling (1,300 gp)';
            $this->_hoard->cpValue += 1300 * 100;
        } elseif ($d100 > 25) {
            $this->_item = 'Bracers of defenselessness (1,200 gp)';
            $this->_hoard->cpValue += 1200 * 100;
        } elseif ($d100 > 20) {
            $this->_item = 'Stone of weight (1,000 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 15) {
            $this->_item = 'Amulet of inescapable location (1,000 gp)';
            $this->_hoard->cpValue += 1000 * 100;
        } elseif ($d100 > 5) {
            $this->_item = 'Ring of clumsiness (500 gp)';
            $this->_hoard->cpValue += 500 * 100;
        } else {
            $this->_item = 'Incense of obsession (200 gp)';
            $this->_hoard->cpValue += 200 * 100;
        }
        return $this->_item;
    }
}