<html>
	<head>
		<link rel="stylesheet" href="Originality.css">
		<title> DataHandling </title>	
	</head>
	<body>
		<table width= "100%">
			<tr>
			<td width= "33%" ><a href= "index.html"> Homepvalue </a></td>
			<td width= "33%"><a href = "TempCheck.PHP"> Tables </a></td>
			<td width= "33%" ><a href= "DataHandling.php"> Datahandling </a></td>
			</tr>
		</table>
		<?php
			
			$type = "";
			$value = "";
			
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
			  echo "data sent, type". $type "<br />";
			  echo "value ". $value  . "<br />";
			  exit();
			}
		   else
		   {
			echo "Please enter an value and type";
		   }
		?>
	

		<form action = "<?php $_PHP_SELF ?>" method = "GET">
			type: <input type = "text" type = "type" />		
			value: <input type = "text" type = "value" />
			<input type = "submit" />
		</form>
	</body>
</html>