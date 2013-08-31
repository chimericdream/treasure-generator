<?php
class Tgen_Pannotia_Minor_Armor extends Tgen_Pannotia_Armor {
    public function generate() {
        $this->_size = $this->_getSize();
        $modifier = 0;
        $special = false;

        while (true) {
            $d100 = $this->_getDieRoll(1, 100) + $modifier;
            if ($d100 > 91) { //Special ability and roll again
                $special = true;
                $modifier = -10;
            } elseif ($d100 > 89) { //Specific shield
                $this->_armor = $this->_size[0] . ' ' . $this->_getSpecificShield();
                return $this->_armor;
            } elseif ($d100 > 87) { //Specific armor
                $this->_armor = $this->_size[0] . ' ' . $this->_getSpecificArmor();
                return $this->_armor;
            } elseif ($d100 > 85) { //+2 armor
                $baseArmor = $this->getBaseArmor();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getArmorAbility();
                }
                $this->baseCost++;
                $this->bonus = 2;
                break;
            } elseif ($d100 > 80) { //+2 shield
                $baseArmor = $this->getBaseShield();
                if ($special) { //Need to roll special abilities
                    $abilities = $this->_getShieldAbility();
                }
                $this->baseCost++;
                $this->bonus = 2;
                break;
            } elseif ($d100 > 60) { //+1 armor
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
        $minorAb = array();
        if ($d100 > 99) { //Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $minorAb[] = $this->_getArmorAbility(-1);
            }
        } elseif ($d100 > 98) {
            $minorAb[] = 'Silent moves, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 97) {
            $minorAb[] = 'Shadow, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 96) {
            $minorAb[] = 'Slick, improved';
            $this->costMod += 15000;
        } elseif ($d100 > 92) {
            $minorAb[] = 'Spell resistance (13)';
            $this->baseCost += 2;
        } elseif ($d100 > 72) {
            $minorAb[] = 'Silent moves';
            $this->costMod += 3750;
        } elseif ($d100 > 52) {
            $minorAb[] = 'Shadow';
            $this->costMod += 3750;
        } elseif ($d100 > 32) {
            $minorAb[] = 'Slick';
            $this->costMod += 3750;
        } elseif ($d100 > 25) {
            $minorAb[] = 'Fortification, light';
            $this->baseCost++;
        } else {
            $minorAb[] = 'Glamered';
            $this->costMod += 2700;
        }

        return implode(' and ', $minorAb);
    } // end _getArmorAbility()

    protected function _getShieldAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $minorAb = array();
        if ($d100 > 99) { //Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $minorAb[] = $this->_getShieldAbility(-1);
            }
        } elseif ($d100 > 97) {
            $minorAb[] = 'Spell resistance (13)';
            $this->baseCost += 2;
        } elseif ($d100 > 92) {
            $minorAb[] = 'Animated';
            $this->baseCost += 2;
        } elseif ($d100 > 75) {
            $minorAb[] = 'Arrow deflection';
            $this->baseCost += 2;
        } elseif ($d100 > 50) {
            $minorAb[] = 'Fortification, light';
            $this->baseCost++;
        } elseif ($d100 > 40) {
            $minorAb[] = 'Blinding';
            $this->baseCost++;
        } elseif ($d100 > 20) {
            $minorAb[] = 'Bashing';
            $this->baseCost++;
        } else {
            $minorAb[] = 'Arrow catching';
            $this->baseCost++;
        }

        return implode (' and ', $minorAb);
    } // end _getShieldAbility()

    protected function _getSpecificArmor() {
        $d100 = $this->_getDieRoll(1, 100);

        if ($d100 > 80) {
            $minArmor = 'Elven chain (4,150 gp)';
            $this->_hoard->cpValue += 4150 * 100;
        } elseif ($d100 > 50) {
            $minArmor = 'Dragonhide plate (3,300 gp)';
            $this->_hoard->cpValue += 3300 * 100;
        } else {
            $minArmor = 'Mithral shirt (1,100 gp)';
            $this->_hoard->cpValue += 1100 * 100;
        }

        return $minArmor;
    } // end _getSpecificArmor()

    protected function _getSpecificShield() {
        $d100 = $this->_getDieRoll(1, 100);

        if ($d100 > 95) {
            $spell = $this->_generateCastersShieldScroll();
            $minShield = "Caster's shield {$spell}(3,153 gp)";
            $this->_hoard->cpValue += 3153 * 100;
        } elseif ($d100 > 80) {
            $minShield = 'Mithral heavy shield (1,020 gp)';
            $this->_hoard->cpValue += 1020 * 100;
        } elseif ($d100 > 30) {
            $minShield = 'Darkwood shield (257 gp)';
            $this->_hoard->cpValue += 257 * 100;
        } else {
            $minShield = 'Darkwood buckler (205 gp)';
            $this->_hoard->cpValue += 205 * 100;
        }

        return $minShield;
    } // end _getSpecificShield()
}