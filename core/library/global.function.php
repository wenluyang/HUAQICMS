<?php

if (!defined('IN_XIAOCMS')) exit();

/**
 * 内文关键词链接替换
 */
function keyword_link($content)
{ 
    $keylink = get_cache('keylink');
    if($keylink) {
		$i=0;
        foreach ($keylink as $v) {
            $regEx = '/(?!<[^>]*)'.$v['name'].'(?![^<]*>)/i';
            $url[$i] ='<a href="'.$v['link'].'">'.$v['name'].'</a>';
            $content = preg_replace($regEx,'$url['.$i.']',$content,1); 
			$i++;
        }
		foreach($url as $key=>$v)
		{			
			$content = str_replace('$url['.$key.']',$v,$content); 				
		}	
    }
    return $content; 
}
/**
 * 时间差计算，返回XX时间前
 */
function timeago ($time)
{
    $time=time()-$time;
    $year   = floor($time / 60 / 60 / 24 / 365);
    $time  -= $year * 60 * 60 * 24 * 365;
    $month  = floor($time / 60 / 60 / 24 / 30);
    $time  -= $month * 60 * 60 * 24 * 30;
    $week   = floor($time / 60 / 60 / 24 / 7);
    $time  -= $week * 60 * 60 * 24 * 7;
    $day    = floor($time / 60 / 60 / 24);
    $time  -= $day * 60 * 60 * 24;
    $hour   = floor($time / 60 / 60);
    $time  -= $hour * 60 * 60;
    $minute = floor($time / 60);
    $time  -= $minute * 60;
    $second = $time;
    $elapse = '';
    $unitArr = array('年'  =>'year', '个月'=>'month',  '周'=>'week', '天'=>'day','小时'=>'hour', '分钟'=>'minute', '秒'=>'second');
    foreach ( $unitArr as $cn => $u )
    {
        if ( $$u > 0 )
        {
            $elapse = $$u . $cn;
            break;
        }
    }
    return $elapse.'前';
}

/**
 * 图片路径自动补全
 */
function image($url)
{
    if (empty($url) || strlen($url) < 4) return SITE_PATH . 'data/upload/nopic.gif';
    if (substr($url, 0, 7) == 'http://' or substr($url, 0, 8) == 'https://') return $url;
    if (strpos($url, SITE_PATH) !== false && SITE_PATH != '/') return $url;
    if (substr($url, 0, 1) == '/') $url = substr($url, 1);
    return SITE_PATH . $url;
}

function getPostData($url, $post) {  
    $options = array(  
        'http' => array(  
            'method' => 'POST',              
            'content' => http_build_query($post),  
        ),  
    );    
    $result = file_get_contents($url, false, stream_context_create($options));    
    return $result;  
}  
/**
 * 缩略图片
 */
function thumb($img, $width=200, $height=200)  {
    if (empty($img) || strlen($img)  < 4) return SITE_PATH . 'data/upload/nopic.gif';
    if (file_exists(XIAOCMS_PATH.$img)) {
        $ext = fileext($img);
		$thumb = $img . '.thumb.' . $width . 'x' . $height . '.' . $ext;
		if (!file_exists(XIAOCMS_PATH.$thumb)) {
		    $image = xiaocms::load_class('image');
		    $image->thumb(XIAOCMS_PATH.$img, XIAOCMS_PATH.$thumb, $width, $height); // 生成图像缩略图
		}
		return $thumb;
    }
    return $img;
}

/**
 * timThumb不变形缩略图片
 */
function timthumb($img, $width=200, $height=200,$quality=85)  {
    if (empty($img) || strlen($img)  < 4) return SITE_PATH . 'data/upload/nopic.gif';
    $img =SITE_PATH ."data/upload/image/timthumb.php?src=".$img."&w=".$width."&h=".$height."&q=".$quality;
    return $img;
}

/**
 * 获取用户真实 IP
 */
function getIP()
{
    static $realip;
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    return $realip;
}
 /**
 * 获取 IP  地理位置
 * 淘宝IP接口
 * @Return: array
 */
function getCity($ip)
{
    $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
    $ip=json_decode(file_get_contents($url));   
    if((string)$ip->code=='1'){
       return false;
    }
    $data = (array)$ip->data;
    return $data;   
}

/**
 * 字符截取 支持UTF8/GBK
 */
