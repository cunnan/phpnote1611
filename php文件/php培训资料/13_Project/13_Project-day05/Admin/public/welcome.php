<?php
require '../../config.ini.php';
require ROOT.'Admin/public/isLogin.php';//判断是否登录
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/common.css"/>
	<style type="text/css">
	.top-body{
		background: url(../images/top_bg.gif);
	}
	.top-body .subject{
		font-size:36px;
		line-height: 80px;
		color: #fff;	
	}
	.top-body span{
		float:right;
		font-size:14px;
	}
	.top-body b{
		margin-right:10px;
	}
	.top-body a{
		margin-left:10px;
		color:#fff;
	}
	</style>
</head>
<body class="top-body">
	<h1>欢迎【<?php echo $_SESSION['user']['username']?>】登录</h1>
</body>
</html>






