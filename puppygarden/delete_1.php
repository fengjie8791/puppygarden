
<?php 
	include "db_connect.php";

	$delete_name = $_POST['delete_name'];
	$query_del = "DELETE FROM puppy_garden WHERE name = '$delete_name'";
	$mysqli->query($query_del);

	$query_del_cart = "DELETE FROM cart WHERE name = '$delete_name'";
	$mysqli->query($query_del_cart);



	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Up Load</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>
	<script src="js/autohome.js"></script>
	

</head>
<body>
		<h1 class="login-title">Thank You!</h1>
		<p class="login-name-sorry"> You have DELETED <span class="autocart"><?php echo $delete_name?> </span>in the webset</p>

		<?php include("partials/autohome.html");?>

		<a class="login-sign-sorry" href="index.php">Home</a>

</body>
</html>