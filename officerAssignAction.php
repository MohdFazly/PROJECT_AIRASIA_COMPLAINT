<?php 
 
  if(!session_id()) 
  { 
    session_start(); 
  } 
include('config.php');
$id= ($_POST['id']);
$status= ($_POST['status']);
$up_staff= ($_POST['update_staff']);

$sql ="UPDATE usercomplaint SET status='$status' , update_staff='$up_staff' WHERE id='$id' ";
if (!mysqli_query($conn,$sql)){
  die ('Error: ' .mysqli_error($conn));
}
echo "<script
type='text/jscript'>alert('Update complaint have been submitted ')</script>";
header('refresh:1 url=department.php');
?>