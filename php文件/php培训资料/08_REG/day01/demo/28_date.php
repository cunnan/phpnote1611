<?php 
//验证日期格式 
/*
 * 2017/01/10 
 * 2017-01-10
 */
//$subject = "2017/01/10";
$subject = "2017-01-10";
//$subject = "2017/01/10 16:46:57";
//正则表达式
//\\1代表 第一个小括号中匹配到的结果 / 
//$pattern = "/\d{4}([\/\-])\d{2}\\1\d{2}\s\d{2}:\d{2}:\d{2}/";
$pattern = "/\d{4}([\/\-])\d{2}\\1\d{2}/";

preg_match($pattern,$subject,$match);
var_dump($match);

 
 
 
 
 
 
 
 
 
 
 
 
 