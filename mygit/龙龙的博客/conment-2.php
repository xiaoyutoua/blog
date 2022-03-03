<?php
$username = $_POST['username'];
$content = $_POST['content'];



if( trim($username) == "" || trim($content) == ""){
    echo "发表留言人、留言内容不能为空";
    //停止运行
    exit;
}

header('location: conment-1.php');
// 连接到数据库
$db_host = "localhost";
//主机名
$db_name = "root";
$db_psd = "";
$database = "myboke";
$connection = mysqli_connect($db_host, $db_name, $db_psd, $database);
$dsn = 'mysql:dbname=myboke;host=127.0.0.1';
$pdo = new PDO($dsn, 'root', '');

//编写sql语句
$sql = "insert into conment(username,content) values ('$username','$content')";
// 将 $sql 送入 prepare 方法
$sth = $pdo->prepare($sql);
//执行sql语句 
return $sth->execute();

?>