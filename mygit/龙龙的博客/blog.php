<?php

// 连接到数据库
$dsn = 'mysql:dbname=myboke;host=127.0.0.1';
$pdo = new PDO($dsn, 'root', '');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>龙龙的blog!</title>
</head>

<body background="./img/微信图片_20211123173228.jpg" style="width: 100%;height: 100%;background-attachment: fixed;background-repeat: no-repeat;background-size: cover;">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- 以下是博客内容 -->


    <!-- 扩展导航 -->
    <div class="pos-f-t fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h1 class="text-white">欢迎来到</h1>
                <h2 class="text-muted ">龙龙的篮球博客世界</h2>
            </div>
        </div>
        <div class="row bg-dark">
            <div class="col-1">
                <nav class="navbar navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            <div class="col-11">
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle pl-5 text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    设置
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./登录blog/login-1.php">退出登录</a>
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
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1 class="d-flex justify-content-center" style="font-family:'Times New Roman',Times,serif;">Be Legend</h1>
    <h3 class="font-italic text-white d-flex justify-content-center" style="font-family:'Times New Roman',Times,serif;">Only basketball can live up to.</h3>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container">
        <div class="row">
            <!-- 尼克杨轮播图 -->
            <div class="col-4">
                <div class="bd-example">
                    <div id="carouselExampleCaptions-1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/1.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>尼克·杨（Nick Young）</h7>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/2.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>尼克·杨（Nick Young）</h7>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/3.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>尼克·杨（Nick Young）</h7>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions-1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions-1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- 科比轮播图 -->
            <div class="col-4">
                <div class="bd-example">
                    <div id="carouselExampleCaptions-2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/4.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>科比·布莱恩特</h7>
                                    <span>（Kobe Bean Bryant）</span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/5.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>科比·布莱恩特</h7>
                                    <h7>（Kobe Bean Bryant）</h7>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/6.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>科比·布莱恩特</h7>
                                    <h7>（Kobe Bean Bryant）</h7>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- 詹姆斯轮播图 -->
            <div class="col-4">
                <div class="bd-example">
                    <div id="carouselExampleCaptions-3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/7.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>詹姆斯</h7>
                                    <h7>（LeBron Raymone James）</h7>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/8.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>詹姆斯</h7>
                                    <h7>（LeBron Raymone James）</h7>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/9.jpg" class="d-block w-100" alt="..." style="height:500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h7>詹姆斯</h7>
                                    <h7>（LeBron Raymone James）</h7>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions-3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions-3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div clas="row">
            <div class="alert alert-primary font-weight-bold col-12" role="alert">
                <h3>球星介绍</h3>
            </div>
        </div>
        <div class="row" style="margin-left:2px;">
            <div class="col-8  border border-dark rounded bg-white" style="height:388px;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">科比·布莱恩特</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">詹姆斯</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">尼克·杨</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-huangyujun-tab" data-toggle="pill" href="#pills-huangyujun" role="tab" aria-controls="pills-huangyujun" aria-selected="false">黄宇军</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        科比·布莱恩特（Kobe Bryant，1978年8月23日-2020年1月26日），美国篮球运动员，司职得分后卫，
                        绰号“小飞侠” “黑曼巴”，NBA史上最伟大的球员之一。1996年NBA选秀，科比在首轮第十三顺位被夏洛
                        特黄蜂队选中，随后被交换到洛杉矶湖人队，从此便一直效力于湖人队，在20年的职业生涯中，科比总
                        得分33643分，18次入选全明星阵容，15次入选NBA最佳阵容，2次荣膺赛季得分王，获得1次常规赛
                        MVP、2次总决赛MVP，帮助湖人赢得5次NBA总冠军。国际赛场，科比帮助美国国家队获得2007年美锦赛
                        冠军、2008年、2012年奥运会冠军。2016年科比正式退役，2020年入选NBA名人堂，2020年1月26日因
                        直升机事故不幸意外身亡，时年41岁。2021年10月22日，入选NBA历史75大球星。
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        勒布朗·詹姆斯（LeBron James，1984年12月30日-），出生于俄亥俄州阿克伦，美国男子篮球运动员，司
                        职小前锋，现效力于洛杉矶湖人队，绰号“小皇帝”。詹姆斯篮球智商极高、突破犀利，拥有出色的视野和传
                        球技术，被认为是NBA有史以来最为全能的球员之一。他在2003年NBA选秀中以状元身份被选中，曾效力克利
                        夫兰骑士队和迈阿密热火队，2018年7月10日，詹姆斯正式与湖人签下4年1.53亿美元的合同。职业生涯夺得
                        4次总冠军，4次常规赛MVP，4次FMVP，18次入选全明星并3次获全明星MVP，13次入选最佳一阵、3次入选最
                        佳二阵，随美国队获得2枚奥运会金牌。2021年10月22日，入选NBA历史75大球星。
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        尼克·杨（Nick Young，1985年6月1日-），出生于美国加利福尼亚州洛杉矶，美国职业篮球运动员，司职后
                        卫/小前锋，现效力于CBA浙江广厦队。尼克·杨是擅长接球投篮的得分箭头，运动能力出色；2007年，被华盛
                        顿奇才选中正式登陆NBA，先后效力于快船、湖人、勇士、掘金等NBA球队；加盟勇士后，随勇士队夺得2017-
                        18赛季NBA总冠军。2020年12月，与CBA浙江广厦队签下一份合约。
                    </div>
                    <div class="tab-pane fade" id="pills-huangyujun" role="tabpanel" aria-labelledby="pills-huangyujun-tab">
                        中文名:黄宇军
                        <br>
                        出生年月日:1993年8月18日
                        <br>
                        所在地:福建泉州
                        <br>
                        身高:171cm
                        <br>
                        毕业大学:集美大学
                        <br>
                        抖音名字:军哥篮球习惯过了头
                        <br>
                        抖音号:Ass_Kicker
                        <br>
                        微博账号:黄宇军不会扣篮
                        <br>
                        成绩:路人王7冠，adidas签约
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/junge.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">黄宇军</h5>
                        <p class="card-text">军哥是我最喜欢的路人王球员，身高171cm，却打遍路人王，付出就会有回报</p>
                        <a href="https://www.sohu.com/a/469205683_121124664" class="btn btn-primary">Go 军哥</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <br>
    <br>
    <br>
    <br>
    <br>




    



    <div class="container">
        <form action="article-1.php" method="POST">
            <div class="alert alert-primary" role="alert">
                <div class="row">
                    <div class="col-2 font-weight-bold">
                        <h3>文章编辑</h3>
                    </div>
                    <div class="col-10 d-flex">
                        <input class="btn btn-info ml-auto" type="submit" value="点击浏览文章">
                    </div>
                </div>
            </div>
        </form>

        <!-- 文章发表区 -->
        <form action="publish.php" method="POST">
            <div class="row">
                <div class='col-12'>
                    <div class="form-group">
                        <!-- 文章标题部分 -->
                        <textarea name="title" class="form-control" rows=1 placeholder="请输入文章标题  "></textarea>
                    </div>
                </div>
                <div class='col-12'>
                    <div class="form-group">
                        <!-- 文章发表框部分 -->
                        <textarea name="text" class="form-control" rows=10 placeholder="请输入文章内容"></textarea>
                    </div>
                </div>
                <div class='col-3'>
                    <!-- 用户名输入部分 -->
                    <input name="username" class="form-control" type="text" placeholder="请输入作者">
                </div>
                <div class='col-9 d-flex'>
                    <!-- 提交按钮部分 -->
                    <!-- primary 蓝色 -->
                    <input class="btn btn-primary ml-auto" type="submit" value="发表">
                </div>
            </div>
        </form>
        <br>
        <!-- 文章删除 -->
        <form action="delete.php" method="POST">
            <div class="row">
                <div class='col-3'>
                    <!-- id输入部分 -->
                    <input name="id" type="text" class="form-control" placeholder="请输入文章id">
                </div>
                <div class='col-9 d-flex'>
                    <!-- 提交按钮部分 -->
                    <!-- primary 蓝色 -->
                    <input class="btn btn-primary ml-auto" type="submit" value="删除">
                </div>
            </div>
        </form>
        <br>
        <!-- 文章修改 -->
        <form action="amend-2.php" method="POST">
            <div class="row">
                <div class='col-3'>
                    <!-- id输入部分 -->
                    <input name="id" type="text" class="form-control" placeholder="请输入文章id">
                </div>
                <div class='col-9 d-flex'>
                    <!-- 提交按钮部分 -->
                    <!-- primary 蓝色 -->
                    <input class="btn btn-primary ml-auto" type="submit" value="修改">
                </div>
            </div>
        </form>
        <br>
        <!-- 文章查找 -->
        <form action="seek.php" method="POST">
            <div class="row">
                <div class='col-3'>
                    <!-- id输入部分 -->
                    <input name="id" type="text" class="form-control" placeholder="请输入文章id">
                </div>
                <div class='col-9 d-flex'>
                    <!-- 提交按钮部分 -->
                    <!-- primary 蓝色 -->
                    <input class="btn btn-primary ml-auto" type="submit" value="查找">
                </div>
            </div>
        </form>
        <br>
        <br>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>