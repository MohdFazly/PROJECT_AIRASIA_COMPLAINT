<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
	<title>Make Complaint</title>

</head> 
<body> 
    <?php 
    session_start(); 

    ?> 
	
	<form class="form" action="dataUserComplaint.php" method="POST" style="width:100%;">
	<br>

    <div class="" id="makecomplaint" method="post">
				<h4>Make a Complaint<hr /></h4>
				
				<div>
				<span id="span">Name:</span>
				<?php  if (isset($_SESSION['user'])) : ?>
					 <input name="fullname" value="<?php echo $_SESSION['user']['fullname']; ?>" > </div>
					
					 <div>
					<div>
					<br>
					<span id="span">Email:</span>
						<i  style="color: #888;">
						<input name="email" value="<?php echo $_SESSION['user']['email']; ?>" > </div>
						<br>

					</div>
                    <?php endif ?>

			
					<span id="span2">Detail:</span>
					<select id="comCategory" name="comCategory" style="width:30%;border-radius:12px;height:37px;"required> 
						<option>Other</option>
						<option>Refund</option>
						<option>Reschedule</option>
                        <option>Food</option>
						<option>Mishandled Baggage</option>
					</select>

					<br /><br /><span id="span2" style="margin-left:20px;">Flight number:</span> 
     				<input type="text" name="flightNumber" style="width:60%;border-radius:5px;height:37px; border:.8px solid aqua;" placeholder="Please Enter your flight number"required><br /><br />
	 				
					<span id="span2" style="margin-left:20px;">From:</span> 
     				<input type="text" name="fromm" style="width:60%;border-radius:5px;height:37px; border:.8px solid aqua;" placeholder="Please Enter your departure location"required><br /><br />
					
					<span id="span2" style="margin-left:20px;">To:</span> 
     				<input type="text" name="too" style="width:60%;border-radius:5px;height:37px; border:.8px solid aqua;" placeholder="Please Enter your arrival location"required><br /><br />
				
					<span id="span">Complaint Description:</span>
					<textarea name="comDescription" class="form-control in1" placeholder="Feel free to write. Your complaint is secure." style="height:200px;"required></textarea><br />
					
					<input type="submit"  class="btn btn-success" name="btn-success" style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="Send">

					<button type="submit"  class="btn btn-success" name="btn-success" style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="Status"><br />
				</form>
			</div>
  
</head>
<body>
