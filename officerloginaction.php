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
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['passwordd']);
  
  
    if (count($errors) == 0) {
        
        $query = "SELECT * FROM officer WHERE email='$email' AND passwordd='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION[''] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: home_officer.php');
        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
  }
  
  ?>


