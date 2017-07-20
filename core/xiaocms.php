<?php
/**
 * xiaocms.php
 * 框架入口文件
 */
header('Content-Type: text/html; charset=utf-8');
define('IN_XIAOCMS', true);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
/**
 * 配置
 */
define('DS',     DIRECTORY_SEPARATOR);

define('SYS_START_TIME',     microtime(true));
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
define('CORE_PATH',           dirname(__FILE__) . DS);
define('DATA_DIR',         XIAOCMS_PATH . 'data' . DS);
define('TEMPLATE_DIR',           XIAOCMS_PATH . 'template' . DS);
if (!defined('CONTROLLER_DIR')) define('CONTROLLER_DIR',     CORE_PATH . 'controller' . DS);
define('COOKIE_PRE',			'xiaocms_');//Cookie 前缀，同一域名下安装多套系统时，请修改Cookie前缀
date_default_timezone_set('Asia/Shanghai');
xiaocms::load_file(CORE_PATH . 'library' . DS . 'global.function.php');
xiaocms::load_file(CORE_PATH . 'version.php');
xiaocms::load_file(CORE_PATH . 'controller/Base.class.php'); 

/**
 * 系统核心全局控制类
 */
abstract class xiaocms {
	/**
	 * 分析URL信息
	 */
	private static function parse_request() {
		$string = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? $_SERVER['QUERY_STRING'] : $_SERVER['REQUEST_URI'];
		parse_str($string, $array);
		define('CONTROLLER_NAME', (isset($array['c']) && $array['c']) ? self::_safe($array['c']) : 'index');
		define('ACTION_NAME', (isset($array['a']) && $array['a']) ? self::_safe($array['a']) : 'index');
		$_GET             = array_merge($_GET, $array);
		return true;
	}
	
	/**
	 * 项目运行函数
	 */
	public static function run() {
		$config = self::load_config('config');
		if(!empty($config['site_mobile'])) {
			$mTpl = (is_dir(TEMPLATE_DIR . 'mobile') ? 'mobile' : $config['site_theme']);
			if($config['wap']) {
				$www = explode('.',$_SERVER['SERVER_NAME']);
 				if($www['0'] ==$config['wap']) {
					$config['site_theme'] =  $mTpl;
 				}
 			} else {
				if(isset($_GET['web'])){
					if($_GET['web']=='m' || $_GET['web']=='pc'){
						cookie::set('web',$_GET['web']);
					}else {
						cookie::delete('web');
					}
				}
				$web  = cookie::get('web');
				if($web){ //优先判断cookie
					$config['site_theme'] = ($web == 'm') ? $mTpl : $config['site_theme'];
				} elseif ( is_mobile() ){ // 手机版访问
					$config['site_theme'] =  $mTpl;
				}
 			}
		}

		define('SYS_THEME_DIR',	$config['site_theme'] . DS);	//模板风格
		self::parse_request();
		$controller = CONTROLLER_NAME;
		$action     = ACTION_NAME . 'Action';
		if (is_file(CONTROLLER_DIR . $controller . '.php')) {	
			include(CONTROLLER_DIR . $controller . '.php');				
		} else {
			exit('XiaoCms：Controller does not exist.');
		}
		$object = new $controller();
		if (method_exists($controller, $action)) {
			$object->$action();
		} else {
			exit('XiaoCms：Action does not exist.');
		}
	}
	
	/**
	 * 静态加载文件(相当于PHP函数require_once)
	 */
	public static function load_file($file_name) {
		static $_files = array();
		 if (!isset($_files[$file_name])) {

			if (!file_exists($file_name)) {
				exit('The file:' . str_replace(XIAOCMS_PATH,'/',$file_name) . ' not found!');
			}
			$_files[$file_name] = include $file_name;
		}
		return $_files[$file_name];
	}
	
	/**
	 * 加载配置文件
	 */
	public static function load_config($file, $key = null, $default = null) {

        if (!isset($_config[$file])) {
            $_config[$file] = self::load_file(DATA_DIR . 'config' . DS . $file . '.ini.php');
        }
        return !isset($key) ? $_config[$file] : (isset($_config[$file][$key]) ? $_config[$file][$key] : $default);
	}



	/**
	 * 加载类
	 */
	public static function load_class($className) {
		static $_array = array();

        if (isset($_array[$className])) {
            return $_array[$className];
        }

        return $_array[$className] = new $className();


	}
	
    /**
	 * 安全处理函数controller
	 */
	private static function _safe($str) {
		$str = trim(strtolower($str));
		return str_replace(array('/', '.'), '', $str);
	}
	

    /**
     * 类映射路径
     * @var array
     */
    private static $_classMap = array(
    	'QC' => 'qqconnect/QC.class.php',
    	'Oauth' => 'qqconnect/Oauth.class.php',
    	'Recorder' => 'qqconnect/Recorder.class.php',
    	'URL' => 'qqconnect/URL.class.php',
    );

    /**
     * 自动加载
     */
    public static function autoload($className)
    {

        if (isset(self::$_classMap[$className])) {
            $classFile = CORE_PATH.'library'.DS . self::$_classMap[$className];
        }  else {
            $classFile = CORE_PATH.'library'.DS . $className . '.class.php';
        }

        include($classFile);
    }

}
spl_autoload_register(array('xiaocms', 'autoload'));
