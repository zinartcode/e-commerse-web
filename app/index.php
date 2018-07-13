<!-- <!doctype html>
<html>
	<head>
		<title>42 Store</title>
	</head>
	<body>
		<h1>Landing page</h1>
		<a href="signup.php">Sign up</a>
		<a href="login.php">Log in</a>
	</body>
</html> -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Buy or don't</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style></style>
	</head>
<body>
			<ul class="navbar-header">
				<li><a href="index.php"><span class="nav-home"></span>Home</a></li>
				<li><a href="product.php"><span class="nav-product"></span>Product</a></li>
				<li><a href="cart.php" class="nav-cart" data-toggle="dropdown"><span class="shopping-cart"></span>Cart&nbsp  <span class="badge">0</span></a></li>
					<li><a href="login.php" class="nav-signin" data-toggle="dropdown"><span class="signin"></span>Sign In</a></li>
					<li><a href="signup.php" class="nav-signup" data-toggle="dropdown"><span class="signup"></span>Sign up</a></li>
			</ul>
			<div class="intro">
				<h1 style="color:white;">Buy or don't</h1>
				<h2 style="color:white;">It's your choice</h2>
			</div>

			<div class="categories">
			  <a href="laptops.php" class="category">Laptops</a>
			  <a href="cellphones.php" class="category">Cellphones</a>
			  <a href="appliances.php" class="category">Appliances</a>
			</div>

			<div class="products">
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
				<!-- <div class="item"></div>
				<div class="item"></div>
				<div class="item"></div> -->
			</div>

			<div class="clearfix"></div>

			<!-- <div class="panel-footer"></div> -->

			<div class="panel-footer">&copy; 2018</div>

</body>
</html>
