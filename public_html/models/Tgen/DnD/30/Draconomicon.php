<?php
class Tgen_DnD_30_Draconomicon extends Tgen_DnD_30 {
    protected $_hoard  = null;
    protected $_object = null;

    public function __construct(Tgen_DnD $hoard) {
        $this->_hoard = $hoard;
    } // end __construct()

    public function generate() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 90) { // Utensil
            $this->_object = $this->_getUtensil();
        } elseif ($d100 > 85) { // Toy or game
            $this->_object = $this->_generateToyOrGame();
        } elseif ($d100 > 80) { // Musical instrument
            $this->_object = $this->_generateInstrument();
        } elseif ($d100 > 40) { // Jewelry
            $this->_object = $this->_generateJewelry();
        } elseif ($d100 > 35) { // Furnishing
            $this->_object = $this->_generateFurnishing();
        } elseif ($d100 > 25) { // Clothing
            $this->_object = $this->_generateClothing();
        } else { // Artwork
            $this->_object = $this->_generateArtwork();
        }
        return $this->_object;
    } // end _generate()

    protected function _getSoftMaterial() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 95) { // Hide/skin, exotic
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 90) {
                $material = 'Wyvern hide';
            } elseif ($d100 > 87) {
                $material = 'Shocker lizard skin';
            } elseif ($d100 > 83) {
                $material = 'Remorhaz hide';
            } elseif ($d100 > 80) {
                $material = 'Ravid hide';
            } elseif ($d100 > 76) {
                $material = 'Purple worm hide';
            } elseif ($d100 > 71) {
                $material = 'Naga hide';
            } elseif ($d100 > 63) {
                $material = 'Hydra hide';
            } elseif ($d100 > 58) {
                $material = 'Dragonne hide';
            } elseif ($d100 > 43) {
                $material = 'Dragon hide';
            } elseif ($d100 > 23) {
                $material = 'Dinosaur hide';
            } elseif ($d100 > 15) {
                $material = 'Chimera hide';
            } elseif ($d100 > 12) {
                $material = 'Bulette hide';
            } elseif ($d100 > 6) {
                $material = 'Behir hide';
            } else {
                $material = 'Basilisk hide';
            }
        } elseif ($d100 > 80) { // Hide/skin
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 92) {
                $material = 'Snake skin';
            } elseif ($d100 > 86) {
                $material = 'Sheep hide';
            } elseif ($d100 > 80) {
                $material = $this->_getSpecialAnimal() . 'Shark skin';
            } elseif ($d100 > 76) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Seal skin';
                } else {
                    $material = 'Sea lion hide';
                }
            } elseif ($d100 > 71) {
                $material = 'Rhinoceros hide';
            } elseif ($d100 > 65) {
                $material = 'Pig hide';
            } elseif ($d100 > 60) {
                $material = 'Lizard skin';
            } elseif ($d100 > 55) {
                $material = 'Horse hide';
            } elseif ($d100 > 50) {
                $material = 'Elephant hide';
            } elseif ($d100 > 42) {
                $material = 'Deer skin';
            } elseif ($d100 > 31) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Cow hide';
                } else {
                    $material = 'Ox hide';
                }
            } elseif ($d100 > 29) {
                $material = 'Camel hide';
            } elseif ($d100 > 22) {
                $material = $this->_getSpecialAnimal() . 'Boar hide';
            } elseif ($d100 > 14) {
                $material = 'Bison';
            } elseif ($d100 > 13) {
                $material = $this->_getSpecialAnimal() . 'Bat skin';
            } elseif ($d100 > 9) {
                $material = $this->_getSpecialAnimal() . 'Ape hide';
            } else {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Alligator hide';
                } else {
                    $material = 'Crocodile hide';
                }
            }
        } elseif ($d100 > 75) { // Fur, exotic
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 91) {
                $material = 'Yeth hound';
            } elseif ($d100 > 76) {
                $material = 'Winter wolf';
            } elseif ($d100 > 67) {
                $material = 'Shadow mastiff';
            } elseif ($d100 > 62) {
                $material = 'Rakshasa';
            } elseif ($d100 > 56) {
                $material = 'Manticore';
            } elseif ($d100 > 47) {
                $material = 'Krenshar';
            } elseif ($d100 > 41) {
                $material = 'Hellcat';
            } elseif ($d100 > 34) {
                $material = 'Griffon';
            } elseif ($d100 > 26) {
                $material = 'Girallon';
            } elseif ($d100 > 13) {
                $material = 'Displacer beast';
            } elseif ($d100 > 4) {
                $material = 'Blink dog';
            } else {
                $material = 'Barghest';
            }
            $material .= ' fur';
        } elseif ($d100 > 60) { // Fur
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 96) {
                $material = 'Worg';
            } elseif ($d100 > 92) {
                $material = 'Wolverine';
            } elseif ($d100 > 85) {
                $material = $this->_getSpecialAnimal() . 'Wolf';
            } elseif ($d100 > 82) {
                $material = $this->_getSpecialAnimal() . 'Weasel';
            } elseif ($d100 > 76) {
                $material = $this->_getSpecialAnimal() . 'Tiger';
            } elseif ($d100 > 73) {
                $material = 'Sheep';
            } elseif ($d100 > 69) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Seal';
                } else {
                    $material = 'Sea lion';
                }
            } elseif ($d100 > 64) {
                $material = $this->_getSpecialAnimal() . 'Rat';
            } elseif ($d100 > 62) {
                $material = 'Raccoon';
            } elseif ($d100 > 59) {
                $material = 'Rabbit';
            } elseif ($d100 > 53) {
                $material = $this->_getSpecialAnimal() . 'Lion';
            } elseif ($d100 > 50) {
                $material = 'Horse';
            } elseif ($d100 > 45) {
                $material = 'Fox';
            } elseif ($d100 > 42) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Ermine';
                } else {
                    $material = 'Mink';
                }
            } elseif ($d100 > 36) {
                $randNum = $this->_getDieRoll(1, 2);
                if ($randNum == 2) {
                    $material = 'Cheetah';
                } else {
                    $material = 'Leopard';
                }
            } elseif ($d100 > 33) {
                $material = 'Camel';
            } elseif ($d100 > 28) {
                $material = $this->_getSpecialAnimal() . 'Boar';
            } elseif ($d100 > 23) {
                $material = 'Beaver';
            } elseif ($d100 > 8) {
                $randNum = $this->_getDieRoll(1, 3);
                if ($randNum == 3) {
                    $material = $this->_getSpecialAnimal() . 'Black bear';
                } elseif ($randNum == 2) {
                    $material = $this->_getSpecialAnimal() . 'Brown bear';
                } else {
                    $material = $this->_getSpecialAnimal() . 'Polar bear';
                }
            } elseif ($d100 > 4) {
                $material = $this->_getSpecialAnimal() . 'Badger';
            } else { // Ape
                $material = $this->_getSpecialAnimal() . 'Ape';
            }
            $material .= ' fur';
        } elseif ($d100 > 55) { // Feathers, exotic
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 97) {
                $material = 'Vrock';
            } elseif ($d100 > 91) {
                $material = 'Sphinx';
            } elseif ($d100 > 80) {
                $material = 'Roc';
            } elseif ($d100 > 77) {
                $material = 'Phoenix';
            } elseif ($d100 > 70) {
                $material = 'Pegasus';
            } elseif ($d100 > 60) {
                $material = 'Owlbear';
            } elseif ($d100 > 58) {
                $material = 'Lillend';
            } elseif ($d100 > 56) {
                $material = 'Lammasu';
            } elseif ($d100 > 46) {
                $material = 'Hippogriff';
            } elseif ($d100 > 36) {
                $material = 'Griffon';
            } elseif ($d100 > 26) {
                $material = 'Giant owl';
            } elseif ($d100 > 16) {
                $material = 'Giant eagle';
            } elseif ($d100 > 13) {
                $material = 'Couatl';
            } elseif ($d100 > 7) {
                $material = 'Arrowhawk';
            } elseif ($d100 > 4) {
                $material = 'Archon';
            } else {
                $material = 'Achaierai';
            }
            $material .= ' feathers';
        } elseif ($d100 > 40) { // Feathers
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 88) {
                $material = 'Swan';
            } elseif ($d100 > 76) {
                $material = 'Raven';
            } elseif ($d100 > 64) {
                $material = 'Pheasant';
            } elseif ($d100 > 47) {
                $material = 'Peacock';
            } elseif ($d100 > 37) {
                $material = 'Owl';
            } elseif ($d100 > 25) {
                $material = 'Quail';
            } elseif ($d100 > 14) {
                $material = $this->_getSpecialAnimal() . 'Hawk';
            } else {
                $material = $this->_getSpecialAnimal() . 'Eagle';
            }
            $material .= ' feathers';
        } else { // Cloth
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 80) {
                $material = 'Wool';
            } elseif ($d100 > 65) {
                $material = 'Velvet';
            } elseif ($d100 > 50) {
                $material = 'Silk';
            } elseif ($d100 > 35) {
                $material = 'Satin';
            } elseif ($d100 > 32) {
                $material = 'Samite cloth';
            } elseif ($d100 > 22) {
                $material = 'Linen';
            } elseif ($d100 > 2) {
                $material = 'Cotton';
            } else {
                $material = 'Cloth of gold';
            }
        }

        return $material;
    } // end _getSoftMaterial()

    protected function _getHardMaterial() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 90) { // Wood, soft
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 85) {
                $material = 'Yew';
            } elseif ($d100 > 65) {
                $material = 'Pine';
            } elseif ($d100 > 45) {
                $material = 'Fir';
            } elseif ($d100 > 25) {
                $material = 'Cedar';
            } elseif ($d100 > 15) {
                $material = 'Balsa';
            } else {
                $material = 'Alder';
            }
        } elseif ($d100 > 70) { // Wood, hard
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 90) {
                $material = 'Teak';
            } elseif ($d100 > 70) {
                $material = 'Oak';
            } elseif ($d100 > 60) {
                $material = 'Maple';
            } elseif ($d100 > 45) {
                $material = 'Mahogany';
            } elseif ($d100 > 35) {
                $material = 'Hickory';
            } elseif ($d100 > 25) {
                $material = 'Darkwood';
            } elseif ($d100 > 10) {
                $material = 'Chestnut';
            } else {
                $material = 'Ash';
            }
        } elseif ($d100 > 50) { // Stone
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 87) {
                $material = 'Soapstone';
            } elseif ($d100 > 74) {
                $material = 'Slate';
            } elseif ($d100 > 61) {
                $material = 'Sandstone';
            } elseif ($d100 > 52) {
                $material = 'Onyx';
            } elseif ($d100 > 39) {
                $material = 'Obsidian';
            } elseif ($d100 > 26) {
                $material = 'Marble';
            } elseif ($d100 > 13) {
                $material = 'Limestone';
            } else {
                $material = 'Granite';
            }
        } elseif ($d100 > 46) {
            $material = 'Mother of pearl';
        } elseif ($d100 > 21) { // Metal
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 91) {
                $material = 'Steel';
            } elseif ($d100 > 87) {
                $material = 'Silver';
            } elseif ($d100 > 84) {
                $material = 'Platinum';
            } elseif ($d100 > 81) {
                $material = 'Mithral';
            } elseif ($d100 > 78) {
                $material = 'Lead';
            } elseif ($d100 > 65) {
                $material = 'Iron';
            } elseif ($d100 > 16) {
                $material = 'Gold';
            } elseif ($d100 > 43) {
                $material = 'Copper';
            } elseif ($d100 > 21) {
                $material = 'Bronze';
            } elseif ($d100 > 2) {
                $material = 'Brass';
            } else {
                $material = 'Adamantine';
            }
        } elseif ($d100 > 16) { // Ivory/horn
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 88) {
                $material = 'Walrus tusk';
            } elseif ($d100 > 84) {
                $material = 'Unicorn ivory';
            } elseif ($d100 > 72) {
                $material = 'Narwhal ivory';
            } elseif ($d100 > 60) {
                $material = 'Mammoth tusk';
            } elseif ($d100 > 48) {
                $material = 'Hornbill ivory';
            } elseif ($d100 > 36) {
                $material = 'Hippopotamus tusk';
            } elseif ($d100 > 24) {
                $material = 'Elephant tusk';
            } elseif ($d100 > 12) {
                $material = 'Cachalot whale ivory';
            } else {
                $material = 'Boar tusk';
            }
        } elseif ($d100 > 12) {
            $material = 'Glass';
        } elseif ($d100 > 8) {
            $material = 'Crystal';
        } elseif ($d100 > 5) {
            $material = 'Coral';
        } else {
            $material = 'Bone';
        }

        return $material;
    } // end _getHardMaterial()

    protected function _getSpecialAnimal() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) { // Celestial or fiendish dire animal
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $animal = 'Celestial dire ';
            } else {
                $animal = 'Fiendish dire ';
            }
        } elseif ($d100 > 90) { // Celestial or fiendish animal
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $animal = 'Celestial ';
            } else {
                $animal = 'Fiendish ';
            }
        } elseif ($d100 > 75) { // Dire animal
            $animal = 'Dire ';
        } else { // Typical animal
            $animal = '';
        }

        return $animal;
    } // end _getSpecialAnimal()

    protected function _getUtensil() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 90) {
            $utensil = 'Vase made of ';
        } elseif ($d100 > 80) {
            $utensil = 'Tray made of ';
        } elseif ($d100 > 70) {
            $utensil = 'Saucer made of ';
        } elseif ($d100 > 60) {
            $utensil = 'Platter made of ';
        } elseif ($d100 > 50) {
            $utensil = 'Plate made of ';
        } elseif ($d100 > 40) {
            $utensil = 'Mug made of ';
        } elseif ($d100 > 30) {
            $utensil = 'Goblet made of ';
        } elseif ($d100 > 20) {
            $utensil = 'Ewer made of ';
        } elseif ($d100 > 10) {
            $utensil = 'Cup made of ';
        } else {
            $utensil = 'Bowl made of ';
        }
        $utensil .= $this->_getHardMaterial(false);
        $randNum = $this->_getDieRoll(1, 4);
        if ($randNum == 4) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $utensil .= ' depicting ' . $this->_getDepiction();
            } else {
                $utensil .= ' ' . $this->_getEmbellishment();
            }
        }

        return $utensil;
    } // end _getUtensil()

    protected function _getDepiction() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 96) {
            $depic = 'weapons';
        } elseif ($d100 > 92) {
            $depic = 'water';
        } elseif ($d100 > 88) {
            $depic = 'trees';
        } elseif ($d100 > 84) {
            $depic = 'sports';
        } elseif ($d100 > 80) {
            $depic = 'spellcasters';
        } elseif ($d100 > 76) {
            $depic = 'soldiers';
        } elseif ($d100 > 72) {
            $depic = 'religious icons';
        } elseif ($d100 > 68) {
            $depic = 'a pastoral scene';
        } elseif ($d100 > 64) {
            $depic = 'musicians';
        } elseif ($d100 > 60) {
            $depic = 'mountains';
        } elseif ($d100 > 56) {
            $depic = 'monsters';
        } elseif ($d100 > 52) {
            $depic = 'love';
        } elseif ($d100 > 48) {
            $depic = 'knights';
        } elseif ($d100 > 44) {
            $depic = 'a hunt';
        } elseif ($d100 > 40) {
            $depic = 'horse riders';
        } elseif ($d100 > 36) {
            $depic = 'flowers';
        } elseif ($d100 > 32) {
            $depic = 'flames';
        } elseif ($d100 > 28) {
            $depic = 'dragons';
        } elseif ($d100 > 24) {
            $depic = 'people dancing';
        } elseif ($d100 > 20) {
            $depic = 'clouds';
        } elseif ($d100 > 16) {
            $depic = 'a cityscape';
        } elseif ($d100 > 12) {
            $depic = 'children';
        } elseif ($d100 > 8) {
            $depic = 'a castle';
        } elseif ($d100 > 4) {
            $depic = 'boats';
        } else {
            $depic = 'a battle scene';
        }

        return $depic;
    } // end _getDepiction()

    protected function _getEmbellishment() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 87) {
            $embellish = 'plated with ' . $this->_getHardMaterial(false);
        } elseif ($d100 > 72) {
            $embellish = 'painted with mosaics';
        } elseif ($d100 > 57) {
            $embellish = 'inlaid with ' . $this->_getHardMaterial(false);
        } elseif ($d100 > 42) {
            $embellish = 'encrusted with gems';
        } elseif ($d100 > 30) {
            $embellish = 'with ornate etchings';
        } elseif ($d100 > 15) {
            $embellish = 'with ornate engravings';
        } else {
            $embellish = 'with ornate carvings';
        }

        return $embellish;
    } // end _getEmbellishment()

    protected function _generateArtwork() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 75) { // Tapestry/wall hanging
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $artwork = $this->_getSoftMaterial() . ' tapestry depicting ' . $this->_getDepiction();
            } else {
                $artwork = $this->_getSoftMaterial() . ' wall hanging depicting ' . $this->_getDepiction();
            }
        } elseif ($d100 > 60) { // Statue, small
            $artwork = 'Small ' . $this->_getHardMaterial() . ' statue depicting ' . $this->_getDepiction();
        } elseif ($d100 > 50) { // Statue, large or life-size
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $artwork = 'Life-size ' . $this->_getHardMaterial() . ' statue depicting ' . $this->_getDepiction();
            } else {
                $artwork = 'Large ' . $this->_getHardMaterial() . ' statue depicting ' . $this->_getDepiction();
            }
        } elseif ($d100 > 40) { // Pillar
            $artwork = 'Pillar of ' . $this->_getHardMaterial();
        } elseif ($d100 > 25) { // Painting
            $artwork = 'Painting depicting ' . $this->_getDepiction();
        } elseif ($d100 > 15) { // Geometric shape
            $d100 = $this->_getDieRoll(1, 100);
            if ($d100 > 80) {
                $artwork = 'Sphere of ' . $this->_getHardMaterial();
            } elseif ($d100 > 60) {
                $artwork = 'Pyramid of ' . $this->_getHardMaterial();
            } elseif ($d100 > 40) {
                $artwork = 'Dodecahedron of ' . $this->_getHardMaterial();
            } elseif ($d100 > 20) {
                $artwork = 'Cylinder of ' . $this->_getHardMaterial();
            } else {
                $artwork = 'Cube of ' . $this->_getHardMaterial();
            }
        } else { // Bust
            $artwork = $this->_getHardMaterial() . ' bust depicting ' . $this->_getDepiction();
        }

        return $artwork;
    } // end _generateArtwork()

    protected function _generateClothing() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 85) {
            $clothing = 'Vestments made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 70) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $clothing = 'Tunic made of ' . $this->_getSoftMaterial();
            } else {
                $clothing = 'Tabard made of ' . $this->_getSoftMaterial();
            }
        } elseif ($d100 > 60) {
            $clothing = 'Shirt made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 55) {
            $clothing = 'Mask made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 52) {
            $clothing = 'Helm made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 47) {
            $clothing = 'Hat made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 42) {
            $clothing = 'Gloves made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 40) {
            $clothing = 'Eyepatch made of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 25) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $clothing = 'Cloak made of ' . $this->_getSoftMaterial();
            } else {
                $clothing = 'Cape made of ' . $this->_getSoftMaterial();
            }
        } elseif ($d100 > 15) {
            $randNum = $this->_getDieRoll(1, 3);
            if ($randNum == 3) {
                $clothing = 'Skirt made of ' . $this->_getSoftMaterial();
            } elseif ($randNum == 2) {
                $clothing = 'Pantaloons made of ' . $this->_getSoftMaterial();
            } else {
                $clothing = 'Breeches made of ' . $this->_getSoftMaterial();
            }
        } else {
            $randNum = $this->_getDieRoll(1, 3);
            if ($randNum == 3) {
                $clothing = 'Slippers made of ' . $this->_getSoftMaterial();
            } elseif ($randNum == 2) {
                $clothing = 'Shoes made of ' . $this->_getSoftMaterial();
            } else {
                $clothing = 'Boots made of ' . $this->_getSoftMaterial();
            }
        }

        return $clothing;
    } // end _generateClothing()

    protected function _generateFurnishing() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 91) {
            $furn = $this->_getHardMaterial() . ' urn';
        } elseif ($d100 > 87) {
            $furn = $this->_getHardMaterial() . ' low table';
        } elseif ($d100 > 83) {
            $furn = $this->_getHardMaterial() . ' dining table';
        } elseif ($d100 > 80) {
            $furn = $this->_getSoftMaterial() . ' sheets';
        } elseif ($d100 > 77) {
            $furn = $this->_getSoftMaterial() . ' sack';
        } elseif ($d100 > 71) {
            $furn = $this->_getSoftMaterial() . ' rug';
        } elseif ($d100 > 69) {
            $furn = $this->_getSoftMaterial() . ' pillow';
        } elseif ($d100 > 66) {
            $furn = $this->_getHardMaterial() . ' wall mirror';
        } elseif ($d100 > 62) {
            $furn = $this->_getHardMaterial() . ' hand mirror';
        } elseif ($d100 > 59) {
            $furn = $this->_getHardMaterial() . ' lamp';
        } elseif ($d100 > 56) {
            $furn = $this->_getHardMaterial() . ' hourglass';
        } elseif ($d100 > 53) {
            $furn = $this->_getHardMaterial() . ' footstool upholstered with ' . $this->_getSoftMaterial();
        } elseif ($d100 > 48) {
            $furn = $this->_getHardMaterial() . ' display case';
        } elseif ($d100 > 43) {
            $furn = $this->_getHardMaterial() . ' desk';
        } elseif ($d100 > 40) {
            $furn = $this->_getSoftMaterial() . ' curtain';
        } elseif ($d100 > 35) {
            $randNum = $this->_getDieRoll(1, 3);
            if ($randNum == 3) {
                $furn = $this->_getHardMaterial() . ' couch upholstered with ' . $this->_getSoftMaterial();
            } elseif ($randNum == 2) {
                $furn = $this->_getHardMaterial() . ' divan upholstered with ' . $this->_getSoftMaterial();
            } else {
                $furn = $this->_getHardMaterial() . ' sofa upholstered with ' . $this->_getSoftMaterial();
            }
        } elseif ($d100 > 32) {
            $furn = $this->_getHardMaterial() . ' chest';
        } elseif ($d100 > 28) {
            $furn = $this->_getHardMaterial() . ' chandelier';
        } elseif ($d100 > 25) {
            $furn = $this->_getHardMaterial() . ' chair upholstered with ' . $this->_getSoftMaterial();
        } elseif ($d100 > 22) {
            $furn = $this->_getHardMaterial() . ' candlestick';
        } elseif ($d100 > 19) {
            $furn = $this->_getHardMaterial() . ' candelabra';
        } elseif ($d100 > 16) {
            $furn = $this->_getHardMaterial() . ' brazier';
        } elseif ($d100 > 13) {
            $furn = $this->_getHardMaterial() . ' bookcase';
        } elseif ($d100 > 10) {
            $furn = 'Blanket of ' . $this->_getSoftMaterial();
        } elseif ($d100 > 6) {
            $furn = $this->_getHardMaterial() . ' bench upholstered with ' . $this->_getSoftMaterial();
        } elseif ($d100 > 3) {
            $furn = $this->_getHardMaterial() . ' barrel';
        } else {
            $furn = $this->_getHardMaterial() . ' amoire';
        }

        return $furn;
    } // end _generateFurnishing()

    protected function _generateJewelry() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 95) {
            $jewelry = $this->_getHardMaterial() . ' tiara';
        } elseif ($d100 > 91) {
            $jewelry = $this->_getHardMaterial() . ' scepter';
        } elseif ($d100 > 82) {
            $jewelry = $this->_getHardMaterial() . ' ring';
        } elseif ($d100 > 75) {
            $jewelry = $this->_getHardMaterial() . ' pin';
        } elseif ($d100 > 73) {
            $jewelry = $this->_getHardMaterial() . ' phylactery';
        } elseif ($d100 > 71) {
            $jewelry = $this->_getHardMaterial() . ' periapt';
        } elseif ($d100 > 67) {
            $jewelry = $this->_getHardMaterial() . ' pendant';
        } elseif ($d100 > 61) {
            $jewelry = $this->_getHardMaterial() . ' necklace';
        } elseif ($d100 > 57) {
            $jewelry = $this->_getHardMaterial() . ' locket';
        } elseif ($d100 > 54) {
            $jewelry = $this->_getHardMaterial() . ' hat pin';
        } elseif ($d100 > 51) {
            $jewelry = $this->_getHardMaterial() . ' hair comb';
        } elseif ($d100 > 44) {
            $jewelry = $this->_getHardMaterial() . ' earrings';
        } elseif ($d100 > 40) {
            $jewelry = $this->_getHardMaterial() . ' crown';
        } elseif ($d100 > 35) {
            $jewelry = $this->_getHardMaterial() . ' circlet';
        } elseif ($d100 > 28) {
            $jewelry = $this->_getHardMaterial() . ' brooch';
        } elseif ($d100 > 20) {
            $jewelry = $this->_getHardMaterial() . ' bracelet';
        } elseif ($d100 > 15) {
            $jewelry = $this->_getHardMaterial() . ' belt';
        } elseif ($d100 > 11) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $jewelry = $this->_getHardMaterial() . ' armband';
            } else {
                $jewelry = $this->_getHardMaterial() . ' bracer';
            }
        } elseif ($d100 > 5) {
            $jewelry = $this->_getHardMaterial() . ' anklet';
        } else {
            $jewelry = $this->_getHardMaterial() . ' amulet';
        }
        $die = $this->_getDieRoll(1, 3);
        if ($die == 1) {
            // Do nothing
        } elseif ($die == 2) {
            $jewelry .= ' ' . $this->_getEmbellishment();
        } else {
            $jewelry .= ' ' . $this->_getEmbellishment() . ' and ' . $this->_getEmbellishment();
        }

        return $jewelry;
    } // end _generateJewelry()

    protected function _generateInstrument() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 97) {
            $inst = 'Zither';
        } elseif ($d100 > 93) {
            $inst = 'Whistle-pipe';
        } elseif ($d100 > 92) {
            $inst = 'Water-pipe';
        } elseif ($d100 > 88) {
            $inst = 'Herald\'s trumpet';
        } elseif ($d100 > 84) {
            $inst = 'Tabor';
        } elseif ($d100 > 82) {
            $inst = 'Wind stones';
        } elseif ($d100 > 81) {
            $inst = 'Shaum';
        } elseif ($d100 > 79) {
            $inst = 'Recorder-flute';
        } elseif ($d100 > 78) {
            $inst = 'Psaltery';
        } elseif ($d100 > 75) {
            $inst = 'Pan pipes';
        } elseif ($d100 > 74) {
            $inst = 'Pipe organ';
        } elseif ($d100 > 71) {
            $inst = 'Mandolin';
        } elseif ($d100 > 68) {
            $inst = 'Lyre';
        } elseif ($d100 > 65) {
            $inst = 'Lute';
        } elseif ($d100 > 63) {
            $inst = 'Lur';
        } elseif ($d100 > 60) {
            $inst = 'Lap-harp';
        } elseif ($d100 > 57) {
            $inst = 'Shell horn';
        } elseif ($d100 > 54) {
            $inst = 'Natural horn';
        } elseif ($d100 > 52) {
            $inst = 'Hautbois';
        } elseif ($d100 > 50) {
            $inst = 'Harpsichord';
        } elseif ($d100 > 48) {
            $inst = 'Aeolian harp';
        } elseif ($d100 > 45) {
            $inst = 'Harp';
        } elseif ($d100 > 43) {
            $inst = 'Harmonica';
        } elseif ($d100 > 39) {
            $inst = 'Handbell';
        } elseif ($d100 > 36) {
            $inst = 'Gong';
        } elseif ($d100 > 32) {
            $inst = 'Flute';
        } elseif ($d100 > 28) {
            $inst = 'Fiddle';
        } elseif ($d100 > 26) {
            $inst = 'Hammered dulcimer';
        } elseif ($d100 > 22) {
            $inst = 'Kettle drums';
        } elseif ($d100 > 18) {
            $inst = 'Bongo drums';
        } elseif ($d100 > 14) {
            $inst = 'Drum';
        } elseif ($d100 > 12) {
            $inst = 'Crumhorn';
        } elseif ($d100 > 10) {
            $inst = 'Clavichord';
        } elseif ($d100 > 8) {
            $inst = 'Wind chimes';
        } elseif ($d100 > 7) {
            $inst = 'Bones';
        } elseif ($d100 > 5) {
            $inst = 'Hanging bell';
        } elseif ($d100 > 3) {
            $inst = 'Banjolele';
        } elseif ($d100 > 2) {
            $inst = 'Bagpipes';
        } else {
            $inst = 'Alphorn';
        }

        return $inst;
    } // end _generateInstrument()

    protected function _generateToyOrGame() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 90) {
            $toyGame = $this->_getSoftMaterial() . ' puppet';
        } elseif ($d100 > 65) {
            $toyGame = $this->_getHardMaterial() . ' music box';
        } elseif ($d100 > 55) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2) {
                $toyGame = $this->_getHardMaterial() . ' mobile';
            } else {
                $toyGame = $this->_getSoftMaterial() . ' mobile';
            }
        } elseif ($d100 > 45) {
            $toyGame = 'Bag of ' . $this->_getHardMaterial() . ' marbles';
        } elseif ($d100 > 35) {
            $toyGame = 'Porcelain doll';
        } elseif ($d100 > 20) {
            $toyGame = $this->_getSoftMaterial() . ' doll';
        } elseif ($d100 > 10) {
            $toyGame = 'Pair of ' . $this->_getHardMaterial() . ' dice';
        } else {
            $toyGame = $this->_getHardMaterial() . ' chess set';
        }

        return $toyGame;
    } // end _generateToyOrGame()
} // end Tgen_DnD_3_Draconomicon