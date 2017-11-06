<?php 
	include('../../../../wp-config.php');
	global $wpdb;
	$Pins = new Pins();
	$pinID = $_POST['pinID'];
	echo $Pins->LikePinByUser($pinID);