<?php 
//原子应用举例
$subject = "this is a te*st";
//正则表达式
$pattern = "/\*/";
preg_match_all($pattern,$subject,$match);
var_dump($match);