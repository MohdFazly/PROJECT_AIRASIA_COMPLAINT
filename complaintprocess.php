<?php
//Start session
 include ('complaintsession.php');
  if(!session_id())
  {
    session_start();
  }
include('dbconnect.php');
 $fuser=$_SESSION['fuser'];  //name
$fdesc = $_POST['fdesc'];
$flocation = $_POST['flocation'];
$ftype = $_POST['ftype'];

$sql1 = "INSERT INTO tb_complaint (comp_user, comp_desc, comp_location, comp_type, comp_status) 
VALUES ('$fuser','$fdesc','$flocation','$ftype','1')"; //status: pending
$result1 = mysqli_query($conn, $sql1);

if($result1)
{
    echo "<script> alert('Complaint submitted! ');window.location.href = 'homepagepublic.php'</script>";
    //header("Location: homepage.php?success=true");
}
else
{
    echo "<script> alert('Failed to submit complaint! ');window.location.href = 'homepage.php?fail=true'</script>";

}

mysqli_close($conn);

?>