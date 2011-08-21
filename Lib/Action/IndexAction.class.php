<?php
// 本文档自动生成，仅供测试运行
class IndexAction extends Action
{

    /**
    +----------------------------------------------------------
    * 探针模式
    +----------------------------------------------------------
    */
    public function checkEnv()
    {
        load('pointer',THINK_PATH.'/Tpl/Autoindex');//载入探针函数
        $env_table = check_env();//根据当前函数获取当前环境
        echo $env_table;
    }
	
	// 数据写入操作

	public function insert() {
		$Demo = new Model('Demo');   // 实例化模型类
		$Demo->Create(); // 创建数据对象
		$result = $Demo->add(); // 写入数据库
		$this->redirect('index'); // 成功后重定向到index操作页面
	}
	
	// 数据查询操作

	public function index() {
		$Hot = new Model('Article');
		$listHot = $Hot -> where("blar_status=3") -> order('blar_create_time desc') -> limit(5) -> select();
		$this->assign('listHot',$listHot);
		
		$Order = new Model('Article');
		$listOrder = $Order -> where("blar_status<>2") -> order('blar_clicks desc, blar_create_time desc') -> limit(10) -> select();
		$this -> assign('listOrder', $listOrder);
	
		$Article = new Model('Article'); // 实例化模型类
		import("ORG.Util.Page"); 
		$count = $Article -> where("blar_status<>2") -> count();
		$Page = new Page($count, 5);
		$show = $Page -> show();
		$list = $Article->where('blar_status<>2')->order('blar_create_time desc')->limit($Page->firstRow.','.$Page->listRows)->select(); // 查询数据
		foreach($list as $key=>$art) {
			$blar_id = $art["blar_id"];
			$ViewArTags = new Model('view_ar_tags');
			$result = $ViewArTags -> where('blar_id='.$blar_id) -> select();
			if(isset($result) && !empty($result)) {
				$art["tags"] = $result;
			}
			$list[$key] = $art;
		}
		$this->assign('list',$list); // 模板变量赋值
		$this->assign('page',$show);
		$this->display(); 
	}
	
	public function ajaxTest() {
		$Demo = new Model('Demo'); // 实例化模型类
		$list = $Demo->select(); // 查询数据
		$this->ajaxReturn($list,"新增错误！",1);
	}
}
?>