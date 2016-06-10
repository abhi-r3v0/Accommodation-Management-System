<?php 
	include('config.php');
	
	if($con)
	{
		$udb="SELECT * FROM register WHERE rtype = 'Usual';";

		$ddb = "SELECT * FROM register WHERE rtype = 'Dormetry';";
		

		$q1 = mysqli_query($con, $udb);

		$q2 = mysqli_query($con, $ddb);

		if($q1)
		{
			$rowcountu=mysqli_num_rows($q1);
			echo "<h1><center> Occupied Usual rooms : ". $rowcountu ."</center></h1>";
			echo "<center><table style='width:30%'></center>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
	
				echo "<tr>";
				echo "<td><b>Name</b></td>";
				echo "<td><b>Room</b></td>";
				echo "</tr>";
			
			while ($row = mysqli_fetch_assoc($q1))
			{
				

				echo "<tr>";		
				echo "<td>". $row['name'] . "</td>";
				echo "<td>". $row['roomno'] . "</td>";
				echo "</tr>";
				
				
				
			} echo "</table>";
		}

		else  {  echo " No usual";    }

		if($q2)
		{
			$rowcountd=mysqli_num_rows($q2);
			
			echo "<h1><center> Occupied Dormetry rooms : ". $rowcountd ."</center></h1>";
			echo "<center><table style='width:30%'></center>";
				echo "<br>";
				echo "<br>";
				echo "<br>";

				echo "<tr>";
				echo "<td><b>Name</b></td>";
				echo "<td><b>Room</b></td>";
				echo "</tr>";
			
			while ($row = mysqli_fetch_assoc($q2))
			{
				//extract($row);
				
		
				echo "<tr>";		
				echo "<td>". $row['name'] . "</td>";
				echo "<td>". $row['roomno'] . "</td>";
				echo "</tr>";

				
					
			} echo "</table>";
		}	

		else  {  echo " No dormetry "; }
	}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="book.css">
<head><title> Details </title></head>
<body style="background-image:url(bg.jpg)"> 
<form action="search.php" method="post">
<h1><center><font size="10" famliy="times new" color="white">  Search the Database </font> </center></h1>
<h2><center><font size="5" famliy="times new" color="white">Enter the room no  <input type="text" name="roomno"></font> </center></h2>
<center><input type="submit" name="submit" value="Search"></center>
<br>
<p><a href = "index.html"><center><button type="button" class="button"> Home</button></center></a></p>
</body>
</html>
