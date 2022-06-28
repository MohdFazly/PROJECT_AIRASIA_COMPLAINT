
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

$sql="INSERT INTO department (departmentList ,fullname ,detailDescription)
values ('$_POST[departmentList]','$_POST[fullname]','$_POST[detailDescription]')";
	if (!mysqli_query($conn,$sql))
    {
		die ('Error: ' .mysqli_error($conn));
	}
echo "<script
type='text/jscript'>alert('Action has been taken!')</script>";
header('refresh:1 url=department.php');
?>
