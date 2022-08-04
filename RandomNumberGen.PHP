<?php
	$SensorID = 01;
	$Reading =0;
	for($i=0; $i<20; $i++)
	{
		$Reading = mt_rand(0, 30)-5;
		$Aftercomma = mt_rand(0, 10)/10;
		$Reading = $Reading + $Aftercomma;
	}
?>