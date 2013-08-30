<?php
require_once dirname(__FILE__) . '/../config.php';

error_reporting(-1);

$options = array();

$ruleset = $_POST['ruleset'];
switch ($ruleset) {
    case 'DnD':
        $class = 'Tgen_DnD_';
        $edition = $_POST['DnD_edition'];
        switch ($edition) {
            case '30':
                $class .= $edition;
                break;
            case '35_DMG':
                $cr = $_POST['DnD_35_DMG_CR'];
                $class .= $edition . '_CR' . $cr;
                $options = array(
                    'multiplier'  => (int)  $_POST['DnD_35_DMG_Mult'],
                    'extSize'     => (bool) $_POST['DnD_35_DMG_ExtSize'],
                    'cursed'      => (bool) $_POST['DnD_35_DMG_Cursed'],
                    'trade'       => (bool) $_POST['DnD_35_DMG_TradeGoods'],
                    'drac'        => (bool) $_POST['DnD_35_DMG_DracGoods'],
                    'ruleset'     => 'DnD',
                    'DnD_edition' => '35_DMG',
                    'cr'          => $cr,
                );
                break;
            case '35_MIC':
                $class .= $edition;
                break;
            case '40':
                $class .= $edition;
                break;
            default:
                $class = NULL;
                break;
        }
        if (empty($class)) {
            break;
        }
        break;
    case 'Pannotia':
        $class = 'Tgen_Pannotia';
        break;
    case 'Pathfinder':
        $class = 'Tgen_Pathfinder';
        break;
    default:
        $class = NULL;
        break;
}

if (!empty($class) && class_exists($class)) {
    $treasure = new $class($options);
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
        'drac'       => false,
    );
    $templatevars['tgenoptions'] =  $options;
}

$mem = memory_get_usage();
$templatevars['mem'] =  $mem;

$template = $twig->loadTemplate('pages/generic.tpl');
echo $template->render($templatevars);