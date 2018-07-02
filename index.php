<?php
include('install.php');

function get_price($products, $product, $qty)
{
	$price = 0;
	if (!$products || !$product)
		return (0);
	foreach ($products as $k => $p)
	{
		if ($p['product_name'] === $product)
		{
			$price = $p['price'];
		}
	}
	return ($price * $qty);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Buy or don't</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
			<ul class="navbar-header">
				<li><a href="index.php"><span class="nav-home"></span>Home</a></li>
				<li><a href="products.php"><span class="nav-product"></span>Product</a></li>

				<li><a href="basket_list.php" class="nav-cart" data-toggle="dropdown"><span class="shopping-cart"></span>Cart&nbsp  <span class="badge"></span></a></li>
					<li><a href="login.html" class="nav-signin" data-toggle="dropdown"><span class="signin"></span>Log In</a></li>
					<li><a href="signup.html" class="nav-signup" data-toggle="dropdown"><span class="signup"></span>Sign up</a></li>
					<li><a href="admin_panel.html" class="nav-signup" data-toggle="dropdown"><span class="signup"></span>Admin</a></li>
					<li><a href="logout.html" class="nav-logout" data-toggle="dropdown"><span class="logout"></span>Log out</a></li>
			</ul>
			<div class="intro">
				<h1 style="color:white;">Buy here</h1>
				<!-- <h2 style="color:white;">It's your choice</h2> -->
			</div>

			<!-- <div class="categories">
			  <a href="laptops.php" class="category">Laptops</a>
			  <a href="cellphones.php" class="category">Cellphones</a>
			  <a href="appliances.php" class="category">Appliances</a>
			</div> -->

			<!-- <div class="products">
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
			</div> -->
	<?php
	if ($_SESSION['logged_on_user'] = "")
		echo "<a href='logout.php'>Log out</a>";
?>
<!-- <a href="basket_list.php">Cart</a> -->
<h2>Products</h2>
<?php
include('constants.php');
$products = unserialize(file_get_contents($db_dir.$product_store));
foreach($products as $product)
{
	$html = "<div class='product'><img src='".$product['image_url']."'><p>Price: ".get_price($products, $product['product_name'], 1)."<a href='product_detail.php?product_name=".$product['product_name']."'>".$product['product_name']."</a></div><br />";
	echo $html;
}
?>

			<!-- <div class="clearfix"></div> -->

			<!-- <div class="panel-footer"></div> -->

			<div class="panel-footer">&copy; 2018</div>

</body>
</html>
