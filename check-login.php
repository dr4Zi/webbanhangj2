<?php 
if (isset($_COOKIE['remember'])) {
	$token=$_COOKIE['remember'];
	require_once 'connect.php';
	$sql = "select * from customers where token = '$token' limit 1";
	$result = mysqli_query($connect,$sql);
	$number_rows = mysqli_num_rows($result);
	if ($number_rows ==1) {
		$each = mysqli_fetch_array($result);
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];
	}
}