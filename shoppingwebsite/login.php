
<?php
	include('connect.php');

	session_start();

	if(isset($_SESSION['mySession']))
	{
		header('location:index.php');
	}



	if(isset($_POST['dangnhap']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM members WHERE username='$username' AND password='$password' ";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['mySession'] = $username;
			header('location:index.php');
		}else
		{
			echo "Tài khoản không hợp lệ !";
		}

	}


?>

<div>
	<h1>Đăng Nhập</h1>
	<form action="login.php" method="post">
	
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>Password</label>
		<input type="password" name="password">
		<br>
		<button type="submit" name="dangnhap">Đăng Nhập</button>

	</form>
</div>
<button type="submit" name="dangky">
	<a style="text-decoration: none;" href="signup.php">Đăng Ký</a>
</button>