<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style></style>
	</head>
<body>
			<ul class="navbar-header">
				<li><a href="index.php"><span class="nav-home"></span>Home</a></li>
				<li><a href="index.php"><span class="nav-product"></span>Product</a></li>
				<li><a href="cart.php" class="nav-cart" data-toggle="dropdown"><span class="shopping-cart"></span>Cart&nbsp  <span class="badge">0</span></a></li>
					<li><a href="login_form.php" class="nav-signin" data-toggle="dropdown"><span class="signin"></span>Sign In</a></li>
			</ul>

			<!-- <div class="categories">
			  <a href="#" class="category">Laptops</a>
			  <a href="#" class="category">Cellphones</a>
			  <a href="#" class="category">Appliances</a>
			</div> -->

			<div class="products" style="width:100%;">
				<div class="item">
					<img src="includes/product_img/camera.jpg" alt="camera" >
					<div class="price">
						899$
						<button class="AddToCart" id="add_camera" >Add</button>
					</div>
				</div>
				<div class="item">
					<img src="includes/product_img/iphone1.jpg" alt="iphone" >
					<div class="price">
						599$
						<button class="AddToCart" id="add_camera" >Add</button>
					</div>
				</div>
				<div class="item">
					<img src="includes/product_img/home1.jpg" alt="home" >
					<div class="price">
						199$
						<button class="AddToCart" id="add_camera" >Add</button>
					</div>
				</div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
			</div>

			<div class="clearfix"></div>

			<!-- <div class="panel-footer"></div> -->

			<div class="panel-footer">&copy; 2018</div>

</body>
</html>
