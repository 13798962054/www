<?php

$mysqli = @new mysqli("localhost", "root", "root123");
if ($mysqli->connect_errno) {
    die("could not connect to the database:\n" . $mysqli->connect_error);//诊断连接错误
}
$mysqli->close();
echo "连接成功"
?>