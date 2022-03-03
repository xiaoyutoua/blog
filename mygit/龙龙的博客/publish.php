<?php
$username = $_POST['username'];
$text = $_POST['text'];
$title = $_POST['title'];


if( trim($username) == "" or trim($text) == "" or trim($title) == ""){
    echo "文章标题、内容、作者不能为空";
    //停止运行
    exit;
}

// 连接到数据库
// $db_host = "localhost";
//主机名
// $db_name = "root";
// $db_psd = "";
// $database = "myboke";
// $connection = mysqli_connect($db_host, $db_name, $db_psd, $database);
$dsn = 'mysql:dbname=myboke;host=127.0.0.1';
$pdo = new PDO($dsn, 'root', '');

//编写sql语句
$sql = "insert into page(username,text,title) values('$username','$text','$title')";
// 将 $sql 送入 prepare 方法
$sth = $pdo->prepare($sql);
//执行sql语句 
 $sth->execute();



 header('location: article.php');




?>
