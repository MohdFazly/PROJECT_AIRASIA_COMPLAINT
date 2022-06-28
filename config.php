<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "projectairasia";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn -> error){
  die ("Connection failed: " . $conn -> connection_error);
} 

?>