
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
	
	if(isset($_POST['Sub']))
	{
		if($_POST['value']!= "" && $_POST['value0'] != "")
		{
			
			$val = $_POST['value'];
			$ID = 1;
			$sql = "INSERT INTO `Values` (`ID-Sensor`, `Waarde`, `Tijdstip`)
			VALUES ($ID, $val, date('Y-m-d H:i:s'))";
			if(mysqli_query($conn, $sql))
			{
				echo "<br />data added";
			}
			else
			{
				echo "error inserting temp";
			}
			
			$val = $_POST['value1'];
			$ID = 2;
			$sql = "INSERT INTO `Values` (`ID-Sensor`, `Waarde`, `Tijdstip`)
			VALUES ($ID, $val, date('Y-m-d H:i:s'))";
			if(mysqli_query($conn, $sql))
			{
				echo "<br />data added";
			}
			else
			{
				echo "error inserting temp";
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
		else
		{
			echo "<br />Please enter both values<br />";
		}
	}
	if(isset($_POST['RNG']))
	{
		include 'RandomNumberGen.PHP';
	}
?>
	

		<form action = "#" method = "post">
			value temp: <input type = "text" name = "value" />
			value light: <input type = "text" name = "value1" />
			<input type = "submit" name="Sub" />
			<input type = "submit" name="RNG" Value = "Current Values" />
		</form>
	</body>
</html>