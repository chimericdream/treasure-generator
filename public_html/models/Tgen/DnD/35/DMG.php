<?php
class Tgen_DnD_35_DMG extends Tgen_DnD_35 {
    public function __construct(array $options) {
        parent::__construct($options);
    } // end __construct()

    protected function _getArtObjects($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2 && $this->drac) {
                $drac = new Tgen_DnD_30_Draconomicon($this);
                $this->goods[] = $drac->generate();
                unset($drac);
            } else {
                $art = new Tgen_DnD_35_DMG_Art($this);
                $this->goods[] = $art->generate();
                unset($art);
            }
        }
    } // end _getArtObjects()

    protected function _getGems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $gem = new Tgen_DnD_35_DMG_Gem($this);
            $this->goods[] = $gem->generate();
            unset($gem);
        }
    } // end _getGems()

    protected function _getMundaneItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $mundane = new Tgen_DnD_35_DMG_Mundane($this);
            $this->items[] = $mundane->generate();
            unset($mundane);
        }        
    } // end _getMundaneItems()

    protected function _getMinorItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || $this->cursed == false) { // No cursed Item
                $minor = new Tgen_DnD_35_DMG_Minor($this);
                $this->items[] = $minor->generate();
                unset($minor);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMinorItems()

    protected function _getMediumItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || !$this->cursed) { // No cursed Item
                $medium = new Tgen_DnD_35_DMG_Medium($this);
                $this->items[] = $medium->generate();
                unset($medium);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMediumItems()

    protected function _getMajorItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || !$this->cursed) { // No cursed Item
                $major = new Tgen_DnD_35_DMG_Major($this);
                $this->items[] = $major->generate();
                unset($major);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMajorItems()
} // end Tgen_DnD_35_DMG