<?php



//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';


//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('999279251595-b381tspqb0kiva4ta0g65bj26cu015a8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('_-9cq6M6MFsJS40yp0ojURNS');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/technotrainers/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();






?>