<?php
class Tgen_Pannotia_Medium_Armor extends Tgen_Pannotia_Armor {
    public function generate() {
        $this->_size = $this->_getSize();
        $modifier = 0;
        $special = false;

        while (true) {
            $d100 = $this->_getDieRoll(1, 100) + $modifier;
            if ($d100 > 63) { //Special ability and roll again
                $special = true;
                $modifier = -37;
            } elseif ($d100 > 60) { //Specific shield
                $this->_armor = $this->_size[0] . ' ' . $this->_getSpecificShield();
                return $this->_armor;
            } elseif ($d100 > 57) { //Specific armor
                $this->_armor = $this->_size[0] . ' ' . $this->_getSpecificArmor();
                return $this->_armor;
            } elseif ($d100 > 55) { //+4 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                $this->baseCost += 3;
                $this->bonus = 4;
                break;
            } elseif ($d100 > 50) { //+4 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                $this->baseCost += 3;
                $this->bonus = 4;
                break;
            } elseif ($d100 > 40) { //+3 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                $this->baseCost += 2;
                $this->bonus = 3;
                break;
            } elseif ($d100 > 30) { //+3 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                $this->baseCost += 2;
                $this->bonus = 3;
                break;
            } elseif ($d100 > 20) { //+2 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                $this->baseCost++;
                $this->bonus = 2;
                break;
            } elseif ($d100 > 10) { //+2 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                $this->baseCost++;
                $this->bonus = 2;
                break;
            } elseif ($d100 > 5) { //+1 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                break;
            } else { //+1 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                break;
            }
        } // while()

        $this->calcArmorCost($baseArmor);
        $this->_armor = $this->_size[0] . ' +' . $this->bonus . ' ' . $baseArmor['armor'];
        if (isset($abilities) && $abilities != '') {
            $this->_armor .= ' with ' . $abilities;
        }
        $this->_armor .= ' (' . number_format($baseArmor['cost']) . ' gp)';

        return $this->_armor;
    } // end generate()

