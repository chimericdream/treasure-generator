<?php
require_once dirname(__FILE__) . '/../config.php';

$template = $twig->loadTemplate('pages/issues.tpl');
echo $template->render($templatevars);