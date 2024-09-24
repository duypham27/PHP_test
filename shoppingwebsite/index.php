<?php
	include('connect.php');
	session_start();
	if(!isset($_SESSION['mySession']))
	{
		header('location:login.php');
	}	

?>

<h1>Trang Chủ 

<button type="submit" name="dangxuat">
	<a style="text-decoration: none;" href="logout.php">Đăng Xuất</a>
</button>

</h1>

<!-- Chức năng tìm kiếm -->
<form method="post">
	
	<input type="text" name="noidung">
	<button type="submit" name="timkiem">Tìm Kiếm</button>

</form>

<?php
	
	if(isset($_POST['timkiem']))
	{
		$noidung = $_POST['noidung'];
	}
	else
	{
		echo $noidung = false;
	}
?>


<?php

	include('connect.php');

	$sql = "SELECT * FROM products WHERE name LIKE '%$noidung%' ";
	
	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_array($result))
	{ ?>
		<h1> <?php echo $row['name']; ?> </h1>


<?php } ?>
