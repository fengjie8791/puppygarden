
<?php 
	include "db_connect.php";

	$del_user_id = $_POST['del_user_id'];
	$del_item_id = $_POST['del_item_id'];

	$query_cart = "SELECT * FROM cart WHERE id_num = '$del_user_id'";
	$cart = $mysqli->query($query_cart);

	$query_del = "DELETE FROM cart WHERE id_num = '$del_user_id' AND id_item = $del_item_id ";
	$mysqli->query($query_del);
	

?>

<script>
	

		window.location.href="cart.php"
</script>


