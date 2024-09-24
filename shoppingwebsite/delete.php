<h1 style="color: red;">Delete Product</h1>
<?php
	
	include('connect.php');

	$this_id = $_GET['this_id'];

	echo $this_id;

	$sql = "DELETE FROM products WHERE id='$this_id' ";

	mysqli_query($conn, $sql);
	header('location:product.php');
?>
