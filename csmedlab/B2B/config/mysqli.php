<?php
//header("Content-Type: text/html; charset=UTF-8");
$host = "127.0.0.1";//mysql服务器主机地址
$userName = "root"; //mysql用户名
$passWord = "123";//用户密码
$dbName = "csmedlab";//数据库
$db = new mysqli($host, $userName, $passWord, $dbName);

