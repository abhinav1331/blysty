<?php 
/*
* Template Name: View Profile Page Template
*/
get_header('main');
$users = new users();
$Pins = new Pins();
$getCurrentUser = $_GET['username'];
$users1 = get_userdatabylogin( $getCurrentUser );

if(empty($users)) {
	global $wp_query;
	$wp_query->set_404();
	status_header( 404 );
	get_template_part( 404 );
	 exit();
} else {

 ?>
<div class="modified-temp page-wraspper">
	<div class="profile-wrapper">
		<div class="profile-header">
			<div class="container-fluid">
				<div class="avatar-section">
					<figure>
						<figcaption style="background-image: url('<?php echo $users->viewUserDetails($users1->ID , "Image"); ?>');"></figcaption>
						<fieldset>
							<legend><?php echo $users->viewUserDetails($users1->ID , "Name"); ?></legend>
						</fieldset>
					</figure>
				</div>

				<div class="tab-target">
					<ul>
						<li><a href="followers.php" data-tab="followers">16 Followers</a></li>
						<li><a href="following.php" data-tab="following">14 Following</a></li>
					</ul>
				</div>

				<div class="follow-btn">
					<a href="#" class="costom-btn green-btn">Follow Emma</a>
				</div>
			</div>
		</div>

		<div class="contant-area">
			<div class="section-area lgray">
				<div class="container-fluid">
					<div class="blystboards-section post-gallery">
						<div class="post-gallery-wrapper">
							<div class="post-list">
								<?php $getMyBlystBoard = $Pins->getMyBlystBoard($users1->ID , 1); ?>
							</div>
						</div>
						<div class="gallery-controls">
							<a href="javascript:void(0)" class="gallery-control prv">
								<span>
									<i class="fa fa-angle-left"></i>
								</span>
							</a>
							<a href="javascript:void(0)" class="gallery-control nxt">
								<span>
									<i class="fa fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php
}
	get_footer('main');
?>