<?php 
	include('../../../../wp-config.php');
	global $wpdb;

	$pinID = $_POST['pinID'];
	$myPinDetails = $wpdb->get_results("SELECT * FROM `im_pins` WHERE `id` = $pinID");
	$cateID = $myPinDetails[0]->category;
	$name = $myPinDetails[0]->name;
	$private = $myPinDetails[0]->visibility;
	$attachment = $myPinDetails[0]->attachment;
	$blyst_content = $myPinDetails[0]->blyst_content;

	$im_category_pins = $wpdb->get_results("SELECT * FROM `im_category_pins` WHERE `id` = $cateID");
	$user = wp_get_current_user();
	$userID = $user->ID;
	$nameUser = get_post_meta($userID , "first_name" , true);
	$profileImage = get_post_meta($userID , "profileImage" , true);
	if($profileImage == "") {
		$profileImage = "http://placehold.it/240x240&amp;text=No image found";
	} else {
		$profileImage = $profileImage; 
	}
	$upload_dir = wp_upload_dir();
	$date = new DateTime();
	$string = $userID.$date->getTimestamp();
	$lastUpdated = $date->getTimestamp();   

		$wpdb->insert( 'im_pins', array(
			'name' => $name,
			'category' => $cateID,
			'visibility' => $private,
			'attachment' => $attachment,
			'blyst_content' => $blyst_content,
			'board_id' => 0,
			'pin_author' => $userID,
			'pin_status' => 0,
			'pin_created' => $lastUpdated)
		);
		 $lastid = $wpdb->insert_id;

		?>
		<figure style="background-image: url('<?php echo $attachment; ?>');"></figure>
			<div class="post-details">
				<div class="post-header">
					<input type="hidden" name="BlystId" value="<?php echo $lastid; ?>">
					<a href="javscript:void(0)"><span><?php echo count(json_decode($blyst_content)); ?></span><h3><?php echo $name; ?></h3></a>
				</div>

				<div class="post-info">
					<div class="avatar">
						<figure style="background-image: url('<?php echo $profileImage; ?>');"></figure>
					</div>
					<div class="post-arthur">
						<h4><?php echo $nameUser; ?></h4>
						<h5><?php echo $im_category_pins[0]->name ?></h5>
					</div>
				</div>
				<div class="liks">
					<div class="counter">
						<a href="javascript:void(0)"><i class="fa fa-heart"></i> 0</a>
					</div>
				</div>
			</div>