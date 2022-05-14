<html>
	<head>
		<link rel="stylesheet" href="Originality.css">
		<title> DataHandling </title>	
	</head>

		<?php
			
			$name = "";
			$age = "";
			
			if(isset($_GET['name']))
			{
				$name = $_GET['name'];
			}
			
			if(isset($_GET['age']))
			{
				$age = $_GET['age'];
			}
			
			if( $name!="" &&  $age != "") 
			{
			  echo "Welcome ". $name . "<br />";
			  echo "You are ". $age . " years old.";
			  
			  exit();
			}
		   else
		   {
			echo "Please enter an age and name";
		   }
		?>
	<body>
		<table width= "100%">
			<tr>
			<td width= "33%" ><a href= "index.html"> Homepage </a></td>
			<td width= "33%"><a href = "TempCheck.PHP"> Tables </a></td>
			<td width= "33%" ><a href= "DataHandling.php"> Datahandling </a></td>
			</tr>
		</table>

		<form action = "<?php $_PHP_SELF ?>" method = "GET">
			Name: <input type = "text" name = "name" />		
			Age: <input type = "text" name = "age" />
			<input type = "submit" />
		</form>
	</body>
</html>