$(function(){
	var dialog = $("<div></div>");
	dialog.attr("title","撰写文章——Nie's Blog");
	var iframe = $("<iframe></iframe>");
	iframe.attr("frameborder", 0);
	iframe.attr("scrolling", "auto");
	iframe.attr("width", "100%");
	iframe.attr("height", "100%");
	iframe.attr("src", "http://localhost/Article/index");
	dialog.append(iframe);
	//$("body").append(dialog);
	dialog.dialog({
		height: 600,
		width: 800,
		resizable: false,
		closeOnEscape: true,
		modal: false
	});	
})