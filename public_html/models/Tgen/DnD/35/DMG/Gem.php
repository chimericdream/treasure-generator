<?php
class Tgen_DnD_35_DMG_Gem extends Tgen_DnD_35_DMG {
    protected $_hoard    = null;
    protected $_gem      = null;
    protected $_gemArray = array(
        '10gp' => array(
            'banded agate',
            'eye agate',
            'moss agate',
            'azurite',
            'blue quartz',
            'hematite',
            'lapis lazuli',
            'malachite',
            'obsidian',
            'rhodochrosite',
            'tiger eye',
            'turquoise',
            'freshwater (irregular) pearl',
        ),
        '50gp' => array(
            'bloodstone',
            'carnelian',
            'chalcedony',
            'chrysoprase',
            'citrine',
            'jasper iolite',
            'moonstone',
            'onyx',
            'peridot',
            'rock crystal (clear quartz)',
            'sard',
            'sardonyx',
            'rose quartz',
            'smoky quartz',
            'star rose quartz',
            'zircon',
        ),

        '100gp' => array(
            'amber',
            'amethyst',
            'chrysoberyl',
            'coral',
            'red garnet',
            'brown-green garnet',
            'jade',
            'jet',
            'white pearl',
            'golden pearl',
            'pink pearl',
            'silver pearl',
            'red spinel',
            'red-brown spinel',
            'deep green spinel',
            'tourmaline',
        ),

        '500gp' => array(
            'alexandrite',
            'aquamarine',
            'violet garnet',
            'black pearl',
            'deep blue spinel',
            'golden yellow topaz',
        ),

        '1000gp' => array(
            'emerald',
            'white opal',
            'black opal',
            'fire opal',
            'blue sapphire',
            'firey yellow corundurn',
            'rich purple corundurn',
            'blue star sapphire',
            'black star sapphire',
            'star ruby',
        ),

        '5000gp' => array(
            'clearest bright green emerald',
            'blue-white diamond',
            'canary diamond',
            'pink diamond',
            'brown diamond',
            'blue diamond',
            'jacinth',
        ),
    );

    public function __construct(Tgen_DnD_35_DMG $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $dieRoll = $this->_getDieRoll(1, count($this->_gemArray['5000gp'])) - 1;
            $die = $this->_getDieRoll(2, 4);
            $this->_gem = $this->_gemArray['5000gp'][$dieRoll] . ' (' . number_format($die * 1000, 0) . ' gp)';
            $this->_hoard->cpValue += ($die * 1000) * 100;
        } elseif ($d100 > 90) {
            $dieRoll = $this->_getDieRoll(1, count($this->_gemArray['1000gp'])) - 1;
            $die = $this->_getDieRoll(4, 4);
            $this->_gem = $this->_gemArray['1000gp'][$dieRoll] . ' (' . number_format($die * 100, 0) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 70) {
            $dieRoll = $this->_getDieRoll(1, count($this->_gemArray['500gp'])) - 1;
            $die = $this->_getDieRoll(2, 4);
            $this->_gem = $this->_gemArray['500gp'][$dieRoll] . ' (' . ($die * 100) . ' gp)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 50) {
            $dieRoll = $this->_getDieRoll(1, count($this->_gemArray['100gp'])) - 1;
            $die = $this->_getDieRoll(4, 4);
            $this->_gem = $this->_gemArray['100gp'][$dieRoll] . ' (' . ($die * 10) . ' gp)';
            $this->_hoard->cpValue += ($die * 10) * 100;
        } elseif ($d100 > 25) {
            $dieRoll = $this->_getDieRoll(1, count($this->_gemArray['50gp'])) - 1;
            $die = $this->_getDieRoll(2, 4);
            $this->_gem = $this->_gemArray['50gp'][$dieRoll] . ' (' . ($die * 10) . ' gp)';
            $this->_hoard->cpValue += ($die * 10) * 100;
        } else {
            $dieRoll = $this->_getDieRoll(1, count($this->_gemArray['10gp'])) - 1;
            $die = $this->_getDieRoll(4, 4);
            $this->_gem = $this->_gemArray['10gp'][$dieRoll] . ' (' . $die . ' gp)';
            $this->_hoard->cpValue += ($die) * 100;
        }
        return $this->_gem;
    }
}