<?php
class Tgen_DnD_35_MIC extends Tgen_DnD_35 {
    protected function _getGoods($whichList, $howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2 && $this->drac) {
                $drac = new Tgen_DnD_30_Draconomicon($this);
                $this->goods[] = $drac->generate();
                unset($drac);
            } else {
                $classname = "Tgen_DnD_35_MIC_Goods_{$whichList}";
                if (class_exists($classname)) {
                    $item = new $classname($this);
                    $this->goods[] = $item->generate();
                    unset($item);
                }
            }
        }
    }

    protected function _getLvItems($level, $howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || !$this->cursed) { // No cursed Item
                $classname = "Tgen_DnD_35_MIC_Items_{$level}";
                if (class_exists($classname)) {
                    $item = new $classname($this);
                    $this->items[] = $item->generate();
                    unset($item);
                }
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    }

    protected function _getHalfLevItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $item = new Tgen_DnD_35_MIC_Items_Half($this);
            $this->items[] = $item->generate();
            unset($item);
        }
    }
} // end Tgen_DnD_35_MIC