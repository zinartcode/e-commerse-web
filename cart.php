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
				<li><a href="index.php"><span class="nav-home"></span>Home</a></li>
				<li><a href="product.php"><span class="nav-product"></span>Product</a></li>
				<li><a href="cart.php" class="nav-cart" data-toggle="dropdown"><span class="shopping-cart"></span>Cart&nbsp  <span class="badge">0</span></a></li>
					<li><a href="login_form.php" class="nav-signin" data-toggle="dropdown"><span class="signin"></span>Sign In</a></li>
			</ul>


      <form id="shopping-cart" action="cart.html" method="post">
          <table class="shopping-cart">
              <thead>
                  <tr>
                      <th scope="col">Item</th>
                      <th scope="col">Qty</th>
                      <th scope="col">Price</th>
                  </tr>
              </thead>
              <tbody></tbody>
          </table>
          <p id="sub-total">
              <strong>Sub Total</strong>: <span id="stotal"></span>
          </p>
          <ul id="shopping-cart-actions">
              <li>
                  <input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
              </li>
              <li>
                  <input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
              </li>
              <li>
                  <a href="product.php" class="btn">Continue Shopping</a>
              </li>
              <li>
                  <a href="checkout.html" class="btn">Go To Checkout</a>
              </li>
          </ul>
      </form>

  </body>
</html>
