<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录blog</title>
    <style>
        .container {
            margin-top: 200px;
            margin-inline: auto;
            width: 400px;
            height: 200px;
            border: solid 5px #3dd0e1;
        }

        .box {
            text-align: center;
            /* margin-top: 6%; */
        }

        .submit {
            background-color: #3dd0e1;
            border: none;
            margin-left: 40px;
        }

        .submit-1 {
            background-color: #3dd0e1;
            border: none;
            /* margin-left: 40px; */
        }

        .img-1 {
            width: 10%;
            height: 20%;
        }

        .img-2 {
            width: 30%;
            height: 50%;
        }

        .img-3 {
            width: 20%;
            height: 15%;
        }

        .img-4 {
            width: 20%;
            height: 30%;
            float: right;
        }

        </style
    </style>
</head>

<body background="./img/R-C.jfif">
    <div class="container">
        <div>
            <img src="./img/1.png" alt="" class="img-1">
            <img src="./img/2.png" alt="" class="img-2">

        </div>
        <div class="box">
            <div>
                <form action="login-2.php" method="POST">
                    账号:<input type="text" name="username" value="" class="email"></input><br>
                    密码:<input type="password" name="password" class="password"></input><br><br>
                    <input type="checkbox" name="sex" vale="male">记住密码</input>
                    <button type="submit" class="submit">登录</button>
                </form>
                <form action="register-1.php">
                    新用户请注册---><button type="submit" class="submit-1">注册</button>
                </form>
            </div>
        </div>
        <div>
            <img src="./img/3.png" alt="" class="img-3">
            <img src="./img/4.png" alt="" class="img-4">
        </div>
    </div>
</body>

</html>