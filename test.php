		


$db ="INSERT INTO register(name, email, phone, fromdate, todate, rtype, ano, cno, roomno) VALUES('$_POST['name']', '$_POST['email']', '$_POST['phone']', '$_POST['from']', '$_POST['to']', '$_POST['rtype']', '$_POST['adults']', '$_POST['children']', '$_POST['rno']');"; 
		echo " yo! done";
		

		/*$query = mysqli_query($con, "INSERT INTO register(name, email, phone, fromdate, todate, rtype, ano, cno, roomno) VALUES('$name', '$email', '$phone', '$fromdate', '$todate', '$roomtype', '$adults', '$children', '$roomno');");
*/



if(isset($_POST['name']))
	{
		$name = $_POST['name'];
	}	
	
	if(isset($_POST["email"]))
	{
		$email = $_POST["email"];
	}

	if(isset($_POST["phone"]))
	{
		$phone = $_POST["phone"];
	}
	
	if(isset($_POST["from"]))
	{
		$fromdate = $_POST["from"];
	}

	if(isset($_POST["to"]))
	{
		$todate = $_POST["to"];
	}

	if(isset($_POST["rtype"]))
	{
		$roomtype = $_POST["rtype"];
	}

	if(isset($_POST["adults"]))
	{
		$adults = $_POST["adults"];
	}

	if(isset($_POST["children"]))
	{
		$children = $_POST["children"];
	}

	if(isset($_POST["rno"]))
	{
		$roomno = $_POST["rno"];
	}





				$name = $row['name'];
				$phone = $row['phone'];
				$email = $row['email'];
				$fromdate = $row['fromdate'];
				$todate= $row['todate'];
				$roomtype= $row['rtype'];
				$roomno= $row['ano'];
				$adults= $row['cno'];
				$children= $row['roomno'];





// SEARCH 


<html>
<head></head>
<body>
<table>
<?php while($row = mysqli_fetch_array($query)): ?>)
	<?php $name = $row['name']; ?>
	<?php $email = $row['email']; ?>	
	<?php $phone = $row['phone']; ?>
	<?php $fromdate = $row['fromdate']; ?>
	<?php $todate = $row['todate']; ?>
	<?php $ano = $row['ano']; ?>
	<?php $cno = $row['cno']; ?>
	<?php $roomno = $row['roomno']; ?>
	<tr>
	    <td> <?php $name ?> </td>
	</tr>
</table>
</body>
</html>
