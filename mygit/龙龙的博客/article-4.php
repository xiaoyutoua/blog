<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>blog文章</title>
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
                            <a class="nav-link pl-5 text-white" href="./article-4.php">文章</a>
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
            //连接到数据库
            $dsn = 'mysql:dbname=myboke;host=127.0.0.1';
            $pdo = new PDO($dsn, 'root', '');
            //编写sql语句
            $sql = "SELECT * FROM `page` limit 12,4";
            // 将 $sql 送入 prepare 方法
            $sth = $pdo->prepare($sql);
            // 执行sql asc升序
            $sth->execute();
            // 以二维数组形式，获取所有数据，赋值给$rows 取出数据结果
            $rows = $sth->fetchall();
            // return $rows;
            // var_dump($rows);
            ?>
            <br></br>
            <!-- border 边框；rounded 圆角 -->
            <div class='col-12'>
                <?php
                foreach ($rows as $key => $page) {
                ?>
                    <div class='border rounded p-2 m-2 jumbotron'>
                        <h4 class="text-center text-info">
                            <?php echo $page['title'];; ?>
                        </h4>
                        <div class='text-primary text-center'>
                            <?php echo "第$page[id]篇 || 作者：$page[username]  ||   发布时间：$page[timestamp]"; ?>
                        </div>
                        <br>
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
                                        <form action="amend.php" method="POST">
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
                                        <form action="delete.php" method="POST">
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
                                        <form action="seek.php" method="POST">
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
    </div>

    <!-- 分页按钮 -->
    <nav aria-label="Page navigation example" class="fixed-bottom">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link text-danger" href="#" tabindex="-1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link text-danger" href="./article-1.php">1</a></li>
            <li class="page-item"><a class="page-link text-danger" href="./article-2.php">2</a></li>
            <li class="page-item"><a class="page-link text-danger" href="./article-3.php">3</a></li>
            <li class="page-item"><a class="page-link text-danger" href="./article-4.php">4</a></li>
            <li class="page-item">
                <a class="page-link text-danger" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>