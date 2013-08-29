<?php
class Tgen_DnD_3 extends Tgen_DnD {
    public    $cpValue    = 0;       // Total CP value for the hoard

    public    $multiplier = 1;
    public    $trade      = false;
    public    $drac       = false;
    public    $cursed     = false;
    public    $extSize    = false;

    public    $coins      = array(   //
            'cp' => 0,
            'sp' => 0,
            'gp' => 0,
            'pp' => 0,
    );
    public    $goods      = array(); //
    public    $items      = array(); //
    public    $tradeGoods = array(); //

    public function __construct(array $options) {
        $this->multiplier    = $options['multiplier'];
        $this->trade         = $options['trade'];
        $this->drac          = $options['drac'];
        $this->cursed        = $options['cursed'];
        $_SESSION['extSize'] = (bool) $options['ed3ExtSize'];
    } // end __construct()

    protected function _getSize() {
        if ($_SESSION['extSize']) {
            return $this->_getExtendedSize();
        } else {
            return $this->_getStandardSize();
        }
    } // end _getSize()

    protected function _getStandardSize() {
        $d100 = $this->_getDieRoll(1, 100);
        if ($d100 > 10) {
            $size[0] = '<acronym title="Normal base price for the item">Medium</acronym>';
            $size[1] = 1;
        } else {
            $size[0] = '<acronym title="Normal base price for the item">Small</acronym>';
            $size[1] = 1;
        }

        return $size;
    }

    protected function _getExtendedSize() {
        $d200 = $this->_getDieRoll(1, 200);
        if ($d200 > 199) {
            $size[0] = '<acronym title="*8 to the base price of the item">Colossal</acronym>';
            $size[1] = 8;
        } elseif ($d200 > 196) {
            $size[0] = '<acronym title="*4 to the base price of the item">Gargantuan</acronym>';
            $size[1] = 4;
        } elseif ($d200 > 190) {
            $size[0] = '<acronym title="*2 to the base price of the item">Huge</acronym>';
            $size[1] = 2;
        } elseif ($d200 > 160) {
            $size[0] = '<acronym title="Normal base price for the item">Large</acronym>';
            $size[1] = 1;
        } elseif ($d200 > 40) {
            $size[0] = '<acronym title="Normal base price for the item">Medium</acronym>';
            $size[1] = 1;
        } elseif ($d200 > 10) {
            $size[0] = '<acronym title="Normal base price for the item">Small</acronym>';
            $size[1] = 1;
        } elseif ($d200 > 4) {
            $size[0] = '<acronym title="*2 to the base price of the item">Tiny</acronym>';
            $size[1] = 2;
        } elseif ($d200 > 1) {
            $size[0] = '<acronym title="*4 to the base price of the item">Diminutive</acronym>';
            $size[1] = 4;
        } else {
            $size[0] = '<acronym title="*8 to the base price of the item">Fine</acronym>';
            $size[1] = 8;
        }

        return $size;
    }

    protected function _getTradeGoods($howMany) {
        for ($n = 1; $n <= $howMany; $n++) {
            $tradeGoods = new Tgen_DnD_3_Draconomicon_TradeGoods($this);
            $this->tradeGoods[] = $tradeGoods->generate();
            unset($tradeGoods);
        }
    } // end _getTradeGoods()

    protected function _getCursedItem() {
        $cursed = new Tgen_DnD_3_CursedItem($this);
        $this->items[] = $cursed->generate();
        unset($cursed);
    } // end _getCursedItem()
} // end Tgen_DnD_3

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