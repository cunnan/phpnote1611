<?php 
//删除session
session_start();

//删除掉session中uname
unset($_SESSION['uname']);
//将整个session文件清空
$_SESSION = array();
//删除session文件
session_destroy();
