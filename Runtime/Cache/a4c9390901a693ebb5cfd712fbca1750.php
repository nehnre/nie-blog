<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="Shortcut icon" href="favicon.ico" />
	<link rel="Bookmark" href="favicon.ico"> 
	<link href="/images/index.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="/js/jqueryui/css/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css" media="all" /> 
	<title>Nie's Home</title>
	<script language="JavaScript" src="/js/jqueryui/js/jquery-1.6.2.min.js"></script>
	<script language="JavaScript" src="/js/jqueryui/js/jquery-ui-1.8.16.custom.min.js"></script>
	<script language="JavaScript" src="/js/core.js"></script>
	<script language="JavaScript" src="/js/index.js"></script>
	<script language="javascript" type="text/javascript">
		function postArticle(){
			var _script = document.createElement("script");
			_script.src = "http://localhost/js/post_article.js?_=" + new Date().getTime() ;
			document.body.appendChild(_script); 			
		}
	</script>
</head>
<body >

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="92" align="center" background="/images/index_01.gif"><table width="987" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="27">&nbsp;</td>
        <td width="134"><a href=""><img src="/images/index_04.gif" alt="Nie's Home" border="0" longdesc="http://niehonglei.appspot.com" /></a></td>
        <td width="58" valign="middle">&nbsp;<img src="/images/index_06_2.gif" style="display:none" /></td>
        <!--分类模板开始-->
        <td width="79" align="center" background="/images/index_06.gif" class="fenlei"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="41" rowspan="3">&nbsp;</td>
            <td width="76%" height="7"></td>
            <td width="11%" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="12" align="center" valign="top" class="whiteText"><a href="internet" class="whiteText">互联网</a></td>
          </tr>
          <tr>
            <td height="12"></td>
          </tr>
        </table></td>
        <!--分类模板结束-->
        <td width="30">&nbsp;</td>
       <!--分类模板开始-->
        <td width="79" align="center" background="/images/index_06.gif" class="fenlei"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="41" rowspan="3">&nbsp;</td>
            <td width="76%" height="7"></td>
            <td width="11%" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="12" align="center" valign="top"><a href="java" class="whiteText">Java</a></td>
          </tr>
          <tr>
            <td height="12"></td>
          </tr>
        </table></td>
        <!--分类模板结束-->
        <td width="30">&nbsp;</td>
       <!--分类模板开始-->
        <td width="79" align="center" background="/images/index_06.gif" class="fenlei"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="41" rowspan="3">&nbsp;</td>
            <td width="76%" height="7"></td>
            <td width="11%" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="12" align="center" valign="top"><a href="search" class="whiteText">搜索</a></td>
          </tr>
          <tr>
            <td height="12"></td>
          </tr>
        </table></td>
        <!--分类模板结束-->
        <td width="30">&nbsp;</td>
       <!--分类模板开始-->
        <td width="79" align="center" background="/images/index_06.gif" class="fenlei"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="41" rowspan="3">&nbsp;</td>
            <td width="76%" height="7"></td>
            <td width="11%" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="12" align="center" valign="top"><a href="js" class="whiteText">Js</a></td>
          </tr>
          <tr>
            <td height="12"></td>
          </tr>
        </table></td>
        <!--分类模板结束-->
        <td width="30">&nbsp;</td>
       <!--分类模板开始-->
        <td width="79" align="center" background="/images/index_06.gif" class="fenlei"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="41" rowspan="3">&nbsp;</td>
            <td width="76%" height="7"></td>
            <td width="11%" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td height="12" align="center" valign="top"><a href="life" class="whiteText">生活</a></td>
          </tr>
          <tr>
            <td height="12"></td>
          </tr>
        </table></td>
        <!--分类模板结束-->
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="800" align="center" valign="top" bgcolor="#E5E2DD"><table width="987" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="722" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="67" background="/images/index_11.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="33" colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td width="2%" height="34">&nbsp;</td>
                <td width="95%" align="left"  class="hotText">
					<?php if(is_array($listHot)): $i = 0; $__LIST__ = $listHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>&nbsp;<?php if($i > 1): ?>|<?php endif; ?>&nbsp;<a href="#" class="whiteText"><?php echo ($vo["blar_title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
               
		  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><!--文章模板开始-->
          <tr class="contentmodel">
            <td height="13" background="/images/index_14.gif"></td>
          </tr>
          <tr class="contentmodel">
            <td  background="/images/index_16.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="2">&nbsp;</td>
                <td width="95%" align="left"><a href="#" class="title"><?php echo ($vo["blar_title"]); ?></a></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="5" colspan="2"></td>
                <td></td>
                <td></td>
              </tr>              
              <tr>
                <td colspan="2"></td>
                <td background="/images/line.gif" height="1"></td>
                <td></td>
                </tr>
              <tr>
                <td height="5" colspan="2"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                <td align="left" class="basicInfo">分类：<?php if(isset($vo['tags'])): ?><?php if(is_array($vo["tags"])): $i = 0; $__LIST__ = $vo["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): ++$i;$mod = ($i % 2 )?><?php if($i > 1): ?>,<?php endif; ?><?php echo ($tag["blta_name"]); ?><?php endforeach; endif; else: echo "" ;endif; ?><?php else: ?>无<?php endif; ?>  - <?php echo ($vo["blar_author"]); ?> @ <?php echo ($vo["blar_create_time"]); ?> 评论：0条 点击：<?php echo ($vo["blar_clicks"]); ?>次</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" height="10"></td>
                <td align="left"></td>
                <td></td>
              </tr>
              <tr>
                <td width="2%"><p>&nbsp;</p></td>
                <td colspan="2" align="left" class="content"><font size="20">“</font><?php echo ($vo["blar_abstract"]); ?>...</td>
                <td width="1%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr class="contentmodel">
            <td height="11"  background="/images/index_20.gif"></td>
          </tr>
		  <!--文章模板结束--><?php endforeach; endif; else: echo "" ;endif; ?>
                  
           <!--分页模板开始-->
          <tr>
            <td height="13" background="/images/index_14.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_16.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%">&nbsp;</td>
                <td width="97%" align="left"><?php echo ($page); ?></td>
                <td width="1%">&nbsp;</td>
              </tr>
              </table></td>
          </tr>
          <tr>
            <td height="11"  background="/images/index_20.gif"></td>
          </tr>
		  <!--分页模板结束-->
                    
        </table></td>
        <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <!--左边模板开始-->  
          <tr>
            <td height="12" background="/images/index_18.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_22.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td align="left" class="sideTitle"><a href="rss"><img src="/images/sub_rss.gif" alt="订阅" width="16" height="16" border="0" align="absmiddle" /></a>订阅</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="5"></td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td></td>
                <td background="/images/line.gif" height="1"></td>
                <td></td>
               </tr> 
                                           
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="91%" align="left">跟随我的twitter<a href="http://twitter.com/nehnre"><img src="/images/sub_twitter.gif" alt="twitter" width="16" height="16" border="0" align="absmiddle" /></a><br />跟随我的新浪微博
                  <a href="http://t.sina.com.cn/nehnre"><img src="/images/sina_t.gif" alt="新浪微博" width="16" height="16" border="0" align="absmiddle" /></a><br />跟随我的嘀咕
                  <a href="http://digu.com/nehnre"><img src="/images/digu_t.gif" alt="嘀咕" width="16" height="16" border="0" align="absmiddle" /></a></td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="12"  background="/images/index_24.gif"></td>
          </tr>
          <!--左边模板结束-->  
          <!--左边模板开始-->  
          <tr>
            <td height="12" background="/images/index_18.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_22.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%">&nbsp;</td>
                <td align="left" width="91%">
					<form action="http://www.google.com/cse" id="cse-search-box">
					  <div>
						<input type="hidden" name="cx" value="007282536651609248827:t79dpyawyjs" />
						<input type="hidden" name="ie" value="UTF-8" />
						<input type="text" name="q" size="20"/>
						<input type="submit" name="sa" value="搜索" />
					  </div>
					</form>
					<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=zh-Hans"></script>						
				</td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="12"  background="/images/index_24.gif"></td>
          </tr>
          <!--左边模板结束-->  
          <!--左边模板开始-->  
          <tr>
            <td height="12" background="/images/index_18.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_22.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td align="left" class="sideTitle">★关于本站</td>
                <td></td>
              </tr>
              <tr>
                <td height="5"></td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td></td>
                <td background="/images/line.gif" height="1"></td>
                <td></td>
               </tr> 
                                           
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="91%" align="left" class="about">　　Nie's Blog目前是一款基于php的开源blog系统</td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="12"  background="/images/index_24.gif"></td>
          </tr>
          <!--左边模板结束-->  
          <!--左边模板开始-->  
          <tr>
            <td height="12" background="/images/index_18.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_22.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td align="left" class="sideTitle">★最新评论</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="5"></td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td></td>
                <td background="/images/line.gif" height="1"></td>
                <td></td>
               </tr> 
                                            
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="91%" align="left" class="recentComments">此项功能开发中……</td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="12"  background="/images/index_24.gif"></td>
          </tr>
          <!--左边模板结束-->                       
          <!--左边模板开始-->  
          <tr>
            <td height="12" background="/images/index_18.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_22.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td align="left" class="sideTitle">★友情链接</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="5"></td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td></td>
                <td background="/images/line.gif" height="1"></td>
                <td></td>
               </tr> 
                                           
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="91%" align="left" class="blogroll"></td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="12"  background="/images/index_24.gif"></td>
          </tr>
          <!--左边模板结束-->  
          <!--左边模板开始-->  
          <tr>
            <td height="12" background="/images/index_18.gif"></td>
          </tr>
          <tr>
            <td  background="/images/index_22.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
                <td align="left" class="sideTitle">★阅读排行</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="5"></td>
                <td></td>
                <td></td>
              </tr> 
              <tr>
                <td></td>
                <td background="/images/line.gif" height="1"></td>
                <td></td>
               </tr> 
                                            
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="91%" align="left" class="readtop10">
					<?php if(is_array($listOrder)): $i = 0; $__LIST__ = $listOrder;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): ++$i;$mod = ($i % 2 )?><div><a href="#"><?php echo ($order["blar_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
				</td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="12"  background="/images/index_24.gif"></td>
          </tr>
          <!--左边模板结束-->                              
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="71" valign="top" background="/images/index_30.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="whiteText">Powered By nehnre | 转载请注明出处 | 管理员登录 | <span style="cursor:pointer" onclick="postArticle()">新增文章</span></td>
      </tr>
    </table></td>
  </tr>  
</table>
</body>
</html>