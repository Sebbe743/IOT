
<html>
	<head>
		<link rel="stylesheet" href="Originality.css">
		<title> DataHandling </title>	
	</head>
	<body>
		<table width= "100%">
			<tr>
			<td width= "33%" ><a href= "index.html"> <h1>Homepage</h1> </a> </td>
			<td width= "33%"><a href = "TempCheck.PHP"> <h1> Tables </h1> </a> </td>
			<td width= "33%" ><a href= "DataHandling.php"> <h1> Datahandling </h1> </a> </td>
			</tr>
		</table>
<?php
	include 'Connection.PHP';
	include 'RandomNumberGen.PHP';
	
	$ID = $SensorID;
	$val = 0;
	//$val = $_POST['value'];
	
	if(isset($_POST['Sub']))
	{
		$val = $_POST['value'];
		$sql = "INSERT INTO `Values` (`ID-Sensor`, `Waarde`, `Tijdstip`)
		VALUES ($ID, $val, date('Y-m-d H:i:s'))";
		if(mysqli_query($conn, $sql))
		{
			echo "<br />data added";
		}
		else
		{
			echo "error";
		}			
		$sql = "UPDATE `Sensors` SET `Last known timestamp` = date('Y-m-d H:i:s') WHERE `Sensor-ID`=1";
		if(mysqli_query($conn, $sql))
		{
			echo "<br />done";
			
		}
		else
		{
			echo "<br />error";
		}			
	}
	if($val != "") 
	{
	  echo "<br /> value is ". $val  . "<br />";
	}
	else
	{
		echo "<br />Please enter a value<br />";
	}
?>
	

		<form action = "#" method = "post">
			value: <input type = "text" name = "value" />
			<input type = "submit" name="Sub" />
		</form>
	</body>
</html>