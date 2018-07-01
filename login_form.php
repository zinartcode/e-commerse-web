<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Log In</title>
		<script src="js/jquery2.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/login_form.css">
	</head>
<body>

<ul class="navbar-header">
	<li><a href="index.php"><span class="nav-home"></span>Home</a></li>
	<li><a href="index.php"><span class="nav-product"></span>Product</a></li>
	<li><a href="#" class="nav-cart" data-toggle="dropdown"><span class="shopping-cart"></span>Cart&nbsp  <span class="badge">0</span></a></li>
</ul>


	<div class="panel-heading">Customer Login Form</div>
	<div class="panel-body">
		<!--User Login Form-->
		<form onsubmit="return false" id="login">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" required/>
			<label for="email">Password</label>
			<input type="password" class="form-control" name="password" id="password" required/>
			<input type="submit" class="btn-success" Value="Login">
			<br>
			<a class="forgotten" href="#">Forgotten Password</a>
			<!--If user dont have an account then he/she will click on create account button-->
			<div><a class="create" href="customer_registration.php?register=1">Create a new account</a></div>
		</form>
</div>
<div class="panel-footer"><div id="e_msg"></div></div>
