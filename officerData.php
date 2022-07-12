<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO officer (fullname, hpnumber, email, departmentList, passwordd)
values ('$_POST[fullname]','$_POST[hpnumber]','$_POST[email]','$_POST[departmentList]','$_POST[passwordd]')";
	if (!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}
echo "<script
type='text/jscript'>alert('officer has been registered!')</script>";
header('refresh:1 url=adminassign.php');

?>