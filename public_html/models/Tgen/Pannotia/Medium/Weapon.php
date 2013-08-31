<?php
class Tgen_Pannotia_Medium_Weapon extends Tgen_Pannotia_Weapon {
    public function generate() {
        $this->_size = $this->_getSize();
        $baseWeapon = $this->_getBaseWeapon();

        $d100 = $this->_getDieRoll(1, 100);
        $abilities = '';
        if ($d100 > 68) { // Special ability and roll again
            if ($baseWeapon['type'] == 'melee') {
                $abilities = $this->_getMeleeAbility() . ' ';
            } else {
                $abilities = $this->_getRangedAbility() . ' ';
            }

            // Now roll for the actual weapon
            $d100 = $this->_getDieRoll(1, 100) - 38;
            if ($d100 > 58) { // +4 weapon
                $this->baseCost += 3;
                $this->bonus = 4;
            } elseif ($d100 > 29) { // +3 weapon
                $this->baseCost += 2;
                $this->bonus = 3;
            } elseif ($d100 > 10) { // +2 weapon
                $this->baseCost++;
                $this->bonus = 2;
            } else {
                // +1 weapon; nothing special
            }
        } elseif ($d100 > 62) { // Specific weapon
            $this->_weapon = $this->_size[0] . ' ' . $this->_getSpecificWeapon();
            return $this->_weapon;
        } elseif ($d100 > 58) { // +4 weapon
            $this->baseCost += 3;
            $this->bonus = 4;
        } elseif ($d100 > 29) { // +3 weapon
            $this->baseCost += 2;
            $this->bonus = 3;
        } elseif ($d100 > 10) { // +2 weapon
            $this->baseCost++;
            $this->bonus = 2;
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
        $mediumAb = array();
        if ($d100 > 95) { // Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $mediumAb[] = $this->_getMeleeAbility(-5);
            }
        } elseif ($d100 > 93) {
            $mediumAb[] = 'Wounding';
            $this->baseCost += 2;
        } elseif ($d100 > 90) {
            $mediumAb[] = 'Unholy';
            $this->baseCost += 2;
        } elseif ($d100 > 87) {
            $mediumAb[] = 'Shocking burst';
            $this->baseCost += 2;
        } elseif ($d100 > 84) {
            $mediumAb[] = 'Holy';
            $this->baseCost += 2;
        } elseif ($d100 > 81) {
            $mediumAb[] = 'Icy burst';
            $this->baseCost += 2;
        } elseif ($d100 > 78) {
            $mediumAb[] = 'Flaming burst';
            $this->baseCost += 2;
        } elseif ($d100 > 75) {
            $mediumAb[] = 'Disruption';
            $this->baseCost += 2;
        } elseif ($d100 > 72) {
            $mediumAb[] = 'Axiomatic';
            $this->baseCost += 2;
        } elseif ($d100 > 69) {
            $mediumAb[] = 'Anarchic';
            $this->baseCost += 2;
        } elseif ($d100 > 65) {
            $mediumAb[] = 'Vicious';
            $this->baseCost++;
        } elseif ($d100 > 63) {
            $mediumAb[] = 'Thundering';
            $this->baseCost++;
        } elseif ($d100 > 59) {
            $mediumAb[] = 'Throwing';
            $this->baseCost++;
        } elseif ($d100 > 54) {
            $mediumAb[] = 'Spell storing';
            $this->baseCost++;
        } elseif ($d100 > 50) {
            $mediumAb[] = 'Mighty cleaving';
            $this->baseCost++;
        } elseif ($d100 > 47) {
            $mediumAb[] = 'Merciful';
            $this->baseCost++;
        } elseif ($d100 > 44) {
            $mediumAb[] = 'Ki Focus';
            $this->baseCost++;
        } elseif ($d100 > 38) {
            $mediumAb[] = 'Keen';
            $this->baseCost++;
        } elseif ($d100 > 33) {
            $mediumAb[] = 'Ghost touch';
            $this->baseCost++;
        } elseif ($d100 > 26) {
            $mediumAb[] = 'Shocking';
            $this->baseCost++;
        } elseif ($d100 > 19) {
            $mediumAb[] = 'Frost';
            $this->baseCost++;
        } elseif ($d100 > 12) {
            $mediumAb[] = 'Flaming';
            $this->baseCost++;
        } elseif ($d100 > 6) {
            $mediumAb[] = 'Defending';
            $this->baseCost++;
        } else {
            $mediumAb[] = 'Bane (' . $this->_getBaneEnemy() . ')';
            $this->baseCost++;
        }

        return implode(' and ', $mediumAb);
    } // end _getMeleeAbility()

