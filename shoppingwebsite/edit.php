
<?php
	
	include('connect.php');

	$this_id = $_GET['this_id'];
	
	$sql = "SELECT * FROM products WHERE id = ".$this_id;

	$query = mysqli_query($conn, $sql);
	
	$row = mysqli_fetch_assoc($query);

	// Khi nhấn nút Edit 
	if(isset($_POST['btn'])  )
	{	
		$name = $_POST['name'];
		$price = $_POST['price'];
		$guarantee = $_POST['guarantee'];

		$image = $_FILES['hinhanh']['name']; // Chỉ lấy tên hình ảnh để đăng lên Database

		$image_tmp_name = $_FILES['hinhanh']['tmp_name']; // Lấy đường dẫn của hình ảnh


		$sql = "UPDATE products SET 
				name ='$name', 
				image ='$image', 
				price='$price', 
				guarantee='$guarantee' 
				WHERE id=".$this_id;

		mysqli_query($conn, $sql);

		move_uploaded_file($image_tmp_name, 'img/product/'.$image);

		header('location:product.php');		
	}	

?>

<h1 style="color: red;">Update Product</h1>
<h2>Product: <?php echo $row['name']; ?></h2>

<form method="post" enctype="multipart/form-data">
	
	<p>Name</p>
	<input type="text" name="name" value="<?php echo $row['name']; ?>" >

	<p>Image</p>

	<span><img width="200px" height="150px" src="img/product/<?php echo $row['image'] ?>" alt=""></span>
	<input type="file" name="hinhanh" >

	<p>Price</p>
	<input type="text" name="price" value="<?php echo $row['price']; ?>"> 

	<p>Guarantee</p>
	<input type="text" name="guarantee" value="<?php echo $row['guarantee']; ?>" >
	<br>
	<br>
	<button name="btn">Update</button>
</form>