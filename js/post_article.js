$(function(){
	var dialog = $("<div></div>");
	dialog.attr("title","新增文档");
	var iframe = $("<iframe></iframe>");
	iframe.attr("frameborder", 0);
	iframe.attr("scrolling", "no");
	iframe.attr("width", "100%");
	iframe.attr("height", "400");
	iframe.attr("src", "http://localhost/php/article_form.php");
	dialog.append(iframe);
	//$("body").append(dialog);
	dialog.dialog({
		height: 600,
		width: 800,
		resizable: true,
		closeOnEscape: true,
		modal: false
	});	
})