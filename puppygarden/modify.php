<?php 
	include "db_connect.php";
	$query_delete = "SELECT name FROM puppy_garden ORDER BY date_create DESC";
	$name = $mysqli->query($query_delete);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Modity</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/grids.css">
</head>
<body>
<section>

<h1 class="login-title">Upload</h1>
<div class="container">
<div class="login-box">
<form action="modify_1.php" method="post">
		<p class="upload-name">Item Name</p>
		<input class="login-input" type="text" name="name" placeholder="Name">

		<p class="upload-name">Price</p>
		<input class="login-input" type="text" name="price" placeholder="Price">
		
		<p class="upload-name">Product List Description</p>
		<input class="login-input" type="text" name="product_list_des" placeholder="...">

		<p class="upload-name">Description</p>
		<input class="login-input" type="text" name="description" placeholder="...">

		<p class="upload-name">Description List</p>
		<input class="login-input" type="text" name="des_list" placeholder="...">

		<p class="upload-name">Images</p>
		<input class="login-input" type="text" name="image" placeholder="...">
		<br><button class="login-button" type="submit">Upload</button>
	</form>
		<a class="login-sign" href="index.php">Back to home</a>
</div>

	<hr class="hr">
<h1 class="login-title">Delete</h1>

	<div class="login-box">
		<form action="delete_1.php" method="post">
			<select class="delete-product" name="delete_name">
			<?php 
			while($row = $name->fetch_object()){
				?>


				<option class="delete-product-option" ><?php echo $row->name;?></option>


			<?php
				}
				?>
			</select>
		<br>
		<button class="login-button" type="submit">Delete</button>

		</form>
		<a class="login-sign" href="index.php">Back to home</a>

	</div>
</div>	
<br><br>
</section>

	<?php
	include("partials/footer.html");


?>
</body>
</html>
