<?php /*%%SmartyHeaderCode:2879258a6bfc54b05a1-29756280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268b4812af11ae7fb3497fde427ec54a5b0d4034' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\news\\list.html',
      1 => 1487330825,
      2 => 'file',
    ),
    '16f740d7dab4806241111b362f97923a0acf2f2b' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\public\\header.html',
      1 => 1487298042,
      2 => 'file',
    ),
    '928624848d61fe1b1c763d8e954c0792281eaa37' => 
    array (
      0 => 'D:\\www\\psd1611\\14_Smarty\\template\\public\\footer.html',
      1 => 1487295899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2879258a6bfc54b05a1-29756280',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58aa47f200b7f2_90787291',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58aa47f200b7f2_90787291')) {function content_58aa47f200b7f2_90787291($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>demo test</title>
    <link type="text/css" rel="stylesheet" href="http://localhost/psd1611/14_Smarty/css/common.css"/>
    <link type="text/css" rel="stylesheet" href="http://localhost/psd1611/14_Smarty/css/news.css"/>
  </head>
  <body>
  
  <div class='nav clear'>
  <ul>
  	<li><a href="list.php?fid=1">国际</a></li>
  	<li><a href="list.php?fid=2">国内</a></li>
  	<li><a href="list.php?fid=3">社会</a></li>
  </ul>
</div>

  <div class="content clear">
	  <div class="left">
	  	<div>
	  		<h3>国内文章</h3>
	  		
	  		
	  		<ul>
	  				  			<li>dfsafds...</li>
	  				  			<li>fdsadf</li>
	  				  			<li>fdsadf</li>
	  				  			<li>afdsadf</li>
	  				  			<li>北京雾霾又要来...</li>
	  				  		</ul>
	  	</div>
	  	<div>
	  		<h3>国际文章</h3>
	  		
	  		<ul>
	  		
	  				  			<li>国际1</li>
	  				  			<li>国际2</li>
	  				  		</ul>
	  	</div>
	  	<div>
	  		<h3>社会文章</h3>
	  		
	  		<ul>
	  				  			<li>dfsadf1</li>
	  				  			<li>dfsadf1</li>
	  				  			<li>dfsadf1</li>
	  				  			<li>dfsadf1</li>
	  				  			<li>dsafdsa...</li>
	  				  		</ul>
	  	</div>
	  </div>
	  <div class="right">
		  <div>当前位置：首页 > 文章列表</div>
		  <ul>
		  			  	<li><a href='detail.php?id=1'>dfsafds...</a></li>
		  			  	<li><a href='detail.php?id=2'>fdsadf</a></li>
		  			  	<li><a href='detail.php?id=3'>fdsadf</a></li>
		  			  	<li><a href='detail.php?id=4'>afdsadf</a></li>
		  			  	<li><a href='detail.php?id=50'>北京雾霾又要来...</a></li>
		  			  </ul>
		  <div>共2页&nbsp;当前第1页&nbsp;<span>1</span>&nbsp;<a href='/psd1611/14_Smarty/news/list.php?fid=2&p=2'>2</a>&nbsp;<a href='/psd1611/14_Smarty/news/list.php?fid=2&p=2'>下一页</a>&nbsp; 
				  <a href='/psd1611/14_Smarty/news/list.php?fid=2&p=2'>尾页</a></div>
	  </div>
  </div>
  
  <div>尾部</div>
  </body>
</html><?php }} ?>
