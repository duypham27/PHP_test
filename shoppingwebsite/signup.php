<?php

	include('connect.php');

	if(isset($_POST['dangky']))
	{
		$id = "";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = 2;

		$sql = "INSERT INTO members (id, username, password, level) VALUES ('$id', '$username', '$password', '$level')";

		mysqli_query($conn, $sql);

		header('location:login.php');
	}

?>

<h1>Đăng Ký Tài Khoản</h1>

<form action="signup.php" method="post">
	<label>Username</label>
	<input type="text" name="username">
	<br>
	<label>Password</label>
	<input type="password" name="password">
	<br>
	<button type="submit" name="dangky">Đăng Ký</button>
</form>
