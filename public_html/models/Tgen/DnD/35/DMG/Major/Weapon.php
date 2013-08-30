<?php
class Tgen_DnD_35_DMG_Major_Weapon extends Tgen_DnD_35_DMG_Weapon {
    public function generate() {
        $this->_size = $this->_getSize();
        $baseWeapon = $this->_getBaseWeapon();

        $d100 = $this->_getDieRoll(1, 100);
        $abilities = '';
        if ($d100 > 63) { // Special ability and roll again
            if ($baseWeapon['type'] == 'melee') {
                $abilities = $this->_getMeleeAbility() . ' ';
            } else {
                $abilities = $this->_getRangedAbility() . ' ';
            }

            // Now roll for the actual weapon
            $d100 = $this->_getDieRoll(1, 100) - 51;
            if ($d100 > 38 && $this->baseCost <= 6) { // +5 weapon
                $this->baseCost += 4;
                $this->bonus = 5;
            } elseif ($d100 > 20 && $this->baseCost <= 7) { // +4 weapon
                $this->baseCost += 3;
                $this->bonus = 4;
            } elseif ($this->baseCost <= 8) { // +3 weapon
                $this->baseCost += 2;
                $this->bonus = 3;
            } elseif ($this->baseCost <= 9) { // +2 weapon
                $this->baseCost++;
                $this->bonus = 2;
            } else { // +1 weapon with *lots* of abilities
                $this->bonus = 1;
            }
        } elseif ($d100 > 49) { // Specific weapon
            $this->_weapon = $this->_size[0] . ' '. $this->_getSpecificWeapon();
            return $this->_weapon;
        } elseif ($d100 > 38) { // +5 weapon
            $this->baseCost += 4;
            $this->bonus = 5;
        } elseif ($d100 > 20) { // +4 weapon
            $this->baseCost += 3;
            $this->bonus = 4;
        } else { // +3 weapon
            $this->baseCost += 2;
            $this->bonus = 3;
        }

        $this->calcWeaponCost($baseWeapon);
        $this->_weapon = $this->_size[0] . ' +' . $this->bonus . ' '
                       . $abilities . $baseWeapon['weapon'] . ' ('
                       . number_format($baseWeapon['cost']) . ' gp)';

        return $this->_weapon;
    } // end _generate()

