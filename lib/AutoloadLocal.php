<?php
class AutoloadLocal
{
    public static function fetchByName($class)
    {
        $class = str_replace('_', '/', $class);
        $paths = array(
            APP_DIR . '/models',
            APP_DIR . '/../lib',
        );
        foreach ($paths as $path) {
            $path2 = $path . '/' . $class . '.class.php';
            $path = $path . '/' . $class . '.php';
            if (file_exists($path)) {
                require_once $path;
                return;
            }
            if (file_exists($path2)) {
                require_once $path2;
                return;
            }
        }
    }

    public static function fetchByLocation($class)
    {
        $class = strtolower($class);
        $paths = array(
            APP_DIR . '/models',
            APP_DIR . '/../lib',
        );
        foreach ($paths as $path) {
            $path = "$path/$class.php";
            if (file_exists($path)) {
                require_once $path;
                return;
            }
        }
    }

    public static function setIncludePath($path)
    {
        ini_set('include_path', ':'. implode(':', $path) . ':' . ini_get('include_path'));
    }
}

//this registers the function as __autoload handlers in the Standard PHP Library
spl_autoload_register('AutoloadLocal::fetchByName');
spl_autoload_register('AutoloadLocal::fetchByLocation');