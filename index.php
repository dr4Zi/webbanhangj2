<?php 
session_start();
require 'check-login.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HStore88 | Website bán linh kiện đến từ châu Âu </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<!-- -- JS thong bao dang nhap thanh cong -- -->
	<script type="text/javascript">
		<?php 
		if (isset($_SESSION['success'])) { 
			?>
			swal("<?php echo $_SESSION['success'] ?>","Đăng nhập thành công","success");
			<?php 
			unset($_SESSION['success']);
		} 
		?>
	</script> 

	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="navbar__logo">
					<a href="index.php">
						<img src="images/logo.png" width="175px">
					</a>
				</div>
				<nav>
					<ul id="menuItems">
						<li><a href="">Trang chủ</a></li>
						<li><a href="products.php">Sản phẩm</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Liên hệ</a></li>
						<li>
							<?php if(empty($_SESSION['id'])){ ?>
							<a href="account.php">Tài khoản</a>
							<?php 
							} else {
							?>
							<a href="process/logout-process.php">Đăng xuất</a>
						<?php } ?>
						</li>
					</ul>
				</nav>
				<a href="cart.php">
					<img src="images/cart.png" width="30px" height="30px">
				</a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
			<div class="row">
				<div class="col-2">
					<h1>Cửa hàng bán linh kiện <br> đến từ châu Âu</h1>
					<p>Người chơi là người thắng <br> Người không chơi không bao giờ thắng</p>
					<a href="account.php" class="btn row__btn">Tham gia ngay</a>
				</div>
				<div class="col-2">
					<img src="images/image1.png">
				</div>
			</div>
		</div>
	</div>
	<!-- featured categories -->
	<div class="categories">
		<div class="categories__container">	
			<div class="row">
				<div class="col-3">
					<img src="images/category-1.jpg">
				</div>
				<div class="col-3">
					<img src="images/category-2.jpg">
				</div>
				<div class="col-3">
					<img src="images/category-3.jpg">
				</div>
			</div>
		</div>
	</div>
	<!-- featured products -->
	<div class="products">
		<div class="products__container">
			<h2 class="title">Sản phẩm bán chạy</h2>
			<div class="row">
				<div class="col-4">
					<img src="images/product-1.jpg">
					<h4>Red Printed T-Shirt</h4>
					<p>500K</p>
				</div>
				<div class="col-4">
					<img src="images/product-2.jpg">
					<h4>Red Printed</h4>
					<p>600K</p>
				</div>
				<div class="col-4">
					<img src="images/product-3.jpg">
					<h4>Red Printed</h4>
					<p>700K</p>
				</div>
				<div class="col-4">
					<img src="images/product-4.jpg">
					<h4>Red Printed</h4>
					<p>800K</p>
				</div>
			</div>
			<!--

				Lastest product

			 -->
			<h2 class="title">Sản phẩm mới nhất</h2>
			<div class="row">
				<div class="col-4">
					<img src="images/product-5.jpg">
					<h4>Red Printed T-Shirt</h4>
					<p>500K</p>
				</div>
				<div class="col-4">
					<img src="images/product-6.jpg">
					<h4>Red Printed</h4>
					<p>600K</p>
				</div>
				<div class="col-4">
					<img src="images/product-7.jpg">
					<h4>Red Printed</h4>
					<p>700K</p>
				</div>
				<div class="col-4">
					<img src="images/product-8.jpg">
					<h4>Red Printed</h4>
					<p>800K</p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<img src="images/product-9.jpg">
					<h4>Red Printed T-Shirt</h4>
					<p>500K</p>
				</div>
				<div class="col-4">
					<img src="images/product-10.jpg">
					<h4>Red Printed</h4>
					<p>600K</p>
				</div>
				<div class="col-4">
					<img src="images/product-11.jpg">
					<h4>Red Printed</h4>
					<p>700K</p>
				</div>
				<div class="col-4">
					<img src="images/product-12.jpg">
					<h4>Red Printed</h4>
					<p>800K</p>
				</div>
			</div>
		</div>
	</div>

<!--           brands             -->
	<div class="brands">
		<div class="brands__container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-godrej.png">
				</div>
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-coca-cola.png">
				</div>
				<div class="col-5">
					<img src="images/logo-paypal.png">
				</div>
				<div class="col-5">
					<img src="images/logo-philips.png">
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->

	
<?php 
	require 'footer.php';
 ?>

<!-- JS toggle menu -->
<script type="text/javascript">
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

</body>
</html>