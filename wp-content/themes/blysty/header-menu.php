<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blysty</title>
	<!-- Bootstrap CSS -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		table {
			font-size: 1em;
		}

		.ui-draggable, .ui-droppable {
			background-position: top;
		}
	</style>
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon-16x16.png" sizes="16x16" />
	<!-- jQuery -->
</head>

<body <?php body_class(); ?>>

	<header id="header">
		<div class="container-fluid">
			<div class="main-menu row">
				<div class="col-md-offset-1 col-md-10">
					<div class="logo">
						<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/menu-logo.png" alt="WCG"></a>
					</div>
					<div class="navbar">
						<nav>
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
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>