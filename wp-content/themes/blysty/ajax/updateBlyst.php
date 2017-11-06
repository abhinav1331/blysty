<?php 
	include('../../../../wp-config.php');
	
	$Pins = new Pins();
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";
	$Pins->updateBlyst($_POST , $_FILES);