<?php 

include('makecomplaint1.php');
include('config.php');
 $fullname=$_SESSION['fullname'];
 $sql = "SELECT * FROM usercomplaint WHERE fullname ='$fullname'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
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
    <title>Make Complaint</title>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FF2819;  
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
     
    
            <!-- GAMBARRRR
            <li><a href="../student.php">
                <img src=""   />
            </a>      </li>    -->                                  
            <!-- Search form -->
            
    
            <!-- Right links -->
           
            <!-- Notification dropdown -->
                <!-- Avatar -->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="makecomplaint1.php">Add Complaint</a></li>
  <li><a href="login.php">Logout</a></li>
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

                        

                   
                    
                    
                </div>
                    <div class="card-content table-responsive p-2">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Complaint ID</th>
                                    <th scope="col">FullName</th>
                                   <!-- <th scope="col"></th> submitted date - tambah dalam tb_complaint -->
                                    <th scope="col">Email</th>
                                    <th scope="col">Complaint Category</th>
                                    <th scope="col">Flight Number</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Complaint Description</th>
                                    <th scope="col">Status</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                {
                                    $sql = "SELECT * FROM usercomplaint INNER JOIN statuss ON usercomplaint.id = statuss.status_name "; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['comCategory']; ?></td>
                                    <td><?php echo $row['flightNumber']; ?></td>
                                    <td><?php echo $row['fromm']; ?></td>
                                    <td><?php echo $row['too']; ?></td>
                                    <td><?php echo $row['comDescription']; ?></td>
                                    <td><?php 
                                    $type = $row['status'];
                                    $sql = "SELECT * FROM statuss INNER JOIN usercomplaint ON usercomplaint.comp_type = tb_comptype.type_id WHERE tb_complaint.comp_type='$type'"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($result);
                                    echo $row3['type_desc']; ?></td>
                                    <td><?php 
                                    if($row['comp_status']=='1')
                                    {
                                        echo "Pending";
                                    }
                                    else
                                    {
                                        echo "Completed";

                                    }

                                     ?></td>
                                  
                        
                                </tr>
                               <?php }  
                                }
                               
                                
  

                                ?> 
                                

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