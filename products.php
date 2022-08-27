<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sản phẩm | HStore88</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/products.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- ------ menu va nav bar----- -->
	<?php 
	require 'menu.php';
	?>

	<!-- ------ all products----- -->
	<?php 
	require_once 'connect.php';
	?>



	<!-- --------- pagination and search ------- -->
	<?php 
	$page = (isset($_GET['page'])) ? $_GET['page'] : $page = 1 ;
	$search = isset($_GET["search"]) ? $_GET["search"] : "";
	$sql_page = "select count(*) from products where name like '%$search%'";
	$arr_data = mysqli_query($connect,$sql_page);
	$data = mysqli_fetch_array($arr_data);
	$number_of_products = $data["count(*)"];

	$number_of_products_per_page = 12;

	$ignore_data = $number_of_products_per_page * ($page - 1);

	$number_of_page = ceil($number_of_products/$number_of_products_per_page);
	$sql = "select * from products
	where 
	name like '%$search%' 
	limit $number_of_products_per_page offset $ignore_data";
	$result = mysqli_query($connect,$sql);
	?>



<!-- -------- product -------- -->
	<div class="products">
		<div class="products__container">
			<div class="row row-2">
				<h2> Tất cả sản phẩm</h2>
				<div class="form">
					<form>
						<input type="search" name="search" value="<?php echo $search ?>" placeholder = "Tìm kiếm sản phẩm">
					</form>
				</div>
				<select>
					<option>Xem theo tên sản phẩm</option>
					<option>Xem theo nhà sản xuất</option>
					<option>Xem theo giá từ thấp đến cao</option>
					<option>Xem theo giá từ cao xuống thấp</option>
				</select>
			</div>
			<div class="row">
				<?php foreach ($result as $each): ?>

					<div class="col-4" id="<?php echo $each['id'] ?>">
						<a href="product-details.php?id=<?php echo $each['id'] ?>">
							<img src="images/<?php echo $each['photo'] ?>">
						</a>
						<a href="product-details.php?id=<?php echo $each['id'] ?>">
							<h4><?php echo $each['name'] ?></h4>
						</a>
						<p><?php echo $each['price'] ?>K</p>
					</div>
				<?php endforeach ?>

			</div>
			
<!-- --------pagination------- -->
			<div class="page-btn">
				<?php for ($i=1; $i <= $number_of_page ; $i++) { ?>
					<a href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
						<span class="page-<?php echo $i ?>"><?php echo $i ?></span>
					</a>
				<?php	} ?>
			</div>
			<style type="text/css">
				.page-btn .page-<?php echo $page ?>{
					background: #ff523b;
					color: #fff;
				}
			</style>


		</div>
	</div>

	<!-- footer -->

	<?php 
	require 'footer.php';
	mysqli_close($connect);
	?>


</body>
</html>