<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name= "blog"; // Added semicolon at end of line

/* Attempt to connect to MySQL database */
$link= new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if ($link === false) {
  die("error: Could not connect. " .mysqli_connect_error());
}

?>
