<?php
if (!defined('IN_XIAOCMS')) exit();

class session
{

    protected static $start = false;

    public function __construct()
    {
        $this->_setTimeout();
    }

    public static function start()
    {
        if (!self::$start) {
            if (isset($_REQUEST['session_id'])){ 
                session_id($_REQUEST['session_id']); 
            }
            session_start();
            self::$start = true;
        }
    }

    public static function set($key, $value = null)
    {
        //分析是否开启session
        if (!self::$start) {
            self::start();
        }

        if (!$key) return false;
        $_SESSION[$key] = $value;
        return true;
    }

    public static function get($key, $default = null)
    {
        //分析是否开启session
        if (!self::$start) {
            self::start();
        }
        if (!$key) return isset($_SESSION) ? $_SESSION : null;
        if (!isset($_SESSION[$key])) return $default;
        return $_SESSION[$key];
    }

    public static function delete($key)
    {
        //分析是否开启session
        if (!self::$start) {
            self::start();
        }
        if (!$key) return false;
        if (!isset($_SESSION[$key])) return false;
        unset($_SESSION[$key]);
        return true;
    }

    public static function clear()
    {
        //分析是否开启session
        if (!self::$start) {
            self::start();
        }

        $_SESSION = array();
        return true;
    }

    public static function destory()
    {
        unset($_SESSION);
        session_destroy();

        return true;
    }

    public static function close()
    {
        if (self::$start === true) {
            session_write_close();
        }
        return true;
    }

    protected static function _setTimeout()
    {
        return ini_set('session.gc_maxlifetime', 21600);
    }

    public function __destruct()
    {
        $this->close();
        return true;
    }
	
}
