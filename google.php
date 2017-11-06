<?php 
	session_start();
	include("wp-config.php");
	$user = $_SESSION['google_data'];
	 $username = $user['family_name']."_".$user['given_name'];
    $userEmail = sanitize_email($user['email']);
    $password = "jFHJ7867kjgh67678hg";
 
    if ( email_exists( $userEmail ) )
    {
       $user1 = get_user_by( 'email', $userEmail );
       $user_id = $user1->ID;
      // tml_new_user_registered( $user_id );
      if ( !is_wp_error( $user1 ) )
      {
          wp_clear_auth_cookie();
          wp_set_current_user( $user1->ID );
          wp_set_auth_cookie( $user1->ID );

          $redirect_to = user_admin_url();
          // wp_safe_redirect( $redirect_to );
          // exit();
      }
    }
    else
    {
      $user_id = wp_create_user( $userEmail, $password, $userEmail );
      wp_clear_auth_cookie();
	wp_set_current_user( $user_id );
	wp_set_auth_cookie( $user_id );
    }
 ?>
     <script>
 window.location = "http://blysty.imarkclients.com";
  </script>