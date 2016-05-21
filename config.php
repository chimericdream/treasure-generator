<?php
$host = filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_URL);
$debug = false;

if (strpos($host, 'tgen.local.dev') !== false) {
    error_reporting(-1);

    define('BASE_PATH',    '/vagrantshare/www/');
    define('SITE_PATH',    BASE_PATH . 'tgen_dev/');
    define('PUBLIC_DIR',   SITE_PATH . 'public_html/');
    define('ROOT_DIR',     PUBLIC_DIR);
    define('SESSION_NAME', 'tgen');
    define('APP_DIR',      ROOT_DIR);
    define('APP_URL',      "http://{$host}/");
    define('SITE_URL',     APP_URL);
    $debug = true;
} else {
    define('BASE_PATH',    '/home/chimericdream2/');
    define('SITE_PATH',    BASE_PATH . 'tgen.worldofpannotia.com/');
    define('PUBLIC_DIR',   SITE_PATH . 'public_html/');
    define('ROOT_DIR',     PUBLIC_DIR);
    define('SESSION_NAME', 'tgen');
    define('APP_DIR',      ROOT_DIR);
    define('APP_URL',      'http://tgen.worldofpannotia.com/');
    define('SITE_URL',     APP_URL);
}

define('DB_USER', 'worldofpannotia');
define('DB_NAME', DB_USER);
define('DB_PASS', '4sU8zpoCkFqK');
define('DB_HOST', 'mysql.worldofpannotia.com');

date_default_timezone_set('America/Chicago');

require_once dirname(__FILE__) . '/lib/AutoloadLocal.php';
AutoloadLocal::setIncludePath(array(
    dirname(__FILE__) . '/lib',
    dirname(__FILE__) . '/public_html/models',
));

require_once dirname(__FILE__) . '/lib/SessionLocal.php';
SessionLocal::start(SESSION_NAME);

define('VIEW_PATH',      SITE_PATH . 'public_html/views');
define('ASSET_PATH',     'http://assets.worldofpannotia.com/');
define('ASSET_CSS_PATH', ASSET_PATH . '/css');
define('ASSET_IMG_PATH', ASSET_PATH . '/images');
define('ASSET_JS_PATH',  ASSET_PATH . '/js');

require_once dirname(__FILE__) . '/lib/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$tloader = new Twig_Loader_Filesystem(VIEW_PATH);
$twig = new Twig_Environment($tloader, array(
    'cache' => VIEW_PATH . '/compile',
    'auto_reload' => true,
    'debug' => $debug,
));
if ($debug) {
    $twig->addExtension(new Twig_Extension_Debug());
}

$templatevars = array(
    'asset_path'  => ASSET_PATH,
    'css_path'    => ASSET_CSS_PATH,
    'img_path'    => ASSET_IMG_PATH,
    'js_path'     => ASSET_JS_PATH,
    'site_url'    => SITE_URL,
    'view_path'   => VIEW_PATH,
);