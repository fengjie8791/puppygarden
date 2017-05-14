<?php 
	include "db_connect.php";

$query = "SELECT * FROM puppy_garden WHERE id='".$_GET['id']."'";
$result = $mysqli->query($query);


if($mysqli->errno) die($mysqli->error);

$row = $result->fetch_object();

$images = explode(",", $row->images);
$deslist = explode(",", $row->des_list);


	?>
		<div class="container">

		<div class="column col-lg-4 col-md-12 left-image-box  loading active-onload">
			<?php
				echo "<img class='left-image-bg col-lg-12 col-sm-12 nomargin' src='images/items/{$images[0]}'>";
				echo "<img class='left-image-sm col-lg-4-1 col-sm-12' src='images/items/{$images[0]}'>";
				echo "<img class='left-image-sm col-lg-4-1 col-sm-12' src='images/items/{$images[1]}'>";
				echo "<img class='left-image-sm col-lg-4-1 col-sm-12' src='images/items/{$images[2]}'>";

			?>
		</div>
		<div class="column col-lg-8 col-md-12 left-image-box  loading active-onload">
			<h1 class="productpage_name" ><?php echo $row->name?></h1>

			<dl>
				<dt>Price:</dt>
				<dd>$<?php echo $row->price?></dd>
			</dl>
			<form action="addcart.php" method="post">
				<input class="cart-qty displaynone" type="text" name="item_id" value="<?php echo $row->id?>"><br>
				<!-- <input type="text" id="TestTb"> -->
				  <span class="qty-select">Qty：</span><select class="btn_select" name="qty">
				   <option>1</option>
				   <option>2</option>
				   <option>3</option>
				   <option>4</option>
				   <option>5</option>
				   <option>6</option>
				   <option>7</option>
				   <option>8</option>
				   <option>9</option>
			 	 </select>
				<button class="cart-button" type="submit">Add to Cart</button>
				

			</form>
			<p class="ship">Want it tomorrow, June 24? Order within 13 hrs 1 min and choose One-Day Shipping at checkout.</p>
			<h2 class="productpage_des">Product Description</h2>
			<p class="prd"><?php echo $row->description?></p>
			<ul>
			<?php for($j = 0;$j<sizeof($deslist);$j++){ ?>
				<li><?php echo $deslist[$j]?></li>

					<?php }?>
			</ul>	
			
		</div>


		<div class="column col-lg-12">
			<hr class="hr">
			<h1 class="you-like">YOU MIGHT ALSO LIKE</h1>
		</div>



		<div class="column col-lg-12 product-list-box  loading active-onload">
	<?php 
	$query_5 = "SELECT * FROM puppy_garden";
	$result_5 = $mysqli->query($query_5);

	$numbers = array();

	while($row_5 = $result_5->fetch_object()){
		array_push($numbers,$row_5->id);
	}


	// $numbers = range (1,6); 


	shuffle($numbers); 


	for($i = 0;$i < 6;$i++){

	$query_9 = "SELECT * FROM puppy_garden WHERE id='$numbers[$i]'";
	$result_9 = $mysqli->query($query_9);
	$row_9 = $result_9->fetch_object();
	$images_9 = explode(",", $row_9->images);


		?>
			<div class="product-like-box col-lg-3">
				<div class="p-image-box">

					<div class="product-image">
						<?php
					echo "<img src='images/items/{$images_9[rand(0,2)]}'>";

				?>
					</div>

					<div class="product-view">
						<div class="link-v-p">
							<a class="link-v" href="?id=<?php echo $row_9->id?>">View Details</a>
							<!-- <a class="link-v">Zoom</a> -->

						</div>
					</div>

				</div>
			<br>
				<a class="product-box-link" href="?id=<?php echo $row_9->id?>"><?php echo $row_9->name?></a>
				<p><?php echo $row_9->product_list_des?></p>
		</div>
	<?php }?>
	</div>

</div>
		
	