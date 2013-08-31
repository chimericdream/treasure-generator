<?php
class Tgen_DnD_35_MIC_Goods extends Tgen_DnD_35_MIC {
    protected $_haord = null;
    public $items = array();
    public $value = array(
        'dice' => 0,
        'type' => 0,
        'mult' => 0,
    );

    public function  __construct(Tgen_DnD_35 $hoard) {
        $this->_hoard = $hoard;
    }

    public function generate() {
        $dieType = count($this->items);
        $item = $this->_getDieRoll(1, $dieType);
        if ($item > 1) {$item--;}
        $value = number_format($this->_getDieRoll($this->value['dice'], $this->value['type']) * $this->value['mult']) . ' gp';
        return "{$this->items[$item]} ({$value})";
    }
} // end Tgen_DnD_35_MIC_Goods