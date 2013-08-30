<?php
require_once dirname(__FILE__) . '/../config.php';

if (isset($_POST['edition'])) {
    $treasure = new Tgen_DnD();
    $treasure->generate();
    $treasure->loadToView($templatevars);
} else {
    $options = array(
        'edition'    => '',
        'mode35'     => 'DMG',
        'cr'         => '1',
        'multiplier' => '1',
        'ed3ExtSize' => false,
        'cursed'     => false,
        'trade'      => false,
        'drac'       => false,
    );
    $templatevars['tgenoptions'] =  $options;
}

$mem = memory_get_usage();
$templatevars['mem'] =  $mem;

$template = $twig->loadTemplate('pages/generic.tpl');
echo $template->render($templatevars);