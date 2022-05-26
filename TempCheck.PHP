<html>
<head>
<link rel="stylesheet" href="Originality.css">
<title> TempCheck </title>
</head>
	<body>
		<table width= "100%">
			<tr>
				<td width= "33%" ><a href= "index.html"> <h1> Homepage </h1> </a> </td>
				<td width= "33%"><a href = "TempCheck.PHP"> <h1> Tables </h1> </a> </td>
				<td width= "33%" ><a href= "DataHandling.php"> <h1> Datahandling </h1> </a> </td>
			</tr>
		</table>
		<h2>This table contains the values of the temperature measurements</h2>

		<?php
			
		  include'Connection.PHP';
		  
		  $sql = "SELECT * FROM `Values`";
		  $result = mysqli_query($conn, $sql);
		  
		  
		  if($result)
		  {
				?>
				<table width = "50%">
				<tr>
				  <td width = "33%"> sensor id </td>
				  <td width = "33%"> measurements </td>
				  <td width = "33%"> Time </td>
				</tr>
				<?php  
				while($row = mysqli_fetch_assoc($result))
				{
				?>
				<tr height = "40px" >
				  <td width = "33%"> <?php echo sprintf("%02d",$row["ID-Sensor"]);?></td>
				  <td width = "33%"> <?php echo sprintf("%02.1f",$row["Waarde"]);?></td>
				  <td width = "33%"> <?php echo sprintf("%s",$row["Tijdstip"]);?></td>
				
				
				</tr>
				<?php	
				sprintf("%d", mysqli_num_rows($result));
				}
		  }
			else
			{
				echo "zero values";
			}
		  
		  
		  ?>
		</table>
		   <?php
		   mysqli_close($conn);
		   //echo "<br />connection closed<br />";
		   ?>

	</body>
</html>