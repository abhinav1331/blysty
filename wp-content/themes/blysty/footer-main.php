<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
$user = wp_get_current_user();
?>
		</main>

		<!-- Add Blysty -->
		<div id="addBlysty" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="addBorad popupinner">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-header">
							<h4 class="modal-title">BlystyBrowsers</h4>
						</div>
						<div class="modal-body">
							<a href="#chooseBlysty" data-dismiss="modal" data-toggle="modal" class="green-btn costom-btn">Create a New Blyst</a>
							<a href="#" data-toggle="modal" data-target="#" class="green-btn costom-btn">Replace Picture on Existing Blyst</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Blysty Browser -->
		<div id="browserBlysty" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="browserBlysty popupinner">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-header">
							<h4 class="modal-title">Use our BlystyBrowser Button to save photos from the Web with One Click</h4>
						</div>
						<div class="modal-body">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/browser.jpg" alt="browser">
						</div>
						<div class="modal-footer text-right">
							<a href="#" class="red-btn costom-btn" data-dismiss="modal">Not Now</a>
							<a href="#" class="green-btn costom-btn">get Blysty Button</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Blysty List -->
		<div id="blystyList" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="blystyList popupinner">
						<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						<div class="blystyListhead">
							<div class="chooseBlystyImg">
								<figure style="background-image: url('images/pop1.jpg');"></figure>
								<div class="post-details">
									<div class="post-header">
										<a href="#"><span>10</span><h3>Favorite Taylor Swift Songs</h3></a>
									</div>

									<div class="post-info">
										<div class="avatar">
											<figure style="background-image: url('images/avatar1.jpg');"></figure>
										</div>
										<div class="post-arthur">
											<h4>emma Jones</h4>
										</div>
										<div class="liks">
											<div class="counter">
												<a href="#"><i class="fa fa-heart"></i> 26</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blystyListContent">
							<ul>
								<li>You Belong With Me </li>
								<li>We Are Never Getting Back together</li>
								<li>I Knew You Were trouble</li>
								<li>Love Story</li>
								<li>22</li>
								<li>Mine</li>
								<li>Our Song</li>
								<li>Mean</li>
								<li>Everything Has Changed</li>
								<li>Fifteen</li>
							</ul>
						</div>

						<div class="action">
							<a href="#" class="green-btn">
								<svg version="1.1" class="share-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="14px" viewBox="7.175 5.252 16.65 14.296" enable-background="new 7.175 5.252 16.65 14.296" xml:space="preserve">
									<g>
										<path d="M23.825,10.733l-6.403-5.481v2.621C15.185,8.098,7.225,9.594,7.175,19.548c0,0,1.93-6.271,10.247-6.5v3.167L23.825,10.733z"></path>
									</g>
								</svg>
								<span>Share</span>
							</a>
							<a href="#" class="green-btn">
								<svg version="1.1" class="plus-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="12px" viewBox="9.3 6.2 12.4 12.399" enable-background="new 9.3 6.2 12.4 12.399" xml:space="preserve">
									<g transform="translate(0,-952.36218)">
										<path d="M15.5,958.562c-0.822,0-1.488,0.666-1.488,1.488v3.224h-3.224c-0.822,0-1.488,0.666-1.488,1.488s0.667,1.488,1.488,1.488 h3.224v3.223c0,0.822,0.666,1.488,1.488,1.488c0.822,0,1.488-0.666,1.488-1.487v-3.224h3.224c0.821,0,1.488-0.667,1.488-1.488 s-0.667-1.488-1.488-1.488h-3.224v-3.224C16.988,959.228,16.322,958.562,15.5,958.562L15.5,958.562z"></path>
									</g>
								</svg>
								<span>Follow</span>
							</a>
							<a href="#" class="green-btn">
								<svg version="1.1" class="heart-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="10px" viewBox="6.938 4.886 17.167 15.054" enable-background="new 6.938 4.886 17.167 15.054" xml:space="preserve">
									<path d="M11.954,4.886c-1.29,0-2.579,0.496-3.546,1.463c-1.959,1.959-1.959,5.159,0,7.118l6.696,6.299 c0.124,0.1,0.273,0.174,0.422,0.174s0.297-0.05,0.421-0.174l6.696-6.299c0.967-0.967,1.463-2.257,1.463-3.546 s-0.496-2.579-1.463-3.546c-0.868-0.868-1.984-1.265-3.15-1.265c-1.413,0-2.852,0.595-3.918,1.637L15.55,6.771 c0,0-0.025,0-0.025-0.025C14.483,5.803,13.218,4.886,11.954,4.886L11.954,4.886z"></path>
								</svg>
								<span>Like</span>
							</a>
							<a href="#" class="green-btn">
								<svg version="1.1" class="download-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="12px" viewBox="10.044 6.944 10.912 11.16" enable-background="new 10.044 6.944 10.912 11.16" xml:space="preserve">
									<g>
										<g>
											<path d="M15.074,14.584l-2.892-2.929c-0.467-0.468,0.233-1.169,0.7-0.702l1.949,1.955c0.096,0.096,0.174,0.063,0.174-0.074V7.441 c0-0.275,0.222-0.498,0.495-0.498c0.275,0,0.495,0.223,0.495,0.498v5.394c0,0.136,0.077,0.17,0.174,0.074l1.949-1.955 c0.467-0.468,1.167,0.234,0.7,0.702l-2.874,2.925C15.704,14.827,15.314,14.828,15.074,14.584z M19.964,16.865v-1.737 c0-0.274,0.222-0.496,0.496-0.496s0.496,0.222,0.496,0.496v2.233c0,0.412-0.335,0.742-0.746,0.742h-9.42 c-0.41,0-0.746-0.333-0.746-0.742v-2.233c0-0.274,0.222-0.496,0.496-0.496s0.496,0.222,0.496,0.496v1.737 c0,0.135,0.111,0.246,0.248,0.246h8.432C19.852,17.111,19.964,17.002,19.964,16.865z"/>
										</g>
									</g>
								</svg>
								<span>Save</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Choose Blysty -->
		<div id="chooseBlysty" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="chooseBlysty popupinner">
						<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						<div class="chooseBlystyHeader">
							<ul>
								<li class="active"><a href="#"><span>Choose a BlystBoard</span></a></li>
								<li><a href="#" data-toggle="modal" data-target="#createBoard" onclick="getModalCloseBoadrd();" >
									<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="5.498 2.397 20.004 20.005" enable-background="new 5.498 2.397 20.004 20.005" xml:space="preserve">
										<path d="M24.453,10.197h-6.75v-6.75c0-0.58-0.47-1.049-1.049-1.049h-2.308c-0.58,0-1.049,0.47-1.049,1.049v6.75h-6.75 c-0.58,0-1.049,0.47-1.049,1.049v2.308c0,0.58,0.47,1.049,1.049,1.049h6.75v6.75c0,0.579,0.47,1.049,1.049,1.049h2.309 c0.579,0,1.049-0.47,1.049-1.049v-6.75h6.75c0.579,0,1.049-0.47,1.049-1.049v-2.308C25.502,10.667,25.033,10.197,24.453,10.197z"></path>
									</svg>
									<span>Create New BlystBoard</span></a>
								</li>
							</ul>
						</div>
						<div class="chooseBlystyContent">
							<div class="chooseBlystyImg myDataChange">
								<figure style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pop1.jpg');"></figure>
								<div class="post-details">
									<div class="post-header">
										<a href="#"><span>10</span><h3>Favorite Taylor Swift Songs</h3></a>
									</div>

									<div class="post-info">
										<div class="avatar">
											<figure style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar1.jpg');"></figure>
										</div>
										<div class="post-arthur">
											<h4>emma Jones</h4>
											<h5>Music</h5>
										</div>
									</div>
									<div class="liks">
										<div class="counter">
											<a href="#"><i class="fa fa-heart"></i> 26</a>
										</div>
									</div>
								</div>
							</div>
							<div class="chooseBlystyCategories form">
								<form>
									<?php 

										$im_blyst_board = $wpdb->get_results("SELECT * FROM `im_blyst_board` WHERE `user_id` = $user->ID");
										foreach ($im_blyst_board as $key => $value) {
											?>
											<div class="form-group">
												<input class="form-control" type="text" placeholder="Favorite Music" value="<?php echo $value->name; ?>" disabled>
												<input type="button" class="green-btn" value="Save" onclick="saveblyst(<?php echo $value->id; ?>)">
											</div>
											<?php
										}
									 ?>
									
									<!-- <div class="form-group">
										<input class="form-control" type="text" placeholder="P: Favorite SWFS">
										<input type="submit" class="green-btn" value="Save">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Like: My Music Lists">
										<input type="submit" class="green-btn" value="Save">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="P: Favorite SWFS">
										<input type="submit" class="green-btn" value="Save">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Like: My Music Lists">
										<input type="submit" class="green-btn" value="Save">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="P: Favorite SWFS">
										<input type="submit" class="green-btn" value="Save">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="P: Favorite SWFS">
										<input type="submit" class="green-btn" value="Save">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="P: Favorite SWFS">
										<input type="submit" class="green-btn" value="Save">
									</div> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Edit Blysty -->
		<div id="editmod" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="create-pop form form-create" style="">
						<div class="head">
							<h2>Create a New Blyst</h2>

							<form>
								<div class="form-row">
									<span>Name</span>
									<div class="form-group name-gruop">
										<input class="form-control" type="text" name="name" placeholder="Like: Favorite Ice cream flavors">
									</div>
								</div>

								<div class="form-row">
									<span>Category</span>
									<div class="form-group category-gruop">
										<input class="form-control" type="text" name="cate" placeholder="Search">
									</div>
									<span>Private</span>
									<div class="form-group chck-group">
										<input class="hide" type="checkbox" name="private">
									</div>
								</div>

								<div class="form-row">
									<label>Add a Picture!</label>
									<ul>
										<li>+ Next time use our <a href="#">BlystyBrowser Button</a> to start with a visual!</li>
										<li>+ Search Google Images with <a href="#">BlystyBrowser</a></li>
									</ul>
								</div>

								<div class="image-section">
									<div class="upload">
										<span>Upload a Picture</span>
										<!-- <button class="green-btn costom-btn fle" type="button">Choose</button> -->
										<input class="green-btn costom-btn fle" type="button" value="Choose">
										<input type="file" class="hide">
									</div>
									<span>or</span>
									<div class="searchfor">
										<span>Save from Website URL</span>
										<div class="form-group"><input class="form-control" type="text" name="searchfor" placeholder="https://www."></div>
									</div>
								</div>

								<div class="form-row">
									<span><strong>Blyst Contents</strong> <small>Add up to 50!</small></span>

									<ul class="list">
										<li>
											<div class="form-group"><input class="form-control" type="text"></div>
										</li>
										<li>
											<div class="form-group"><input class="form-control" type="text"></div>
										</li>
										<li>
											<div class="form-group"><input class="form-control" type="text"></div>
										</li>
										<li>
											<div class="form-group"><input class="form-control" type="text"></div>
										</li>
										<li>
											<div class="form-group"><input class="form-control" type="text"></div>
										</li>
									</ul>
								</div>

								<div class="form-footer">
									<a href="#" class="red-btn costom-btn" data-dismiss="modal">
										<svg version="1.1" class="time-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="9.35 6.25 12.3 12.301" enable-background="new 9.35 6.25 12.3 12.301" xml:space="preserve">
											<g transform="translate(0,-952.36218)">
												<path d="M21.287,958.975c-0.484-0.484-1.27-0.484-1.754,0l-4.033,4.033l-4.033-4.033c-0.484-0.484-1.27-0.484-1.754,0 c-0.484,0.484-0.484,1.269,0,1.753l4.034,4.033l-4.034,4.034c-0.484,0.484-0.484,1.27,0,1.754c0.484,0.484,1.27,0.484,1.754,0 l4.033-4.034l4.033,4.034c0.484,0.484,1.27,0.484,1.754,0s0.484-1.27,0-1.754l-4.033-4.034l4.033-4.033 C21.771,960.245,21.771,959.459,21.287,958.975L21.287,958.975z"/>
											</g>
										</svg>
										<span>Cancel</span>
									</a>
									<a href="#" class="green-btn costom-btn">
										<svg version="1.1" class="check-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="14px" viewBox="3.625 2.731 23.75 19.337" enable-background="new 3.625 2.731 23.75 19.337" xml:space="preserve">
											<path d="M25.232,3.016c-0.38-0.38-1.004-0.38-1.385,0L11.563,15.302c-0.38,0.38-1.004,0.38-1.385,0l-3.026-3.026 c-0.381-0.38-1.004-0.38-1.385,0l-1.855,1.857c-0.381,0.381-0.381,1.004,0,1.385l6.267,6.265c0.381,0.381,1.004,0.381,1.385,0 L27.089,6.257c0.381-0.381,0.381-1.004,0-1.385L25.232,3.016z"/>
										</svg>
										<span>Save</span>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Create Blysty -->
		<div id="createBlysty" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="usermod popupinner">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="create-pop form form-create">
							<div class="head">
								<h2>Create a New Blyst</h2>

	  							 <form role="form" id="create_blyst" action="" method="post" enctype="multipart/form-data">
									<div class="form-row">
										<span>Name</span>
										<div class="form-group name-gruop">
											<input class="form-control" type="text" name="name" placeholder="Like: Favorite Ice cream flavors">
											<input type="hidden" name="link" value="<?php echo site_url(); ?>">
										</div>
									</div>

									<div class="form-row">
										<span>Category</span>
										<div class="form-group category-gruop">
											<input class="form-control" type="text" name="cate" placeholder="Search" id="inputTesting" >
											<input class="form-control" type="hidden" name="cateID" placeholder="Search" id="inputTestingHidden">
										</div>
										<span>Private</span>
										<div class="form-group chck-group">
											<input class="hide" type="checkbox" name="private">
										</div>
									</div>

									<div class="form-row">
										<span>Add a Picture!</span>
										<ul>
											<li>+ Next time use our <a href="javascript:void(0)" onclick="openBlystyBrowser();">BlystyBrowser Button</a> to start with a visual!</li>
											<li>+ Search Google Images with <a href="javascript:void(0)" onclick="openGoogleBrowser();">BlystyBrowser</a></li>
										</ul>
									</div>

									<div class="image-section">
										<div class="upload">
											<span>Upload a Picture</span>
											<!-- <button class="green-btn costom-btn fle">Choose</button> -->
											<input class="green-btn costom-btn fle" type="button" value="Choose">
											<input type="file" class="hide" name="fillee">
										</div>
										<span>or</span>
										<div class="searchfor">
											<span>Save from Website URL</span>
											<div class="form-group"><input class="form-control" type="text" name="searchfor" placeholder="https://www."></div>
										</div>
									</div>

									<div class="form-row">
										<span><strong>Blyst Contents</strong> <small>Add up to 50!</small></span>

										<ul class="content listHeight listHeightCreatePin list">
											<li>
												<div class="form-group"><input class="form-control" type="text" name="count[]"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text" name="count[]"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text" name="count[]"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text" name="count[]"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text" name="count[]"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text" name="count[]"></div>
											</li>
										</ul>
									</div>

									<div class="form-footer">
										<a href="#" class="red-btn costom-btn" data-dismiss="modal">
											<svg version="1.1" class="time-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="9.35 6.25 12.3 12.301" enable-background="new 9.35 6.25 12.3 12.301" xml:space="preserve">
												<g transform="translate(0,-952.36218)">
													<path d="M21.287,958.975c-0.484-0.484-1.27-0.484-1.754,0l-4.033,4.033l-4.033-4.033c-0.484-0.484-1.27-0.484-1.754,0 c-0.484,0.484-0.484,1.269,0,1.753l4.034,4.033l-4.034,4.034c-0.484,0.484-0.484,1.27,0,1.754c0.484,0.484,1.27,0.484,1.754,0 l4.033-4.034l4.033,4.034c0.484,0.484,1.27,0.484,1.754,0s0.484-1.27,0-1.754l-4.033-4.034l4.033-4.033 C21.771,960.245,21.771,959.459,21.287,958.975L21.287,958.975z"/>
												</g>
											</svg>
											<span>Cancel</span>
										</a>
										<a href="javascript:void(0)" onclick="addRow();">
											<svg version="1.1" class="time-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="9.35 6.25 12.3 12.301" enable-background="new 9.35 6.25 12.3 12.301" xml:space="preserve">
												<g transform="translate(0,-952.36218)">
													<path d="M21.287,958.975c-0.484-0.484-1.27-0.484-1.754,0l-4.033,4.033l-4.033-4.033c-0.484-0.484-1.27-0.484-1.754,0 c-0.484,0.484-0.484,1.269,0,1.753l4.034,4.033l-4.034,4.034c-0.484,0.484-0.484,1.27,0,1.754c0.484,0.484,1.27,0.484,1.754,0 l4.033-4.034l4.033,4.034c0.484,0.484,1.27,0.484,1.754,0s0.484-1.27,0-1.754l-4.033-4.034l4.033-4.033 C21.771,960.245,21.771,959.459,21.287,958.975L21.287,958.975z"/>
												</g>
											</svg>
											<span>Add Row</span>
										</a>
										<a href="javascript:void(0)" onclick="deleteRow();" class="deleteBtnBlyst red-btn costom-btn">
											<svg version="1.1" class="dustbin-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="20px" viewBox="5.587 -0.225 19.757 25.25" enable-background="new 5.587 -0.225 19.757 25.25" xml:space="preserve">
												<g>
													<path stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M20.77,24.025H10.23c-0.853,0-1.55-0.697-1.55-1.551V7.828h13.64v14.647C22.32,23.328,21.623,24.025,20.77,24.025z"/>
													<line stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="18.058" y1="12.245" x2="18.058" y2="20.925"/>
													<line stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="12.942" y1="20.925" x2="12.942" y2="12.245"/>
													<path stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M23.638,4.107H7.362c-0.465,0-0.775,0.31-0.775,0.775v2.17c0,0.465,0.31,0.775,0.775,0.775h16.198c0.465,0,0.774-0.31,0.774-0.775 v-2.17C24.412,4.417,24.025,4.107,23.638,4.107z"/>
													<path stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M12.167,4.107c0-1.86,1.55-3.333,3.333-3.333c1.783,0,3.332,1.473,3.332,3.333H12.167z"/>
												</g>
											</svg>
											<span>Delete Row</span>
										</a>
										<button type="submit" class="green-btn costom-btn">
										<!-- <a href="javascript:void(0)" onclick="formSubmit();" class="green-btn costom-btn"> -->
											<svg version="1.1" class="check-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="14px" viewBox="3.625 2.731 23.75 19.337" enable-background="new 3.625 2.731 23.75 19.337" xml:space="preserve">
												<path d="M25.232,3.016c-0.38-0.38-1.004-0.38-1.385,0L11.563,15.302c-0.38,0.38-1.004,0.38-1.385,0l-3.026-3.026 c-0.381-0.38-1.004-0.38-1.385,0l-1.855,1.857c-0.381,0.381-0.381,1.004,0,1.385l6.267,6.265c0.381,0.381,1.004,0.381,1.385,0 L27.089,6.257c0.381-0.381,0.381-1.004,0-1.385L25.232,3.016z"/>
											</svg>
											<span>Save</span>
										<!-- </a> -->
										</button>
									</div>
									<!-- <input type="submit" value="submit" style="display:none;" class="submitButton"> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Edit Blysty -->
		<div id="editBlysty" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="usermod popupinner">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="edit-pop form form-create">
							<div class="head myBlystEdit">
								<h2>Edit this Blyst</h2>

								<form>
									<div class="form-row">
										<span>Name</span>
										<div class="form-group name-gruop">
											<input class="form-control" type="text" name="name" placeholder="Like: Favorite Ice cream flavors">
										</div>
									</div>

									<div class="form-row">
										<span>Category</span>
										<div class="form-group category-gruop">
											<input class="form-control" type="text" name="cate" placeholder="Search">
										</div>
										<span>Private</span>
										<div class="form-group chck-group">
											<input class="hide" type="checkbox" name="private">
										</div>
									</div>

									<div class="form-row">
										<span>Change Picture!</span>
										<ul class="addPic">
											<li>+ Use this picture from <a href="#">BlystyBrowser Button</a></li>
											<li>+ Search Google Images with <a href="#">BlystyBrowser</a></li>
										</ul>

										<div class="newAvatar">
											<figure style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pop2.jpg');"></figure>
										</div>
									</div>

									<div class="image-section">
										<div class="upload">
											<span>Upload a Picture</span>
											<!-- <button class="green-btn costom-btn fle">Choose</button> -->
											<input class="green-btn costom-btn fle" type="button" value="Choose">
											<input type="file" class="hide">
										</div>
										<span>or</span>
										<div class="searchfor">
											<span>Save from Website URL</span>
											<div class="form-group"><input class="form-control" type="text" name="searchfor" placeholder="https://www."></div>
										</div>
									</div>

									<div class="form-row">
										<span></span>
										<p><strong>Blyst Contents</strong> Add up to 50!</p>

										<ul class="content listHeight list">
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
											<li>
												<div class="form-group"><input class="form-control" type="text"></div>
											</li>
										</ul>
									</div>

									<div class="form-footer">
										<a href="#" class="red-btn costom-btn" data-dismiss="modal">
											<svg version="1.1" class="time-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="9.35 6.25 12.3 12.301" enable-background="new 9.35 6.25 12.3 12.301" xml:space="preserve">
												<g transform="translate(0,-952.36218)">
													<path d="M21.287,958.975c-0.484-0.484-1.27-0.484-1.754,0l-4.033,4.033l-4.033-4.033c-0.484-0.484-1.27-0.484-1.754,0 c-0.484,0.484-0.484,1.269,0,1.753l4.034,4.033l-4.034,4.034c-0.484,0.484-0.484,1.27,0,1.754c0.484,0.484,1.27,0.484,1.754,0 l4.033-4.034l4.033,4.034c0.484,0.484,1.27,0.484,1.754,0s0.484-1.27,0-1.754l-4.033-4.034l4.033-4.033 C21.771,960.245,21.771,959.459,21.287,958.975L21.287,958.975z"></path>
												</g>
											</svg>
											<span>Cancel</span>
										</a>
										<a href="#" class="green-btn costom-btn">
											<svg version="1.1" class="check-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="14px" viewBox="3.625 2.731 23.75 19.337" enable-background="new 3.625 2.731 23.75 19.337" xml:space="preserve">
												<path d="M25.232,3.016c-0.38-0.38-1.004-0.38-1.385,0L11.563,15.302c-0.38,0.38-1.004,0.38-1.385,0l-3.026-3.026 c-0.381-0.38-1.004-0.38-1.385,0l-1.855,1.857c-0.381,0.381-0.381,1.004,0,1.385l6.267,6.265c0.381,0.381,1.004,0.381,1.385,0 L27.089,6.257c0.381-0.381,0.381-1.004,0-1.385L25.232,3.016z"></path>
											</svg>
											<span>Save</span>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Create Board -->
		<div id="createBoard" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="usermod popupinner">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="edit-pop form form-create">
							<div class="head">
								<h2>Create a BlystBoard</h2>

	  							 <form role="form" id="create_board" action="" method="post">
									<div class="form-row">
										<span>Name</span>
										<div class="form-group name-gruop">
											<input type="hidden" name="blystIDChoose" value>
											<input class="form-control" type="text" name="name" placeholder="Like: My Music Lists">
										</div>
									</div>

									<div class="form-row">
										<span>Private</span>
										<div class="form-group chck-group">
											<input class="hide" type="checkbox" name="private">
										</div>
									</div>

									<div class="form-footer">
										<a href="#" class="red-btn costom-btn" data-dismiss="modal">
											<svg version="1.1" class="time-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="9.35 6.25 12.3 12.301" enable-background="new 9.35 6.25 12.3 12.301" xml:space="preserve">
												<g transform="translate(0,-952.36218)">
													<path d="M21.287,958.975c-0.484-0.484-1.27-0.484-1.754,0l-4.033,4.033l-4.033-4.033c-0.484-0.484-1.27-0.484-1.754,0 c-0.484,0.484-0.484,1.269,0,1.753l4.034,4.033l-4.034,4.034c-0.484,0.484-0.484,1.27,0,1.754c0.484,0.484,1.27,0.484,1.754,0 l4.033-4.034l4.033,4.034c0.484,0.484,1.27,0.484,1.754,0s0.484-1.27,0-1.754l-4.033-4.034l4.033-4.033 C21.771,960.245,21.771,959.459,21.287,958.975L21.287,958.975z"></path>
												</g>
											</svg>
											<span>Cancel</span>
										</a>
										<!-- <a href="#" class="red-btn costom-btn" data-dismiss="modal">
											<svg version="1.1" class="dustbin-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="20px" viewBox="5.587 -0.225 19.757 25.25" enable-background="new 5.587 -0.225 19.757 25.25" xml:space="preserve">
												<g>
													<path stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M20.77,24.025H10.23c-0.853,0-1.55-0.697-1.55-1.551V7.828h13.64v14.647C22.32,23.328,21.623,24.025,20.77,24.025z"/>
													<line stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="18.058" y1="12.245" x2="18.058" y2="20.925"/>
													<line stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="12.942" y1="20.925" x2="12.942" y2="12.245"/>
													<path stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M23.638,4.107H7.362c-0.465,0-0.775,0.31-0.775,0.775v2.17c0,0.465,0.31,0.775,0.775,0.775h16.198c0.465,0,0.774-0.31,0.774-0.775 v-2.17C24.412,4.417,24.025,4.107,23.638,4.107z"/>
													<path stroke="#b45664" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d=" M12.167,4.107c0-1.86,1.55-3.333,3.333-3.333c1.783,0,3.332,1.473,3.332,3.333H12.167z"/>
												</g>
											</svg>
											<span>Delete</span>
										</a> -->
										<button type="submit" class="green-btn costom-btn">
											<svg version="1.1" class="check-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="14px" viewBox="3.625 2.731 23.75 19.337" enable-background="new 3.625 2.731 23.75 19.337" xml:space="preserve">
												<path d="M25.232,3.016c-0.38-0.38-1.004-0.38-1.385,0L11.563,15.302c-0.38,0.38-1.004,0.38-1.385,0l-3.026-3.026 c-0.381-0.38-1.004-0.38-1.385,0l-1.855,1.857c-0.381,0.381-0.381,1.004,0,1.385l6.267,6.265c0.381,0.381,1.004,0.381,1.385,0 L27.089,6.257c0.381-0.381,0.381-1.004,0-1.385L25.232,3.016z"></path>
											</svg>
											<span>Save</span>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Edit Board -->
		<div id="editBoard" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="usermod popupinner">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="edit-pop form form-create">
							<div class="head editMyBoard">
								<h2>Edit BlystBoard</h2>

								<form>
									<div class="form-row">
										<span>Current Name</span>
										<div class="form-group name-gruop">
											<input class="form-control" type="text" name="name" placeholder="Like: Favorite Ice cream flavors">
										</div>
									</div>
									<div class="form-row">
										<span>New Name</span>
										<div class="form-group name-gruop">
											<input class="form-control" type="text" name="name" placeholder="Like: Favorite Ice cream flavors">
										</div>
									</div>

									<div class="form-row">
										<span>Change Privacy</span>
										<div class="form-group chck-group offOn">
											<input class="hide" type="checkbox" name="private">
										</div>
									</div>

									<div class="form-row">
										<span>Delete this BlystBoard</span>
										<a href="#" class="green-btn costom-btn md-btn">Delete</a>
									</div>

									<div class="form-footer">
										<a href="#" class="red-btn costom-btn" data-dismiss="modal">
											<svg version="1.1" class="time-icon" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="9.35 6.25 12.3 12.301" enable-background="new 9.35 6.25 12.3 12.301" xml:space="preserve">
												<g transform="translate(0,-952.36218)">
													<path d="M21.287,958.975c-0.484-0.484-1.27-0.484-1.754,0l-4.033,4.033l-4.033-4.033c-0.484-0.484-1.27-0.484-1.754,0 c-0.484,0.484-0.484,1.269,0,1.753l4.034,4.033l-4.034,4.034c-0.484,0.484-0.484,1.27,0,1.754c0.484,0.484,1.27,0.484,1.754,0 l4.033-4.034l4.033,4.034c0.484,0.484,1.27,0.484,1.754,0s0.484-1.27,0-1.754l-4.033-4.034l4.033-4.033 C21.771,960.245,21.771,959.459,21.287,958.975L21.287,958.975z"></path>
												</g>
											</svg>
											<span>Cancel</span>
										</a>
										<a href="#" class="green-btn costom-btn">
											<svg version="1.1" class="check-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="14px" viewBox="3.625 2.731 23.75 19.337" enable-background="new 3.625 2.731 23.75 19.337" xml:space="preserve">
												<path d="M25.232,3.016c-0.38-0.38-1.004-0.38-1.385,0L11.563,15.302c-0.38,0.38-1.004,0.38-1.385,0l-3.026-3.026 c-0.381-0.38-1.004-0.38-1.385,0l-1.855,1.857c-0.381,0.381-0.381,1.004,0,1.385l6.267,6.265c0.381,0.381,1.004,0.381,1.385,0 L27.089,6.257c0.381-0.381,0.381-1.004,0-1.385L25.232,3.016z"></path>
											</svg>
											<span>Save</span>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- User -->
		<div id="usermod" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="usermod popupinner">
						<ul>
							<li><a href="profile.php">
								<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="5.498 2.397 20.004 20.005" enable-background="new 5.498 2.397 20.004 20.005" xml:space="preserve">
									<path fill="#6c9e72" d="M24.453,10.197h-6.75v-6.75c0-0.58-0.47-1.049-1.049-1.049h-2.308c-0.58,0-1.049,0.47-1.049,1.049v6.75h-6.75 c-0.58,0-1.049,0.47-1.049,1.049v2.308c0,0.58,0.47,1.049,1.049,1.049h6.75v6.75c0,0.579,0.47,1.049,1.049,1.049h2.309 c0.579,0,1.049-0.47,1.049-1.049v-6.75h6.75c0.579,0,1.049-0.47,1.049-1.049v-2.308C25.502,10.667,25.033,10.197,24.453,10.197z"></path>
								</svg>
								<span>My Account</span>
							</a></li>
							<li><a href="#browserBlysty" data-toggle="modal" data-dismiss="modal">
								<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="5.498 2.397 20.004 20.005" enable-background="new 5.498 2.397 20.004 20.005" xml:space="preserve">
									<path fill="#6c9e72" d="M24.453,10.197h-6.75v-6.75c0-0.58-0.47-1.049-1.049-1.049h-2.308c-0.58,0-1.049,0.47-1.049,1.049v6.75h-6.75 c-0.58,0-1.049,0.47-1.049,1.049v2.308c0,0.58,0.47,1.049,1.049,1.049h6.75v6.75c0,0.579,0.47,1.049,1.049,1.049h2.309 c0.579,0,1.049-0.47,1.049-1.049v-6.75h6.75c0.579,0,1.049-0.47,1.049-1.049v-2.308C25.502,10.667,25.033,10.197,24.453,10.197z"></path>
								</svg>
								<span>Get BlystyBrowser To Choose Images</span>
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- User -->
		
		<div id="userMed" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="usermod popupinner">
						<ul>
							<li><a href="#" data-toggle="modal" data-target="#createBlysty" class="costom-btn green-btn" onclick="getModalClose();">
								<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="5.498 2.397 20.004 20.005" enable-background="new 5.498 2.397 20.004 20.005" xml:space="preserve">
									<path fill="#6c9e72" d="M24.453,10.197h-6.75v-6.75c0-0.58-0.47-1.049-1.049-1.049h-2.308c-0.58,0-1.049,0.47-1.049,1.049v6.75h-6.75 c-0.58,0-1.049,0.47-1.049,1.049v2.308c0,0.58,0.47,1.049,1.049,1.049h6.75v6.75c0,0.579,0.47,1.049,1.049,1.049h2.309 c0.579,0,1.049-0.47,1.049-1.049v-6.75h6.75c0.579,0,1.049-0.47,1.049-1.049v-2.308C25.502,10.667,25.033,10.197,24.453,10.197z"></path>
								</svg>
								<span>Create Blysty</span>
							</a></li>
							<li><a href="#" data-toggle="modal" data-target="#createBoard" onclick="getModalClose();" class="costom-btn green-btn">
								<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="5.498 2.397 20.004 20.005" enable-background="new 5.498 2.397 20.004 20.005" xml:space="preserve">
									<path fill="#6c9e72" d="M24.453,10.197h-6.75v-6.75c0-0.58-0.47-1.049-1.049-1.049h-2.308c-0.58,0-1.049,0.47-1.049,1.049v6.75h-6.75 c-0.58,0-1.049,0.47-1.049,1.049v2.308c0,0.58,0.47,1.049,1.049,1.049h6.75v6.75c0,0.579,0.47,1.049,1.049,1.049h2.309 c0.579,0,1.049-0.47,1.049-1.049v-6.75h6.75c0.579,0,1.049-0.47,1.049-1.049v-2.308C25.502,10.667,25.033,10.197,24.453,10.197z"></path>
								</svg>
								<span>Create Board</span>
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
<?php wp_footer(); ?>
<script>
	function openBlystyBrowser() {
		var href = "<?php echo site_url(); ?>/getmedoa.php";
		 window.open(href,'name','width=600,height=600');
	}
	function openGoogleBrowser() {
		var href = "<?php echo site_url(); ?>/googleImage.php";
		 window.open(href,'name','width=600,height=600');
	}
	window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
     jQuery(document).ready(function(){
     	<?php 
     	if($_SESSION['myVal'] != "") {
     		$idArr = explode("_" , $_SESSION['myVal']);
     		$listId = $idArr[1];
     		$url = wp_get_attachment_url( $listId );
     	}
     	if($_SESSION['myVal2'] != "") {
     		$url = $_SESSION['myVal2'];
     	}

     	 ?>
	 	var lastName = "<?php echo $_SESSION['myVal']; ?>";
	 	var lastName2 = "<?php echo $_SESSION['myVal2']; ?>";
	 	if(lastName != "" || lastName2 != "") {
	 		var myImgurl = "<?php echo $url; ?>";
	 		jQuery("#createBlysty").modal("show");
	 		setTimeout(function(){ jQuery("input[name='searchfor']").val(myImgurl) }, 1000);
	 	}
	 });
</script>
<?php  unset($_SESSION['myVal']); ?>
<?php 
	global $wpdb;
	$nameCat = $wpdb->get_results("SELECT * FROM `im_category_pins` ORDER BY `category_name` DESC");
	foreach ($nameCat as $key => $value) {
		$myArr[] = $value->category_name;
	}

 ?>


<script type="text/javascript">
		function WelDrawn() {
			var celestial_bodies = [
				<?php 
				$i=1;
				foreach( $wpdb->get_results("SELECT * FROM `im_category_pins` ORDER BY `category_name` DESC") as $key1 => $row1) {
				if($i==1) {
	 			} ?>
	 				{title:"<?php echo $row1->category_name;  ?>", id:"<?php echo $row1->id; ?>"},
				<?php
				$i++;
				}

				?>
			];

			var myAutocomplete = jQuery("#inputTesting").void_autocomplete({
				list: celestial_bodies,
				onItemSelect: function(){
					var item = jQuery(".selected").attr("data-option-id");
					var text = jQuery(".selected").text();
					setTimeout(function(){ jQuery("input[name='cate']").val(text); jQuery("input[name='cateID']").val(item); }, 1000);
				}
			});
		}
	</script>
</body>
</html>
