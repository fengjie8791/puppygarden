
<?php 
	include "db_connect.php";

	$qty = $_POST['qty'];
	$item_id = $_POST['item_id'];


	$query = "SELECT * FROM currentusername";
	$currentusername =  $mysqli->query($query);
	$currentusername_1 = $currentusername->fetch_object();

	// $query_1 = "SELECT * FROM users WHERE username = '$currentusername_1->currentusername'";
	// $users =  $mysqli->query($query_1);
	// $user_1 = $users->fetch_object();

	$user_id =$currentusername_1->id_num;



	$query_2 = "SELECT * FROM puppy_garden WHERE id = '$item_id'";
			$items =  $mysqli->query($query_2);
			$items_1 = $items->fetch_object();
			$images = explode(",", $items_1->images);


	$query_3 = "SELECT * FROM cart";
	$cart =  $mysqli->query($query_3);

	$stop = 0;


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
		<?php 

	while($cart_1 = $cart->fetch_object()){

	


		
		if ($user_id == $cart_1->id_num && $item_id == $cart_1->id_item){

			if($stop == 0){

			$stop = 1;

			$new_qty = $qty + $cart_1->qty;


			$query_4 = "UPDATE cart SET qty = '$new_qty' WHERE id_num = '$user_id' AND id_item = '$item_id'";
			$mysqli->query($query_4);	

		?>




				<h1 class="login-title">Thank you!</h1>
			<p class="login-name-sorry">You have added <span class="autocart"><?php echo $qty;?> <?php echo $items_1->name;?></span></p>

		<?php
			include("partials/autocart.html");?>
			<a class="login-sign-sorry" href="cart.php">Cart</a>
			<?php
			
			}
			
}


}	

	if($stop == 0) {

	



			$query_5 = "INSERT INTO cart (id , id_item, id_num, image, name, qty, price, description, date_create) VALUES ('NULL' ,
																															'$item_id', 
																															'$user_id', 
																															'$images[0]',
																															'$items_1->name',
																															'$qty',
																															'$items_1->price',
																															'$items_1->product_list_des',
																															NOW())";
			$mysqli->query($query_5);	
			?>




				<h1 class="login-title">Thank you!</h1>
			<p class="login-name-sorry">You have added <span class="autocart"><?php echo $qty;?> <?php echo $items_1->name;?></span></p>

		<?php
			include("partials/autocart.html");?>
			<a class="login-sign-sorry" href="cart.php">Cart</a>
			<?php

			
	}




		// if ($user_id != $cart_1->id_num && $item_id == $cart_1->id_item){	

		// $query_4 = "SELECT * FROM cart";
		// $cart_2 =  $mysqli->query($query_4);
		// $cart_3 = $cart->fetch_object();
		// print_r($cart_3->qty);




	

	?>
	</div>

	</body>
	</html>