<?php

$servername = "localhost";
$username = "luke";
$password = "mLilmk2p";
$database = 'fruits';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to " . $database;


$sql = "DELETE from citrus WHERE name = 'Lime'";

if ($conn->query($sql) === TRUE) {
  echo "<br>Limes deleted successfully";
} else {
  echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





/*
// Below this line is bunk...how to do this correctly?
mysql_select_db($database) or die("<p>Failure connecting to: " . mysql_error() . " </p>");

echo "<p>Connected to MySQL, using datase ";
 */











?>
