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
            <label>Hp Number:</label>
            <input type="hpnumber" name="hpnumber">
        </div>
        <div class="input-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <form class="form" action="datadepartment.php" method="POST" style="width:100%;">
					<span id="span2">Department List:</span>
					<select id="departmentList" name="departmentList" style="width:50%;border-radius:12px;height:37px;"required> 
						<option> Finance </option>
						<option> Lanside Operation </option>
						<option> Baggage </option>
					</select>
        <div class="input-group">
            <label>Enter Password:</label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user"> Register </button>
        </div>
 
<p>
         Already having an account? <a href="officerlogin.php"> Login Here! </a> </p>