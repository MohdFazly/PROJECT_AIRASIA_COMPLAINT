<?php 
 
  if(!session_id()) 
  { 
    session_start(); 
  } 
include('config.php');
$id= ($_POST['id']);


$sql ="DELETE FROM usercomplaint WHERE id='$id' ";
if (!mysqli_query($conn,$sql)){
  die ('Error: ' .mysqli_error($conn));
}
echo "<script
type='text/jscript'>alert('Delete Complaint ')</script>";
header('refresh:1 url=status.php');
?>