<?php

include('config.php'); 

if(isset($_GET['id']))
{
     $sql = "DELETE FROM usercomplaint WHERE id=".$_GET['id'];
     $mysqli->query($sql);
	 echo 'Deleted successfully.';
}


?>