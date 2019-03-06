<?php

require __DIR__ . '/../vendor/autoload.php';

use League\OAuth2\Client\Provider\Google;

// Replace these with your token settings
// Create a project at https://console.developers.google.com/
$clientId     = getenv('OAUTH_GOOGLE_CLIENT_ID');
$clientSecret = getenv('OAUTH_GOOGLE_CLIENT_SECRET');

// Change this if you are not using the built-in PHP server
$redirectUri  = getenv('OAUTH_GOOGLE_REDIRECT');

// Start the session
session_start();

// Initialize the provider
$provider = new Google(compact('clientId', 'clientSecret', 'redirectUri'));

// No HTML for demo, prevents any attempt at XSS
header('Content-Type', 'text/plain');

return $provider;
