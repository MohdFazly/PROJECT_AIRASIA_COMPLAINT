
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO `usercomplaint` (`fullname`, `email`, `comCategory`,`flightNumber`, `from`, `to`, `comDescription`)
 VALUES('$_POST[fullname]','$_POST[email]','$_POST[comCategory]','$_POST[flightNumber]', '$_POST[from]','$_POST[to]','$_POST[comDescription]')";
	if (!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}

echo "<script
type='text/jscript'>alert('Commplaint has been submitted!')</script>";
header('refresh:1 url=makecomplaint1.php');

?>
