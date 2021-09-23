<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'kalaniya';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 $query = mysqli_query($conn,"SELECT * FROM category");
 //echo "Connected successfully";
?>