<?php    //HOMEPAGE ADMIN
if(!session_id())
{
  session_start();
}
require 'config.php';
$officer_fullname = $_SESSION["officer_fullname"];
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
    <title>DEPARTMENT HOMEPAGE</title>

     
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
  <li><a class="active" href="department.php">Home</a></li>
  <li><a href="officerlogin.php">Logout</a></li>
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
                    <h4 class="card-title"> Managed By: <?php echo $_SESSION['user']['officer_fullname']; ?>

                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;

                                    
                </div>
                    <div class="card-content table-responsive p-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Flight Number</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>                                       
                                    <th scope="col">Status</th>
                                    <th scope="col">Update from Airasia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                
                             $sql2 = "SELECT * FROM usercomplaint WHERE officer_fullname='$officer_fullname'"; 
                             $result2 = mysqli_query($conn, $sql2);
                                   
                             while($row2 = mysqli_fetch_assoc($result2))
                                {
                                ?>
                                <form method="POST" action="officerAssignAction.php">
                                <tr>
                                    <td><?php echo $row2['fullname']; ?></td>
                                    <td><?php echo $row2['datetime']; ?></td>
                                    <td><?php $category = $row2['comCategory']; echo $category; ?></td>
                                    <td><?php echo $row2['flightNumber']; ?></td>
                                    <td><?php echo $row2['fromm']; ?></td>
                                    <td><?php echo $row2['too']; ?></td>
                                    <td><?php 
								   ?> 
								   
									   <input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
									   <select class="form-select" id="status" value="status" name="status" required>
									   <option> PROGGRESS </option>
									   <option> COMPLETED </option>
								   </select>
								   
                                   <td><?php 
								   ?>  <input type="text" id="update_staff" name="update_staff" placeholder="Update feedback.."required><br /><br /> <td>
                                 <input type="submit" class="btn btn-outline-success" value="Update"></input> </td>
                                 

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


                            