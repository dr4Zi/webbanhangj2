<?php session_start();
if(empty($_SESSION['id'])){
	$_SESSION['error'] = 'Hãy đăng nhập lại';
	header('location:account.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sản phẩm | HStore88</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
	require 'menu.php';
	?>

		<!-- cart item details -->
	

	<div class="cart__container">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="images/buy-1.jpg">
						<div>
							<p>Red Printed Tshirt</p>
							<small>Price: 50$</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>500K</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="images/buy-2.jpg">
						<div>
							<p>Red Printed Tshirt</p>
							<small>Price: 50$</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>500K</td>
			</tr>
			<tr>
				<td>
					<div class="cart-info">
						<img src="images/buy-3.jpg">
						<div>
							<p>Red Printed Tshirt</p>
							<small>Price: 50$</small>
							<br>
							<a href="">Remove</a>
						</div>
					</div>
				</td>
				<td><input type="number" value="1"></td>
				<td>500K</td>
			</tr>
		</table>

		<div class="total-price">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>$200</td>
				</tr>
				<tr>
					<td>Tax</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>$240</td>
				</tr>
				<tr>
					<td colspan="2">
					<a href="" class="btn">Đặt hàng</a>
					</td>
				</tr>
			</table>
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