<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'projectairasia');

// variable declaration
$email    = "";
$errors   = array(); 


function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

    // LOGIN Officer
if (isset($_POST['login_officer'])) {
    $off_fullname = ($_POST['officer_fullname']);
    $password = ($_POST['passwordd']);

  
  
    if (count($errors) == 0) {
        
        $query = "SELECT * FROM usercomplaint WHERE officer_fullname='$off_fullname' AND officer_fullname='$password' LIMIT 1";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['officer_fullname'] = $off_fullname;
          $user = mysqli_fetch_assoc($results);
          $_SESSION['user'] = $user;
          header('location: department.php');
        

        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
  }
  
  ?>


