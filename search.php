<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	include('config.php');

	$rno = $_POST['roomno'];
	
	if($con)
	{
		$qdb="SELECT * FROM register WHERE roomno = '$rno';";
	
		$squery = mysqli_query($con, $qdb);

		if($squery)
		{
							
			echo "<h1><center> Search complete </center></h1>";
			if ($row = mysqli_fetch_assoc($squery))
			{
				extract($row);
				$name = $row['name'];
				$phone = $row['phone'];
				$email = $row['email'];
				$fromdate = $row['fromdate'];
				$todate= $row['todate'];
				$roomtype= $row['rtype'];
				$roomno= $row['roomno'];
				$adults= $row['ano'];
				$children= $row['cno'];	
			}
			else 
			{
				header("Location:notfound.html");
			}
			

		}
		else 
		{
			echo "Not found !";
		}
		
	}

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="book.css">
<head><title> Search successful </title></head>
<body style="background-image:url(bg.jpg)"> 
<center>
<h1><center><font size="10" famliy="times new" color="white"> Details </font> </center> </h1>
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
<p><a href = "search.html"><center><button type="button" class="button"> Search </button></center></a></p>
</td>
</tr>
</table>
</body>
</html>
