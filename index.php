<?php 
	include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    //...

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

<style>
	input{
		margin:20px;
	}
</style>

</head>
<body>

<nav class="navbar-nav navbar-expand-sm bg-danger">
		<div class="nav-item item1" style="margin-left:5%">
				<h2 onclick='window.open("index.php");' style="cursor:pointer">AirAsia Complaint System</h2>
		</div>

		</nav>
		<div id="pic" style="float:left;background-size:cover;position :absolute;opacity:0.7">
			<img src="AirAsiaLogo.jpg" width="100%" height="92%">
		</div>
		<div id="main" class="container" style="position:relative;">
	
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="loginlogo.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['fullname']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['email']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">Logout</a>
					</small>

					</div>
				<div style="width:50%" >
				<a class="btn btn-danger" style="float:right;padding-left:30px;padding-right:30px;margin:10px;" href="makecomplaint1.php">MAKE COMPLAINT</a>
				</div>

				<?php endif ?>
			</div>
		</div>
	</div>

<?php
    function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
?>
		 
 </body>		
</html>		