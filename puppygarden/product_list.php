

<?php 
	include "db_connect.php";

$query = "SELECT * FROM puppy_garden ORDER BY date_create DESC LIMIT $page_num,6 ";
$result = $mysqli->query($query);
if($mysqli->errno) die($mysqli->error);
?>

<div class="product-bigbox">
<?php 
while($row = $result->fetch_object()){
$images = explode(",", $row->images);
	// print_r($row);
	?>
	

	<div class="product-box column col-lg-4 col-md-6 col-sm-12 active-onload">
			<div class="p-image-box">

				<div class="product-image">
					<?php
				echo "<img src='images/items/{$images[rand(0,2)]}'>";

			?>
				</div>

				<div class="product-view">
					<div class="link-v-p">
						<a class="link-v" href="?id=<?php echo $row->id?>">View Details</a>
						<a class="link-v">Zoom</a>

					</div>
				</div>

			</div>
			<br>
			<a class="product-box-link" href="?id=<?php echo $row->id?>"><?php echo $row->name?></a>
			<p><?php echo $row->product_list_des?></p>
	</div>
	
<?php
}

?>
	
</div>