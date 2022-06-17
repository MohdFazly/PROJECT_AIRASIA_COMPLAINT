<?php 

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'projectairasia');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the usercomplaint() function if btn-success is clicked
if (isset($_POST['btn-success'])) {
	usercomplaint();
}

// REGISTER USER
function usercomplaint(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $fullname, $email,$comCategory,$comDescription;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$fullname    =  e($_POST['fullname']);
	$email       =  e($_POST['email']);
	$comCategory  =  e($_POST['comCategory']);
	$comDescription  =  e($_POST['comDescription']);

	// Performing insert query execution
        // here our table name is college
    $sql = "INSERT INTO usercomplaint  VALUES ('$fullname', '$email','$comCategory','$comDescription')";

	// form validation: ensure that the form is correctly filled
	if (empty($fullname)) { 
		array_push($errors, "fullname is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($comCategory)) { 
		array_push($errors, "Category is required"); 
	}
	if (empty($comDescription)) {
		array_push($errors, "Complaint is required");
	}

}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

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



// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}