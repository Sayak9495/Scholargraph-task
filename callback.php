<?php
  require_once "config.php";

  try {
    $accessToken = $helper->getAccessToken();
  } catch (\Facebook\Exceptions\FacebookResponseException $e) {
    echo "Response Exception: " . $e->getMessage();
    exit();
  } catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo "SDK Exception: " . $e->getMessage();
    exit();
  }

  if (!$accessToken) {
    header('Location: login.php');
    exit();
  }

  $response = $fb->get("/me?fields=email", $accessToken);
  $userData = $response->getGraphNode()->asArray();
  $_SESSION['email'] = $userData['email'];
  $_SESSION['access_token'] = (string) $accessToken;
  header("Location: index.php");
  exit();
?>