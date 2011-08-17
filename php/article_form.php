<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		form {
			margin: 0;
		}
		textarea {
			display: block;
		}
	</style>
	<script charset="utf-8" src="../js/kindeditor/kindeditor.js"></script>
	<script>
		KE.show({
			id : 'content1',
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
		<form name="example" method="post" action="../php/demo.php">
			<textarea id="content1" name="content1" style="width:700px;height:300px;visibility:hidden;">
<p>
	<img border="0" alt="" src="http://kindsoft.net/images/logo_180_30.gif" />
</p>
</p>
KindEditor是一套开源的HTML可视化编辑器，主要用于让用户在网站上获得所见即所得编辑效果，兼容IE、Firefox、Chrome、Safari、Opera等主流浏览器。<br />
KindEditor使用JavaScript编写，可以无缝的与Java、.NET、PHP、ASP等程序接合。
KindEditor非常适合在CMS、商城、论坛、博客、Wiki、电子邮件等互联网应用上使用，2006年7月首次发布2.0以来，KindEditor依靠出色的用户体验和领先的技术不断扩大编辑器市场占有率，目前在国内已经成为最受欢迎的编辑器之一。 
</p>
<table width="90%">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
			</textarea>
			<br />
			<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
		</form>
<body>
</html>