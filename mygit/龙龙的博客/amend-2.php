<?php
$id = $_POST['id'];
$username = $_POST['username'];
$text = $_POST['text'];



if( trim($id) == "" && trim($username) == "" && trim($text) == "" ){
    echo "id、发表人、文章内容不能为空";
    //停止运行
    exit;
}

header('location: article-1.php');
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
$sql = "UPDATE page set text ='$text' WHERE id='$id'  ";
// 将 $sql 送入 prepare 方法
$sth = $pdo->prepare($sql);
//执行sql语句 
return $sth->execute();

?>