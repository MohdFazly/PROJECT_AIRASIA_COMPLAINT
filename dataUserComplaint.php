
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO usercomplaint ( fullname, email, comCategory, flightNumber, fromm, too, comDescription)
values ('$_POST[fullname]','$_POST[email]','$_POST[comCategory]','$_POST[flightNumber]', '$_POST[fromm]','$_POST[too]','$_POST[comDescription]')";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}


echo "<script
type='text/jscript'>alert('Complaint has been submitted!')</script>";
header('refresh:1 url=makecomplaint1.php');

?>
