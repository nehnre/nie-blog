<?php if (!defined('THINK_PATH')) exit();?><!--数据新增表单--> 

 <form method="post"  action="__URL__/insert" >

标题：<input type="text" name="title"><br />

内容：<textarea name="content" rows="5" cols="25"></textarea><br/>

<input type="submit" value="新增数据">

 </form>

<!--循环输出查询结果数据集--> 

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>编号:<?php echo ($vo["id"]); ?><br/>

标题： <?php echo ($vo["title"]); ?><br/>

内容： <?php echo ($vo["content"]); ?><hr><?php endforeach; endif; else: echo "" ;endif; ?>