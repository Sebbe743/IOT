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
			
			$type = "";
			$value = "";
			
			$ID =01;
			$val =22.1;
			include 'Connection.PHP';
			
			$sql = "INSERT INTO `Values` (`ID-Sensor`, `Waarde`, `Tijdstip`)
			VALUES ($ID, $val, date('Y-m-d H:i:s'))";
			if(mysqli_query($conn, $sql))
			{
				echo "<br />data added";
				sleep(2);
			}
			else
			{
				echo "error";
			}
			
			if(isset($_GET['type']))
			{
				$type = $_GET['type'];
			}
			
			if(isset($_GET['value']))
			{
				$value = $_GET['value'];
			}
			
			if( $type!="" &&  $value != "") 
			{
			  echo "data sent, type". $type ."<br />";
			  echo "value ". $value  . "<br />";
			  exit();
			}
		   else
		   {
			echo "<br />Please enter a value and type <br />";
		   }
		
		?>
	

		<form action = "<?php $_PHP_SELF ?>" method = "GET">
			type: <input type = "text" type = "type" />		
			value: <input type = "text" type = "value" />
			<input type = "submit" />
		</form>
	</body>
</html>