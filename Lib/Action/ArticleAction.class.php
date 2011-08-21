<?php
class ArticleAction extends Action
{
	public function index() {
		$this->display(); 
	}
	
	public function insert() {
		
		function getLastId(){
			$Model = new Model();
			$Model->query("select last_insert_id() as last");
			$result = $Model->query("select last_insert_id() as last");
			return $result[0]["last"];		
		}
		
		$Article = new Model('Article');
		$Article -> create();
		$Article -> blar_create_time = date("Y-m-d H:i:s");
		$Article -> blar_modify_time = date("Y-m-d H:i:s");
		$Article -> add();
		$blar_id = getLastId();
		
		$blta_name = $_POST["blta_name"];
		if(isset($blta_name) && !empty($blta_name)) {
			$blta_name = str_replace('，', ',', $blta_name);
			$arr_blta_name = split(",", $blta_name);
			$Tags = new Model('Tags');
			foreach ($arr_blta_name as $tag) {
				$tagResult = $Tags -> where("blta_name='".$tag."'") -> select();
				if(isset($tagResult) && !empty($tagResult)) {
					$blta_id = $tagResult[0]["blta_id"];
				} else {
					$Tags -> blta_name = $tag;
					$Tags -> add();
					$blta_id = getLastId();
				}
				$ArticleTags = new Model("article_tags");
				$ArticleTags -> blta_id = $blta_id;
				$ArticleTags -> blar_id = $blar_id;
				$ArticleTags -> add();
			}
		}
		
		$Content = new Model('Content');
		$Content -> create();
		$Content -> blar_id = $blar_id;
		$Content -> add();
		$info = "新增成功！";
		$this->ajaxReturn($blar_id,$info,1);
	}
	
	public function update() {
		function getLastId(){
			$Model = new Model();
			$Model->query("select last_insert_id() as last");
			$result = $Model->query("select last_insert_id() as last");
			return $result[0]["last"];		
		}	
	
		$Article = new Model('Article');
		$Article -> create();
		$Article -> blar_modify_time = date("Y-m-d H:i:s");
		$Article -> save();
		$blar_id = $Article -> blar_id;
		
		$At = new Model("article_tags");
		$At -> where("blar_id=".$blar_id) -> delete();
		$blta_name = $_POST["blta_name"];
		if(isset($blta_name) && !empty($blta_name)) {
			$blta_name = str_replace('，', ',', $blta_name);
			$arr_blta_name = split(",", $blta_name);
			$Tags = new Model('Tags');
			foreach ($arr_blta_name as $tag) {
				$tagResult = $Tags -> where("blta_name='".$tag."'") -> select();
				if(isset($tagResult) && !empty($tagResult)) {
					$blta_id = $tagResult[0]["blta_id"];
				} else {
					$Tags -> blta_name = $tag;
					$Tags -> add();
					$blta_id = getLastId();
				}
				$ArticleTags = new Model("article_tags");
				$ArticleTags -> blta_id = $blta_id;
				$ArticleTags -> blar_id = $blar_id;
				$ArticleTags -> add();
			}
		}		
		
		$Content = new Model('Content');
		$Content -> create();
		$Content -> save();
		$info = "修改成功！";
		$this->ajaxReturn($blar_id,$info,1);
	}
	
	public function detail() {
		$blar_id = $_GET["blar_id"];
		if(isset($blar_id) && !empty($blar_id)) {
			$view_article = new Model('view_article');
			$view_article->setInc('blar_clicks','blar_id='.$blar_id); 
			$result = $view_article -> where('blar_id='.$blar_id) -> select();
			$this -> assign("vo", $result[0]);
			$this->display(); 
		}
	}
}
?>