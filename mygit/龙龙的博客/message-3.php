<?php

//实践：保存留言到数据库

$username = $_POST['username'];
$content = $_POST['content'];

// trim 去除首尾的空白字符，不会去除中间的空白字符
if( trim($username) == "" or trim($content) == "" ){
    echo "用户名、用户留言不能为空";
    //停止运行
    exit;
}

if( $username == 'root' || $username == 'admin' || $username == '领导人'){
    echo "用户名不能为敏感字";
    //停止运行
    exit;
}




$db_host = "localhost";
//主机名
$db_name = "root";
$db_psd = "";
$database = "myboke";


$connection = mysqli_connect($db_host, $db_name, $db_psd, $database);


//连接到数据库
// .. 返回上一级
//  require() 与 include 作用相同，但 require 如果包含失败，程序会停止运行，而 include 不会
// include 通过包含降低代码重复率，使代码看起来简洁
include('./message-2.php');



//编写sql语句
$sql = "insert into msg(username,content) values('$username','$content')";
// echo $sql; 建议大家测试一下

write($pdo,$sql);

//跳转回留言页面
header('location: message-1.php');
?> 