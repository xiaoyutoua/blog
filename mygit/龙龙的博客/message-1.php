<?php

// 循环展示留言内容


// 连接到数据库
include('./message-2.php');
// 编写sql  desc降序 使最新留言放到最上面
$sql = "SELECT * FROM `msg` ORDER BY id DESC";

$rows = read($pdo, $sql);

//打印一下，看看都得到了什么
// var_dump($rows);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>留言板</title>
</head>

<body background="./img/10.jpg" style="width: 100%;height: 100%;background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- 首先，定义一个容器 -->
    <div class="container">
        <div class=" col-12 fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand pl-4 text-white glyphicon" href="./blog.php">Lonlong's Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link pl-5 text-white" href="./message-1.php">留言板<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-5 text-white" href="./article-1.php">文章</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-5 text-white" href="#">关于我</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-5 text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                各大官网
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="https://china.nba.cn/">NBA</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://www.cbaleague.com/#/">CBA</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="http://www.cuba.edu.cn/">cuba</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>

        <div class="jumbotron">
            <h1 class="display-3">留言板</h1>
            <h3 class="lead">Welcome to leave your footprints.</h3>
            <hr class="my-4 border bg-dark">
            <h5>Words and ideas can change the world. 一知一言皆有撼世之力。</h5>
        </div>

        <!-- 留言发表区 -->
        <form action="message-3.php" method="POST">
            <div class="row">
                <div class='col-12'>
                    <div class="form-group">
                        <!-- 多行留言框部分 -->
                        <textarea name="content" class="form-control" rows=4></textarea>
                    </div>
                </div>
                <div class='col-3'>
                    <!-- 用户名输入部分 -->
                    <input name="username" class="form-control" type="text">
                </div>
                <div class='col-9 d-flex'>
                    <!-- 提交按钮部分 -->
                    <!-- primary 蓝色 -->
                    <input class="btn btn-primary ml-auto" type="submit" value="提交">
                </div>
            </div>
        </form>

        <br></br>
        <!-- 留言展示区 -->
        <div class="row">
            <br></br>
            <!-- border 边框；rounded 圆角 -->
            <div class='col-12'>
                <?php
                foreach ($rows as $key => $msg) {
                ?>
                    <div class='border rounded p-2'>
                        <div class='text-primary'>
                            <?php echo $msg['username']; ?>
                        </div>
                        <div class="text-white">
                            <?php echo $msg['content']; ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>