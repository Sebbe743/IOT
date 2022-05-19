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
		?>
		<table width = "50%">
			<tr>
			  <td width = "50%"> sensor id </td>
			  <td width = "50%"> measurements </td>
			</tr>
		<?php
		  $i = 0;
		  $aantal = 5;
		  while($i!=$aantal) 
		  { 
		  include 'RandomNumberGen.PHP';
		  ?>
			<tr height = "40px" >
			  <td width = "50%"> <?php echo sprintf("%02d",$SensorID);?></td>
			  <td width = "50%"><?php echo sprintf("%.1f", $Reading);?></td>
			</tr>
		  <?php
		   $i++;
		   }
		   ?>
		</table>
		   <?php
		   mysqli_close($conn);
		   echo "connection closed";
		   ?>

	</body>
</html>