    protected function _getRangedAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $mediumAb = array();
        if ($d100 > 95) { // Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $mediumAb[] = $this->_getRangedAbility(-5);
            }
        } elseif ($d100 > 92) {
            $mediumAb[] = 'Unholy';
            $this->baseCost += 2;
        } elseif ($d100 > 87) {
            $mediumAb[] = 'Shocking burst';
            $this->baseCost += 2;
        } elseif ($d100 > 82) {
            $mediumAb[] = 'Icy burst';
            $this->baseCost += 2;
        } elseif ($d100 > 79) {
            $mediumAb[] = 'Holy';
            $this->baseCost += 2;
        } elseif ($d100 > 74) {
            $mediumAb[] = 'Flaming burst';
            $this->baseCost += 2;
        } elseif ($d100 > 71) {
            $mediumAb[] = 'Axiomatic';
            $this->baseCost += 2;
        } elseif ($d100 > 68) {
            $mediumAb[] = 'Anarchic';
            $this->baseCost += 2;
        } elseif ($d100 > 64) {
            $mediumAb[] = 'Thundering';
            $this->baseCost++;
        } elseif ($d100 > 59) {
            $mediumAb[] = 'Seeking';
            $this->baseCost++;
        } elseif ($d100 > 47) {
            $mediumAb[] = 'Shocking';
            $this->baseCost++;
        } elseif ($d100 > 42) {
            $mediumAb[] = 'Returning';
            $this->baseCost++;
        } elseif ($d100 > 40) {
            $mediumAb[] = 'Merciful';
            $this->baseCost++;
        } elseif ($d100 > 28) {
            $mediumAb[] = 'Frost';
            $this->baseCost++;
        } elseif ($d100 > 16) {
            $mediumAb[] = 'Flaming';
            $this->baseCost++;
        } elseif ($d100 > 8) {
            $mediumAb[] = 'Distance';
            $this->baseCost++;
        } else {
            $mediumAb[] = 'Bane (' . $this->_getBaneEnemy() . ')';
            $this->baseCost++;
        }

        return implode(' and ', $mediumAb);
    } // end _getRangedAbility()

    protected function _getSpecificWeapon() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 98) {
            $medWeapon = 'Oathbow (25,600 gp)';
            $this->_hoard->cpValue += 25600 * 100;
        } elseif ($d100 > 95) {
            $medWeapon = 'Sword of life stealing (25,715 gp)';
            $this->_hoard->cpValue += 25715 * 100;
        } elseif ($d100 > 91) {
            $medWeapon = 'Nine lives stealer (23,057 gp)';
            $this->_hoard->cpValue += 23057 * 100;
        } elseif ($d100 > 86) {
            $medWeapon = 'Sword of the planes (22,315 gp)';
            $this->_hoard->cpValue += 22315 * 100;
        } elseif ($d100 > 79) {
            $medWeapon = 'Sword of subtlety (22,310 gp)';
            $this->_hoard->cpValue += 22310 * 100;
        } elseif ($d100 > 74) {
            $medWeapon = 'Luck blade (0 wishes) (22,060 gp)';
            $this->_hoard->cpValue += 22060 * 100;
        } elseif ($d100 > 66) {
            $medWeapon = 'Flame tongue (20,715 gp)';
            $this->_hoard->cpValue += 20715 * 100;
        } elseif ($d100 > 62) {
            $medWeapon = 'Trident of fish command (18,650 gp)';
            $this->_hoard->cpValue += 18650 * 100;
        } elseif ($d100 > 57) {
            $medWeapon = 'Shifter\' sorrow (12,780 gp)';
            $this->_hoard->cpValue += 12780 * 100;
        } elseif ($d100 > 51) {
            $medWeapon = 'Assassin\'s dagger (10,302 gp)';
            $this->_hoard->cpValue += 10302 * 100;
        } elseif ($d100 > 46) {
            $medWeapon = 'Trident of warning (10,115 gp)';
            $this->_hoard->cpValue += 10115 * 100;
        } elseif ($d100 > 40) {
            $medWeapon = 'Dagger of venom (8,302 gp)';
            $this->_hoard->cpValue += 8302 * 100;
        } elseif ($d100 > 37) {
            $medWeapon = 'Shatterspike (4,315 gp)';
            $this->_hoard->cpValue += 4315 * 100;
        } elseif ($d100 > 33) {
            $medWeapon = 'Slaying arrow (greater) (4,057 gp)';
            $this->_hoard->cpValue += 4057 * 100;
        } elseif ($d100 > 24) {
            $medWeapon = 'Adamantine battleaxe (3,010 gp)';
            $this->_hoard->cpValue += 3010 * 100;
        } elseif ($d100 > 15) {
            $medWeapon = 'Adamantine dagger (3,002 gp)';
            $this->_hoard->cpValue += 3002 * 100;
        } elseif ($d100 > 9) {
            $medWeapon = 'Slaying arrow (' . $this->_getBaneEnemy() . ') (2,282 gp)';
            $this->_hoard->cpValue += 2282 * 100;
        } else {
            $medWeapon = 'Javelin of lightning (1,500 gp)';
            $this->_hoard->cpValue += 1500 * 100;
        }

        return $medWeapon;
    } // end _getSpecificWeapon()
}