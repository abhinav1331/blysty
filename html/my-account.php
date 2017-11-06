<?php include 'inc/header.php'; ?>

<div class="profile-temp page-wraspper">
	<div class="profile-wrapper">
		<div class="profile-header">
			<div class="container-fluid">
				<div class="avatar-section">
					<figure>
						<figcaption style="background-image: url('images/profile.jpg');"></figcaption>
						<fieldset>
							<legend>Emma Jones</legend>
						</fieldset>
					</figure>
				</div>

				<div class="tab-target">
					<ul>
						<li><a href="profile.php" data-tab="blysts">Blysts</a></li>
						<li><a href="blystyboardds.php" data-tab="blystboards">BlystBoards</a></li>
						<li><a href="followers.php" data-tab="followers">16 Followers</a></li>
						<li><a href="following.php" data-tab="following">14 Following</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="contant-area">
			<div class="section-area lgray">
				<div class="container-fluid">
					<form class="account-form">
						<div class="section-title"><h3>My Account</h3></div>
						<div class="form-group">
							<span class="lab">Email Address</span>
							<label>
								<input class="form-control" type="email" name="email" placeholder="emma@gmail.com">
							</label>
						</div>
						<div class="form-group">
							<span class="lab">Name or Username</span>
							<label>
								<input class="form-control" type="text" name="name" placeholder="Emma">
							</label>
						</div>
						<div class="form-group">
							<span class="lab">Password</span>
							<label>
								<input class="form-control" type="password" name="pass" placeholder="Change my password...">
							</label>
						</div>
						<div class="form-group">
							<span class="lab">Picture</span>
							<div class="selectedImage" id="selectedImage" style="background-image: url('images/follower1.jpg');"></div>
							<label>
								<input type="file" id="selectImgTarget" class="hide" name="img_file">
								<input type="button" class="selectImg" value="Change Picture">
							</label>
						</div>
						<div class="more-links">
							<span>More</span>
							<ul>
								<li><a href="#">About Blysty</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Deactivation</a></li>
							</ul>
						</div>

						<div class="btns">
							<input class="form-btn green-btn" type="submit" name="sub" value="Save Setting">
							<input class="form-btn red-btn" type="submit" name="can" value="Cancel">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'inc/footer.php'; ?>