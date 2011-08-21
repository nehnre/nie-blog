<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="JavaScript" src="/js/jqueryui/js/jquery-1.6.2.min.js"></script>
	<script language="JavaScript" src="/js/core.js"></script>
	<style>
		form {
			margin: 0;
		}
		textarea {
			display: block;
		}
		body {
			font-size:12px;
		}
		.line24px{
			line-height:24px;
		}
	</style>
	<script charset="utf-8" src="/js/kindeditor/kindeditor.js"></script>
	<script>
		KE.show({
			id : 'blar_content',
			cssPath : '/js/kindeditor/examples/index.css'
		});
		function ajaxSubmit() {
			var btnSubmit = $("#submit");
			btnSubmit.attr("disabled", true).val("保存中...");
			
			var form = $("form").eq(0);
			var url = form.attr("action");
			KE.sync("blar_content");
			var data = form.serialize();
			
			var inputId = $("#blar_id");
			var blarId = inputId.val();
			if(blarId) {
				url += "update";
			} else {
				url += "insert";
			}
			
			$.ajax({
				url:url,
				type:"POST",
				data:data,
				dataType:"json",
				success:function(json){
					if(json.status == "1"){
						inputId.val(json.data);
					} else {
						alert(json.info);
					}
					btnSubmit.attr("disabled", false).val("提交内容");
					console.log(json);
				}
			});
			return false;//只做ajax提交
		}
	</script>
</head>
<body>
	<form name="example" method="post" action="__URL__/" onsubmit="return ajaxSubmit()">
		<input type="hidden" name="blar_id" id="blar_id"/>
		<table width="98%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="60px" align="right">文章标题：</td>
				<td><input type="text" value="" style="width:100%" name="blar_title"/></td>
			</tr>
			<tr>
				<td width="60px" align="right">文章作者：</td>
				<td><input type="text" value="nehnre" style="width:100%" name="blar_author"/></td>
			</tr>
			<tr>
				<td width="60px" align="right">文章来源：</td>
				<td><input type="text" value="http://www.niehonglei.info" style="width:100%" name="blar_from"/></td>
			</tr>
			<tr>
				<td width="60px" align="right">文章状态：</td>
				<td><select name="blar_status" style="width:100%">
					<option value="1">正常</option>
					<option value="2">草稿</option>
					<option value="3">推荐</option>
				</select></td>
			</tr>
			<tr>
				<td width="60px" align="right">文章点击：</td>
				<td><input type="text" value="0" style="width:100%" name="blar_clicks"/></td>
			</tr>
			<tr>
				<td width="60px" align="right">tags：</td>
				<td><input type="text" value="" style="width:100%" name="blta_name"/></td>
			</tr>
			<tr>
				<td width="60px" align="right">文章摘要：</td>
				<td><textarea style="width:100%" name="blar_abstract"></textarea></td>
			</tr>
		</table>
		<div><textarea id="blar_content" name="blar_content" style="width:100%;height:300px;visibility:hidden;"></textarea></div>
		<br />
		<input type="submit" name="button" value="提交内容" id="submit"/>
	</form>
<body>
</html>