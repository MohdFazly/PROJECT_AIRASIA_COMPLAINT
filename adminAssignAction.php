<?php 
 
  if(!session_id()) 
  { 
    session_start(); 
  } 
include('config.php');
$id= ($_POST['id']);
$officer_fullname= ($_POST['officer_fullname']);

$sql ="UPDATE usercomplaint SET officer_fullname='$officer_fullname' WHERE id='$id' ";
if (!mysqli_query($conn,$sql)){
  die ('Error: ' .mysqli_error($conn));
}
echo "<script
type='text/jscript'>alert('Complaint has been submitted!')</script>";
header('refresh:1 url=adminassign.php');
?>