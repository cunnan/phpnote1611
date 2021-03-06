<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';//判断是否登录
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/common.css"/>
	<style type="text/css">
		html,body{
			height: 100%;
		}
		body{
			background:#0B4E9D url(../images/4bf26d8d5a34e095b4b2b5005b943e3265e1d4d0.png) no-repeat left bottom;
			border-right: 3px solid #055992;
		}
		#nav-tree dl {
			margin-bottom:5px;
			padding-bottom: 5px;
			border-bottom:1px dotted #fff;
		}
		#nav-tree dt {
			position: relative;
			padding-left: 50px;
			margin-bottom: 8px;
			line-height: 26px;
			height: 24px;			
			overflow: hidden;
			cursor: pointer;
			color: #fff;
			font-weight: bold;
			background: url(../images/nav-tree-background.png) no-repeat right -255px;
		}
		#nav-tree dd {			
			padding-left: 50px;
			line-height: 28px;
			
		}
		#nav-tree dd a{
			color: #fff;			
		}
		span.icon {
			position: absolute;
			left: 20px;
			top: 0;
			width: 28px;
			height: 24px;
			overflow: hidden;
			background-image: url(../images/nav-tree-background.png);
		}
		span.user {
			background-position: 0 0;
		}
		span.role {
			background-position: 0 -24px;
		}
		span.catelog {
			background-position: 0 -48px;
		}
		span.article {
			background-position: 0 -72px;
		}
		span.member {
			background-position: 0 -96px;
		}
		span.ad {
			background-position: 0 -120px;
		}
		span.friendlink {
			background-position: 0 -144px;
		}
		span.database {
			background-position: 0 -168px;
		}
		span.system {
			background-position: 0 -192px;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div id="nav-tree">
			<dl>
				<dt><span class="icon article"></span>新闻管理</dt>
				<dd><a href="addnews.html" target="mainFrame">发布新闻</a></dd>
				<dd><a href="listnews.html" target="mainFrame">新闻列表</a></dd>
				<dd><a href="#">回收站</a></dd>
			</dl>		
			<dl>
				<dt><span class="icon user"></span>用户管理</dt>
				<dd><a href="#">用户列表</a></dd>
				<dd><a href="#">删除会员</a></dd>
				<dd><a href="#">密码重置</a></dd>
			</dl>
			<dl>
				<dt><span class="icon role"></span>角色管理</dt>
				<dd><a href="#">成员管理</a></dd>
				<dd><a href="#">权限管理</a></dd>					
			</dl>
			<dl>
				<dt><span class="icon catelog"></span>分类管理</dt>
				<dd><a href="#">分类列表</a></dd>
				<dd><a href="#">添加分类</a></dd>
			</dl>

			<dl>
				<dt><span class="icon member"></span>会员管理</dt>
				<dd><a href="#">会员列表</a></dd>
				<dd><a href="#">删除会员</a></dd>
			</dl>
			<dl>
				<dt><span class="icon ad"></span>广告管理</dt>
				<dd><a href="#">发布广告</a></dd>
				<dd><a href="#">广告列表</a></dd>
			</dl>
			<dl>
				<dt><span class="icon friendlink"></span>友链管理</dt>
				<dd><a href="#">添加友链</a></dd>
				<dd><a href="#">友链列表</a></dd>
			</dl>
			<dl>
				<dt><span class="icon database"></span>数据库管理</dt>
				<dd><a href="#">数据库备份</a></dd>
				<dd><a href="#">数据库还原</a></dd>
			</dl>
			<dl>
				<dt><span class="icon system"></span>系统管理</dt>
				<dd><a href="#">网站设置</a></dd>
				<dd><a href="#">基本设置</a></dd>
			</dl>
		</div>
	</div>
</body>
</html>