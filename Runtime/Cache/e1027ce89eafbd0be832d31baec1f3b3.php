<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" /> 
	<script language="JavaScript" src="http://www.google.com/jsapi"></script>
	<script language="JavaScript">
		google.load("jquery","1");
		google.load("jqueryui","1");
	</script>
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
	<script charset="utf-8" src="../js/kindeditor/kindeditor.js"></script>
	<script>
		KE.show({
			id : 'blar_content',
			cssPath : '../js/kindeditor/examples/index.css',
			afterCreate : function(id) {
				KE.event.ctrl(document, 13, function() {
					KE.sync(id);
					document.forms['example'].submit();
				});
				KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
					KE.sync(id);
					document.forms['example'].submit();
				});
			}
		});
	</script>
</head>
<body>
	<form name="example" method="post" action="http://localhost/Index/saveArticle">
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
				<td><input type="text" value="" style="width:100%"/></td>
			</tr>
			<tr>
				<td width="60px" align="right">文章摘要：</td>
				<td><textarea style="width:100%" name="blar_abstract"></textarea></td>
			</tr>
		</table>
		<div><textarea id="blar_content" name="blar_content" style="width:100%;height:300px;visibility:hidden;"></textarea></div>
		<br />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	</form>
<body>
</html>