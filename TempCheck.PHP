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

		<table width = "50%">
		<?php

		  $conn = mysqli_connect("localhost", "student_12002498", "NJIoSe1Vam7j", "student_12002498");
		  
		// Check connection
		  if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		  }

		  $values = 5;
		  $i = 0;
		  $aantal = 5;
		  while($i!=$aantal) 
		  { ?>
			<tr height = "40px" >
			  <td width = "50%"> <?php echo $values;?></td>
			  <td width = "50%"><?php echo $values;?></td>
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