<?php
/* PHP SDK
 * @version 2.0.0
 * @author connect@qq.com
 * @copyright © 2013, Tencent Corporation. All rights reserved.
 */

class Recorder{
    private static $data;
    private $inc;

    public function __construct(){
       //-------读取配置文件
        $ua = Base::get_http_host().Base::get_base_url();
        $config         = xiaocms::load_config('config');
        $config['callback'] = $ua.'index.php?c=login&a=callback';
        $config['scope'] = 'get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr';
        $this->inc = (object)$config;

        if(empty(session::get('QC_userData'))){
            self::$data = array();
        }else{
            self::$data = session::get('QC_userData');
        }
    }

    public function write($name,$value){
        self::$data[$name] = $value;
    }

    public function read($name){
        if(empty(self::$data[$name])){
            return null;
        }else{
            return self::$data[$name];
        }
    }

    public function readInc($name){
        if(empty($this->inc->$name)){
            return null;
        }else{
            return $this->inc->$name;
        }
    }

    public function delete($name){
        unset(self::$data[$name]);
    }

    function __destruct(){
        session::set('QC_userData', self::$data);
    }
}
