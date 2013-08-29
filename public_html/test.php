<?php
require_once dirname(__FILE__) . '/../config.php';

$options = array(
    'dndEdition' => '35',
    'dndMode'    => 'MIC',
    'dndCr'      => 1,
    'multiplier' => 1,
    'cursed'     => false,
    'trade'      => false,
    'drac'       => false,
    'ed3ExtSize' => false,
);

$temp = new Tgen_DnD_35MIC_CR1($options);
for ($i = 1; $i <= 25000; $i++) {
    try {
        $treasure = new Tgen_DnD_35MIC_Items_25($temp);
        $item = $treasure->generate();
        if ($item == '') {
            throw new Exception();
        }
        echo "Item #{$i}: {$item}<br />\n";
        unset($treasure);
    } catch (Exception $e) {
        echo $i . '<br />';
        echo '<pre>';
        var_dump($treasure);
        exit;
    }
}

echo 'Success';