    protected function _getArmorAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $mediumAb = array();
        if ($d100 > 99) { //Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $mediumAb[] = $this->_getArmorAbility(-1);
            }
        } elseif ($d100 > 94) {
            $mediumAb[] = 'Wild';
            $this->baseCost += 3;
        } elseif ($d100 > 89) {
            $mediumAb[] = 'Spell resistance (15)';
            $this->baseCost += 3;
        } elseif ($d100 > 84) {
            $mediumAb[] = 'Fortification, moderate';
            $this->baseCost += 3;
        } elseif ($d100 > 79) {
            $mediumAb[] = 'Invulnerability';
            $this->baseCost += 3;
        } elseif ($d100 > 74) {
            $mediumAb[] = 'Ghost touch';
            $this->baseCost += 3;
        } elseif ($d100 > 69) {
            $mediumAb[] = 'Sonic resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 64) {
            $mediumAb[] = 'Fire resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 59) {
            $mediumAb[] = 'Electricity resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 54) {
            $mediumAb[] = 'Cold resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 49) {
            $mediumAb[] = 'Acid resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 39) {
            $mediumAb[] = 'Silent moves, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 29) {
            $mediumAb[] = 'Shadow, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 19) {
            $mediumAb[] = 'Slick, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 17) {
            $mediumAb[] = 'Spell resistance (13)';
            $this->baseCost += 2;
        } elseif ($d100 > 14) {
            $mediumAb[] = 'Silent moves';
            $this->costMod += 3750;
        } elseif ($d100 > 11) {
            $mediumAb[] = 'Shadow';
            $this->costMod += 3750;
        } elseif ($d100 > 8) {
            $mediumAb[] = 'Slick';
            $this->costMod += 3750;
        } elseif ($d100 > 5) {
            $mediumAb[] = 'Fortification, light';
            $this->baseCost++;
        } else {
            $mediumAb[] = 'Glamered';
            $this->costMod += 2700;
        }

        return implode(' and ', $mediumAb);
    } // end _getArmorAbility()

    protected function _getShieldAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $mediumAb = array();
        if ($d100 > 99) { //Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $mediumAb[] = $this->_getShieldAbility(-1);
            }
        } elseif ($d100 > 98) {
            $mediumAb[] = 'Wild';
            $this->baseCost += 3;
        } elseif ($d100 > 95) {
            $mediumAb[] = 'Spell resistance (15)';
            $this->baseCost += 3;
        } elseif ($d100 > 85) {
            $mediumAb[] = 'Fortification, moderate';
            $this->baseCost += 3;
        } elseif ($d100 > 79) {
            $mediumAb[] = 'Ghost touch';
            $this->baseCost += 3;
        } elseif ($d100 > 75) {
            $mediumAb[] = 'Sonic resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 71) {
            $mediumAb[] = 'Fire resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 67) {
            $mediumAb[] = 'Electricity resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 63) {
            $mediumAb[] = 'Cold resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 59) {
            $mediumAb[] = 'Acid resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 57) {
            $mediumAb[] = 'Spell resistance (13)';
            $this->baseCost += 2;
        } elseif ($d100 > 50) {
            $mediumAb[] = 'Animated';
            $this->baseCost += 2;
        } elseif ($d100 > 40) {
            $mediumAb[] = 'Arrow deflection';
            $this->baseCost += 2;
        } elseif ($d100 > 25) {
            $mediumAb[] = 'Fortification, light';
            $this->baseCost++;
        } elseif ($d100 > 20) {
            $mediumAb[] = 'Blinding';
            $this->baseCost++;
        } elseif ($d100 > 10) {
            $mediumAb[] = 'Bashing';
            $this->baseCost++;
        } else {
            $mediumAb[] = 'Arrow catching';
            $this->baseCost++;
        }

        return implode (' and ', $mediumAb);
    } // end _getShieldAbility()

    protected function _getSpecificArmor() {
        $d100 = $this->_getDieRoll(1, 100);

        if ($d100 > 97) {
            $medArmor = 'Banded mail of luck (18,900 gp)';
            $this->_hoard->cpValue += 18900 * 100;
        } elseif ($d100 > 82) {
            $medArmor = 'Dwarven plate (16,500 gp)';
            $this->_hoard->cpValue += 16500 * 100;
        } elseif ($d100 > 67) {
            $medArmor = 'Adamantine breastplate (10,200 gp)';
            $this->_hoard->cpValue += 10200 * 100;
        } elseif ($d100 > 57) {
            $medArmor = 'Rhino hide (5,165 gp)';
            $this->_hoard->cpValue += 5165 * 100;
        } elseif ($d100 > 45) {
            $medArmor = 'Elven chain (4,150 gp)';
            $this->_hoard->cpValue += 4150 * 100;
        } elseif ($d100 > 25) {
            $medArmor = 'Dragonhide plate (3,300 gp)';
            $this->_hoard->cpValue += 3300 * 100;
        } else {
            $medArmor = 'Mithral shirt (1,100 gp)';
            $this->_hoard->cpValue += 1100 * 100;
        }

        return $medArmor;
    } // end _getSpecificArmor()

    protected function _getSpecificShield() {
        $d100 = $this->_getDieRoll(1, 100);

        if ($d100 > 95) {
            $medShield = 'Winged shield (17,257 gp)';
            $this->_hoard->cpValue += 17257 * 100;
        } elseif ($d100 > 90) {
            $medShield = 'Lion\'s shield (9,170 gp)';
            $this->_hoard->cpValue += 9170 * 100;
        } elseif ($d100 > 85) {
            $medShield = 'Spined shield (5,580 gp)';
            $this->_hoard->cpValue += 5580 * 100;
        } elseif ($d100 > 70) {
            $spell = $this->_generateCastersShieldScroll();
            $medShield = "Caster's shield {$spell}(3,153 gp)";
            $this->_hoard->cpValue += 3153 * 100;
        } elseif ($d100 > 45) {
            $medShield = 'Mithral heavy shield (1,020 gp)';
            $this->_hoard->cpValue += 1020 * 100;
        } elseif ($d100 > 20) {
            $medShield = 'Darkwood shield (257 gp)';
            $this->_hoard->cpValue += 257 * 100;
        } else {
            $medShield = 'Darkwood buckler (205 gp)';
            $this->_hoard->cpValue += 205 * 100;
        }

        return $medShield;
    } // end _getSpecificShield()
}