<?php
ob_start();
session_start();
session_unset();
session_destroy();

header("location: index.php");


include('config1.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index.php');

?>
