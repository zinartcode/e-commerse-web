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


	<div class="products" style="width:100%;">
<?php
include('constants.php');
$products = unserialize(file_get_contents($db_dir.$product_store));
// echo print_r $products;
foreach($products as $product)
{
	$html = "
	<div class='product'>
	<p>Buy</p>
	<img src='".$product['image_url']."'>
	<p>Price: ".get_price($products, $product['product_name'], 1).
	"&nbsp
	<a href='product_detail.php?product_name=".$product['product_name']."'>"."</a>
	 </div>

	<a href='basket.php?product_name=".$product['product_name']."'>".$product['product_name']."</a></div>";

	// $html = "				<div class="item">
	// 				<img src="includes/product_img/camera.jpg" alt="camera" >
	// 				<div class="price">
	// 					899$
	// 					<button class="AddToCart" id="add_camera" >Add</button>
	// 				</div>
	// 			</div>"
	echo $html;
}
?>




</div>

<div class="clearfix"></div>


<!-- <div class="panel-footer">&copy; 2018</div> -->
</body>
</html>
