<?php
class Tgen_DnD_35 extends Tgen_DnD {
    public function __construct(array $options) {
        parent::__construct($options);
    } // end __construct()

    protected function _getSize() {
        if ($this->extSize) {
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
            $tradeGoods = new Tgen_DnD_30_Draconomicon_TradeGoods($this);
            $this->tradeGoods[] = $tradeGoods->generate();
            unset($tradeGoods);
        }
    } // end _getTradeGoods()

    protected function _getCursedItem() {
        $cursed = new Tgen_DnD_35_DMG_CursedItem($this);
        $this->items[] = $cursed->generate();
        unset($cursed);
    } // end _getCursedItem()
} // end Tgen_DnD_35