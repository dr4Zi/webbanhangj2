<?php 
session_start();
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
	header('location:../account.php');
	$_SESSION['error'] = 'Phải điền đầy đủ thông tin để đăng ký';
	exit;
};

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

require '../connect.php';
$sql = "select count(*) from customers where email = '$email'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows ==1){
	header('location:../account.php');
	$_SESSION['error'] = 'Email đã được sử dụng';
	exit;
}

$sql = "insert into customers(name,email,password) values ('$name','$email','$password')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:../account.php');
$_SESSION['success'] = 'Đăng ký thành công';