<?php
class Tgen_DnD_35 extends Tgen_DnD_3 {
    protected function _getArtObjects($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $randNum = $this->_getDieRoll(1, 2);
            if ($randNum == 2 && $this->drac) {
                $drac = new Tgen_DnD_3_Draconomicon($this);
                $this->goods[] = $drac->generate();
                unset($drac);
            } else {
                $art = new Tgen_DnD_35_Art($this);
                $this->goods[] = $art->generate();
                unset($art);
            }
        }
    } // end _getArtObjects()

    protected function _getGems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $gem = new Tgen_DnD_35_Gem($this);
            $this->goods[] = $gem->generate();
            unset($gem);
        }
    } // end _getGems()

    protected function _getMundaneItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $mundane = new Tgen_DnD_35_Mundane($this);
            $this->items[] = $mundane->generate();
            unset($mundane);
        }        
    } // end _getMundaneItems()

    protected function _getMinorItems($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $die = $this->_getDieRoll(1, 20);
            if (($die > 1 && $this->cursed) || $this->cursed == false) { // No cursed Item
                $minor = new Tgen_DnD_35_Minor($this);
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
                $medium = new Tgen_DnD_35_Medium($this);
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
                $major = new Tgen_DnD_35_Major($this);
                $this->items[] = $major->generate();
                unset($major);
            } else { // Cursed item!!!!
                $this->_getCursedItem();
            }
        }
    } // end _getMajorItems()
} // end Tgen_DnD_35

/**
 * Generating magic items for CR 21-50
 * 
 * Levels 21-30 follow the progression in the DMG;
 * Levels 31-50 follow the recommendations from the ELH, increasing by ~10% from
 * the previous level
 *
Level   # of items to add to total
21	1
22	2
23	4
24	6
25	9
26	12
27	17
28	23
29	31
30	42
31	46
32	51
33	56
34	61
35	68
36	74
37	82
38	90
39	99
40	109
41	120
42	132
43	145
44	159
45	175
46	193
47	212
48	234
49	257
50	283
 */

/**
 * Generating trade goods for CR 1-50
 * No tables exist... here is the breakdown I am using
CR	Pct	#
1	30	1
2	50	1
3	50	1d3
4	50	1d4
5	50	1d4
6	50	1d6
7	50	1d6
8	50	1d6
9	50	1d8
10	50	1d8
11	60	1d8
12	60	2d6
13	60	2d6
14	60	2d6
15	60	3d6
16	60	3d6
17	60	3d6
18	60	3d8
19	60	3d8
20	60	3d8
21	70	3d10
22	70	3d10
23	70	3d10
24	70	3d10
25	70	3d12
26	70	3d12
27	70	3d12
28	70	3d12
29	70	4d10
30	70	4d10
31	80	4d10
32	80	4d10
33	80	4d12
34	80	4d12
35	80	4d12
36	80	4d12
37	80	10d6
38	80	10d6
39	80	10d6
40	80	10d6
41	90	10d6
42	90	10d6
43	90	10d6
44	90	15d6
45	90	15d6
46	90	15d6
47	90	15d6
48	90	15d6
49	90	15d6
50	90	15d6
 */