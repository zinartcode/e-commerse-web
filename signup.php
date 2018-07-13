<?php
$path = "./db/";
$file = $path."passwd";

if (!file_exists($path))
	mkdir($path, 0755, true);
if (!$_POST['login'] || !$_POST['passwd'] || !$_POST['submit'] || $_POST['submit'] != "OK")
{
	echo "sign up error: post request ill-formatted\n";
	return ;
}
$accounts = array();
if (file_exists($file))
	$accounts = unserialize(file_get_contents($file));
foreach ($accounts as $account)
{
	if ($account["login"] === $_POST["login"])
	{
		echo "sign up error: username exists. please choose another one.\n";
		return ;
	}
}
$accounts[] = array("login" => $_POST["login"], "passwd" => hash("ripemd160", $_POST["passwd"]));
file_put_contents($file, serialize($accounts));
// header('Location: index.php');
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
			<li><a href="login.html" class="nav-signin" data-toggle="dropdown"><span class="signin"></span>Sign In</a></li>
			<li><a href="signup.html" class="nav-signup" data-toggle="dropdown"><span class="signup"></span>Sign up</a></li>
	</ul>


	<div class="panel-heading">Customer Login Form</div>
	<div class="panel-body">
		<!--User Login Form-->
		<form action="signup.php" method="POST">
			<label for="login">Username</label>
			<input type="text" class="form-control" name="login" id="login" />
			<label for="passwd">Password</label>
			<input type="password" class="form-control" name="passwd" id="passwd"/>
			<label for="submit">Sign up</label>
			<input type="submit" class="btn-success" name="submit" id="submit" value="OK">
			<br>
			<!-- <a class="forgotten" href="forgot_pasport.php">Forgotten Password</a> -->
			<!--If user dont have an account then he/she will click on create account button-->
			<!-- <div><a class="create" href="customer_registration.php?register=1">Create a new account</a></div> -->
		</form>
</div>
<div class="panel-footer"><div id="e_msg"></div></div>
