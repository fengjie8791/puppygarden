	
<?php 
	include "db_connect.php";

$query = "SELECT * FROM puppy_garden ORDER BY date_create DESC LIMIT $page_num,6 ";
$result = $mysqli->query($query);
if($mysqli->errno) die($mysqli->error);
?>


	<nav>
		<ul class="container">
			<hr class="column col-lg-3 col-md-2 hr">
			<div class="column col-lg-6 col-md-8">
	<?php while($row = $result->fetch_object()){ ?>

				<a class="nav col-lg-2 col-sm-6" href="?id=<?php echo $row->id;?>"><?php echo $row->name;?></a>

	<?php 
	}
	?>	

			</div>
			<hr class="column col-lg-3 col-md-2 hr">
			
		</ul>
	</nav>

