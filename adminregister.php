<?php include('adminfunctions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin Registration</title>
    <link rel="stylesheet" type="text/css"
                    href="style.css">
</head>
 
<body>
    <div class="header">
        <h2>Register: Admin</h2>
    </div>

    <form method="post" action="adminData.php">
  
        <?php include('errors.php'); ?>
  
        <div class="input-group">
            <label>Enter Fullname:</label>
            <input type="text" name="fullname" value="<?php echo $fullname; ?>">
        </div>
        <div class="input-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Address:</label>
            <input type="address" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="input-group">
            <label>Enter Password:</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password:</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user"> Register </button>
        </div>
 
<p>
         Already having an account? <a href="adminlogin.php"> Login Here! </a> </p>