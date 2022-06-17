</head>
 
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
        ?>
    </center>
</body>
 
</html>