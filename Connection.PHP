<html>
<head>
<link rel="stylesheet" href="Originality.css">
<title> TempCheck </title>
</head>
<body>
<table width= "100%">
<tr>
	<td width= "50%" ><a href= "Index.html"> Homepage </a></td>
	<td width= "50%"><a href = "TempCheck.PHP"> Tables </a> </td>
</tr>
</table>
<?php
$conn = mysqli_connect("localhost", "student_12002498", "NJIoSe1Vam7j", "student_12002498");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>



</body>
</html>