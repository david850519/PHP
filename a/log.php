<html>
<CENTER>
<head></head>
<body>
<form action="" method="post">
<form action="index.php" method="post">
請輸入姓名:<input type="text" name="name"><br/>
請輸入密碼:<input type="password" name="password"><br/>
<input type="submit">
<input type="reset">
<input type="button" value="註冊" onclick="location.href='reg.php'">
</CENTER>

</form>
</body>
</html>

<?php

include('connect.php');
if(isset($_POST["name"])){
	$name=$_POST["name"];
	$password=$_POST["password"];

	$sql="SELECT * FROM user WHERE name='$name' AND password='$password'";
	$result=mysqli_query($link,$sql);
	$rows=mysqli_num_rows($result);
	if($rows){
		echo "Success";
		header('Location:index.php');
	}else{
		echo "Failed";
		header('refresh:2;url="log.php"');
	}
}
?>