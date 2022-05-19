<html>
<head>
<link rel="stylesheet" href="Originality.css">
<title> TempCheck </title>
</head>
	<body>
		<table width= "100%">
			<tr>
				<td width= "33%" ><a href= "index.html"> Homepage </a></td>
				<td width= "33%"><a href = "TempCheck.PHP"> Tables </a></td>
				<td width= "33%" ><a href= "DataHandling.php"> Datahandling </a></td>
			</tr>
		</table>
		<h1>This table contains the values of the temperature measurements</h1>

		<?php
			
		  include'Connection.PHP';
		
		  $i = 0;
		  $aantal = 5;
		  $sql = "SELECT * FROM Values";
		  $result = mysqli_query($conn, $sql);
		  
		  if(mysqli_num_rows($result)>0)
		  {
			?>
			<table width = "50%">
			<tr>
			  <td width = "50%"> sensor id </td>
			  <td width = "50%"> measurements </td>
			</tr>
			<?php  
			while($row = mysqli_fetch_assoc($result))
			{
			?>
				<tr height = "40px" >
			  <td width = "50%"> <?php echo sprintf("%02d",$row["ID-Sensor"]);?></td>
			  <td width = "50%"> <?php echo sprintf("%02d",$row["Waarde"]);?></td>
			  <td width = "50%"> <?php echo sprintf("%02d",$row["Timestamp"]);?></td>
			
			
			</tr>
			<?php	
				
			}
		  } ?>
		</table>
		   <?php
		   mysqli_close($conn);
		   echo "connection closed";
		   ?>

	</body>
</html>