<?php
$dbname='';
$dbserver='localhost';
$dbpassword='';
$dbport= '3306';


// Create connection
$conn = new mysqli_connect( $dbname,$dbserver, $dbpassword, $dbport);

// Check connection
if ($conn -> error){
      die ("Connection failed: " . $conn -> connection_error);
} 
?>
?>