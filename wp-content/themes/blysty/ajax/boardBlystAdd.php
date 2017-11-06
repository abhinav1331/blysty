<?php 
	include('../../../../wp-config.php');
	global $wpdb;

	$blystId = $_POST['blystId'];
	$boardID = $_POST['boardID'];

	$query2="UPDATE `im_pins` SET `pin_status` = 1 WHERE `id`= $blystId";
	$wpdb->query($query2);

	$query1="UPDATE `im_pins` SET `board_id` = '$boardID' WHERE `id`= $blystId";
	$wpdb->query($query1);