
<?php 
if(!session_id()) {
    session_start();
}
session_id();
include("wp-config.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once ABSPATH . '/facebook/autoload.php';


use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurlHttpClient;

$fb = new Facebook\Facebook([
  'app_id' => '275645989609691',
  'app_secret' => 'bbd63c295441c6c13a1994457941ce39',
  'default_graph_version' => 'v2.10'
  ]);

$helper = $fb->getRedirectLoginHelper();
$_SESSION['FBRLH_state']=$_GET['state'];
try {
  $accessToken = $helper->getAccessToken();
  $response = $fb->get('/me?fields=id,email,first_name,last_name,gender,picture.width(500)',$accessToken);

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  //When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  //When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$user = $response->getGraphUser();
$_SESSION['myUser'] = $user;
?>

 <script>
 window.location = "http://blysty.imarkclients.com/facebook.php";
  </script>


