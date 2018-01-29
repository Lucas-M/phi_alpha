<?php

$servername = "localhost";
$username = "root";
$password = "mLilmk2p";

// Create connection
$conn = new mysqli($servername, $username, $password);
//
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




/*
  mysql_connect("localhost", "root", "mLilmk2p") or die("<p>Error connecting to database: " . mysql_error() . "</p>");
  
  echo "<p>Connected to MySQL!</p>";
 */

//////////////////////////////////////////////////////////////////////////
/*
$link = mysql_connect('localhost', 'root', 'mLilmk2p');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
 */
?>
