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
echo "Connected successfully " . $database . "<br><br>";


// mysql_select_db("fruits") or die("<p>Error selecting the database " . mysql_error() . "</p>");

// echo "<p>Connect to MySQL, using database fruits.</p>";
// $sql = "DELETE from citrus WHERE name = 'Lime'";
$sql = "SELECT * from citrus";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Color: " . $row["color"]. "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
<br>
<br>
<a href='../home.html'><input type='button' value = 'Back to Home'></input></a>