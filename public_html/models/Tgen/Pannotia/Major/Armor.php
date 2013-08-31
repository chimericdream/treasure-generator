<?php
class Tgen_Pannotia_Major_Armor extends Tgen_Pannotia_Armor {
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
            } elseif ($d100 > 49) { //+5 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                if ($this->baseCost <= 6) { //+5
                    $this->baseCost += 4;
                    $this->bonus = 5;
                } elseif ($this->baseCost <= 7) { //+4
                    $this->baseCost += 3;
                    $this->bonus = 4;
                } elseif ($this->baseCost <= 8) { //+3
                    $this->baseCost += 2;
                    $this->bonus = 3;
                } elseif ($this->baseCost <= 9) { //+2
                    $this->baseCost++;
                    $this->bonus = 2;
                } else { //+1 with lots of abilities
                    $this->bonus = 1;
                }
                break;
            } elseif ($d100 > 38) { //+5 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                if ($this->baseCost <= 6) { //+5
                    $this->baseCost += 4;
                    $this->bonus = 5;
                } elseif ($this->baseCost <= 7) { //+4
                    $this->baseCost += 3;
                    $this->bonus = 4;
                } elseif ($this->baseCost <= 8) { //+3
                    $this->baseCost += 2;
                    $this->bonus = 3;
                } elseif ($this->baseCost <= 9) { //+2
                    $this->baseCost++;
                    $this->bonus = 2;
                } else { //+1 with lots of abilities
                    $this->bonus = 1;
                }
                break;
            } elseif ($d100 > 27) { //+4 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                if ($this->baseCost <= 7) { //+4
                    $this->baseCost += 3;
                    $this->bonus = 4;
                } elseif ($this->baseCost <= 8) { //+3
                    $this->baseCost += 2;
                    $this->bonus = 3;
                } elseif ($this->baseCost <= 9) { //+2
                    $this->baseCost++;
                    $this->bonus = 2;
                } else { //+1 with lots of abilities
                    $this->bonus = 1;
                }
                break;
            } elseif ($d100 > 16) { //+4 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                if ($this->baseCost <= 7) { //+4
                    $this->baseCost += 3;
                    $this->bonus = 4;
                } elseif ($this->baseCost <= 8) { //+3
                    $this->baseCost += 2;
                    $this->bonus = 3;
                } elseif ($this->baseCost <= 9) { //+2
                    $this->baseCost++;
                    $this->bonus = 2;
                } else { //+1 with lots of abilities
                    $this->bonus = 1;
                }
                break;
            } elseif ($d100 > 8) { //+3 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                if ($this->baseCost <= 8) { //+3
                    $this->baseCost += 2;
                    $this->bonus = 3;
                } elseif ($this->baseCost <= 9) { //+2
                    $this->baseCost++;
                    $this->bonus = 2;
                } else { //+1 with lots of abilities
                    $this->bonus = 1;
                }
                break;
            } else { //+3 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                if ($this->baseCost <= 8) { //+3
                    $this->baseCost += 2;
                    $this->bonus = 3;
                } elseif ($this->baseCost <= 9) { //+2
                    $this->baseCost++;
                    $this->bonus = 2;
                } else { //+1 with lots of abilities
                    $this->bonus = 1;
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
        $majorAb = array();
        if ($d100 > 99) { //Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $majorAb[] = $this->_getArmorAbility(-1);
            }
        } elseif ($d100 > 98) {
            $majorAb[] = 'Sonic resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 97) {
            $majorAb[] = 'Fire resistance resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 96) {
            $majorAb[] = 'Electricity resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 95) {
            $majorAb[] = 'Cold resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 94) {
            $majorAb[] = 'Acid resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 92 && $this->baseCost <= 4) {
            $majorAb[] = 'Spell resistance (19)';
            $this->baseCost += 5;
        } elseif ($d100 > 90 && $this->baseCost <= 4) {
            $majorAb[] = 'Fortification, heavy';
            $this->baseCost += 5;
        } elseif ($d100 > 89) {
            $majorAb[] = 'Undead controlling';
            $this->costMod += 49000;
        } elseif ($d100 > 88) {
            $majorAb[] = 'Etherealness';
            $this->costMod += 49000;
        } elseif ($d100 > 83) {
            $majorAb[] = 'Spell resistance (17)';
            $this->baseCost += 4;
        } elseif ($d100 > 78) {
            $majorAb[] = 'Sonic resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 73) {
            $majorAb[] = 'Fire resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 68) {
            $majorAb[] = 'Electricity resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 63) {
            $majorAb[] = 'Cold resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 58) {
            $majorAb[] = 'Acid resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 53) {
            $majorAb[] = 'Silent moves, greater';
            $this->costMod += 33750;
        } elseif ($d100 > 48) {
            $majorAb[] = 'Shadow, greater';
            $this->costMod += 33750;
        } elseif ($d100 > 43) {
            $majorAb[] = 'Slick, greater';
        } elseif ($d100 > 42) {
            $majorAb[] = 'Wild';
            $this->baseCost += 3;
        } elseif ($d100 > 40) {
            $majorAb[] = 'Spell resistance (15)';
            $this->baseCost += 3;
        } elseif ($d100 > 35) {
            $majorAb[] = 'Fortification, moderate';
            $this->baseCost += 3;
        } elseif ($d100 > 33) {
            $majorAb[] = 'Invulnerability';
            $this->baseCost += 3;
        } elseif ($d100 > 28) {
            $majorAb[] = 'Ghost touch';
            $this->baseCost += 3;
        } elseif ($d100 > 25) {
            $majorAb[] = 'Sonic resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 22) {
            $majorAb[] = 'Fire resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 19) {
            $majorAb[] = 'Electricity resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 16) {
            $majorAb[] = 'Cold resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 13) {
            $majorAb[] = 'Acid resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 10) {
            $majorAb[] = 'Silent moves, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 7) {
            $majorAb[] = 'Shadow, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 4) {
            $majorAb[] = 'Slick, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 3) {
            $majorAb[] = 'Fortification, light';
            $this->baseCost++;
        } else {
            $majorAb[] = 'Glamered';
            $this->costMod += 2700;
        }

        return implode(' and ', $majorAb);
    } // end _getArmorAbility()

    protected function _getShieldAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $majorAb = array();
        if ($d100 > 99) { //Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $majorAb[] = $this->_getShieldAbility(-1);
            }
        } elseif ($d100 > 98) {
            $majorAb[] = 'Sonic resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 97) {
            $majorAb[] = 'Fire resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 96) {
            $majorAb[] = 'Electricity resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 95) {
            $majorAb[] = 'Cold resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 94) {
            $majorAb[] = 'Acid resistance, greater';
            $this->costMod += 66000;
        } elseif ($d100 > 93 && $this->baseCost <= 4) {
            $majorAb[] = 'Spell resistance (19)';
            $this->baseCost += 5;
        } elseif ($d100 > 91 && $this->baseCost <= 4) {
            $majorAb[] = 'Reflecting';
            $this->baseCost += 5;
        } elseif ($d100 > 87 && $this->baseCost <= 4) {
            $majorAb[] = 'Fortification, heavy';
            $this->baseCost += 5;
        } elseif ($d100 > 86) {
            $majorAb[] = 'Undead controlling';
            $this->costMod += 49000;
        } elseif ($d100 > 84) {
            $majorAb[] = 'Spell resistance (17)';
            $this->baseCost += 4;
        } elseif ($d100 > 79) {
            $majorAb[] = 'Sonic resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 74) {
            $majorAb[] = 'Fire resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 69) {
            $majorAb[] = 'Electricity resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 64) {
            $majorAb[] = 'Cold resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 59) {
            $majorAb[] = 'Acid resistance, improved';
            $this->costMod += 42000;
        } elseif ($d100 > 58) {
            $majorAb[] = 'Wild';
            $this->baseCost += 3;
        } elseif ($d100 > 56) {
            $majorAb[] = 'Spell resistance (15)';
            $this->baseCost += 3;
        } elseif ($d100 > 46) {
            $majorAb[] = 'Fortification, moderate';
            $this->baseCost += 3;
        } elseif ($d100 > 40) {
            $majorAb[] = 'Ghost touch';
            $this->baseCost += 3;
        } elseif ($d100 > 37) {
            $majorAb[] = 'Sonic resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 34) {
            $majorAb[] = 'Fire resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 31) {
            $majorAb[] = 'Electricity resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 28) {
            $majorAb[] = 'Cold resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 25) {
            $majorAb[] = 'Acid resistance';
            $this->costMod += 18000;
        } elseif ($d100 > 20) {
            $majorAb[] = 'Animated';
            $this->baseCost += 2;
        } elseif ($d100 > 15) {
            $majorAb[] = 'Arrow deflection';
            $this->baseCost += 2;
        } elseif ($d100 > 10) {
            $majorAb[] = 'Fortification, light';
            $this->baseCost++;
        } elseif ($d100 > 8) {
            $majorAb[] = 'Blinding';
            $this->baseCost++;
        } elseif ($d100 > 5) {
            $majorAb[] = 'Bashing';
            $this->baseCost++;
        } else {
            $majorAb[] = 'Arrow catching';
            $this->baseCost++;
        }

        return implode (' and ', $majorAb);
    } // end _getShieldAbility()

    protected function _getSpecificArmor() {
        $d100 = $this->_getDieRoll(1, 100);

        if ($d100 > 90) {
            $majArmor = 'Demon armor (52,260 gp)';
            $this->_hoard->cpValue += 52260 * 100;
        } elseif ($d100 > 75) {
            $majArmor = 'Mithral full plate of speed (26,500 gp)';
            $this->_hoard->cpValue += 26500 * 100;
        } elseif ($d100 > 60) {
            $majArmor = 'Breastplate of command (25,400 gp)';
            $this->_hoard->cpValue += 25400 * 100;
        } elseif ($d100 > 50) {
            $majArmor = 'Plate armor of the deep (24,650 gp)';
            $this->_hoard->cpValue += 24650 * 100;
        } elseif ($d100 > 32) {
            $majArmor = 'Celestial armor (22,400 gp)';
            $this->_hoard->cpValue += 22400 * 100;
        } elseif ($d100 > 20) {
            $majArmor = 'Banded mail of luck (18,900 gp)';
            $this->_hoard->cpValue += 18900 * 100;
        } elseif ($d100 > 10) {
            $majArmor = 'Dwarven plate (16,500 gp)';
            $this->_hoard->cpValue += 16500 * 100;
        } else {
            $majArmor = 'Adamantine breastplate (10,200 gp)';
            $this->_hoard->cpValue += 10200 * 100;
        }

        return $majArmor;
    } // end _getSpecificArmor()

    protected function _getSpecificShield() {
        $d100 = $this->_getDieRoll(1, 100);

        if ($d100 > 90) {
            $majShield = 'Absorbing shield (50,170 gp)';
            $this->_hoard->cpValue += 50170 * 100;
        } elseif ($d100 > 60) {
            $majShield = 'Winged shield (17,257 gp)';
            $this->_hoard->cpValue += 17257 * 100;
        } elseif ($d100 > 40) {
            $majShield = 'Lion\'s shield (9,170 gp)';
            $this->_hoard->cpValue += 9170 * 100;
        } elseif ($d100 > 20) {
            $majShield = 'Spined shield (5,580 gp)';
            $this->_hoard->cpValue += 5580 * 100;
        } else {
            $spell = $this->_generateCastersShieldScroll();
            $majShield = "Caster's shield {$spell}(3,153 gp)";
            $this->_hoard->cpValue += 3153 * 100;
        }

        return $majShield;
    } // end _getSpecificShield()
}