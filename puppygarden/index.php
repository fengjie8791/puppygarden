<?php 
	include "db_connect.php";

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
	<!-- // <script src="js/onload.js"></script>
	// <script src="js/onload_item.js"></script> -->
	<script src="js/auto_show.js"></script>
	


</head>
<body>

	<?php 

	if ($currentusername[0] == "null"){
	include("pw/partials/header_home.html");
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
		<a class="login-hello" href="modify.php">Hi, <?php echo $currentusername[0]; ?></a>
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
	include("partials/title_home.php");
	include("partials/home_content.html");
	include("partials/footer.html");


?>
</body>
</html>