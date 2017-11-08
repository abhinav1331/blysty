<?php 
	include('../../../../wp-config.php');
	
	$users = new users();
	$event = $_POST['event'];
	echo $users->followUser($event);