<?php
require_once dirname(__FILE__) . '/../config.php';

if (isset($_POST['ruleset']) && ctype_alpha($_POST['ruleset']) && class_exists('Tgen_' . $_POST['ruleset'])) {
    $class = 'Tgen_' . $_POST['ruleset'];
    $treasure = new $class();
    $treasure->generate();
    $treasure->loadToView($templatevars);
} else {
    $options = array(
        'ruleset'    => '',
        'cr'         => '1',
        'multiplier' => '1',
        'extSize'    => false,
        'cursed'     => false,
        'trade'      => false,
    );
    $templatevars['tgenoptions'] =  $options;
}

$mem = memory_get_usage();
$templatevars['mem'] =  $mem;

$template = $twig->loadTemplate('pages/generic.tpl');
echo $template->render($templatevars);