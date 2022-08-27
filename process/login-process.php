<?php 
if (empty($_POST['email']) || empty($_POST['password'])) {
	header('location:../account.php?error=Phải điền đầy đủ thông tin để đăng nhập');
	exit;
};

$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

require '../connect.php';
$sql = "select * from customers where email = '$email' and password = '$password'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1){
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];

	header('location:../index.php');
	exit;
}
header('location:../account.php?error= Sai tên đăng nhập hoặc mật khẩu');
	exit;