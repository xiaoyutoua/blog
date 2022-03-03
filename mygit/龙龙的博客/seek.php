<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>查找评论文章</title>
</head>

<body background="./img/10.jpg" style="width: 100%;height: 100%;background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



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



    <!-- 查询文章and对文章进行评论 -->

    <!-- 文章展示区 -->
    <div class="container">
        <?php
        // 连接到数据库
        $dsn = 'mysql:dbname=myboke;host=127.0.0.1';
        $pdo = new PDO($dsn, 'root', '');
        $id = $_POST['id'];
        $sql = "SELECT * FROM  page WHERE id ='$id' ";
        $sth = $pdo->prepare($sql);
        // 执行sql
        $sth->execute();
        // 以二维数组形式，获取所有数据，赋值给$rows 取出数据结果
        $rows = $sth->fetchall();
        ?>
        <div class="jumbotron">
            <?php
            foreach ($rows as $key => $page) {
            ?>
                <div class="row">

                    <h1 class="display-3 col-8">
                        <?php echo "这是第 $id 篇"; ?>
                    </h1>
                    <div class="col-2 mt-4">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            点我进行评论
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">请评论</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="conment-2.php" method="POST">
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mt-4">
                        <form action="./conment-1.php" method="POST">
                            <button type="submit" class="btn btn-primary">
                                点我查看评论
                            </button>
                        </form>
                    </div>
                </div>
                <div class='border rounded p-2 m-2 jumbotron'>
                    <h4 class="text-center text-info">
                        <?php echo $page['title'];; ?>
                    </h4>
                    <div class='text-primary text-center'>
                        <?php echo "第$page[id]篇 || 作者：$page[username]  ||   发布时间：$page[timestamp]"; ?>
                    </div>
                    <div class="row">
                        <?php echo $page['text']; ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>

</body>

</html>