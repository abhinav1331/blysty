<?php 
	include('../../../../wp-config.php');
	global $wpdb;
	$Pins = new Pins();
	$event = $_POST['event'];
	$Pins->deleteMyBoard($event);
	?>