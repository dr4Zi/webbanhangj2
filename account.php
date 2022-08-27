<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sản phẩm | HStore88</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<?php 
	require 'menu.php';
	?>

	<!-- ------ account page ------- -->

	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="images/image1.png" width="100%">
				</div>

				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<span onclick="regformtrans()">Đăng ký</span>
							<span onclick="loginformtrans()">Đăng nhập</span>
							<hr id="indicator">
						</div>
						<form id="regform" method="post" action="process/register-process.php">
							<input type="text" placeholder="Họ và tên" name="name">
							<input type="email" placeholder="Email" name="email">
							<input type="password" placeholder="Mật khẩu" name="password">
							<button type="submit" class="btn">Đăng ký</button>
						</form>
						<form id="loginform" method="post" action="process/login-process.php">
							<input type="text" placeholder="Email" name="email">
							<input type="password" placeholder="Mật khẩu" name="password">
							<button type="submit" class="btn">Đăng nhập</button>
							<a href="">Quên mật khẩu</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!-- footer -->

	<?php 
	require 'footer.php';
	 ?>


<!-- JS toggle menu -->
<script >
	let menuItems = document.getElementById("menuItems");
	menuItems.style.maxHeight = "0px";
	function menutoggle(){
		if(menuItems.style.maxHeight == "0px"){
			menuItems.style.maxHeight = "200px";
		}
		else
		{
			menuItems.style.maxHeight = "0px";
		};
	}
</script>
<!-- -- JS toggle form -- -->
<script>
	let loginform = document.getElementById('loginform');
	let regform = document.getElementById('regform');
	let indicator = document.getElementById('indicator');
	console.log(loginform);
	console.log(regform);
	console.log(indicator);
	function loginformtrans(){
		regform.style.transform = "translateX(0px)";
		loginform.style.transform = "translateX(0px)";
		indicator.style.transform = "translateX(100px)";
	}
	function regformtrans(){
		regform.style.transform = "translateX(300px)";
		loginform.style.transform = "translateX(300px)";
		indicator.style.transform = "translateX(0px)";
	}
</script>

<!-- -- JS alert-- -->
<script type="text/javascript">
	<?php 
if (isset($_GET['error'])) { 
	?>
	swal("<?php echo $_GET['error'] ?>","","error");
<?php } ?>
<?php 
if (isset($_GET['success'])) { 
	?>
	swal("<?php echo $_GET['success'] ?>","","success");
<?php 
	} 
?>
</script>

</body>
</html>