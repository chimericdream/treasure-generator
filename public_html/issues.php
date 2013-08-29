<?php
require_once dirname(__FILE__) . '/../config.php';

echo $twig->render('tgen/pages/issues.tpl', $templatevars);