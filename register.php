<!DOCTYPE html>
<html>
<head>

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
	margin: 50px auto 0px;
	color: white;
	background: #da4646;
	text-align: center;
	border: 1px solid #e35300;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

.input-group {
	margin: 10px 0px 10px 0px;
}
</style>

<div class="header">
	<h2>Register: User</h2>
</div>
<form method="post" action="register.php">
	<div class="input-group">
		<label>Fullname:</label>
		<input type="fullname" name="fullname" value=""required>
	</div>
	<div class="input-group">
		<label>Email:</label>
		<input type="email" name="email" value=""required>
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="password" name="password_1"required>
	</div>
	<div class="input-group">
		<label>Confirm password:</label>
		<input type="password" name="password_2"required>
	</div>
	<div class="Bregister">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a sign up? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>