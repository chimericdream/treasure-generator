<?php
error_reporting(0);

$ip = $_SERVER['REMOTE_ADDR'];
$myIps = array(
    '129.237.28.16',
);
if (in_array($ip, $myIps)) {
    error_reporting(E_ALL);
}

define('BASE_PATH',      '/home/chimericdream2/');
define('SITE_PATH',      BASE_PATH . 'worldofpannotia.com/');
define('PUBLIC_DIR',     SITE_PATH . 'public_html/');
define('ROOT_DIR', PUBLIC_DIR);
define('SESSION_NAME', 'tgen');

define('APP_DIR', ROOT_DIR . 'tools/' . SESSION_NAME);

define('APP_URL', 'http://www.worldofpannotia.com/tools/' . SESSION_NAME . '/');
define('SITE_URL', APP_URL);

define('DB_USER', 'worldofpannotia');
define('DB_NAME', DB_USER);
define('DB_PASS', '4sU8zpoCkFqK');
define('DB_HOST', 'mysql.worldofpannotia.com');

date_default_timezone_set('America/Chicago');

/**
 * This file also includes code to register its methods as autoloaders
 * @see SPEAR/AutoloadLocal
 */
require_once '/home/chimericdream2/worldofpannotia.com/lib/SPEAR/AutoloadLocal.php';

AutoloadLocal::setIncludePath(APP_DIR);

/**
 * This starts a session based on SESSION_NAME, stored in the current acct
 * @see /SPEAR/SessionLocal
 */
require_once '/home/chimericdream2/worldofpannotia.com/lib/SPEAR/SessionLocal.php';
SessionLocal::start(SESSION_NAME);

define('TWIG_DIR',       SITE_PATH . 'lib/Twig-1.12.2/lib/Twig/');
define('VIEW_PATH',      SITE_PATH . 'public_html/assets/templates');
define('ASSET_PATH',     'http://assets.worldofpannotia.com/');
define('ASSET_CSS_PATH', ASSET_PATH . '/css');
define('ASSET_IMG_PATH', ASSET_PATH . '/images');
define('ASSET_JS_PATH',  ASSET_PATH . '/js');

require_once TWIG_DIR . 'Autoloader.php';
Twig_Autoloader::register();

$tloader = new Twig_Loader_Filesystem(VIEW_PATH);
$twig = new Twig_Environment($tloader, array(
    'cache' => VIEW_PATH . '/compile',
    'auto_reload' => true,
));

$templatevars = array(
    'asset_path'  => ASSET_PATH,
    'css_path'    => ASSET_CSS_PATH,
    'img_path'    => ASSET_IMG_PATH,
    'js_path'     => ASSET_JS_PATH,
    'site_url'    => SITE_URL,
    'view_path'   => VIEW_PATH,
);

$logger = new Logger(APP_DIR . '/' . SESSION_NAME . '.log');