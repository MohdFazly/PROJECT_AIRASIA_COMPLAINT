
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO usercomplaint (fullname,email,comCategory,comDescription)
values ('$_POST[fullname]','$_POST[email]','$_POST[comCategory]','$_POST[comDescription]')";
	if (!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}
echo "<script
type='text/jscript'>alert('Commplaint has been submitted!')</script>";
header('refresh:1 url=makecomplaint1.php');
?>
