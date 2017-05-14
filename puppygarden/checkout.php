
<?php 
	include "db_connect.php";

	$checkout_price = $_POST['checkout_price'];
	$checkout_user_id = $_POST['checkout_user_id'];

	print_r($checkout_price);
	print_r($checkout_user_id);

	// $query_cart = "SELECT * FROM cart WHERE id_num = '$del_user_id'";
	// $cart = $mysqli->query($query_cart);

	$query_del = "DELETE FROM cart WHERE id_num = '$checkout_user_id'";
	$mysqli->query($query_del);
	

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>New Account</title>
		<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/autocart.js"></script>
	</head>
	<body>
		<div class="container">
		




				<h1 class="login-title">Thank you for shopping in Puppy Garden</h1>
			<p class="login-name-sorry">The totle price is <span class="checkout-price">$<?php echo $checkout_price;?></span></p>

		<?php
			include("partials/autocart.html");?>
			<a class="login-sign-sorry" href="cart.php">Cart</a>

	</div>

	</body>
	</html>