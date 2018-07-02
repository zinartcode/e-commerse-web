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


<?php
include('constants.php');
$products = unserialize(file_get_contents($db_dir.$product_store));
foreach ($products as $k => $p)
	{
		if ($p['product_name'] === $_GET['product_name'])
		{
			$html = "<div class='product'><img src='".$p['image_url']."'><a href='product_detail.php?product_name=".$p['product_name']."'>".$p['product_name']."</a></div><br />";
			echo $html;
		}
	}
?>

</body>
</html>
