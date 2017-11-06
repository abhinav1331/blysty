<?php 
	include('../../../../wp-config.php');
	
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";
	$Pins = new Pins();
	echo $myBoardID = $_POST['postData'][1]['value'];
	echo $nameNEW = $_POST['postData'][2]['value'];
	if(isset($_POST['postData'][3]['value'])) {
		 echo $private = $_POST['postData'][3]['value'];
		$Pins->updateMyBlyst($myBoardID , $private , 'visibility');
	}
	$Pins->updateMyBlyst($myBoardID , $nameNEW , 'name');