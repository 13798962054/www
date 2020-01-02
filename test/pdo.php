<?php
class Pdo{
    protected $pdo;
    //构造函数
    public function __construct()
    {
        $this -> pdo = new PDO('mysql:host=127.0.0.1;dbname=csmedlab','root','123',array(PDO::ATTR_PERSISTENT));
    }
    //添加
    public function add($data){
        $res = $this -> pdo -> prepare("insert into user values (null,?,?,?,?)");
        return $res -> execute($data);
    }
    //查询所有
    public function select_all($value){
        if (empty($value)){
            return $this -> pdo -> query('select * from user') -> fetchAll(PDO::FETCH_ASSOC);
        }else{
            $res = $this -> pdo -> prepare("select * from user like :value");
            $res -> bindValue(':value','%'.$value.'%');
            $res -> execute();
            return $res -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
    //查询一条
    public function select_one($id){
        return $this -> pdo -> query("select * from user where id = $id") -> fetch(PDO::FETCH_ASSOC);
    }
    //删除数据
    public function del($id){
        return $this -> pdo -> exec("delete from user where id = $id");
    }
    //修改数据
    public function update($data){
        $res = $this -> pdo -> prepare("update user set name = ? where id = ?");
        return $res -> execute($data);
    }
}