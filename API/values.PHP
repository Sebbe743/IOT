<?php
	$val = $_GET["value"];
	include '../Connection.PHP';
	
	
	$ID = 1;
	$sql = "INSERT INTO `Values` (`ID-Sensor`, `Waarde`, `Tijdstip`)
	VALUES ($ID, $val, date('Y-m-d H:i:s'))";
	mysqli_query($conn, $sql);
	$sql = "UPDATE `Sensors` SET `Last known timestamp` = date('Y-m-d H:i:s') WHERE `Sensor-ID`=1";
	mysqli_query($conn, $sql);
?>