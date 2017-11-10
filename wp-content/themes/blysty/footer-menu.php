	<footer>
		<div class="container-fluid">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="footerContainer">
							<div class="footerBox">
								<ul> 
									<?php
									$defaults = array(
										'theme_location'  => '',
										'menu'            => 'menu-public',
										'container'       => 'menu-public',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '2',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => ''
									);

									wp_nav_menu( $defaults );
									?>  
								</ul>
							</div>
							<div class="footerBox text-right power">
								<p>Powered by: <a href="https://www.imarkinfotech.com/" target="_blank">iMark Infotech</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
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
