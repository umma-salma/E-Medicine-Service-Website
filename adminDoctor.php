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

  
    <title>Doctors</title>
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

      <!--Display all data-->
      <div class="main-part" style="width: 100%;">

        <!--Add Modal-->
        <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:  #0f3057;color: white;">
              <h5 class="modal-title" id="exampleModalLabel">Add Doctor Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form name="myform" method="POST" style="color: rgb(105, 98, 98);">

              <div class="modal-body">

                  <div class="form-group">
                      <label>Doctor ID</label>
                      <input type="text" name="DocID" autocomplete="off" class="form-control" placeholder="Enter ID">
                  </div>
                  <div class="form-group">
                      <label>Doctor Name</label>
                      <input type="text" name="DocName" autocomplete="off" class="form-control" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                      <label>Speciality</label>
                      <select name="DocSpeciality" class="form-control" id="" style="color:  rgb(105, 98, 98);">
                        <option value="Speciality">Speciality</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Endocrinologist">Endocrinologist</option>
                        <option value="Gastroenterologist">Gastroenterologist</option>
                        <option value="Gynocologist">Gynocologist</option>
                        <option value="Medicine Doctor">Medicine Doctor</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Peditrician">Peditrician</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Doctor Email</label>
                      <input type="email" name="DocEmail" autocomplete="off" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                      <label>Doctor Phone No.</label>
                      <input type="text" name="DocPhone" autocomplete="off" class="form-control" placeholder="Enter Phone No.">
                  </div>
              
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" value="Submit" class="btn btn-primary" style="background-color: #0f3057 ;color: white;">Save</button>
              </div>
            </form>
      <?php

          $conn = mysqli_connect("localhost", "root", "", "medicine");


          if (!$conn) {
            die("Connection failed: ". mysqli_connect_error());
          }

          if(isset($_POST['DocID'])){
            $DocID=$_POST['DocID'];
          }

          else{
            echo "";
          }

          if(isset($_POST['DocName'])){
            $DocName=$_POST['DocName'];
          }

          else{
            echo "";
          }

          if(isset($_POST['DocSpeciality'])){
            $DocSpeciality=$_POST['DocSpeciality'];
          }

          else{
            echo "";
          }

          if(isset($_POST['DocEmail'])){
            $DocEmail=$_POST['DocEmail'];
          }

          else{
            echo "";
          }

          if(isset($_POST['DocPhone'])){
            $DocPhone=$_POST['DocPhone'];
          }

          else{
            echo "";
          }

          if(isset($_POST["submit"]))
          {
            if($DocID!="" && $DocName!="" && $DocSpeciality!="" && $DocEmail!="" && $DocPhone!="")
            {
              $query = "INSERT INTO docinfo VALUES ('$DocID', '$DocName', '$DocSpeciality','$DocEmail', '$DocPhone')";

              if (mysqli_query($conn, $query)) {
                 echo " <h3> Added! </h3>";
              }
            }

            else{
              echo" <h3> All fields are required! </h3>";
            }
          }
        mysqli_close($conn);

      ?>
          </div>
        </div>
      </div>


      <div class="container-fluid mt-3">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Doctors
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData">
                    Add New Doctor
                  </button>
          </h6>
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Name </th>
                  <th> Speciality </th>
                  <th> DELETE </th>
                </tr>
              </thead>
              <tbody>
                <?php
              $conn = mysqli_connect("localhost", "root", "", "medicine");

                        if(isset($_POST["delete_btn"]))
                        {
                          $id = $_POST['delete_id'];
                          $query = "DELETE FROM docinfo WHERE DocID='$id' ";
                          $query_run = mysqli_query($conn, $query);

                          if($query_run)
                          {
                              echo "Deleted!";
                          } 
                        }
                        mysqli_close($conn);
                      ?>
           <?php
              $conn = mysqli_connect("localhost", "root", "", "medicine");
              $disp="select * from docinfo";
              $result=mysqli_query($conn,$disp);
              if(mysqli_num_rows($result) > 0)        
              {
              while($row=mysqli_fetch_array($result))
              {
                ?>
                <tr>
                  <td> <?php echo $row['DocID']; ?></td>
                  <td> <?php echo $row['DocName']; ?></td>
                  <td> <?php echo $row['DocSpeciality']; ?></td>
                  <td>
                    <form action="" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $row['DocID']; ?>">
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
