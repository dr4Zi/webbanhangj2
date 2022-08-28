<div class="container">
	<div class="navbar">
		<div class="navbar__logo">
			<a href="index.php">
				<img src="images/logo.png" width="175px">
			</a>
		</div>
		<nav>
			<ul id="menuItems">
				<li><a href="index.php">Trang chủ</a></li>
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
</div>

<?php 
if (isset($_SESSION['error'])) {
	?>
	<span style="color: red; font-size: 20px; margin: 14px 30px;">
		<?php echo $_SESSION['error']; ?>
	</span>
<?php } ?>
<?php 
if (isset($_SESSION['success'])) { 
	?>
	<span style="color: green; font-size: 20px; margin: 14px 30px;">
		<?php echo $_SESSION['success']; ?>
	</span>
<?php 
	} 
?>

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