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
echo "Connected successfully " . $database . "<br>";


// mysql_select_db("fruits") or die("<p>Error selecting the database " . mysql_error() . "</p>");

// echo "<p>Connect to MySQL, using database fruits.</p>";
// $sql = "DELETE from citrus WHERE name = 'Lime'";
$sql = "SHOW TABLES;";
$result = $conn->query($sql);

echo "<ul>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>Table: " . $row["Tables_in_fruits"] . "</li>";
    }
} 

echo "</ul>";

$conn->close();
?>
<br>
<br>
<a href='../home.html'><input type='button' value = 'Back to Home'></input></a>