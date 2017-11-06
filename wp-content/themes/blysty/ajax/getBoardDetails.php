<?php 
	include('../../../../wp-config.php');
	
	$Pins = new Pins();
	$boardID = $_POST['boardID'];
	echo $Pins->getBlystBoard($boardID);