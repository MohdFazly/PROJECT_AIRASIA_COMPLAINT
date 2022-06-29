<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="main.css">

<?php include('functions.php') ?>


<form method="post" action="register.php">
	<?php echo display_error(); ?>
</form>

	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<style>

.header {
	width: 40%;
	margin: 30px auto 0px;
	color: white;
	background: #da4646;
	text-align: center;
	border: 1px solid #e35300;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 5px;
}

.btn {
	padding: 10px;
	font-size: 15px;
	color: rgb(246, 7, 17);
	background: #e83408;
	border: none;
	border-radius: 5px;
}
</style>

<div class="header">
	<h2>Register: User</h2>
</div>
<form method="post" action="registerData.php">
	<div class="input-group">
		<label>Fullname:</label>
		<input type="fullname" name="fullname" value=""required>
	</div>
	<div class="input-group">
		<label>Email:</label>
		<input type="email" name="email" value=""required>
	</div>
	<div class="input-group">
		<label>Address:</label>
		<input type="address" name="address" value=""required>
	</div>
	<div class="input-group">
		<label>Date:</label>
		<input type="date" name="date" value=""required>
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="password" name="password_1"required>
	</div>
	<div class="input-group">
		<label>Confirm password:</label>
		<input type="password" name="password_2"required>
	</div>
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a sign up? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>