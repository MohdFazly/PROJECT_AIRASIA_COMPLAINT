<?php 
 
  if(!session_id()) 
  { 
    session_start(); 
  } 
include('config.php'); 
 
$sql="INSERT INTO officerdepartment (id, datetime, comCategory, flightNumber, fromm, too, status, officer_fullname)
values ('$_POST[id]','$_POST[datetime]','$_POST[comCategory]','$_POST[flightNumber]', '$_POST[fromm]','$_POST[too]','$_POST[status]'),'$_POST[officer_fullname]'";
	if (!mysqli_query($conn,$sql)){
		
		die ('Error: ' .mysqli_error($conn));
	}
 
  
    echo "<script> alert('Officer assigned! ');window.location.href = 'adminassign.php'</script>"; 


 
 
?>