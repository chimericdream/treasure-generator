<?php
class SessionLocal
{
    const USE_ONLY_COOKIES = 1;
    const HASH_FUNCTION    = 1;
    const COOKIE_LIFETIME  = 7200;
    const COOKIE_PATH      = '';
    const COOKIE_DOMAIN    = '';
    const HTTPS_ONLY       = true;
    const NO_JS_COOKIE     = true;

    public static function start($name = SESSION_NAME, $savePath = '/sessions/')
    {
        if (isset($_SESSION)) {
            return;
//            require_once 'SPEAR/SpearException/SessionLocal.php';
//            throw new SpearException_SessionLocal(
//                SpearException_SessionLocal::SESSION_ALREADY_STARTED);
        }
        if (false === ini_set('session.use_only_cookies', self::USE_ONLY_COOKIES)) {
            return;
//            require_once 'SPEAR/SpearException/SessionLocal.php';
//            throw new SpearException_SessionLocal(
//                SpearException_SessionLocal::INI_SET_FAILURE);
        }
        if (false === ini_set('session.hash_function', self::HASH_FUNCTION)) {
            return;
//            require_once 'SPEAR/SpearException/SessionLocal.php';
//            throw new SpearException_SessionLocal(
//                SpearException_SessionLocal::INI_SET_FAILURE);
        }

        //can't check return value because there is none
        //if we really wanted to check return we can call ini_set() 5 times
        session_set_cookie_params(self::COOKIE_LIFETIME, self::COOKIE_PATH,
            self::COOKIE_DOMAIN, self::HTTPS_ONLY, self::NO_JS_COOKIE);
        //store session files in subfolder of account, not global /tmp folder
        $fullSavePath = APP_DIR . $savePath;
        if (is_dir($fullSavePath) && is_writable($fullSavePath)) {
            session_save_path($fullSavePath);
        } else {
            return;
//            require_once 'SPEAR/SpearException/SessionLocal.php';
//            throw new SpearException_SessionLocal(
//                SpearException_SessionLocal::INVALID_SAVE_PATH, $fullSavePath);
        }

        session_name($name);

        //starting in PHP 5.3, session_start returns a real boolean
        if (PHP_VERSION >= '5.3') {
            if (!session_start()) {
                return;
//                require_once 'SPEAR/SpearException/SessionLocal.php';
//                throw new SpearException_SessionLocal(
//                    SpearException_SessionLocal::SESSION_START_FAILURE);
            }
        } else {
            session_start();
            if (!isset($_SESSION)) {
                return;
//                require_once 'SPEAR/SpearException/SessionLocal.php';
//                throw new SpearException_SessionLocal(
//                    SpearException_SessionLocal::SESSION_START_FAILURE);
            }
        }
    }

    public static function kill()
    {
        // Unset all of the session variables.
        $_SESSION = array();

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }
        session_destroy();
    }
}
