<?php 
	session_start();
	require_once "Facebook/autoload.php";

	$fb = new \Facebook\Facebook([
	  'app_id' => '295887307666757', 
	  'app_secret' => '119dd1793fca6e826935b87ec8c4bfc7',
	  'default_graph_version' => 'v2.2',
	  ]);

	$helper = $fb->getRedirectLoginHelper();
?>