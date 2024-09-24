<!-- Kết nối Database -->
<?php
	
	$sever = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'comments';

	$conn = new mysqli($sever, $user, $pass, $database);
	if($conn)
	{	
		mysqli_query($conn, "SET NAMES 'utf8' ");
		echo "Connect Database Successful !";
	}
	else
	{
		echo "Connect Database Fail !";
	}

?>