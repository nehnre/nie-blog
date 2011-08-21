<?php
// 本文档自动生成，仅供测试运行
class ArticleAction extends Action
{

	

	public function index() {
		$this->display(); 
	}
	
	public function insert() {
		$Article = new Model('Article');
		$Article->create();
		$Article->blar_create_time = date("Y-m-d H:i:s");
		$Article->blar_modify_time = date("Y-m-d H:i:s");
		$Article->add();

		$blar_id = $_POST["blar_id"];
		$Model = new Model();
		$Model->query("select last_insert_id() as last");
		$result = $Model->query("select last_insert_id() as last");
		$blar_id = $result[0]["last"];
		
		$Content = new Model('Content');
		$Content -> create();
		$Content -> blar_id = $blar_id;
		$Content -> add();
		$this->ajaxReturn($blar_id,"新增成功",1);
	}
	
	public function update() {
		$Article = new Model('Article');
		$Article -> create();
		$Article -> blar_modify_time = date("Y-m-d H:i:s");
		$Article -> save();
		
		$Content = new Model('Content');
		$Content -> create();
		$Content -> save();
		$this->ajaxReturn($_POST["blar_id"],"保存成功",1);
	}
}
?>