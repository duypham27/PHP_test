<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<thead>
		<tr>
			<th>ID</th>
			<th>-----Tên-----</th>
			<th>--------------------Hình Ảnh---------------</th>
			<th>-----Giá-----</th>
			<th>-----Bảo Hành-----</th>
		</tr>
	</thead>

	<tbody>
		<?php

			include('connect.php');
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_array($result))
			{


		?>
			<br>
			<tr>
				<td> <?php echo $row['id'] ?> </td>
				<td> <?php echo $row['name'] ?> </td>
				<td> <img width="150" height="100" src="img/product/<?php echo $row['image'] ?>" alt=""> </td>
				<td> <?php echo $row['price'] ?> </td>
				<td> <?php echo $row['guarantee'] ?> </td>
				<span> <a href="delete.php?this_id=<?php echo $row['id'] ?>">Delete</a> </span>
				<span> <a href="edit.php?this_id=<?php echo $row['id'] ?>">Update</a> </span>
				<br>
			</tr>
			<?php } ?>

	</tbody>

	<br>
	<div> <button><a style="text-decoration: none;" href="add_product.php"><h3>Thêm sản phẩm</h3></a></button> </div>

</body>
</html>