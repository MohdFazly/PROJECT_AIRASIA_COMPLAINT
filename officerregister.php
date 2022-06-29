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
        <h2>Register: Officer</h2>
    </div>

    <form method="post" action="officerData.php">
  
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
            <input type="password" name="password">
        </div>
        
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user"> Register </button>
        </div>
 
<p>
         Already having an account? <a href="officerlogin.php"> Login Here! </a> </p>