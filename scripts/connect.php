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

// Will only show if the connection succeeds
echo "<br>Connected successfully " . $database . " as " . $username;

$conn->close();

?>
<br>
<br>
<a href='../connect.html'><input type='button' value = 'Back to Main'></input></a>
