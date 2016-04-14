<?php
include('connect.php');
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];
if($name!=null&&$password!=null&&$email!=null&&$phone!=null){

$sql="INSERT INTO user (name,password,email,phone) VALUES('$name','$password','$email','$phone')";
mysqli_query($link,$sql);
header('Location:index.php');
}else{
	echo "重新輸入";
}

?>