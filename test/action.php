<?php

$name = $_POST['id'];
$pwd = $_POST['password'];


$serve = 'mysql:host=localhost:3306;dbname=csmedlab;charset=utf8';
$username = 'root';
$password = '123';

// PDO连接数据库若错误则会抛出一个PDOException异常
try {
    $PDO = new PDO($serve, $username, $password);
    $result = $PDO->query('select * from user');
    // PDO::FETCH_ASSOC表示将对应结果集中的每一行作为一个由列名索引的数组返回
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    $hasUser = False;
    foreach ($data as $x){

        if($x[username] == $name && $x[password] == $pwd) {
            echo("登陆成功");
            $hasUser = True;
        }
    }
    if(!$hasUser){
        echo("账号或密码错误");
    }

} catch (PDOException $error) {
    echo 'connect failed:' . $error->getMessage();
}

?>