<?php 
	include('config.php');
	session_start();

	$sql = mysqli_query($con, "SELECT uid FROM login WHERE username='$user_check'");

	$row=mysqli_fetch_assoc($sql,MYSQLI_ASSOC);

	$user_check = $_SESSION['username'];	

	if(!isset($user_check))
	{
		header("Location:login.html");
	}
?>
