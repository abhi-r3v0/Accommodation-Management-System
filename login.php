<?php

	session_start();
	include('config.php'); 

	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			header("Location:login.php");
			echo "<script>alert('Both fields are required')</script>";			 
		}else{
			$username=$_POST['username'];
			$password=$_POST['password'];
 

			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($con, $username);
			$password = mysqli_real_escape_string($con, $password);
 
			
				$sql="SELECT * FROM login WHERE username='$username' and password='$password'";
				$result=mysqli_query($con,$sql);
				if($result){ echo "yo dope";}
				$row=mysqli_fetch_assoc($result,MYSQLI_ASSOC);
 
 	
				if(mysqli_num_rows($result)>0)
				{
					$_SESSION['username'] = $login_user; 
					header("location: index.php"); 
				}else{

					echo "<h1><center> Incorrect username or password </center></h1>";
					header("location: login.php");
				}
 
	}		
}
 
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="book.css" >
<head><title>Login !</title></head>
<body style="background-image:url(bg.jpg)">
<form action="login.php" method="post">
<h1><center><font size="10" famliy="times new" color="white">  Login </font> </center></h1>
<center><table>
<tr>
<td><center><font size="5" famliy="times new" color="white">Username  </td> <td><input type="text" name="username" id="uname"></font> </center></td>
</tr>
<br>
<tr>
<td><center><font size="5" famliy="times new" color="white">Password  </td> <td><input type="password" name="password" id="passwd"></font> </center></td>
</tr>
<br>
<tr><td><center><input type="submit" name="submit" value="Login"></center></td></tr>
</table>
</center>
</form>
</body>
</html>




