<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAP.css">
    <!--bootstrap-->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="shortcut icon" href="./images/favicon.png" />

  
    <title>Dashboard</title>
</head>
<body>
    <header class="page-header">
        <nav>
        <!-- logo -->
        <a class="logo-name" href="adminP.php">WEBMED</a>

          <ul class="admin-menu">
            <li class="menu-heading">
              <h3>Admin</h3>
            </li>
            <li>
              <a href="adminDoctor.php">
                <span>Doctors</span>
              </a>
            </li>
            <li>
              <a href="adminMedicine.php">
                <span>Medicines</span>
              </a>
            </li>
            <li>
              <a href="appointment.php">
                
                <span>Appointments</span>
              </a>
            </li>
            <li>
              <a href="subscriber.php">
                
                <span>Subscribers</span>
              </a>
            </li>
            <li>
              <a href="admin.php">
               
                <span>Blogs</span>
              </a>
            </li>           
            
          </ul>
        </nav>
      </header>
  


      <div class="main-part" style="width: 100%;">
      <div class="container-fluid mt-3">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Subscriber
          </h6>
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Email </th>
                  <th> DELETE </th>
                </tr>
              </thead>
              <tbody>
                <?php
              $conn = mysqli_connect("localhost", "root", "", "newsletter");

                        if(isset($_POST["delete_btn"]))
                        {
                          $email = $_POST['email'];
                          $query = "DELETE FROM subscribe WHERE email='$email' ";
                          $query_run = mysqli_query($conn, $query);

                          if($query_run)
                          {
                              echo "Deleted!";
                          } 
                        }
                        mysqli_close($conn);
                      ?>
           <?php
              $conn = mysqli_connect("localhost", "root", "", "newsletter");
              $disp="select * from subscribe";
              $result=mysqli_query($conn,$disp);
              $id=1;
              if(mysqli_num_rows($result) > 0)        
              {
              while($row=mysqli_fetch_array($result))
              {
                ?>
                <tr>
                  <td> <?php echo $id++; ?></td>
                  <td> <?php echo $row['email']; ?></td>
                  <td>
                    <form action="" method="post">
                        <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger" style="background-color: #0f3057 ;color: white;"> DELETE</button>
                      </form>
                  </td>
                  </tr>
                  
                <?php
              }
            }
            else {
                  echo "No Record Found";
              }
              mysqli_close($conn);
      ?>
              
              </tbody>
            </table>

          </div>
        </div>
      </div>

      </div>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
     
</body>
</html>
