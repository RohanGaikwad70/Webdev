<?php
// Database connection settings
$host = 'localhost';
$user = 'your_db_username';
$password = 'your_db_password';
$database = 'your_db_name';

// Establish database connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
