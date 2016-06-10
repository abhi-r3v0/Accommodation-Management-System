<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	include('config.php');
	
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['from']) || empty($_POST['to']) || empty($_POST['rno']))	
	{
		header("Location:book.html");
	}

	else{
	
	
		$name = $_POST['name'];
		
		$email = $_POST['email'];
	
		$phone = $_POST['phone'];
	
		$fromdate = $_POST['from'];
	
		$todate = $_POST['to'];
	
		$roomtype = $_POST['rtype'];
	
		$adults = $_POST['adults'];
	
		$children = $_POST['children'];

		$roomno = $_POST['rno'];
	
	


	if($con)
	{	
		$qdb="SELECT * FROM register WHERE roomno = '$roomno';";

		$ds = "INSERT INTO register(name, email, phone, fromdate, todate, rtype, ano, cno, roomno) VALUES('$name', '$email', '$phone', '$fromdate', '$todate', '$roomtype', '$adults', '$children', '$roomno');"; 	
	
		$check = mysqli_query($con,$qdb);
		$find = mysqli_num_rows($check);
	
		if($find==0)
		{

			$query = mysqli_query($con,$ds);

			if($query)
			{
				echo "<p><center> Thank You !</center></p>";
  			}
				
			else
			{
				echo "Error !" .mysqli_sqlstate($con);
			}

		}
		else{ header("Location:nobook.html");}

	}
	
	else
	{
		echo " Couldn't get to DB";
	}
	
}

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="book.css">
<head><title> Booking successful </title></head>
<body style="background-image:url(bg.jpg)"> 
<center>
<h1><center><font size="10" famliy="times new" color="white"> Room has been booked successfully ! </font> </center> </h1>
<h2><center><font size="8" famliy="times new" color="white"> Details  </font> </center> </h2> 
<table style="width:40%">
<tr>
<p font size="6" famliy="times new" color="white"><td> Name        </td>  <td> <?php echo $name ?> </font> </td> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Phone       </td>  <td> <?php echo $phone ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Email       </td>  <td> <?php echo $email ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Check-in    </td>  <td> <?php echo $fromdate ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Check-out   </td>  <td> <?php echo $todate ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Room type   </td>  <td> <?php echo $roomtype ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Room no     </td>  <td> <?php echo $roomno ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Adults      </td>  <td> <?php echo $adults ?> </td> </font> </p>
</tr>
<tr>
<p font size="6" famliy="times new" color="white"><td> Children    </td>  <td> <?php echo $children ?> </td> </font> </p>
</tr>
</br>
</br>

<tr><td>
<p><a href = "index.html"><center><button type="button" class="button"> Home</button></center></a></p>
</td>
</tr>
</table>
</body>
</html>





