<?php 
	include('../../../../wp-config.php');
	global $wpdb;
	$Pins = new Pins();
	$user = wp_get_current_user();
	$blystId = $_POST['blystId'];
	$Pins->viewPins($user->ID , $blystId);