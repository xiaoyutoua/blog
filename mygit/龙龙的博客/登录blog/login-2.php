<?php
	session_start();

	//$_POST用户名和密码
	$username = $_POST['username'];
	$password = $_POST['password'];
	//连接mysql
	$con = mysqli_connect('localhost','root','', 'myboke');
	//验证mysql连接是否成功
	if(mysqli_errno($con)){
		echo "连接mysql失败:".mysqli_error($con);
		exit;
	}
	//sql查询语句
	$sql = "select id from login where username='$username' and password='$password'";
	//执行
	$result = mysqli_query($con,$sql);
	$num = mysqli_num_rows($result); // 函数返回结果集中行的数量
	if($num){
		echo "<script>alert('登录成功');</script>";
	} else{
		echo "<script>alert('登录失败，不存在此用户');</script>";
		echo "<script>window.location.href = '../登录blog/login-1.php'</script>";
		exit;
	}
	
	$row = mysqli_fetch_assoc($result);
	$_SESSION['id'] = $row['id']; // session
	
	mysqli_close($con);
	
	echo "<script>window.location.href = '../blog.php'</script>";
?>
