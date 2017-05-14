<?php 
	include "db_connect.php";


	if (isset($_POST['pagenum'])){
	$page_num = ($_POST['pagenum']-1 )* 6;
	}else{
		$page_num = 0;
}

	
		


	$query_2 = "SELECT * FROM currentusername";
	$signinname = $mysqli->query($query_2);
	$row = $signinname->fetch_object();
	$currentusername = explode(" ", $row->currentusername);


	

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Puppy Garden</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/time.js"></script>
	<script src="js/onload.js"></script>
	<script src="js/onload_item.js"></script>
	<script src="js/auto_show.js"></script>



</head>
<body>


	<?php 

	if ($currentusername[0] == "null"){
	include("partials/header_home.html");
	?>
	<div class="container">
	<a class="login" href="signin.php">Sgin / new account</a><br><br>
	
		<?php include("partials/search.html");?>
	</div>
	<?php
	}else if($currentusername[0] == "Administer"){
	include("partials/header_admin.html");
		?>

		<div class="container">
		<a class="login" href="logout.php">Log out</a>
		<a class="login-hello" href="modify.php">Hi, <?php echo $currentusername[0]; ?></a><br><br>
		<?php include("partials/search.html");?>

		</div>
		<?php

	}
	else{
	include("partials/header_user.html");
		?>

		<div class="container">
		<a class="login" href="logout.php">Log out</a>
		<a class="login-hello" href="cart.php">Hello, <?php echo $currentusername[0]; ?></a><br><br>
		<?php include("partials/search.html");?>

		</div>
		<?php

	}

	if(isset($_GET['id'])){
		include "partials/title_page.php";
	}else{
		include "partials/title_list.php";
	}

?>
<section>
<?php
	include("partials/navigation.php");

?>
<div class="container">
<?php
	
	if(isset($_GET['id'])){
		include "product_page.php";
	}else{
		// include "product_page.php";
		include "product_list.php";

	
			?>

	 	<div class="page-button-box">
			<form class="moveforward" action="product.php" method="post">
				<!-- <input class="moveforward-value" name="pagenum" type="text" placeholder="value" value="2"> -->
				<button class="page-button" name="pagenum" value="1" type="submit">1</button>
				<button class="page-button" name="pagenum" value="2" type="submit">2</button>
				<button class="page-button" name="pagenum" value="3" type="submit">3</button>
			</form>	
		</div>	
<?php
	}

	// if(isset($_GET['id'])){
	// 	include("partials/product_list_moving.html");
	// }
?>
</div>
</section>
	<?php
	include("partials/footer.html");


?>
</body>
</html>