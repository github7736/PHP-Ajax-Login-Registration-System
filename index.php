<?php 
	session_start();
	require_once('config.php');
	if(!isset($_COOKIE['CurrentUser']))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset= "UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<style>
			
			
			
		</style>
	</head>
	<body>
	<br>
	<br>
		<center><a href="logout.php" class="btn btn-danger" onclick="return confirm('Do you want to logout?')">Logout</a></center>
		<br><br>
		<center><a href="changePwd.php" style='text-decoration:none'>Change Password</a></center><br><br>
		<center><a href="ajax_changePwd.php" style='text-decoration:none'>Change Password by Ajax</a></center>
		<br><br>
		
		
	</body>
</html>