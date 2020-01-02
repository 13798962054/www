<?php
$mysql_conf = array(
    'host'    => '127.0.0.1:3306',
    'db'      => 'csmedlab',
    'db_user' => 'root',
    'db_pwd'  => '123',
);

// 数据库连接
$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
if ($mysqli->connect_errno) {
    //诊断连接错误
    die("could not connect to the database:\n" . $mysqli->connect_error);
}
// 编码转化
$mysqli->query("set names 'utf8';");
// 选择数据库
$select_db = $mysqli->select_db($mysql_conf['db']);
if (!$select_db) {
    die("could not connect to the db:\n" .  $mysqli->error);
}
$sql = "select * from user;";
$res = $mysqli->query($sql);
if (!$res) {
    die("sql error:\n" . $mysqli->error);
}
while ($row = $res->fetch_assoc()) {
    var_dump($row);
}

$res->free();
$mysqli->close();
?>