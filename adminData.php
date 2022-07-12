
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO adminn (fullname,email,address,password)
values ('$_POST[fullname]','$_POST[email]','$_POST[address]','$_POST[password]')";
	if (!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}
echo "<script
type='text/jscript'>alert('Commplaint has been submitted!')</script>";
header('refresh:1 url=adminlogin.php');

?>