<?php 
	include('../../../../wp-config.php');
	global $wpdb;
	$Order = $_POST['Order'];
	$pinID = $_POST['pinID'];
	$catID = $_POST['catID'];
	$pins = new Pins;
	$pins->getLatestPin($catID , $pinID , $Order);
