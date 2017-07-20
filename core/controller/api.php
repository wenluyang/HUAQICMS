<?php

class api extends Base {

	public function __construct() {
        parent::__construct();
	}

	public function ajaxkwAction() {
	    $subject = $this->post('data');
		if (empty($subject)) $subject = $this->get('data');
	    if (empty($subject)) exit('');
	    $data = @implode('', file('http://keyword.discuz.com/related_kw.html?ics=utf-8&ocs=utf-8&title=' . rawurlencode($subject) . '&content=' . rawurlencode($subject))); 
	    if($data) {
	    	$parser = xml_parser_create();
	    	xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
	    	xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
	    	xml_parse_into_struct($parser, $data, $values, $index);
	    	xml_parser_free($parser);
	    	$kws = array();
	    	foreach($values as $valuearray) {
	    		if($valuearray['tag'] == 'kw' || $valuearray['tag'] == 'ekw') {
		    		$kws[] = trim($valuearray['value']);
	    		}
	    	}
	     echo implode(',', $kws);
	    }
	}
	
	public function userAction() {
        if (!defined('XIAOCMS_MEMBER')) exit();
	    ob_start();
		$this->view->display('member/user.html');
		$html = ob_get_contents();
		ob_clean();
	    $html = addslashes(str_replace(array("\r", "\n", "\t"), array('', '', ''), $html));
	    echo 'document.write("' . $html . '");';
	}
	
	public function hitsAction() {
	    $id   = (int)$this->get('id');
		if (empty($id))	exit;
		$data = $this->db->setTableName('content')->find($id, 'hits');
		$hits = $data['hits'] + 1;
		$this->db->setTableName('content')->update(array('hits'=>$hits), 'id=?' , $id);
		echo "document.write('$hits');";
	}
	
	public function pinyinAction() {
		echo word2pinyin($this->post('name'));
	}
	
	public function indexAction() {
	    echo '这里什么也没有，小朋友不要乱跑！';
	}
	
	public function checkcodeAction() {
	    $api    = xiaocms::load_class('image');
	    $width  = (int)$this->get('width');
	    $height = (int)$this->get('height');
	    $api->checkcode($width,$height);
	}
	
	public function transAction(){		
	    $subject = $this->post('word');
		if($subject=='')$subject = $this->get('word');		
		if (empty($subject))exit('');
	    $data = @implode('', file('http://fanyi.baidu.com/v2transapi?from=zh&query=' . rawurlencode($subject) . '&to=en')); 
		$data=json_decode($data);
		$data=$data->trans_result->data[0]->dst;
		echo strtoupper($data);
	}
	
}