function strcut($string, $length, $dot = '')
{
    if (strlen($string) <= $length) return $string;
    $string = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array('&', '"', '<', '>'), $string);
    $strcut = '';
    $n = $tn = $noc = 0;
    while ($n < strlen($string)) {
        $t = ord($string[$n]);
        if ($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
            $tn = 1;
            $n++;
            $noc++;
        } elseif (194 <= $t && $t <= 223) {
            $tn = 2;
            $n += 2;
            $noc += 2;
        } elseif (224 <= $t && $t <= 239) {
            $tn = 3;
            $n += 3;
            $noc += 2;
        } elseif (240 <= $t && $t <= 247) {
            $tn = 4;
            $n += 4;
            $noc += 2;
        } elseif (248 <= $t && $t <= 251) {
            $tn = 5;
            $n += 5;
            $noc += 2;
        } elseif ($t == 252 || $t == 253) {
            $tn = 6;
            $n += 6;
            $noc += 2;
        } else {
            $n++;
        }
        if ($noc >= $length) break;
    }
    if ($noc > $length) $n -= $tn;
    $strcut = substr($string, 0, $n);
    $strcut = str_replace(array('&', '"', '<', '>'), array('&amp;', '&quot;', '&lt;', '&gt;'), $strcut);
    return $strcut . $dot;
}

/**
 * 取得文件扩展
 */
function fileext($filename)
{
	return pathinfo($filename, PATHINFO_EXTENSION);
}

/**
 * 正则表达式验证email格式
 */
function is_email($email)
{
    return strlen($email) > 6 && strlen($email) <= 32 && preg_match("/^([A-Za-z0-9\-_.+]+)@([A-Za-z0-9\-]+[.][A-Za-z0-9\-.]+)$/", $email);
}

/**
 * 栏目面包屑导航 当前位置
 */
function position($catid, $symbol = ' > ')
{
    if (empty($catid)) return false;
    $cats = get_cache('category');
    $catids = parentids($catid, $cats);
    $catids = array_filter(explode(',', $catids));
    krsort($catids);
    $html = '';
    foreach ($catids as $t) {
        $html .= "<a href=\"" . $cats[$t]['url'] . "\" title=\"" . $cats[$t]['catname'] . "\">" . $cats[$t]['catname'] . "</a>";
        if ($catid != $t) $html .= $symbol;
    }
    return $html;
}

/**
 * 递归获取上级栏目集合
 */
function parentids($catid, $cats)
{
    if (empty($catid)) return false;
    $catids = $catid . ',';
    if ($cats[$catid]['parentid'])
        $catids .= parentids($cats[$catid]['parentid'], $cats);
    return $catids;
}

/**
 * 获取当前栏目顶级栏目，第二个参数为true时获取顶级栏目数据，第二个参数为false时获取上级栏目数据；
 function get_top_cat($catid)
{
    $cats = get_cache('category');
    $cat = $cats[$catid];
    if ($cat['parentid']) $cat = get_top_cat($cat['parentid']);
    return $cat;
} 
 */
function get_top_cat($catid,$istop=true)
{
    $cats = get_cache('category');
	if($istop)
		$topid=get_top_catid($catid);
	else
		$topid=$cats[$catid]['parentid'];
	if($topid==0)
		$cat = $cats[$catid];
	else
		$cat = $cats[$topid];
    return $cat;
}

/**
 * 获取当前栏目顶级栏目ID
 */
function get_top_catid($catid)
{
	$db = xiaocms::load_class('Model');
	$data=$db->setTableName('category')->fields('parentid')->getAll('catid='.$catid);
	$data=$data[0]['parentid'];
	if ($data!=0)	$data1= get_top_catid($data);		
	if($data1!=0) return $data1;
	else	return $data;
}

/**
 * 获取单页栏目的内容
 */
function get_page_content($catid)
{
	$db = xiaocms::load_class('Model');
	$data=$db->setTableName('category')->fields('content')->getOne('catid='.$catid);
	return $data;
}

/**
 * 程序执行时间
 */
function runtime()
{
    $temptime = explode(' ', SYS_START_TIME);
    $time = $temptime[1] + $temptime[0];
    $temptime = explode(' ', microtime());
    $now = $temptime[1] + $temptime[0];
    return number_format($now - $time, 6);
}
/**
 * 获取当前页面完整URL
 */
