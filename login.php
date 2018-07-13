<?php
include 'auth.php';
include 'basket_api.php';
session_start();
// if(!auth($_POST['login'], $_POST['passwd']))
// {
// 	$_SESSION['logged_on_user'] = "";
// 	echo "login error: wrong username or password\n";
// }
// else
// {
	if ($_SESSION['logged_on_user'] != "")
		save_basket($db_dir.$basket_store, $POST['login'], null);
	else
		save_basket($db_dir.$basket_store, $POST['login'], $_SESSION['basket']);
	$_SESSION['logged_on_user'] = $_POST['login'];
	var_dump(get_basket($db_dir.$basket_store, $POST['login']));
	//header('location: index.php');
// }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="css/login_form.css">
	</head>
<body>

	<ul class="navbar-header">
		<li><a href="index.php"><span class="nav-home"></span>Home</a></li>
		<li><a href="product.php"><span class="nav-product"></span>Product</a></li>
		<li><a href="cart.php" class="nav-cart" data-toggle="dropdown"><span class="shopping-cart"></span>Cart&nbsp  <span class="badge">0</span></a></li>
			<li><a href="login.php" class="nav-signin" data-toggle="dropdown"><span class="signin"></span>Sign In</a></li>
			<li><a href="signup.php" class="nav-signup" data-toggle="dropdown"><span class="signup"></span>Sign up</a></li>
	</ul>


	<div class="panel-heading">Customer Login Form</div>
	<div class="panel-body">
		<!--User Login Form-->
		<form action="login.php" method="POST">
			<label for="login">Username</label>
			<input type="text" class="form-control" name="login" id="login" required/>
			<label for="passwd">Password</label>
			<input type="password" class="form-control" name="passwd" id="passwd" required/>
			<label for="submit">Log in</label>
			<input type="submit" class="btn-success" name="submit" value="OK">
			<br>
			<!-- <a class="forgotten" href="forgot_pasport.php">Forgotten Password</a> -->
			<!--If user dont have an account then he/she will click on create account button-->
			<!-- <div><a class="create" href="customer_registration.php?register=1">Create a new account</a></div> -->
		</form>
</div>
<div class="panel-footer"><div id="e_msg"></div></div>
