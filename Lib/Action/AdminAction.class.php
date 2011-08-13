<?php
// 本文档自动生成，仅供测试运行
class AdminAction extends Action
{
	
	public function ajaxTest() {
		$Demo = new Model('Demo'); // 实例化模型类
		$list = $Demo->select(); // 查询数据
		$this->ajaxReturn($list,"新增错误！",1);
	}
}
?>