<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('main'); ?>
<?php 
$Pins = new Pins();
$user = wp_get_current_user();
$countPins = $Pins->countPins($user->ID , 1);
?>


<div class="home index page-wraspper">
	<div class="container-fluid">
		<div class="post-gallery">
			<div class="post-list grid">
				<?php $myExecutionPins = $Pins->viewPins($user->ID , 1); ?>
			</div>
		</div>
	</div>
</div>
<input type="hidden" name="myPagination" value="1">
<?php 
	if($countPins == "20") {
		?>
			<div class="footer_section"><div class="loader"><img width="100" src="http://i.imgur.com/2Sdtwfj.gif" alt=""><input type="hidden" name="myscrollCount" value=""></div></div>
		<?php
	}
 ?>
<?php get_footer('main');
