<?php 
	include('../../../../wp-config.php');
	global $wpdb;

	$name = $_POST['name'];
	$cateID = $_POST['cateID'];
	$private = $_POST['private'];
	$searchfor = $_POST['searchfor'];
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
	$blyst_content = json_encode($_POST['count']);
	if($private == "on") {
		$tatus = 0;
	} else {
		$status = 1;
	}
	$file_data = getimagesize($_FILES['fillee']['tmp_name']);         
	if(is_array($file_data) && strpos($file_data['mime'],'image') !== false)  {
	    if(count($_FILES["fillee"]) != 0) {
			$target_file = $upload_dir['path']."/".$string.'.jpg';
			move_uploaded_file($_FILES["fillee"]["tmp_name"], $target_file);
			$url = $upload_dir['url']."/".$string.".jpg";	
		} else {
			if($searchfor != "") {
				$post_id = "";
				$desc = "";
				$image = media_sideload_image($searchfor, $post_id, $desc);
				$test_tmpimg = explode("src='" , $image);
				$test_tmp = explode("'" , $test_tmpimg[1]);
				$url = $test_tmp[0];
			} else {
				$url = "";
			}
		}

		$wpdb->insert( 'im_pins', array(
			'name' => $name,
			'category' => $cateID,
			'visibility' => $status,
			'attachment' => $url,
			'blyst_content' => $blyst_content,
			'board_id' => 0,
			'pin_author' => $userID,
			'pin_status' => 0,
			'pin_created' => $lastUpdated)
		);
		 $lastid = $wpdb->insert_id;

		?>
		<figure style="background-image: url('<?php echo $url; ?>');"></figure>
			<div class="post-details">
				<div class="post-header">
					<input type="hidden" name="BlystId" value="<?php echo $lastid; ?>">
					<a href="javscript:void(0)"><span><?php echo count($_POST['count']); ?></span><h3><?php echo $name; ?></h3></a>
				</div>

				<div class="post-info">
					<div class="avatar">
						<figure style="background-image: url('<?php echo $profileImage; ?>');"></figure>
					</div>
					<div class="post-arthur">
						<h4><?php echo $nameUser; ?></h4>
						<h5><?php echo $_POST['cate']; ?></h5>
					</div>
				</div>
				<div class="liks">
					<div class="counter">
						<a href="javascript:void(0)"><i class="fa fa-heart"></i> 0</a>
					</div>
				</div>
			</div>
		<?php
	} else {
		echo "Invalid Image Format";
	}
 ?>