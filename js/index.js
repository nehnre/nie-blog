
$(function(){
	lazyload({
		defObj:$(".content")
	});
	console.log($(".fenlei"));
	$(".fenlei").mouseover(exchangeImage).mouseout(exchangeImage);
	//load();
	//afterLoading();
})
function lazyload(option){
    var settings={
        defObj:null,
        defHeight:0
    };
    settings=$.extend(settings,option||{});
    var defHeight=settings.defHeight,defObj=(typeof settings.defObj=="object")?settings.defObj.find("img"):$(settings.defObj).find("img");
    var pageTop=function(){
        return document.documentElement.clientHeight+Math.max(document.documentElement.scrollTop,document.body.scrollTop)-settings.defHeight;
    };
    var imgLoad=function(){
		
        defObj.each(function(){
            if ($(this).offset().top<=pageTop()){
                var src2=$(this).attr("src2");
                if (src2){
                    $(this).attr("src",src2).removeAttr("src2");
                }
            }
        });
    };
    imgLoad();
    $(window).bind("scroll",function(){
        imgLoad();
    });
}

function load(){
	loadHot();
	loadContent();
	loadAbout();
	loadRecentComments();
	loadBlogroll();
	loadReadTop10();
	loadPagefoot();
}
function loadHot(){
	if(_hotarticles){
		var hotText = "热门文章：";
		for(var i=0;i<_hotarticles.length;i++){
			if(i>0){
				hotText += " | ";
			}
			hotText += "<a href=\"" + _hotarticles[i].link + "\" class=\"whiteText\">" + _hotarticles[i].title + "</a>";
		}
		$(".hotText").html(hotText);
	}
}
function loadContent(ajaxContent){
	if(ajaxContent){
		_content = ajaxContent;
	}
	if(_content){
		console.log(_content);
		console.log($(".contentmodel"));
		//删除原有文章
		var modelSize = $(".contentmodel").size() - 3;
		for(var i = 0;i < modelSize; i++){
			$(".contentmodel").last().remove();
		}
		var models = $(".contentmodel").clone();
		console.log(models);
		var articles = _content.articles;
		for(var i=0;i<articles.length;i++){
			var m = models.clone();
			m.eq(1).find(".title").html(articles[i].title).attr("href",articles[i].link);
			/*
			var basicInfo = "分类： ";
			for(var j=0;j<articles[i].tags.length; j++){
				if(j>0){
					basicInfo += "，";
				}
				basicInfo += "<a href=\"" + articles[i].tags[j].link + "\" class=\"basicInfo\">" + articles[i].tags[j].tag + "</a>";
			}
			*/
			var basicInfo = articles[i].author + " @ " + articles[i].publishtime;
			basicInfo += " 评论： <a href=\"" + articles[i].link + "#comment\" class=\"basicInfo\">" + articles[i].commentscount + "</a> 点击：" + articles[i].clickcount;
			m.eq(1).find(".basicInfo").html(basicInfo);
			m.eq(1).find(".content").html(articles[i].content);
			$(".contentmodel").last().after(m);
			m.show();
		}
	}
}
function loadAbout(){
	if(_about){
		$(".about").html(_about);
	}
}
function loadRecentComments(){
	if(_recentcomments){
		var recentComments = "";
		for(var i=0;i<_recentcomments.length;i++){
			recentComments += "<div><a href='" + _recentcomments[i].link + "'>" + _recentcomments[i].title + "</a></div>"
		}
		$(".recentComments").html(recentComments);
	}
}
function loadBlogroll(){
	if(_blogroll){
		var blogroll = "";
		for(var i=0;i<_blogroll.length;i++){
			blogroll += "<div><a href='" + _blogroll[i].link + "'>" + _blogroll[i].title + "</a></div>"
		}
		$(".blogroll").html(blogroll);
	}
}
function loadReadTop10(){
	if(_readtop10){
		var readtop10 = "";
		for(var i=0;i<_readtop10.length;i++){
			readtop10 += "<div><a href='" + _readtop10[i].link + "'>" + _readtop10[i].title + "</a></div>"
		}
		$(".readtop10").html(readtop10);	
	}
}
function loadPagefoot(ajaxContent){
	if(ajaxContent){
		_content = ajaxContent;
	}
	if(_content){
		var total = ~~_content.total;
		var start = ~~_content.start;
		var limit = ~~_content.limit;
		var currentPageNo = Math.floor(start/limit) + 1;
		var totalPages = Math.floor((total-1)/limit) + 1;
		var prev = "";
		var next = "";
		var first = "";
		var last = "";
		var centerText = "";
		if(currentPageNo <= 1){
			prev = "<span class='prev-disabled'>上一页</span>";
		} else {
			prev = "<a href='javascript:;'>上一页</a>";
		}
		if(currentPageNo >= totalPages){
			next = "<span class='next-disabled'>下一页</span>";
		} else {
			next = "<a href='javascript:;'>下一页</a>";
		}
		
		first = "<a href='javascript:;'>1</a>";
		if(totalPages > 1){
			last = "<a href='javascript:;'>{0}</a>".format(totalPages);;
		}
		
		if(totalPages <9 && totalPages > 2){
			for(var i=0;i<totalPages - 2;i++){
				centerText += "<a href='javascript:;'>{0}</a>".format(i + 2);
			}
		} else if(totalPages >= 9){
			
			if(currentPageNo > 4 && currentPageNo < totalPages - 3){
				centerText += "<span class='text'>...</span>";
				for(var i=currentPageNo - 2;i <= currentPageNo + 2;i++){
					centerText += "<a href='javascript:;'>{0}</a>".format(i);
				}
				centerText += "<span class='text'>...</span>";
			} else if(currentPageNo <= 4){
				for(var i=0;i<5;i++){
					centerText += "<a href='javascript:;'>{0}</a>".format(i + 2);
				}
				centerText += "<span class='text'>...</span>";
			} else {
				centerText += "<span class='text'>...</span>";
				for(var i=5;i>0;i--){
					centerText += "<a href='javascript:;'>{0}</a>".format(totalPages - i);
				}				
			}
		}
		$(".pageFoot").html(prev + first + centerText + last + next);
		$(".pageFoot").find("a").click(function(){
			var pageNo = ~~$(this).html();
			var linkHtml = $(this).html();
			var nextPageNo = 0;
			if(pageNo){
				nextPageNo = pageNo - 1;
				pageTurn(nextPageNo * limit,limit);
			}
			if($(this).html()=="上一页"){
				nextPageNo = currentPageNo - 2;
				pageTurn(nextPageNo * limit,limit);
			}
			if($(this).html()=="下一页"){
				nextPageNo = currentPageNo;
				pageTurn(nextPageNo * limit,limit);
			}
		});
		$(".pageFoot").find("a:contains('{0}')".format(currentPageNo)).attr("class","current");
	}
}
function afterLoading(){
	$("body").children().eq(0).hide();
	$("body").children().eq(1).fadeIn("slow");
}

function pageTurn(start,limit){
	console.log(start);

	$.ajax({
		url:"php/index.php",
		data:"ajax=true&start={0}&limit={1}".format(start,limit),
		dataType:"json",
		success:function(ajaxContent){
			loadContent(ajaxContent);
			loadPagefoot(ajaxContent);
			(function(){
				if($(document).scrollTop() > 0){
					$(document).scrollTop($(document).scrollTop() - $(document).scrollTop()/5);
					setTimeout(arguments.callee,1);
				}
			})();
		}
		
	});
	
}
function exchangeImage(){
	console.log($(this).attr("background"));
	if($(this).attr("background")=="/images/index_06.gif"){
		$(this).attr("background","/images/index_06_2.gif");
	} else {
		$(this).attr("background","/images/index_06.gif");
	}
}