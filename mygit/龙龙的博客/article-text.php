<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>龙龙的博客文章</title>
</head>

<body background="./img/10.jpg" style="width: 100%;height: 100%;background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <!-- 文章展示区 -->
    <div class="container">

        <div class=" col-12 fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand pl-4 text-white glyphicon" href="./B.php">Lonlong's Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link pl-5 text-white" href="#">百宝箱<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-5 text-white" href="./D.php">文章</a>
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
        <br>
        <div class="row">
            <?php

            //分页展示

            $db_host = "localhost";
            //主机名
            $db_name = "root";
            $db_psd = "";
            $database = "myboke";
            $connection = mysqli_connect($db_host, $db_name, $db_psd, $database);
            //连接到数据库
            $dsn = 'mysql:dbname=myboke;host=127.0.0.1';
            $pdo = new PDO($dsn, 'root', '');

            //首先确定每页要展示几个数据。这里以每页展示3个数据为例
            $per_num = 3;
            //然后获得总的数据数
            $sql = "select * from news";
            $res = mysqli_query($connection, $sql);
            $nums = mysqli_num_rows($res);
            //可以通过上面两个计算出需要多少页来展示所有数据
            $total_pages = ceil($nums / $per_num);

            //获得“page”所有数据
            $sql = "SELECT * FROM `page` ORDER BY id ASC";
            // 将 $sql 送入 prepare 方法
            $sth = $pdo->prepare($sql);
            // 执行sql asc升序
            $sth->execute();
            // 以二维数组形式，获取所有数据，赋值给$rows 取出数据结果
            $info = $sth->fetchall();
            // return $rows;
            // var_dump($rows);

            //通过$_GET来接收get数据，这里为page
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            //同时因为$page最小不能小于1，最大不能大于第一部分得到的$total_pages.
            //所以通过max(),min()来限制$page
            $page = max($page, 1);
            $page = min($page, $total_pages);


            //假设有8个数据。则
            //页数    当前页面起始索引--当前页面结束索引
            //第一页 0--2
            //第二页 3--5
            //第三页 6--7
            //所以
            $start_index = ($page - 1) * $per_num;
            $end_index = $page * $per_num - 1;
            //因为，最后一页可能并不能显示3个数据，所以要修正$end_index。
            //当不足3个数据时，$end_index取最后一个数据的下标，即$nums-1
            $end_index = min($nums - 1, $end_index);


            ?>
            <br></br>
            <!-- border 边框；rounded 圆角 -->
            <div class='col-12'>
                <?php
                 for($i=$start_index; $i<=$end_index;$i++){
                ?>
                    <div class='border rounded p-2 m-2 jumbotron'>
                        <h4 class="text-center text-info">
                            <?php echo $i['title']; ?>
                        </h4>
                        <div class='text-primary text-center'>
                            <?php echo "第$page[id]篇 || 作者：$page[username]  ||   发布时间：$page[timestamp]"; ?>
                        </div>
                        <div>
                            <?php echo $page['text']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal-1">
                                修改文章
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">修改文章</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="E-1.php" method="POST">
                                            <div class="modal-body">
                                                <input name="id" type="text" class="form-control" placeholder="请输入文章id">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input class="btn btn-primary ml-auto" type="submit" value="确定修改">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-2">
                                删除文章
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">删除文章</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="C-2.php" method="POST">
                                            <div class="modal-body">
                                                <input name="id" type="text" class="form-control" placeholder="请输入文章id">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input class="btn btn-primary ml-auto" type="submit" value="确定删除">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal-3">
                                查看评论
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">查看</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="E-2.php" method="POST">
                                            <div class="modal-body">
                                                <input name="id" type="text" class="form-control" placeholder="请输入文章id">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input class="btn btn-primary ml-auto" type="submit" value="确定查看">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                <?php
                }
                ?>
            </div>
        </div>
        <!--底部控制栏部分-->
    <a href="?page=1">首页</a>
    <a href="?page=<?php echo ($page-1);  ?>">上一页</a>
    <a href="?page=<?php echo ($page+1); ?>">下一页</a>
    <a href="?page=<?php echo $total_pages; ?>">尾页</a>
    </div>

</body>

</html>