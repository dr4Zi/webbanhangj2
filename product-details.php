<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sản phẩm | HStore88</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/product-details.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
	require 'menu.php';
	?>

		<!-- single product details -->
	<?php 
	$id = $_GET['id'];
	require 'connect.php';
	$sql = "select * from products where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	 ?>

	<div class="product-details">
		<div class="product-details__container single-product">
			<div class="row">
				<div class="col-2">
					<img src="images/<?php echo $each['photo'] ?>" width="100%">

				</div>
				<div class="col-2">
					
					<h1><?php echo $each['name'] ?></h1>
					<h4><?php echo $each['price'] ?>k</h4>
					<input type="number" value="1" minlength="1">
					<a href="" class="btn"> Add To Cart</a>
					<h3>Mô tả sản phẩm</h3>
					<br>
					<p><?php echo $each['description'] ?></p>
				</div>
			</div>
		</div>


		<!-- --------title--------- -->
		<div class="product-details__container">
			<div class="row row-2">
				<h2>Sản phẩm tương tự</h2>
				<a href="products.php">
				<p>Xem thêm</p>
				</a>
			</div>
		</div>


		<!-- --------title--------- -->
		<div class="product-details__container">
			
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
			
			
				
			</div>
		</div>
	</div>

	<!-- footer -->

	<?php 
	require 'footer.php';
	mysqli_close($connect);
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