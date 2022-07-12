<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

// $password = md5($password);

$sql="INSERT INTO users (fullname,address,date,email,password)
values ('$_POST[fullname]','$_POST[address]','$_POST[date]','$_POST[email]','$_POST[password]')";
	if (!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}
echo "<script
type='text/jscript'>alert('New Account has been registered!')</script>";
header('refresh:1 url=login.php');

?>
