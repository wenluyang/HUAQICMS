<?php

class keylink extends Admin {
 
    public function __construct() {
		parent::__construct();
 	}
    
    public function indexAction() {
	    $list = $this->db->setTableName('keylink')->getAll();
	    include $this->admin_tpl('keylink_list');
    }
    
    public function addAction() {
        if ($this->post('submit')) {
            $data = $this->post('data');
            unset($data['id']);
			if(trim($data['weight'])=='')$data['weight']=0;
             if (empty($data['name']) || empty($data['link'])) $this->show_message('关键字或连接不能为空',2,1);			 
            $this->db->setTableName('keylink')->insert($data);
	    	$this->cacheAction();
            $this->show_message('添加成功', 1, url('keylink'));
        }				
        include $this->admin_tpl('keylink_add');
    }
    
    public function editAction() {
        $id   = (int)$this->get('id');
        $data = $this->db->setTableName('keylink')->find($id);
        if (empty($data)) $this->show_message('区块不存在');
        if ($this->post('submit')) {
            $data = $this->post('data');
            unset($data['id']);
              if (empty($data['name']) || empty($data['link'])) $this->show_message('关键字或连接不能为空',2,1);
            $this->db->setTableName('keylink')->update($data, 'id=?', $id);
	    	$this->cacheAction();
            $this->show_message('编辑成功', 1, url('keylink'));
        }
	    include $this->admin_tpl('keylink_add');
    }
    
    public function delAction() {
	    $id  = (int)$this->get('id');
        if (empty($id)) $this->show_message('关键字不存在');
	    $this->db->setTableName('keylink')->delete('id=?' , $id);
		$this->cacheAction();
	    $this->show_message('删除成功', 1 , url('keylink/index'));
	}
    
    public function cacheAction() {
	    $data = array();
	    foreach ($this->db->setTableName('keylink')->getAll(null,null,null,' weight desc') as $t) {
	        $data[$t['id']] = $t;
	    }
	    set_cache('keylink', $data);
	}

}