<?php

class sitemap extends Admin {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * 生成首页
	 */
	public function indexAction() {
		$num    = 3000; // 生成的数量
		$t1=time();
		$data = $this->db->setTableName('content')->order('id DESC')->fields('time,id,catid')->limit(0, $num)->getAll('status!=0 and time<='.$t1, null, null);
		foreach ($data as $key => $t) {
			$data[$key]['url'] = $this->view->get_show_url($t);			
		} 
		
		$navdata = $this->db->setTableName('category')->order('catid ASC')->fields('catid,catdir')->limit(0, $num)->getAll();
		foreach ($navdata as $key => $t) {
			$navdata[$key]['url'] = $this->view->get_category_url($t);			
		} 				
    	$xml = '<?xml version="1.0" encoding="UTF-8"?>';
    	$xml .= "\n<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>\n";
		//生成网站首页
		$xml .= "<url>\n<loc>http://";
        $xml .= $_SERVER['HTTP_HOST'];
        $xml .= "</loc>\n<lastmod>";
        $xml .= date('Y-m-d', time());
        $xml .= "</lastmod>\n<changefreq>always</changefreq>\n<priority>1.0</priority>\n</url>\n";
		//生成网站栏目链接
    	foreach ($navdata as $v){
        	$xml .= "<url>\n<loc>http://";
        	$xml .= $_SERVER['HTTP_HOST'].$v['url'];
        	$xml .= "</loc>\n<lastmod>";
        	$xml .= date('Y-m-d', time());
        	$xml .= "</lastmod>\n<changefreq>weekly</changefreq>\n<priority>1.0</priority>\n</url>\n";
    	}
		//生成网站文章链接
    	foreach ($data as $v){
        	$xml .= "<url>\n<loc>http://";
        	$xml .= $_SERVER['HTTP_HOST'].$v['url'];
        	$xml .= "</loc>\n<lastmod>";
        	$xml .= date('Y-m-d', $v[time]);
        	$xml .= "</lastmod>\n<changefreq>monthly</changefreq>\n<priority>1.0</priority>\n</url>\n";
    	}
    	$xml .= '</urlset>';
    	file_put_contents(XIAOCMS_PATH . 'sitemap.xml', $xml, LOCK_EX);

		$this->show_message("生成<a target='_blank' href='http://{$_SERVER['HTTP_HOST']}/sitemap.xml' >sitemap.xml</a> 成功", 1, '#');

	}

}