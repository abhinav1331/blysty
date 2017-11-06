<?php 
	include('../../../../wp-config.php');
	
	$Pins = new Pins();
	$pinID = $_POST['pinID'];
	$Pins->editMyPins($pinID);