<?php include('adminfunctions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin Registration</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<ul>
  <li><a class="active" href="adminassign.php">Back</a></li>
</ul>
</ul>
        </div>
        <!-- Container wrapper -->
    </nav>
 
<!--Main Navigation-->
 
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
            <label>Hp Number:</label>
            <input type="hpnumber" name="hpnumber">
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
            <input type="passwordd" name="passwordd">
        </div>
        
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user"> Register </button>
        </div>
 
