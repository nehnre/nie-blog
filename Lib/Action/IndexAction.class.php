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
		$Demo = new Model('Demo'); // 实例化模型类
		$list = $Demo->select(); // 查询数据
		$this->assign('list',$list); // 模板变量赋值
		$this->display(); // 输出模板
	}
}
?>