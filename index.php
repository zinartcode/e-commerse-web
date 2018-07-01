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
		<link rel="stylesheet" href="css/main.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style></style>
	</head>
<body>
			<ul class="navbar-header">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				<li><a href="#" class="cart" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart&nbsp  <span class="badge">0</span></a></li>
					<li><a href="#" class="signin" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
			</ul>

			<div class="categories">
			  <a href="#" class="category">Laptops</a>
			  <a href="#" class="category">Cellphones</a>
			  <a href="#" class="category">Appliances</a>
			</div>

			<div class="products">
				<div class="item">
					<img src="includes/product_img/camera.jpg" alt="camera" >
					<div class="price">
						1200$
						<button class="AddToCart" id="add_camera" >Add</button>
					</div>

				</div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
			</div>

			<div class="clearfix"></div>

			<!-- <div class="panel-footer"></div> -->

			<div class="panel-footer">&copy; 2018</div>

</body>
</html>
