<?php
class Tgen_DnD_30_Draconomicon_TradeGoods extends Tgen_DnD_30_Draconomicon {
    protected $_hoard = null;
    protected $_trade = null;

    public function __construct(Tgen_DnD $hoard) {
        $this->_hoard = $hoard;
    } // end __construct()

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 70) { // Textiles
            $this->_trade = $this->_generateTextile();
        } elseif ($d100 > 40) { // Ore or lumber
            $this->_trade = $this->_generateOreLumber();
        } else { // Food, drink, and spices
            $this->_trade = $this->_generateFoodDrinkSpice();
        }

        return $this->_trade;
    } // end _generate()

    protected function _getSoftMaterial($trade = true) {
        if (!$trade) {
            return parent::_getSoftMaterial();
        }
        $d100 = $this->_getDieRoll(1, 100) + 40;
        if ($d100 > 95) { // Hide/skin, exotic
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(2, 6);
            if ($d100 > 90) {
                $material = 'Wyvern hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 87) {
                $material = 'Shocker lizard skin (' . $die . ' skins; xx each)';
            } elseif ($d100 > 83) {
                $material = 'Remorhaz hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 80) {
                $material = 'Ravid hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 76) {
                $material = 'Purple worm hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 71) {
                $material = 'Naga hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 63) {
                $material = 'Hydra hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 58) {
                $material = 'Dragonne hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 43) {
                $material = 'Dragon hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 23) {
                $material = 'Dinosaur hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 15) {
                $material = 'Chimera hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 12) {
                $material = 'Bulette hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 6) {
                $material = 'Behir hide (' . $die . ' skins; xx each)';
            } else {
                $material = 'Basilisk hide (' . $die . ' skins; xx each)';
            }
        } elseif ($d100 > 80) { // Hide/skin
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(4, 6);
            if ($d100 > 92) {
                $material = 'Snake skin (' . $die . ' skins; xx each)';
            } elseif ($d100 > 86) {
                $material = 'Sheep hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 80) {
                $material = $this->_getSpecialAnimal() . 'Shark hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 76) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Seal hide (' . $die . ' skins; xx each)';
                } else {
                    $material = 'Sea lion hide (' . $die . ' skins; xx each)';
                }
            } elseif ($d100 > 71) {
                $material = 'Rhinoceros hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 65) {
                $material = 'Pig hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 60) {
                $material = 'Lizard skin (' . $die . ' skins; xx each)';
            } elseif ($d100 > 55) {
                $material = 'Horse hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 50) {
                $material = 'Elephant hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 42) {
                $material = 'Deer hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 31) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Cow hide (' . $die . ' skins; xx each)';
                } else {
                    $material = 'Ox hide (' . $die . ' skins; xx each)';
                }
            } elseif ($d100 > 29) {
                $material = 'Camel hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 22) {
                $material = $this->_getSpecialAnimal() . 'Boar hide (' . $die . ' skins; xx each)';
            } elseif ($d100 > 14) {
                $material = 'Bison (' . $die . ' skins; xx each)';
            } elseif ($d100 > 13) {
                $material = $this->_getSpecialAnimal() . 'Bat skin (' . $die . ' skins; xx each)';
            } elseif ($d100 > 9) {
                $material = $this->_getSpecialAnimal() . 'Ape hide (' . $die . ' skins; xx each)';
            } else {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Alligator hide (' . $die . ' skins; xx each)';
                } else {
                    $material = 'Crocodile hide (' . $die . ' skins; xx each)';
                }
            }
        } elseif ($d100 > 75) { // Fur, exotic
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(2, 6);
            if ($d100 > 91) {
                $material = 'Yeth hound fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 76) {
                $material = 'Winter wolf fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 67) {
                $material = 'Shadow mastiff fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 62) {
                $material = 'Rakshasa fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 56) {
                $material = 'Manticore fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 47) {
                $material = 'Krenshar fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 41) {
                $material = 'Hellcat fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 34) {
                $material = 'Griffon fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 26) {
                $material = 'Girallon fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 13) {
                $material = 'Displacer beast fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 4) {
                $material = 'Blink dog fur (' . $die . ' pelts; xx each)';
            } else {
                $material = 'Barghest fur (' . $die . ' pelts; xx each)';
            }
        } elseif ($d100 > 60) { // Fur
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(3, 6);
            if ($d100 > 96) {
                $material = 'Worg fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 92) {
                $material = 'Wolverine fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 85) {
                $material = $this->_getSpecialAnimal() . 'Wolf fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 82) {
                $material = $this->_getSpecialAnimal() . 'Weasel fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 76) {
                $material = $this->_getSpecialAnimal() . 'Tiger fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 73) {
                $material = 'Sheep fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 69) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Seal fur (' . $die . ' pelts; xx each)';
                } else {
                    $material = 'Sea lion fur (' . $die . ' pelts; xx each)';
                }
            } elseif ($d100 > 64) {
                $material = $this->_getSpecialAnimal() . 'Rat fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 62) {
                $material = 'Raccoon fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 59) {
                $material = 'Rabbit fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 53) {
                $material = $this->_getSpecialAnimal() . 'Lion fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 50) {
                $material = 'Horse fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 45) {
                $material = 'Fox fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 42) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Ermine fur (' . $die . ' pelts; xx each)';
                } else {
                    $material = 'Mink fur (' . $die . ' pelts; xx each)';
                }
            } elseif ($d100 > 36) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Cheetah fur (' . $die . ' pelts; xx each)';
                } else {
                    $material = 'Leopard fur (' . $die . ' pelts; xx each)';
                }
            } elseif ($d100 > 33) {
                $material = 'Camel fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 28) {
                $material = $this->_getSpecialAnimal() . 'Boar fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 23) {
                $material = 'Beaver fur (' . $die . ' pelts; xx each)';
            } elseif ($d100 > 8) {
                $randNum = $this->_getDieRoll(1, 3);
                if ($randNum == 3) {
                    $material = $this->_getSpecialAnimal() . 'Black bear fur (' . $die . ' pelts; xx each)';
                } elseif ($randNum == 2) {
                    $material = $this->_getSpecialAnimal() . 'Brown bear fur (' . $die . ' pelts; xx each)';
                } else {
                    $material = $this->_getSpecialAnimal() . 'Polar bear fur (' . $die . ' pelts; xx each)';
                }
            } elseif ($d100 > 4) {
                $material = $this->_getSpecialAnimal() . 'Badger fur (' . $die . ' pelts; xx each)';
            } else { // Ape
                $material = $this->_getSpecialAnimal() . 'Ape fur (' . $die . ' pelts; xx each)';
            }
        } elseif ($d100 > 55) { // Feathers, exotic
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(4, 6);
            if ($d100 > 97) {
                $material = 'Vrock feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 91) {
                $material = 'Sphinx feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 80) {
                $material = 'Roc feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 77) {
                $material = 'Phoenix feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 70) {
                $material = 'Pegasus feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 60) {
                $material = 'Owlbear feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 58) {
                $material = 'Lillend feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 56) {
                $material = 'Lammasu feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 46) {
                $material = 'Hippogriff feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 36) {
                $material = 'Griffon feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 26) {
                $material = 'Giant owl feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 16) {
                $material = 'Giant eagle feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 13) {
                $material = 'Couatl feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 7) {
                $material = 'Arrowhawk feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 4) {
                $material = 'Archon feathers (' . $die * 100 . ' feathers; xx each)';
            } else {
                $material = 'Achaierai feathers (' . $die * 100 . ' feathers; xx each)';
            }
        } else { // if ($d100 > 40) { // Feathers
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(4, 6);
            if ($d100 > 88) {
                $material = 'Swan feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 76) {
                $material = 'Raven feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 64) {
                $material = 'Pheasant feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 47) {
                $material = 'Peacock feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 37) {
                $material = 'Owl feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 25) {
                $material = 'Quail feathers (' . $die * 100 . ' feathers; xx each)';
            } elseif ($d100 > 14) {
                $material = $this->_getSpecialAnimal() . 'Hawk feathers (' . $die * 100 . ' feathers; xx each)';
            } else {
                $material = $this->_getSpecialAnimal() . 'Eagle feathers (' . $die * 100 . ' feathers; xx each)';
            }
        }

        return $material;
    } // end _getSoftMaterial()

    protected function _getHardMaterial($trade = true) {
        if (!$trade) {
            return parent::_getHardMaterial();
        }
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 90) { // Wood, soft
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(1, 3);
            if ($d100 > 85) {
                $material = 'Yew (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 65) {
                $material = 'Pine (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 45) {
                $material = 'Fir (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 25) {
                $material = 'Cedar (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 15) {
                $material = 'Balsa (' . $die . ' cord(s); xx each)';
            } else {
                $material = 'Alder (' . $die . ' cord(s); xx each)';
            }
        } elseif ($d100 > 70) { // Wood, hard
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(1, 3);
            if ($d100 > 90) {
                $material = 'Teak (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 70) {
                $material = 'Oak (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 60) {
                $material = 'Maple (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 45) {
                $material = 'Mahogany (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 35) {
                $material = 'Hickory (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 25) {
                $material = 'Darkwood (' . $die . ' cord(s); xx each)';
            } elseif ($d100 > 10) {
                $material = 'Chestnut (' . $die . ' cord(s); xx each)';
            } else {
                $material = 'Ash (' . $die . ' cord(s); xx each)';
            }
        } elseif ($d100 > 50) { // Stone
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(3, 6);
            if ($d100 > 87) {
                $material = 'Soapstone (' . $die * 100 . ' pound(s); xx per pound)';
            } elseif ($d100 > 74) {
                $material = 'Slate (' . $die * 100 . ' pound(s); xx per pound)';
            } elseif ($d100 > 61) {
                $material = 'Sandstone (' . $die * 100 . ' pound(s); xx per pound)';
            } elseif ($d100 > 52) {
                $material = 'Onyx (' . $die * 100 . ' pound(s); xx per pound)';
            } elseif ($d100 > 39) {
                $material = 'Obsidian (' . $die * 100 . ' pound(s); xx per pound)';
            } elseif ($d100 > 26) {
                $material = 'Marble (' . $die * 100 . ' pound(s); xx per pound)';
            } elseif ($d100 > 13) {
                $material = 'Limestone (' . $die * 100 . ' pound(s); xx per pound)';
            } else {
                $material = 'Granite (' . $die * 100 . ' pound(s); xx per pound)';
            }
        } elseif ($d100 > 46) {
            $die = $this->_getDieRoll(3, 6);
            $material = 'Mother of pearl (' . $die . ' pound(s); xx per pound)';
        } elseif ($d100 > 21) { // Metal
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(2, 6);
            if ($d100 > 91) {
                $material = 'Steel (' . $die . ' bar(s); xx each)';
            } elseif ($d100 > 87) {
                $material = 'Silver (' . $die . ' bar(s); 5 gp each)';
                $this->_hoard->cpValue += ($die * 5) * 100;
            } elseif ($d100 > 84) {
                $material = 'Platinum (' . $die . ' bar(s); 500 gp each)';
                $this->_hoard->cpValue += ($die * 500) * 100;
            } elseif ($d100 > 81) {
                $material = 'Mithral (' . $die . ' bar(s); 100 gp each)';
                $this->_hoard->cpValue += ($die * 100) * 100;
            } elseif ($d100 > 78) {
                $material = 'Lead (' . $die . ' bar(s); 5 cp each)';
                $this->_hoard->cpValue += ($die * 5);
            } elseif ($d100 > 65) {
                $material = 'Iron (' . $die . ' bar(s); 1 sp each)';
                $this->_hoard->cpValue += $die * 10;
            } elseif ($d100 > 16) {
                $material = 'Gold (' . $die . ' bar(s); 50 gp each)';
                $this->_hoard->cpValue += ($die * 50) * 100;
            } elseif ($d100 > 43) {
                $material = 'Copper (' . $die . ' bar(s); 5 sp each)';
                $this->_hoard->cpValue += ($die * 5) * 10;
            } elseif ($d100 > 21) {
                $material = 'Bronze (' . $die . ' bar(s); xx each)';
            } elseif ($d100 > 2) {
                $material = 'Brass (' . $die . ' bar(s); xx each)';
            } else {
                $material = 'Adamantine (' . $die . ' bar(s); 100 gp each)';
                $this->_hoard->cpValue += ($die * 100) * 100;
            }
        } elseif ($d100 > 16) { // Ivory/horn
            $d100 = $this->_getDieRoll(1, 100);
            $die = $this->_getDieRoll(3, 6);
            if ($d100 > 88) {
                $material = 'Walrus tusk (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 84) {
                $material = 'Unicorn ivory (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 72) {
                $material = 'Narwhal ivory (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 60) {
                $material = 'Mammoth tusk (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 48) {
                $material = 'Hornbill ivory (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 36) {
                $material = 'Hippopotamus tusk (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 24) {
                $material = 'Elephant tusk (' . $die . ' pound(s); xx per pound)';
            } elseif ($d100 > 12) {
                $material = 'Cachalot whale ivory (' . $die . ' pound(s); xx per pound)';
            } else {
                $material = 'Boar tusk (' . $die . ' pound(s); xx per pound)';
            }
        } elseif ($d100 > 12) {
            $die = $this->_getDieRoll(2, 6);
            $material = 'Glass (' . $die * 5 . ' sheet(s); xx each)';
        } elseif ($d100 > 8) {
            $die = $this->_getDieRoll(3, 6);
            $material = 'Crystal (' . $die . ' pound(s); xx per pound)';
        } elseif ($d100 > 5) {
            $die = $this->_getDieRoll(3, 6);
            $material = 'Coral (' . $die . ' pound(s); xx per pound)';
        } else {
            $die = $this->_getDieRoll(3, 6);
            $material = 'Bone (' . $die . ' pound(s); xx per pound)';
        }

        return $material;
    } // end _getHardMaterial()

    protected function _generateTextile() {
        $d100 = $this->_getDieRoll(1, 100);
        $die = $this->_getDieRoll(2, 6);
        if ($d100 > 95) {
            $item = $this->_getSoftMaterial();
        } elseif ($d100 > 70) {
            $item = 'Wool cloth (' . $die . ' square yard(s); 2 gp per square yard [2 lb])';
            $this->_hoard->cpValue += ($die * 2) * 100;
        } elseif ($d100 > 62) {
            $item = 'Velvet cloth (' . $die . ' square yard(s); 15 gp per square yard [2 lb])';
            $this->_hoard->cpValue += ($die * 15) * 100;
        } elseif ($d100 > 52) {
            $item = 'Silk cloth (' . $die . ' square yard(s); 10 gp per square yard [0.5 lb])';
            $this->_hoard->cpValue += ($die * 10) * 100;
        } elseif ($d100 > 47) {
            $item = 'Satin cloth (' . $die . ' square yard(s); 6 gp per square yard [0.5 lb])';
            $this->_hoard->cpValue += ($die * 6) * 100;
        } elseif ($d100 > 44) {
            $item = 'Samite cloth (' . $die . ' square yard(s); 250 gp per square yard [5 lb])';
            $this->_hoard->cpValue += ($die * 250) * 100;
        } elseif ($d100 > 34) {
            $item = 'Linen cloth (' . $die . ' square yard(s); 4 gp per square yard [1 lb])';
            $this->_hoard->cpValue += ($die * 4) * 100;
        } elseif ($d100 > 4) {
            $item = 'Cotton cloth (' . $die . ' square yard(s); 1 gp per square yard [0.5 lb])';
            $this->_hoard->cpValue += $die * 100;
        } elseif ($d100 > 1) {
            $item = 'Cloth of silver (' . $die . ' square yard(s); 100 gp per square yard [10 lb])';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } else {
            $item = 'Cloth of gold (' . $die . ' square yard(s); 1,000 gp per square yard [10 lb])';
            $this->_hoard->cpValue += ($die * 1000) * 100;
        }

        return $item;
    } // end _generateTextile()

    protected function _generateOreLumber() {
        $d100 = $this->_getDieRoll(1, 100);
        $die = $this->_getDieRoll(2, 6);
        if ($d100 > 95) {
            $item = $this->_getHardMaterial();
        } elseif ($d100 > 80) {
            $item = 'Silver (' . $die . ' bar(s); 5 gp each)';
            $this->_hoard->cpValue += ($die * 5) * 100;
        } elseif ($d100 > 75) {
            $item = 'Platinum (' . $die . ' bar(s); 500 gp each)';
            $this->_hoard->cpValue += ($die * 500) * 100;
        } elseif ($d100 > 72) {
            $item = 'Mithral (' . $die . ' bar(s); 100 gp each)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        } elseif ($d100 > 62) {
            $item = 'Lead (' . $die . ' bar(s); 5 cp each)';
            $this->_hoard->cpValue += ($die * 5);
        } elseif ($d100 > 37) {
            $item = 'Iron (' . $die . ' bar(s); 1 sp each)';
            $this->_hoard->cpValue += $die * 10;
        } elseif ($d100 > 27) {
            $item = 'Gold (' . $die . ' bar(s); 50 gp each)';
            $this->_hoard->cpValue += ($die * 50) * 100;
        } elseif ($d100 > 22) {
            $item = 'Darkwood (' . $die . ' log(s); 10 gp each)';
            $this->_hoard->cpValue += ($die * 10) * 100;
        } elseif ($d100 > 2) {
            $item = 'Copper (' . $die . ' bar(s); 5 sp each)';
            $this->_hoard->cpValue += ($die * 5) * 10;
        } else {
            $item = 'Adamantine (' . $die . ' bar(s); 100 gp each)';
            $this->_hoard->cpValue += ($die * 100) * 100;
        }

        return $item;
    } // end _generateOreLumber()

    protected function _generateFoodDrinkSpice() {
        $d100 = $this->_getDieRoll(1, 100);
        $die = $this->_getDieRoll(2, 6);
        if ($d100 > 95) {
            $item = $this->_getUtensil();
        } elseif ($d100 > 92) {
            $item = 'Wine, fine (' . $die . ' pint(s); 5 gp each)';
            $this->_hoard->cpValue += ($die * 5) * 100;
        } elseif ($d100 > 84) {
            $item = 'Wine, common (' . $die . ' pint(s); 3 cp each)';
            $this->_hoard->cpValue += ($die * 3);
        } elseif ($d100 > 72) {
            $item = 'Wheat (' . $die . ' pound(s); 1 cp each)';
            $this->_hoard->cpValue += $die;
        } elseif ($d100 > 62) {
            $item = 'Tobacco (' . $die . ' pound(s); 5 sp each)';
            $this->_hoard->cpValue += ($die * 5) * 10;
        } elseif ($d100 > 52) {
            $item = 'Tea leaves (' . $die . ' pound(s); 2 sp each)';
            $this->_hoard->cpValue += ($die * 2) * 10;
        } elseif ($d100 > 49) {
            $item = 'Salt (' . $die . ' pound(s); 5 gp each)';
            $this->_hoard->cpValue += ($die * 5) * 100;
        } elseif ($d100 > 48) {
            $item = 'Saffron (' . $die . ' ounce(s); 15 gp each)';
            $this->_hoard->cpValue += ($die * 15) * 100;
        } elseif ($d100 > 43) {
            $item = 'Pepper (' . $die . ' pound(s); 2 gp each)';
            $this->_hoard->cpValue += ($die * 2) * 100;
        } elseif ($d100 > 38) {
            $item = 'Ginger (' . $die . ' pound(s); 2 gp each)';
            $this->_hoard->cpValue += ($die * 2) * 100;
        } elseif ($d100 > 26) {
            $item = 'Flour (' . $die . ' pound(s); 2 cp each)';
            $this->_hoard->cpValue += ($die * 2);
        } elseif ($d100 > 23) {
            $item = 'Cooking oil, rare (' . $die . ' pint(s); 1 gp each)';
            $this->_hoard->cpValue += $die * 100;
        } elseif ($d100 > 18) {
            $item = 'Cooking oil, common (' . $die . ' pint(s); 1 cp each)';
            $this->_hoard->cpValue += $die;
        } elseif ($d100 > 17) {
            $item = 'Cloves (' . $die . ' pound(s); 15 gp each)';
            $this->_hoard->cpValue += ($die * 15) * 100;
        } elseif ($d100 > 11) {
            $item = 'Cinnamon (' . $die . ' pound(s); 1 gp each)';
            $this->_hoard->cpValue += $die * 100;
        } elseif ($d100 > 8) {
            $item = 'Ale, fine (' . $die . ' pint(s); 2 gp each)';
            $this->_hoard->cpValue += ($die * 2) * 100;
        } else {
            $item = 'Ale, common (' . $die . ' pint(s); 3 cp each)';
            $this->_hoard->cpValue += ($die * 3);
        }

        return $item;
    } // end _generateFoodDrinkSpice()
}