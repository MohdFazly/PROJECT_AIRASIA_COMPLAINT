<?php    //HOMEPAGE ADMIN
session_start();
require 'config.php';
//$fullname = $_SESSION["full_name"];
//$fullname =$_SESSION['fullname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>ADMIN HOMEPAGE</title>

     
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ff2819;  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #757376;
}
</style>

<body>
<!--Main Navigation-->
<header>
        <!-- Navbar -->
        <!-- Navbar -->
     
    
            <!--
            <li><a href="image.png/homepage.php">
                <img src=""   />
            </a>      </li>          -->                          
            <!-- Search form -->
            
    
            <!-- Right links -->
           
            <!-- Notification dropdown -->
                <!-- Avatar -->
                <ul>
  <li><a class="active" href="adminassign.php">Home</a></li>
  <li><a href="officerregister.php">Register Officer</a></li>
  <li><a href="adminlogin.php">Logout</a></li>
</ul>
                 
                 
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
 
<!--Main Navigation-->
 
   
    
        
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 10px;">
    <div class="container pt-4" style="padding: 3rem;">

        <div class="row">
            <div class="col-lg col-md">
                <div class="card" style="min-height: 485px">
                <?php if (isset($_GET['success'])) { ?>  <br>   
                    <div class="alert alert-info text-center" style="font-size: 15px;text-align: center;color: green;"><?php echo "Successful!"; ?></div> <?php } ?>
                    
                    <?php if (isset($_GET['fail'])) { ?>  <br>   
                    <div class="alert alert-info text-center" style="font-size: 15px;text-align: center;color: red;"><?php echo "Failed!"; ?></div> <?php } ?>
                    <div class="card-header card-header-text">

                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

                    

                    <!--ASSIGN OFFICERRRRRRRR
                    

                    $sqlpic = "SELECT * FROM user ORDER BY role_id  ASC";
                    $result = mysqli_query($conn, $sqlpic);
                    while($row = mysqli_fetch_array($result)) {
                        if ($row["role_id"] == "3"){
                            echo "<option value=\"{$row['role_id']}\" selected=\"selected\">{$row['role_name']}</option>";
                    }
                        else {
                            echo "<option value=\"{$row['role_id']}\">{$row['role_name']}</option>";
                        }       }
                    ?> -->                
                </div>
                    <div class="card-content table-responsive p-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Complaint ID</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Flight Number</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>                    
                                    <th scope="col">Status</th>
                                    <th scope="col">Officer Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                
                             $sql = "SELECT * FROM usercomplaint"; 
                             $result = mysqli_query($conn, $sql);
                                   
                             while($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                                <form method="POST" action="adminAssignAction.php">
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['datetime']; ?></td>
                                    <td><?php $category = $row['comCategory']; echo $category; ?></td>
                                    <td><?php echo $row['flightNumber']; ?></td>
                                    <td><?php echo $row['fromm']; ?></td>
                                    <td><?php echo $row['too']; ?></td>
                                    <td><?php 
                                   
                                    echo $row['status'];
                                     ?></td> 
                                     <td>
                                     <?php

                                    $sqlpic5="SELECT of.fullname, of.id FROM officer of join categorydepartment cd on of.department_id = cd.department_id WHERE cd.category = '$category'" ;
                                    //echo $sqlpic5;
                                    $resultpic5 = mysqli_query($conn, $sqlpic5);
                                    ?> 
                                    
                                    
                                        <input type="hidden" name="complaint_id" value="<?php echo $row['id']; ?>">
                                        <select class="form-select" id="fullname" class="form-select" name="fullname" required="">
                                        <option> Hafizah </option>
                                         <option> Mardiana </option>
                                          <option> Khairun </option> 
                                    </select>
                              
                                 <td>
                                 <input type="submit" class="btn btn-outline-success" value="Assign"></input> </td>
                                 

                                 </form>
                                </td>                    
                                </tr> <?php } ?>
                            </tbody>
                        </table>
                    </div>
                     
                </div>
            </div>
            
            
        </div>
        </div>
    </div>
</main>

<!--Main layout-->
</body>

</html>


                            