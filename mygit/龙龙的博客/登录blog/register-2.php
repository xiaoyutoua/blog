<?php
$username = $_POST['username'];
$password = $_POST['password'];


if( trim($username) == "" or trim($password) == "" ){
    echo "账号、密码不能为空";
    //停止运行
    exit;
}
header('location: login-1.php');
$dsn = 'mysql:dbname=myboke;host=127.0.0.1';
$pdo = new PDO($dsn, 'root', '');

//编写sql语句
$sql = "insert into login(username,password) values('$username','$password')";
// 将 $sql 送入 prepare 方法
$sth = $pdo->prepare($sql);
//执行sql语句 
return $sth->execute();






?>