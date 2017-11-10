<?php 
	include('../../../../wp-config.php');
	global $wpdb;
	$Pins = new Pins();
	$user = wp_get_current_user();
	$pinID = $_POST['pinID'];
	$Pins->getMyBlystDetails($pinID);