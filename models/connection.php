<?php

$server="localhost";
$username="root";
 $password= "";

 $database="demo";

 // Create a connection
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connection was successful";

?>