<?php
class Tgen_DnD_35_DMG_Art extends Tgen_DnD_35_DMG {
    protected $_hoard     = null;
    protected $_artObject = null;
    protected $_artArray  = array(
        '55gp' => array(
            'silver ewer',
            'carved bone statuette',
            'ivory statuette',
            'finely wrought small gold bracelet',
        ),
        '105gp' => array(
            'cloth of gold vestments',
            'black velvet mask with numerous citrines',
            'silver chalice with lapis lazuli gems',
        ),
        '350gp' => array(
            'large well-done wool tapestry',
            'brass mug with jade inlays',
        ),
        '550gp' => array(
            'silver comb with moonstones',
            'silver-plated steel longsword with jet jewel in hilt',
        ),
        '700gp' => array(
            'carved harp of exotic wood with ivory inlay and zircon gems',
            'solid gold idol (10 lb.)',
        ),
        '1050gp' => array(
            'gold dragon comb with red garnet eyes',
            'gold and topaz bottle stopper cork',
            'ceremonial electrum dagger with a star ruby in the pommel',
        ),
        '1400gp' => array(
            'eyepatch with a mock eye of sapphire and moonstone',
            'fire opal pendant on a fine gold chain',
            'old masterpiece painting',
        ),
        '1750gp' => array(
            'embroidered silk and velvet mantle with numerous moonstones',
            'sapphire pendant on gold chain',
        ),
        '2500gp' => array(
            'embroidered and bejeweled gloves',
            'jeweled anklet',
            'gold music box',
        ),
        '3500gp' => array(
            'golden circlet with four aquamarines',
            'a string of small pink pearls (necklace)',
        ),
        '5000gp' => array(
            'jeweled gold crown',
            'jeweled electrum ring',
        ),
        '7000gp' => array(
            'gold and ruby ring',
            'gold cup set with emeralds',
        ),
    );

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['7000gp'])) - 1;
            $die = $this->_getDieRoll(2, 6);
            $this->_artObject = $this->_artArray['7000gp'][$dieRoll] . ' (' . number_format($die * 1000,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 1000) * 100;
        } elseif ($d100 > 95) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['5000gp'])) - 1;
            $die = $this->_getDieRoll(2, 4);
            $this->_artObject = $this->_artArray['5000gp'][$dieRoll] . ' (' . number_format($die * 1000,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 1000) * 100;
        } elseif ($d100 > 90) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['3500gp'])) - 1;
            $die = $this->_getDieRoll(1, 6);
            $this->_artObject = $this->_artArray['3500gp'][$dieRoll] . ' (' . number_format($die * 1000,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 1000) * 100;
        } elseif ($d100 > 85) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['2500gp'])) - 1;
            $die = $this->_getDieRoll(1, 4);
            $this->_artObject = $this->_artArray['2500gp'][$dieRoll] . ' (' . number_format($die * 1000,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 1000) * 100;
        } elseif ($d100 > 80) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['1750gp'])) - 1;
            $die = $this->_getDieRoll(5, 6);
            $this->_artObject = $this->_artArray['1750gp'][$dieRoll] . ' (' . number_format($die * 100,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 70) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['1400gp'])) - 1;
            $die = $this->_getDieRoll(4, 6);
            $this->_artObject = $this->_artArray['1400gp'][$dieRoll] . ' (' . number_format($die * 100,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 60) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['1050gp'])) - 1;
            $die = $this->_getDieRoll(3, 6);
            $this->_artObject = $this->_artArray['1050gp'][$dieRoll] . ' (' . number_format($die * 100,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 50) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['700gp'])) - 1;
            $die = $this->_getDieRoll(2, 6);
            $this->_artObject = $this->_artArray['700gp'][$dieRoll] . ' (' . number_format($die * 100,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 40) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['550gp'])) - 1;
            $die = $this->_getDieRoll(1, 10);
            $this->_artObject = $this->_artArray['550gp'][$dieRoll] . ' (' . number_format($die * 100,0) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 25) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['350gp'])) - 1;
            $die = $this->_getDieRoll(1, 6);
            $this->_artObject = $this->_artArray['350gp'][$dieRoll] . ' (' . $die * 100 . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 10) {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['105gp'])) - 1;
            $die = $this->_getDieRoll(3, 6);
            $this->_artObject = $this->_artArray['105gp'][$dieRoll] . ' (' . $die * 10 . ' gp)';
            $this->_hoard->cpValue += ($die * 10) * 100;
        } else {
            $dieRoll = $this->_getDieRoll(1, count($this->_artArray['55gp'])) - 1;
            $die = $this->_getDieRoll(1, 10);
            $this->_artObject = $this->_artArray['55gp'][$dieRoll] . ' (' . $die * 10 . ' gp)';
            $this->_hoard->cpValue += ($die * 10) * 100;
        }
        return $this->_artObject;
    }
}