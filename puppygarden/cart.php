<?php 
	include "db_connect.php";

$query = "SELECT * FROM puppy_garden";
$result = $mysqli->query($query);

$length = 0;



$query_2 = "SELECT * FROM currentusername";
$signinname = $mysqli->query($query_2);
$row_2 = $signinname->fetch_object();

$currentusername = explode(" ", $row_2->currentusername);

if($mysqli->errno) die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Cart</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/time.js"></script>
	<!-- // <script src="js/onload.js"></script>
	// <script src="js/onload_item.js"></script> -->
	<!-- // <script src="js/onload_cart.js"></script>  -->
	<script src="js/auto_show.js"></script>
	
</head>
<body>
	<div class="container">
		<?php 

	if ($currentusername[0] == "null"){
	include("partials/header_home.html");
	?>
	<div class="container">
	<a class="login" href="signin.php">Log In / New Account</a>
	</div>
	<?php
	}else if($currentusername[0] == "Administer"){
	include("partials/header_admin.html");
		?>

		<div class="container">
		<a class="login" href="logout.php">Log out</a>
		<a class="login-hello" href="upload.php">Hi, <?php echo $currentusername[0]; ?></a>
		</div>
		<?php

	}
	else{
	include("partials/header_user.html");
		?>

		<div class="container">
		<a class="login" href="logout.php">Log out</a>
		<a class="login-hello" href="cart.php">Hello, <?php echo $currentusername[0]; ?></a>
		</div>
		<?php

	}
	include("partials/title_cart.php");
?>
	<section>
	<div class="cart-product-bigbox">
	<hr class="hr">
	<div class="cart-box">
		<div class="cart-title-box">
			<div class="column cart-title col-lg-2 col-md-4 "><h1>Image</h1></div>
			<div class="column col-lg-10 col-md-8">
				<div class="column cart-title col-lg-2 col-md-3 "><h1>Name</h1></div>
				<div class="column cart-title col-lg-1 col-md-3 "><h1>Price</h1></div>
				<div class="column cart-title col-lg-1 col-md-3 "><h1>Qyt</h1></div>
				<div class="column cart-title col-lg-3 col-md-0"><h1>Add Time</h1></div>
				<div class="column cart-title col-lg-4 col-md-0"><h1>Description</h1></div>
				<div class="column cart-title col-lg-1 col-md-3"><h1>Del</h1></div>
			</div>
			
		</div>
		
	</div>
	<hr class="cart-hr">

	

	<?php 


	$query_cart = "SELECT * FROM cart WHERE id_num = '$row_2->id_num' ORDER BY date_create DESC";
	$cart = $mysqli->query($query_cart);
	$total_price = 0;
	$del_btn_num = 0;
	while($row_cart = $cart->fetch_object()){ 
	$length++;
	// $row_cart = $cart->fetch_object();
	$images = explode(",", $row_cart->image);
	$del_btn_num++; 



	// print_r($row_cart); 

 ?>
 <div class="cart-product-box active-onload-cart">
 	<a class="cart-product-image column col-lg-2 col-md-4" href="product.php?id=<?php echo $row_cart->id_item;?>">
 		<?php
				echo "<img src='images/items/{$images[0]}'>";
				// print_r($row_cart->id_item);

			?>
	</a>
	<div class="cart-product-hover-box column col-lg-10 col-md-8">
	 	<a class="cart-product-name column col-lg-2 col-md-3" href="product.php?id=<?php echo $row_cart->id_item;?>">
	 		<?php echo $row_cart->name?>
	 	</a>
	 	<div class="cart-product-price column col-lg-1 col-md-3">
	 		<h2>$<?php echo $row_cart->price?></h2>
	 	</div>
	 	<div class="cart-product-qty column col-lg-1 col-md-3">
	 		<h2><?php echo $row_cart->qty?></h2>
	 	</div>
	 	<div class="cart-product-date column col-lg-3 col-md-0">
	 		<h2><?php echo $row_cart->date_create?></h2>
	 	</div>
	 	<div class="cart-product-description column col-lg-4 col-md-0">
	 		<h2><?php echo $row_cart->description?></h2>
	 	</div>
	 	<div class="cart-product-remove column col-lg-1 col-md-3">
			<form action="delcart.php" method="post">
				<input class="cart-qty displaynone" type="text" name="del_user_id" value="<?php echo $row_2->id_num?>">
				<input class="cart-qty displaynone" type="text" name="del_item_id" value="<?php echo $row_cart->id_item?>">
	 			<button class="remove del-num-<?php echo $del_btn_num?>"  type="submit" value="<?php echo $del_btn_num?>">X</button>
			</form>

	 	</div>
	</div>



 	<hr class="cart-hr">
 </div>




 <?php 
 $total_price = $total_price + $row_cart->price * $row_cart->qty;

 

}

?>
<div class="cart-product-box active-onload-cart">
	<div class="cart-product-totalprice">
		<form action="checkout.php" method="post">		
			<input class="cart-qty displaynone" type="text" name="checkout_user_id" value="<?php echo $row_2->id_num?>">
			<input class="cart-qty displaynone" type="text" name="checkout_price" value="<?php echo $total_price;?>">
			<button class="checkout-button">Check Out</button>
			<h2 name="checkout_price">$<?php echo $total_price;?></h2>
		</form>

		<h3>Subtotal:</h3>
	</div>
	</div>
</div>	



	</section>
</div>

	<?php
	include("partials/footer.html");


?>

</body>
<script>
	

var length ;
length = <?php echo $length; ?> + 2;
var del_num = <?php echo $del_btn_num; ?>


$(".cart-product-box").on("mouseenter",function(){
	var index = $(this).index() - 2

console.log(".del-num-"+index+"");

$(".del-num-"+index+"").on("click",function(){
	$(".cart-product-box:nth-of-type("+ (index+1) + ")")
		.addClass("moveright")
});


})


var num_productbox = -1;


function onload_productbox(){

	num_productbox++;



 



// console.log(num_productbox)






	if(num_productbox >= 0){
	$(".cart-product-box:nth-of-type("+ num_productbox + ")").removeClass("active-onload-cart")
	}

	if(num_productbox == length){
		return;
	}

	t=setTimeout("onload_productbox()",150)

}

$(function(){

	$("body").each(function(){
		new onload_productbox(this);
		});

});


// function remve(){
// 	console.log("remove")
// }




</script>
	 	
<script>
	$(".cart-product-remove form").on("submit",function(e){
		e.preventDefault();
		var f = this;
		setTimeout(function(){
			f.submit();
		},1000);
	});
</script>
</html>