<?php
// Get the 
require '../config/app_config.php';

// Create connection
$conn = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query_text = $_REQUEST['query'];
$result = $conn->query($query_text);

$return_rows = false;
$location = strpos($query_text, "CREATE");
if ($location === false) {
  $location = strpos($query_text, "INSERT");
  if ($location === false) {
    $location = strpos($query_text, "UPDATE");
      if ($location === false) {
	    $location = strpos($query_text, "DELETE");
	      if ($location === false) {
	      $location = strpos($query_text, "DROP");
    	    if ($location === false) {
    	    // If we got here, it's not a create, insert, update, delete or 
    	    // drop query. It should return rows.
    	      $return_rows = true;
		    }
	      }
	  }
   }
}



echo "<p>Result from your query:</p>";
echo "<ul>";

if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) { //this version was wrong...assoc did not work
    while($row = $result->fetch_array()) {
        // echo "<li>{$row[0]}</li>";
        // echo "<li>" . $row["Tables_in_fruits"] . "</li>";
        echo "<li>" . $row[0] . " " . $row[1] . " " . $row[2] . "</li>";
    }
} else {
    echo "<li>0 results</li>";
}

echo "</ul>";

 // echo "<li>Table: " . $row["Tables_in_fruits"] . "</li>";




echo "Connected successfully " . $database . 
"<br>
<br>
<br>
<a href='../runner.html'><input type='button' value = 'Query Runner'></input>
</a>";
?>