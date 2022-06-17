</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "projectairasia");

		
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $fullname =  $_REQUEST['fullname'];
        $email = $_REQUEST['email'];
        $comCategory =  $_REQUEST['comCategory'];
        $comDescription = $_REQUEST['comDescription'];

		$fullnameErr = $emailErr = $comCategoryErr = $comDescriptionErr = '';
		$fullname = $email = $comCategory = $comDescription = '';
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["fullname"])) { 
			$fullnameErr = "fullname is required"; 
		} else {
			$fullname = test_input($_POST["fullname"]);
		  }
		if (empty($_POST["email"])) { 
			$emailErr = "email is required"; 
		} else {
			$email = test_input($_POST["email"]);
		  }
		if (empty($_POST["comCategoryErr"])) { 
			$comCategoryErr = "Detail is required"; 
		} else {
			$comCategory = test_input($_POST["comCategory"]);
		  }
		  if (empty($_POST["comDescription"])) { 
			$comDescriptionErr = "complaint is required"; 
		} else {
			$comDescription = test_input($_POST["comDescription"]);
		  }
         
	}
	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

        // Performing insert query execution
        // here our table name is usercomplaint
        $sql = "INSERT INTO usercomplaint  VALUES ('$fullname',
            '$email','$comCategory','$comDescription')";

         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$fullname\n $email\n "
                . "$comCategory\n $comDescription");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
	    
        // Close connection
        mysqli_close($conn);
        
	// return user array from their id
	function getUserById($id){
	global $db;
	$query = "SELECT * FROM usercomplaint WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	}

		
		?>

		<div class="nav-item items"  style="margin-bottom:50%;">
			<a class="btn btn-danger" title="Click to Another Complaint " href="makecomplaint.php">Make Another Complaint</a>
		</div>
    </center>
</body>
 
</html>