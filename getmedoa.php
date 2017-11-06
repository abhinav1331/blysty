<?php 
	include("wp-config.php");
	wp_head();
	global $wpdb;
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$query_images_args = array(
	    'post_type'      => 'attachment',
	    'post_mime_type' => 'image',
	    'post_status'    => 'inherit',
        'paged' => $paged
	);

	$query_images = new WP_Query( $query_images_args );

	$images = array();
	foreach ( $query_images->posts as $image ) {
	    ?>
		<label for="image_<?php echo $image->ID; ?>"><img width="200px" src="<?php echo wp_get_attachment_url( $image->ID ); ?>" alt=""><input type="radio" name="imageBlyst" id="image_<?php echo $image->ID; ?>" value="image_<?php echo $image->ID; ?>"></label>
	    <?php
	}

 ?>
 <button class="btn"  onclick="myFun()">Save</button>
 <?php 
 wp_footer();
 ?>
 <script>
 function myFun() {
 	var myVal = jQuery("input[type='radio']:checked").val();
 	if(myVal != "") {
	 	jQuery.ajax({
			type: "POST",
			url: '<?php echo site_url(); ?>/help.php',
			data:{myVal:myVal,format:'raw'},
			success:function(resp){
	 			window.close();
			}
		});
 	} else {
 		alert("Please select a image first");
 	}
 }

/* jQuery(document).ready(function(){
 	jQuery("label").each(function(){
 		if(jQuery(this).find("input[type='radio']").is(':checked')) {
 			jQuery(this).find("input[type='radio']").attr('checked', false);
 			jQuery(".btn").removeAttr("disabled");
 		} else {
 			jQuery(".btn").attr("disabled", "disabled");
 		}
 	});
 });*/
window.onunload = refreshParent;
function refreshParent() {
    window.opener.location.reload();
}
 </script>
