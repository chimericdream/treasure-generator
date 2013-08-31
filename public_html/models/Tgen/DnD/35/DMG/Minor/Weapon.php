<?php
class Tgen_DnD_35_DMG_Minor_Weapon extends Tgen_DnD_35_DMG_Weapon {
    public function generate() {
        $this->_size = $this->_getSize();
        $baseWeapon = $this->_getBaseWeapon();

        $d100 = $this->_getDieRoll(1, 100);
        $abilities = '';
        if ($d100 > 90) { // Special ability and roll again
            if ($baseWeapon['type'] == 'melee') {
                $abilities = $this->_getMeleeAbility() . ' ';
            } else {
                $abilities = $this->_getRangedAbility() . ' ';
            }

            // Now roll for the actual weapon
            $d100 = $this->_getDieRoll(1, 100) - 15;
            if ($d100 > 70) { // +2 weapon
                $this->baseCost++;
                $this->bonus = 2;
            } else {
                // +1 weapon; nothing special
            }
        } elseif ($d100 > 85) { // Specific weapon
            $this->_weapon = $this->_size[0] . ' ' . $this->_getSpecificWeapon();
            return $this->_weapon;
        } elseif ($d100 > 70) { // +2 weapon
            $this->baseCost++;
        } else {
            // +1 weapon; nothing special
        }

        $this->calcWeaponCost($baseWeapon);
        $this->_weapon = $this->_size[0] . ' +' . $this->bonus . ' '
                       . $abilities . $baseWeapon['weapon'] . ' ('
                       . number_format($baseWeapon['cost']) . ' gp)';

        return $this->_weapon;
    } // end _generate()

    protected function _getMeleeAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $minorAb = array();
        if ($d100 > 99) { // Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $minorAb[] = $this->_getMeleeAbility(-1);
            }
        } elseif ($d100 > 95) {
            $minorAb[] = 'Vicious';
            $this->baseCost++;
        } elseif ($d100 > 91) {
            $minorAb[] = 'Thundering';
            $this->baseCost++;
        } elseif ($d100 > 87) {
            $minorAb[] = 'Throwing';
            $this->baseCost++;
        } elseif ($d100 > 82) {
            $minorAb[] = 'Spell storing';
            $this->baseCost++;
        } elseif ($d100 > 75) {
            $minorAb[] = 'Mighty cleaving';
            $this->baseCost++;
        } elseif ($d100 > 71) {
            $minorAb[] = 'Merciful';
            $this->baseCost++;
        } elseif ($d100 > 67) {
            $minorAb[] = 'Ki Focus';
            $this->baseCost++;
        } elseif ($d100 > 56) {
            $minorAb[] = 'Keen';
            $this->baseCost++;
        } elseif ($d100 > 47) {
            $minorAb[] = 'Ghost touch';
            $this->baseCost++;
        } elseif ($d100 > 37) {
            $minorAb[] = 'Shocking';
            $this->baseCost++;
        } elseif ($d100 > 27) {
            $minorAb[] = 'Frost';
            $this->baseCost++;
        } elseif ($d100 > 17) {
            $minorAb[] = 'Flaming';
            $this->baseCost++;
        } elseif ($d100 > 10) {
            $minorAb[] = 'Defending';
            $this->baseCost++;
        } else {
            $minorAb[] = 'Bane (' . $this->_getBaneEnemy() . ')';
            $this->baseCost++;
        }

        return implode(' and ', $minorAb);
    } // end _getMeleeAbility()

    protected function _getRangedAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $minorAb = array();
        if ($d100 > 99) { // Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $minorAb[] = $this->_getRangedAbility(-1);
            }
        } elseif ($d100 > 93) {
            $minorAb[] = 'Thundering';
            $this->baseCost++;
        } elseif ($d100 > 83) {
            $minorAb[] = 'Seeking';
            $this->baseCost++;
        } elseif ($d100 > 68) {
            $minorAb[] = 'Shocking';
            $this->baseCost++;
        } elseif ($d100 > 60) {
            $minorAb[] = 'Returning';
            $this->baseCost++;
        } elseif ($d100 > 55) {
            $minorAb[] = 'Merciful';
            $this->baseCost++;
        } elseif ($d100 > 40) {
            $minorAb[] = 'Frost';
            $this->baseCost++;
        } elseif ($d100 > 25) {
            $minorAb[] = 'Flaming';
            $this->baseCost++;
        } elseif ($d100 > 12) {
            $minorAb[] = 'Distance';
            $this->baseCost++;
        } else {
            $minorAb[] = 'Bane (' . $this->_getBaneEnemy() . ')';
            $this->baseCost++;
        }

        return implode(' and ', $minorAb);
    } // end _getRangedAbility()

    protected function _getSpecificWeapon() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 90) {
            $minWeapon = 'Adamantine battleaxe (3,010 gp)';
            $this->_hoard->cpValue += 3010 * 100;
        } elseif ($d100 > 80) {
            $minWeapon = 'Adamantine dagger (3,002 gp)';
            $this->_hoard->cpValue += 3002 * 100;
        } elseif ($d100 > 75) {
            $minWeapon = 'Slaying arrow (' . $this->_getBaneEnemy() . ') (2,282 gp)';
            $this->_hoard->cpValue += 2282 * 100;
        } elseif ($d100 > 65) {
            $minWeapon = 'Javelin of lightning (1,500 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        } elseif ($d100 > 45) {
            $minWeapon = 'Cold iron longsword, masterwork (330 gp)';
            $this->_hoard->cpValue += 330 * 100;
        } elseif ($d100 > 25) {
            $minWeapon = 'Silver dagger, masterwork (322 gp)';
            $this->_hoard->cpValue += 322 * 100;
        } elseif ($d100 > 15) {
            $minWeapon = 'Screaming bolt (267 gp)';
            $this->_hoard->cpValue += 267 * 100;
        } else {
            $minWeapon = 'Sleep arrow (132 gp)';
            $this->_hoard->cpValue += 132 * 100;
        }

        return $minWeapon;
    } // end _getSpecificWeapon()

}