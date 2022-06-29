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
<div class="" id="department" method="post">
				<h4>Department<hr /></h4>
				<form class="form" action="dataUserComplaint.php" method="POST" style="width:100%;">
					<span id="span2">Department List:</span>
					<select id="DepartmentList" name="DepartmentList" style="width:30%;border-radius:12px;height:37px;"required> 
						<option>Department Finance</option>
						<option>Department Lanside Operation </option>
						<option>Department Information Management</option>
						
					</select>
					<br /><br />
					<span id="span2">Fullname:</span>
					<input type="text" name="fullname" class="form-control in2" placeholder="Please Enter you fullname..."required><br />
					<span id="span2">Date:</span>
					<input type="date" name="date" class="form-control in2" placeholder="Please Enter you fullname..."required><br />
					<span id="span">Details description:</span>
					<textarea name="detailDescription" class="form-control in1" placeholder="Feel free to write" style="height:200px;"required></textarea><br />
					
					<input type="submit"  class="btn btn-success" name="btn-success" style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="Send"><br />
				</form>
			</div>
</body>
</html>