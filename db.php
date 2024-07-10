<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'legaldefense';

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Check the connection
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
?>