function getURL($diy_url=0) {	
	if($diy_url==1)
	{
		$pageURL="http://".$_SERVER['HTTP_HOST'].$_SERVER['HTTP_X_REWRITE_URL'];
	}
	else
	{
		$pageURL = 'http';
		if (!empty($_SERVER['HTTPS'])) {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
	}
    return $pageURL;
}

/**
 * 返回经stripslashes处理过的字符串或数组
 */
function new_stripslashes($string)
{
    if (!is_array($string)) return stripslashes($string);
    foreach ($string as $key => $val) $string[$key] = new_stripslashes($val);
    return $string;
}


/**
 * 将字符串转换为数组
 */
function string2array($data)
{
    if ($data == '') return array();
    return unserialize($data);
}

/**
 * 将数组转换为字符串
 */
function array2string($data, $isformdata = 1)
{
    if ($data == '') return '';
    if ($isformdata) $data = new_stripslashes($data);
    return serialize($data);
}

/**
 * 字节格式化
 */
function file_size_count($size, $dec = 2)
{
    $a = array("B", "KB", "MB", "GB", "TB", "PB");
    $pos = 0;
    while ($size >= 1024) {
        $size /= 1024;
        $pos++;
    }
    return round($size, $dec) . " " . $a[$pos];
}

/**
 * 汉字转为拼音
 */
function word2pinyin($word)
{
    if (empty($word)) return '';
    $pin = xiaocms::load_class('pinyin');
    return str_replace('/', '', $pin->output($word));
}

/**
 * 判断是否手机访问
 */
function is_mobile()
{
    static $is_mobile;
    if (isset($is_mobile)) return $is_mobile;
    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        $is_mobile = false;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false
    ) {
        $is_mobile = true;
    } else {
        $is_mobile = false;
    }
    return $is_mobile;
}

/**
 * 判断是否手机微信访问
 */
function is_weixin()
{
	if(strpos($_SERVER['HTTP_USER_AGENT'],"MicroMessenger") and strpos($_SERVER['HTTP_USER_AGENT'],"Mobile"))return true;
	else return false;	
}

/**
 * 转化 \ 为 /
 */
function dir_path($path)
{
    $path = str_replace('\\', '/', $path);
    if (substr($path, -1) != '/') $path = $path . '/';
    return $path;
}

/**
 * 递归创建目录
 */
function mkdirs($dir)
{
    if (empty($dir)) return false;
    if (!is_dir($dir)) {
        mkdirs(dirname($dir));
        mkdir($dir);
    }
}

/**
 * 删除目录及目录下面的所有文件
 */
function delete_dir($dir)
{
    $dir = dir_path($dir);
    if (!is_dir($dir)) return FALSE;
    $list = glob($dir . '*');
    foreach ($list as $v) {
        is_dir($v) ? delete_dir($v) : @unlink($v);
    }
    return @rmdir($dir);
}

/**
 * 写入缓存
 */
function set_cache($cache_file, $value)
{
    if (!$cache_file) return false;
    $cache_file = DATA_DIR . 'cache' . DS . $cache_file . '.cache.php';
    $value = (!is_array($value)) ? serialize(trim($value)) : serialize($value);
    if (!is_dir(DATA_DIR . 'cache' . DS)) {
        mkdirs(DATA_DIR . 'cache' . DS);
    }
    return file_put_contents($cache_file, $value, LOCK_EX) ? true : false;
}

/**
 * 获取缓存
 */
function get_cache($cache_file)
{
    if (!$cache_file) return false;
    static $cacheid =array();
    if(!isset($cacheid[$cache_file])){
       $file = DATA_DIR . 'cache' . DS . $cache_file . '.cache.php';
       if(is_file($file)) {
         $cacheid[$cache_file] = unserialize(file_get_contents($file));
       }else{
        return false;
       }
    }
    return $cacheid[$cache_file];
}

/**
 * 删除缓存
 */
function delete_cache($cache_file)
{
    if (!$cache_file) return true;
    $cache_file = DATA_DIR . 'cache' . DS . $cache_file . '.cache.php';
    return is_file($cache_file) ? unlink($cache_file) : true;
}

/**
 * 组装url
 */
function url($route, $params = null)
{
    if (!$route) return false;
    $arr = explode('/', $route);
    $arr = array_diff($arr, array(''));
    $url = 'index.php';
    if (isset($arr[0]) && $arr[0]) {
        $url .= '?c=' . strtolower($arr[0]);
        if (isset($arr[1]) && $arr[1] && $arr[1] != 'index') $url .= '&a=' . strtolower($arr[1]);
    }
    if (!is_null($params) && is_array($params)) {
        $params_url = array();
        foreach ($params as $key => $value) {
            $params_url[] = trim($key) . '=' . trim($value);
        }
        $url .= '&' . implode('&', $params_url);
    }
    $url = str_replace('//', '/', $url);
    return Base::get_base_url() . $url;
}

/**
 * 过滤URL参数中的危险字符
 */
function cleanSql($str)
{
if (empty($str)) return false;
$str = htmlspecialchars($str);
$str = str_replace( array('/',"\\","&gt","&lt", "<SCRIPT>", "</SCRIPT>","<script>","</script>","select","join","union","where","insert","delete","update","like","drop","create","modify","rename","alter","cas","&",">","<"," "," ","    ","&","'",'"',"css","CSS","+","-","*","=",";","*","%"),"",$str); 
return $str; 
}