
<?php 
	include "db_connect.php";

	if(isset($_POST['search'])){
	$search = $_POST['search'];
	}else{
		$search = "";
	}
	$length = 0;
	$query_5 = "SELECT * FROM puppy_garden ORDER BY name";
	$itemlist =  $mysqli->query($query_5);




	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Sign in</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/grids.css">
	<script src="lib/js/jquery-2.1.3.min.js"></script>


</head>
<body>
<section>
<br>
<br>
<br>
<br>
<br>

	<?php include("partials/search.html");?>
	<br>
<div class="container">

	<hgroup>
		<h1>Search Results</h1>
	</hgroup>

		<?php if(strtolower($search) == "all the items") {
?>  
		
		<p class="search-des">All the products show below</p>
		<hr class="hr">

		<?php 
		}
		else{
		?>

		<p class="search-des">Here are the results of "<?php echo "<strong>$search</strong>";?>"</p>

		<hr class="hr">
	<?php
	}

	$bollin = false;
	while($row = $itemlist->fetch_object()){
		$length++;
    $images = explode(",", $row->images);

	$itemname = explode(" ", $row->name);

	if(strtolower(strrev($search)) == strtolower(substr(strrev($itemname[0]),strlen($itemname[0]) - strlen($search))) && $search != "" || strtolower($search) == "all the items"){
		$bollin = true;

		?>
		
			<div class="search-container active-onload-search">
				<div class="search-image-box">
					<a   class="search-image" href="product.php?id=<?php echo $row->id?>"><?php
						echo "<img src='images/items/{$images[0]}'>";

					?></a>
				</div>
				<div class="search-right">

					<a   class="search-link"href="product.php?id=<?php echo $row->id?>"><?php echo $row->name?></a>
					<p class="search-price">$<?php echo $row->price?></p>
					
					<p class="search-description"><?php echo $row->product_list_des?></p>
				
				</div>
				<hr class="search-hr">
			</div>
			
		


	<?php
	}
}
	if($bollin == false){

		?>
	<p class="search-des">Sorry, there is no result for your searching.</p>

	<?php
}
	?>
	<br>
	<a class="login-sign" href="product.php" style="margin-left:48%;">Back</a>

	<br>
	<br>

</div>
</section>
	<?php include("partials/footer.html");?>
	
	
</body>
<script>
	
var length ;
length = <?php echo $length; ?> + 2;


// console.log(a)


var num_productbox = -1;


function onload_productbox(){

	num_productbox++;



 



console.log(num_productbox)






	if(num_productbox >= 0){
	$(".search-container:nth-of-type("+ num_productbox + ")").removeClass("active-onload-search")
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



</script>
</html>