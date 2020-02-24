<?php
	session_start();
	require "../vendor/autoload.php";
	//echo '<br>I am inside config<br>';
	$gClient = new Google_Client();
	$gClient->setClientId("541050038364-6pa0t5c9kdfa8dkqlhuub213bk3qc5pp.apps.googleusercontent.com");
	$gClient->setClientSecret("wuyNz2vYmGEWivAdqgDTgip-");
	$gClient->setApplicationName("My Project");
	$gClient->setRedirectUri("http://localhost:8000/login/g_callback/");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	//var_dump($gClient);
?>

