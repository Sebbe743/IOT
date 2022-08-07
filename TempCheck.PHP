<html>
<head>
<link rel="stylesheet" href="Originality.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
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
			//connect to sql
		  include'Connection.PHP';
		  
		  //select all values by default
		  $sql = "SELECT * FROM `Values`";
		  //show all values
		  $result = mysqli_query($conn, $sql);
		  
		  
		  if($result)
		  {
			  //make class with scrollable tables
				?>
				
				<div id="scroll" style= "overflow-y:scroll; height:400px; width:80%;">
				<table border="3px" width="100%">
				<tr>
				  <td width = "9%"> # </td>
				  <td width = "30%"> Sensor ID </td>
				  <td width = "30%"> Measurements </td>
				  <td width = "30%"> Time </td>
				</tr>
				<?php
				$i =0;
				// keep rows coming				
				while($row = mysqli_fetch_assoc($result))
				{
					//get data to pop up for table
				?>
					<tr height = "40px" >
					  <td width = "9%"> <?php echo sprintf("%02d",$i);?></td>
					  <td width = "30%"> <?php echo sprintf("%02d",$row["ID-Sensor"]);?></td>
					  <td width = "30%"> <?php echo sprintf("%02.1f",$row["Waarde"]);?></td>
					  <td width = "30%"> <?php echo sprintf("%s",$row["Tijdstip"]);?></td>
					</tr>
				<?php
				$i++;
				}
		  }
			//no results
			else
			{
				echo "zero values";
			}
		  ?>
		</table>
		</div>
		
		<br><br>
		
		   <?php
		   include'Graph.php';
		   
		   mysqli_close($conn);
		   //echo "<br />connection closed<br />";
		   ?>
	</body>
</html>