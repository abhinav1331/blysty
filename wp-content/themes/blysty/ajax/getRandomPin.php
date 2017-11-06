<?php 
	include('../../../../wp-config.php');
	global $wpdb;
	$Pins = new Pins();
	echo $Pins->getRandomPin(1);