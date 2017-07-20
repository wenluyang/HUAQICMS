<?php

class request
{

    public static function get($string = null)
    {
        if ($string === null) return self::array_map_htmlspecialchars($_GET);
        if (!isset($_GET[$string])) return null;
        if (!is_array($_GET[$string])) return htmlspecialchars(trim($_GET[$string]));
        return null;
    }

    public static function post($string = null)
    {
        if ($string === null) return self::array_map_htmlspecialchars($_POST);
        if (!isset($_POST[$string])) return null;
        if (!is_array($_POST[$string])) return htmlspecialchars(trim($_POST[$string]));
        $postArray = self::array_map_htmlspecialchars($_POST[$string]);
        return $postArray;
    }

    protected static function array_map_htmlspecialchars($string)
    {
        foreach ($string as $key => $value) {
            $string[$key] = is_array($value) ? self::array_map_htmlspecialchars($value) : htmlspecialchars(trim($value));
        }
        return $string;
    }
    /**
     * 判断是否为GET调用
     *
     * @access public
     * @return boolean
     */
    public static function isGet()
    {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    /**
     * 判断是否为POST调用
     *
     * @access public
     * @return boolean
     */
    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    /**
     * 判断是否为ajax调用
     *
     * @access public
     * @return boolean
     */
    public static function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    /**
     * 判断当前的网络协议是否为https安全请求
     *
     * @access public
     * @return boolean
     */
    public static function isSecure()
    {
        return isset($_SERVER['HTTPS']) && (strcasecmp($_SERVER['HTTPS'], 'on') === 0 || $_SERVER['HTTPS'] == 1)
        || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
    }

    //获取请求的url信息
    public static function getUrl()
    {
        $url = self::getHttpHost();
        $url .= self::getUri();
        return $url;
    }

    //获取请求的主机信息含http://
    public static function getHttpHost()
    {
        $http_host = strtolower($_SERVER['HTTP_HOST']);
        $secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 1 : 0;
        return ($secure ? 'https://' : 'http://') . $http_host . self::getSiteDir();
    }

    //获取请求的主机
    public static function getHost()
    {
        return isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] == '80' ? '' : ':' . $_SERVER['SERVER_PORT']));
    }

    //获取不含域名的url
    public static function getUri()
    {

        if (isset($_SERVER['HTTP_X_REWRITE_URL'])) { // IIS
            $requestUri = $_SERVER['HTTP_X_REWRITE_URL'];
        } elseif (isset($_SERVER['REQUEST_URI'])) {
            $requestUri = $_SERVER['REQUEST_URI'];
            if ($requestUri !== '' && $requestUri[0] !== '/') {
                $requestUri = preg_replace('/^(http|https):\/\/[^\/]+/i', '', $requestUri);
            }
        } elseif (isset($_SERVER['ORIG_PATH_INFO'])) { // IIS 5.0 CGI
            $requestUri = $_SERVER['ORIG_PATH_INFO'];
            if (!empty($_SERVER['QUERY_STRING'])) {
                $requestUri .= '?' . $_SERVER['QUERY_STRING'];
            }
        } else {
            $requestUri = '';
        }

        return $requestUri;
    }


    public static function getPathInfo()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            return $_SERVER['PATH_INFO'];
        }
        $pathinfo = substr(self::getUri(), strlen(self::getScriptName()));
        if (substr($pathinfo, 0, 1) == '/') {
            if ($_SERVER['QUERY_STRING']) $pathinfo = substr($pathinfo, 0, strpos($pathinfo, '?'));
        }
        return $pathinfo;
    }


    public static function getScriptName()
    {
        $scriptFile = $_SERVER['SCRIPT_FILENAME'];
        $filename = basename($scriptFile);
        if (isset($_SERVER['SCRIPT_NAME']) === $filename) {
            $scriptUrl = $_SERVER['SCRIPT_NAME'];
        } elseif (basename($_SERVER['PHP_SELF']) === $filename) {
            $scriptUrl = $_SERVER['PHP_SELF'];
        } elseif (isset($_SERVER['ORIG_SCRIPT_NAME']) && basename($_SERVER['ORIG_SCRIPT_NAME']) === $filename) {
            $scriptUrl = $_SERVER['ORIG_SCRIPT_NAME'];
        } elseif (($pos = strpos($_SERVER['PHP_SELF'], '/' . $filename)) !== false) {
            $scriptUrl = substr($_SERVER['SCRIPT_NAME'], 0, $pos) . '/' . $filename;
        } elseif (!empty($_SERVER['DOCUMENT_ROOT']) && strpos($scriptFile, $_SERVER['DOCUMENT_ROOT']) === 0) {
            $scriptUrl = str_replace('\\', '/', str_replace($_SERVER['DOCUMENT_ROOT'], '', $scriptFile));
        } else {

        }

        return $scriptUrl;
    }

    /**
     ** 获取用户ip
     **/
    public static function getUserIP()
    {
        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
    }

    /**
     ** 获取来源
     **/
    public static function getReferrer()
    {
        return isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
    }

    /**
     ** 获取站点目录
     **/
    public static function getSiteDir()
    {
        $url = str_replace(array('\\', '//'), '/', $_SERVER['SCRIPT_NAME']);
        $po= strripos($url,'/');
        if(defined('SUBDIR')) {
            $url = substr($url,0,$po);
            $po = strripos($url,'/');
        }
        return substr($url,0,$po+1);
    }
}