    protected function _getMeleeAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $majorAb = array();
        if ($d100 > 90) { // Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $majorAb[] = $this->_getMeleeAbility(-10);
            }
        } elseif ($d100 > 88) {
            $majorAb[] = 'Vorpal';
            $this->baseCost += 5;
        } elseif ($d100 > 86) {
            $majorAb[] = 'Dancing';
            $this->baseCost += 4;
        } elseif ($d100 > 83) {
            $majorAb[] = 'Brilliant energy';
            $this->baseCost += 4;
        } elseif ($d100 > 78) {
            $majorAb[] = 'Speed';
            $this->baseCost += 3;
        } elseif ($d100 > 74) {
            $majorAb[] = 'Wounding';
            $this->baseCost += 2;
        } elseif ($d100 > 69) {
            $majorAb[] = 'Unholy';
            $this->baseCost += 2;
        } elseif ($d100 > 64) {
            $majorAb[] = 'Shocking burst';
            $this->baseCost += 2;
        } elseif ($d100 > 59) {
            $majorAb[] = 'Holy';
            $this->baseCost += 2;
        } elseif ($d100 > 54) {
            $majorAb[] = 'Icy burst';
            $this->baseCost += 2;
        } elseif ($d100 > 49) {
            $majorAb[] = 'Flaming burst';
            $this->baseCost += 2;
        } elseif ($d100 > 46) {
            $majorAb[] = 'Disruption';
            $this->baseCost += 2;
        } elseif ($d100 > 41) {
            $majorAb[] = 'Axiomatic';
            $this->baseCost += 2;
        } elseif ($d100 > 36) {
            $majorAb[] = 'Anarchic';
            $this->baseCost += 2;
        } elseif ($d100 > 32) {
            $majorAb[] = 'Vicious';
            $this->baseCost++;
        } elseif ($d100 > 28) {
            $majorAb[] = 'Thundering';
            $this->baseCost++;
        } elseif ($d100 > 24) {
            $majorAb[] = 'Throwing';
            $this->baseCost++;
        } elseif ($d100 > 21) {
            $majorAb[] = 'Spell storing';
            $this->baseCost++;
        } elseif ($d100 > 19) {
            $majorAb[] = 'Mighty cleaving';
            $this->baseCost++;
        } elseif ($d100 > 15) {
            $majorAb[] = 'Ki Focus';
            $this->baseCost++;
        } elseif ($d100 > 12) {
            $majorAb[] = 'Ghost touch';
            $this->baseCost++;
        } elseif ($d100 > 9) {
            $majorAb[] = 'Shocking';
            $this->baseCost++;
        } elseif ($d100 > 6) {
            $majorAb[] = 'Frost';
            $this->baseCost++;
        } elseif ($d100 > 3) {
            $majorAb[] = 'Flaming';
            $this->baseCost++;
        } else {
            $majorAb[] = 'Bane (' . $this->_getBaneEnemy() . ')';
            $this->baseCost++;
        }

        return implode(' and ', $majorAb);
    } // end _getMeleeAbility()

    protected function _getRangedAbility($modifier = 0) {
        $d100 = $this->_getDieRoll(1, 100) + $modifier;
        $majorAb = array();
        if ($d100 > 90) { // Roll again twice
            for ($i = 1; $i <= 2; $i++) {
                $majorAb[] = $this->_getRangedAbility(-10);
            }
        } elseif ($d100 > 84) {
            $majorAb[] = 'Brilliant energy';
            $this->baseCost += 4;
        } elseif ($d100 > 79) {
            $majorAb[] = 'Speed';
            $this->baseCost += 3;
        } elseif ($d100 > 74) {
            $majorAb[] = 'Unholy';
            $this->baseCost += 2;
        } elseif ($d100 > 64) {
            $majorAb[] = 'Shocking burst';
            $this->baseCost += 2;
        } elseif ($d100 > 54) {
            $majorAb[] = 'Icy burst';
            $this->baseCost += 2;
        } elseif ($d100 > 49) {
            $majorAb[] = 'Holy';
            $this->baseCost += 2;
        } elseif ($d100 > 39) {
            $majorAb[] = 'Flaming burst';
            $this->baseCost += 2;
        } elseif ($d100 > 34) {
            $majorAb[] = 'Axiomatic';
            $this->baseCost += 2;
        } elseif ($d100 > 29) {
            $majorAb[] = 'Anarchic';
            $this->baseCost += 2;
        } elseif ($d100 > 27) {
            $majorAb[] = 'Thundering';
            $this->baseCost++;
        } elseif ($d100 > 25) {
            $majorAb[] = 'Seeking';
            $this->baseCost++;
        } elseif ($d100 > 21) {
            $majorAb[] = 'Shocking';
            $this->baseCost++;
        } elseif ($d100 > 16) {
            $majorAb[] = 'Returning';
            $this->baseCost++;
        } elseif ($d100 > 12) {
            $majorAb[] = 'Frost';
            $this->baseCost++;
        } elseif ($d100 > 8) {
            $majorAb[] = 'Flaming';
            $this->baseCost++;
        } elseif ($d100 > 4) {
            $majorAb[] = 'Distance';
            $this->baseCost++;
        } else {
            $majorAb[] = 'Bane (' . $this->_getBaneEnemy() . ')';
            $this->baseCost++;
        }

        return implode(' and ', $majorAb);
    } // end _getRangedAbility()

    protected function _getSpecificWeapon() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 99) {
            $majWeapon = 'Luck blade (3 wishes) (142.960 gp)';
            $this->_hoard->cpValue += 142960 * 100;
        } elseif ($d100 > 97) {
            $majWeapon = 'Holy avenger (120,630 gp)';
            $this->_hoard->cpValue += 120630 * 100;
        } elseif ($d100 > 95) {
            $majWeapon = 'Luck blade (2 wishes) (102,660 gp)';
            $this->_hoard->cpValue += 102660 * 100;
        } elseif ($d100 > 91) {
            $majWeapon = 'Mace of smiting (75,312 gp)';
            $this->_hoard->cpValue += 75312 * 100;
        } elseif ($d100 > 84) {
            $majWeapon = 'Luck blade (1 wish) (62,360 gp)';
            $this->_hoard->cpValue += 62360 * 100;
        } elseif ($d100 > 79) {
            $majWeapon = 'Dwarven thrower (60,312 gp)';
            $this->_hoard->cpValue += 60312 * 100;
        } elseif ($d100 > 73) {
            $majWeapon = 'Frost brand (54,475 gp)';
            $this->_hoard->cpValue += 54475 * 100;
        } elseif ($d100 > 67) {
            $majWeapon = 'Sun blade (50,335 gp)';
            $this->_hoard->cpValue += 50335 * 100;
        } elseif ($d100 > 62) {
            $majWeapon = 'Rapier of puncturing (50,320 gp)';
            $this->_hoard->cpValue += 50320 * 100;
        } elseif ($d100 > 57) {
            $majWeapon = 'Sylvan scimitar (47,315 gp)';
            $this->_hoard->cpValue += 47315 * 100;
        } elseif ($d100 > 51) {
            $majWeapon = 'Life-drinker (40,320 gp)';
            $this->_hoard->cpValue += 40320 * 100;
        } elseif ($d100 > 46) {
            $majWeapon = 'Mace of terror (38,552 gp)';
            $this->_hoard->cpValue += 38552 * 100;
        } elseif ($d100 > 42) {
            $majWeapon = 'Oathbow (25,600 gp)';
            $this->_hoard->cpValue += 25600 * 100;
        } elseif ($d100 > 37) {
            $majWeapon = 'Sword of life stealing (25,715 gp)';
            $this->_hoard->cpValue += 25715 * 100;
        } elseif ($d100 > 31) {
            $majWeapon = 'Nine lives stealer (23,057 gp)';
            $this->_hoard->cpValue += 23057 * 100;
        } elseif ($d100 > 24) {
            $majWeapon = 'Sword of the planes (22,315 gp)';
            $this->_hoard->cpValue += 22315 * 100;
        } elseif ($d100 > 17) {
            $majWeapon = 'Sword of subtlety (22,310 gp)';
            $this->_hoard->cpValue += 22310 * 100;
        } elseif ($d100 > 13) {
            $majWeapon = 'Luck blade (0 wishes) (22,060 gp)';
            $this->_hoard->cpValue += 22060 * 100;
        } elseif ($d100 > 9) {
            $majWeapon = 'Flame tongue (20,715 gp)';
            $this->_hoard->cpValue += 20715 * 100;
        } elseif ($d100 > 7) {
            $majWeapon = 'Trident of fish command (18,650 gp)';
            $this->_hoard->cpValue += 18650 * 100;
        } elseif ($d100 > 4) {
            $majWeapon = 'Shifter\' sorrow (12,780 gp)';
            $this->_hoard->cpValue += 12780 * 100;
        } else {
            $majWeapon = 'Assassin\'s dagger (10,302 gp)';
            $this->_hoard->cpValue += 10302 * 100;
        }

        return $majWeapon;
    } // end _getSpecificWeapon()
}