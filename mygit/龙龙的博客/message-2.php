<?php

// 连接到数据库
$dsn = 'mysql:dbname=myboke;host=127.0.0.1';
$pdo = new PDO($dsn, 'root', '');

function write($pdo,$sql){
// 将 $sql 送入 prepare 方法
  $sth = $pdo->prepare($sql);
//执行sql语句 
  return $sth->execute();
}

function read($pdo,$sql){
    $sth = $pdo->prepare($sql);
    // 执行sql
    $sth->execute();
    // 以二维数组形式，获取所有数据，赋值给$rows 取出数据结果
    $rows = $sth->fetchall();
    return $rows;
}
?>