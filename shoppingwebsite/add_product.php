<h1 style="color: red;">Add New Product</h1>
<?php
	
	include ('connect.php');

	if( isset($_POST['btn']))
	{
		$name = $_POST['name'];
		//Chỉ lấy tên hình ảnh để gửi lên database
		$image = $_FILES['hinhanh']['name']; 
		//Lấy đường dẫn của ảnh
		$image_tmp_name = $_FILES['hinhanh']['tmp_name'];

		$price = $_POST['gia'];

		$guarantee = $_POST['baohanh'];

		$sql = "INSERT INTO products (name, image, price, guarantee)
		VALUE('$name', '$image', '$price', '$guarantee') ";

		mysqli_query($conn, $sql);

		move_uploaded_file($image_tmp_name, 'img/product/'. $image);


	}

?>

<form action="add_product.php" method="post" enctype="multipart/form-data">

	<p>Name</p>
	<input type="text" name="name">
	<p>Image</p>
	<input type="file" name="hinhanh">
	<p>Price</p>
	<input type="text" name="gia">
	<p>Guarantee</p>
	<input type="text" name="baohanh">
	<br>
	<button id="submit" name="btn" >ADD</button>
</form>