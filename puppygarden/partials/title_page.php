
<?php 
	include "db_connect.php";

$query = "SELECT * FROM puppy_garden WHERE id='".$_GET['id']."'";
$result = $mysqli->query($query);
if($mysqli->errno) die($mysqli->error);

$row = $result->fetch_object();

$images = explode(",", $row->images);
$deslist = explode(",", $row->des_list);


	?>



<hgroup>
	<h1><?php echo $row->name?></h1>
</hgroup>

