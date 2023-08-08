<?php
//CONFIGURACION.PHP
  require_once 'vendor/autoload.php';

  $clientID = '362203673582-gsmf95sdd6ior2nq6qvlgt4ss38ikjkr.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'https://frut-club.com/';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>