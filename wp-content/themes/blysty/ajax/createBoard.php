<?php 
	include('../../../../wp-config.php');
	global $wpdb;

	$name = $_POST['name'];
	$private = $_POST['private'];
	$blystIDChoose = $_POST['blystIDChoose'];
	$user = wp_get_current_user();
	$userID = $user->ID;
	$date = new DateTime();
	$lastUpdated = $date->getTimestamp();
	if($private == "on") {
		$tatus = 0;
	} else {
		$status = 1;
	}

	$wpdb->insert( 'im_blyst_board', array(
		'user_id' => $userID,
		'name' => $name,
		'visibility' => $status,
		'createdat' => $lastUpdated)
	);
	$lastid = $wpdb->insert_id;
	if($blystIDChoose != "") {
		$query2="UPDATE `im_pins` SET `pin_status` = 1 WHERE `id`= $lastid";
		$wpdb->query($query2);

		$query1="UPDATE `im_pins` SET `board_id` = '$blystIDChoose' WHERE `id`= $lastid";
		$wpdb->query($query1);
		echo 1;
	} else {
		echo 2;
	}
 ?>