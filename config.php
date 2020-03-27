<?php
define('DB_SERVER', '137.74.42.167');
define('DB_USERNAME', 'SIA2');
define('DB_PASSWORD', 'SIA2mysql');
define('DB_NAME', 'EPA');
 
// Connexion
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Test connexion
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
//echo "Connected successfully";
?>
