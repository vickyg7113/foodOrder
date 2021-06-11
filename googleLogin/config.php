<?php
  session_start();
  require_once('googleApi/vendor/autoload.php');
  $gClient = new Google_Client();
  $gClient->setClientId("54064778536-6g16uigj8bpmmak7n2rlfd9o1g3al8ah.apps.googleusercontent.com");
  $gClient->setClientSecret("5liwyAKhmNpaaA0Z1opVCD7L");
  $gClient->setApplicationName("Foodie");
  $gClient->setRedirectUri("http://localhost/fprjct/googleLogin/gcallback.php");
  $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>