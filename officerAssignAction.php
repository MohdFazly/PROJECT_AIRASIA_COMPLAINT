<?php 
 
  if(!session_id()) 
  { 
    session_start(); 
  } 
include('config.php');
$id= ($_POST['id']);
$status= ($_POST['status']);

$sql ="UPDATE usercomplaint SET status='$status' WHERE id='$id' ";
if (!mysqli_query($conn,$sql)){
  die ('Error: ' .mysqli_error($conn));
}
echo "<script
type='text/jscript'>alert('Update complaint have been submitted ')</script>";
header('refresh:1 url=department.php');
?>