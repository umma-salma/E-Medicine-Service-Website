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

  
    <title>Medicines</title>
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
      <div class="main-part mt-3" style="width: 100%;">

        <!--Add Modal-->
        <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:  #0f3057;color: white;">
              <h5 class="modal-title" id="exampleModalLabel">Add Medicine Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form name="myform" method="POST" style="color: rgb(105, 98, 98);">

              <div class="modal-body">

                  <div class="form-group">
                      <label>Medicine ID</label>
                      <input type="text" name="DrugID" autocomplete="off" class="form-control" placeholder="Enter ID">
                  </div>
                  <div class="form-group">
                      <label>Medicine Name</label>
                      <input type="text" name="DrugName" autocomplete="off" class="form-control" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                      <label>Form</label>
                      <input type="text" name="Form" autocomplete="off" class="form-control" placeholder="Enter Form">
                  </div>
                  <div class="form-group">
                      <label>Strength</label>
                      <input type="text" name="Strength" autocomplete="off" class="form-control" placeholder="Enter Strength">
                  </div>
                  <div class="form-group">
                      <label>Indication</label>
                      <input type="text" name="Indication" autocomplete="off" class="form-control" placeholder="Enter Indication">
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

      if(isset($_POST['DrugID'])){
          $DrugID=$_POST['DrugID'];
          }
        else{
          echo "";
        }

      if(isset($_POST['DrugName'])){
          $DrugName=$_POST['DrugName'];
          }
        else{
          echo "";
        }
      if(isset($_POST['Form'])){
        $Form=$_POST['Form'];
        }
        else{
          echo "";
        }
      if(isset($_POST['Strength'])){
          $Strength=$_POST['Strength'];
        }
        else{
          echo "";
        }

      if(isset($_POST['Indication'])){
          $Indication=$_POST['Indication'];
          }
        else{
          echo "";
        }

      if(isset($_POST["submit"]))
      {
        if($DrugID!="" && $DrugName!="")
        {

          $query = "INSERT INTO medinfo VALUES ('$DrugID','$DrugName', '$Form', '$Strength','$Indication')";

          if (mysqli_query($conn, $query)) {
             echo " <h3> Added! </h3>";

          }
        }

        else{
        echo" <h3> All files required </h3>";
        }
      }
      mysqli_close($conn);


      ?>
          </div>
        </div>
      </div>

      <div class="container-fluid">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Medicines
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData">
                    Add New Medicine
                  </button>
          </h6>
        </div>

<!--  find medicines -->

    <div class="drug-store">
      <div class="card-header py-3">
      <h2 class="m-0 font-weight-bold text-primary">Find medicine</h2>
        <form name="myform" method="POST">
          <table>
            <tr>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button1" value="A" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button2" value="B" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button3" value="C" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button4" value="D" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button5" value="E" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button6" value="F" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button7" value="G" /></span>
              </td>
              </tr>
          </table>
          <table>
            <tr>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button8" value="H" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button9" value="I" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button10" value="J" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button11" value="K" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button12" value="L" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button13" value="M" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button14" value="N" /></span>
              </td>
              </tr>
          </table>
          <table>
            <tr>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button15" value="O" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button16" value="P" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button17" value="Q" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button18" value="R" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button19" value="S" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button20" value="T" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button21" value="U" /></span>
              </td>
              </tr>
          </table>
          <table>
            <tr>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button22" value="V" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button23" value="W" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button24" value="X" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button25" value="Y" /></span>
              </td>
              <td>
                <span><input class="btn btn-primary" type="submit" name="button26" value="Z" /></span>
              </td>
            </tr>
          </table>
        </form>
    </div>
        </div>

   <!-- end of find medicines -->

<div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Name </th>
                  <th> DELETE </th>
                </tr>
              </thead>
              <tbody>
                <?php
              $conn = mysqli_connect("localhost", "root", "", "medicine");

                        if(isset($_POST["delete_btn"]))
                        {
                          $id = $_POST['delete_id'];
                          $query = "DELETE FROM medinfo WHERE DrugName='$id' ";
                          $query_run = mysqli_query($conn, $query);

                          if($query_run)
                          {
                              echo "Deleted!";
                          } 
                        }
                        mysqli_close($conn);
                      ?>
           <?php
           function AlphabetSearch($k)
          {
              $conn = mysqli_connect("localhost", "root", "", "medicine");
              $disp="select * from medinfo";
              $result=mysqli_query($conn,$disp);
              if(mysqli_num_rows($result) > 0)        
              {
                while($row=mysqli_fetch_array($result))
                {
                  if(substr($row['DrugName'],0,1)==$k)
                  {
                  ?>
                  <tr>
                    <td> <?php echo $row['DrugID']; ?></td>
                    <td> <?php echo $row['DrugName']; ?></td>
                    <td>
                      <form action="" method="post">
                          <input type="hidden" name="delete_id" value="<?php echo $row['DrugName']; ?>">
                          <button type="submit" name="delete_btn" class="btn btn-danger" style="background-color: #0f3057 ;color: white;"> DELETE</button>
                        </form>
                    </td>
                    </tr>
                    
                  <?php
                  }
                }
              }
            else {
                  echo "No Record Found";
              }
              mysqli_close($conn);
            }
      ?>

      <?php
    if(isset($_POST['button1']))
    {
      AlphabetSearch("A");
    }
    else if(isset($_POST['button2']))
    {
      AlphabetSearch("B");
    }
    else if(isset($_POST['button3']))
    {
      AlphabetSearch("C");
    }
    else if(isset($_POST['button4']))
    {
       AlphabetSearch("D");
    }
    else if(isset($_POST['button5']))
    {
       AlphabetSearch("E");
    }
    else if(isset($_POST['button6']))
    {
       AlphabetSearch("F");
    }
    else if(isset($_POST['button7']))
    {
       AlphabetSearch("G");
    }
    else if(isset($_POST['button8']))
    {
       AlphabetSearch("H");
    }
    else if(isset($_POST['button9']))
    {
       AlphabetSearch("I");
    }
    else if(isset($_POST['button10']))
    {
       AlphabetSearch("J");
    }
    else if(isset($_POST['button11']))
    {
       AlphabetSearch("K");
    }
    else if(isset($_POST['button12']))
    {
       AlphabetSearch("L");
    }
    else if(isset($_POST['button13']))
    {
       AlphabetSearch("M");
    }
    else if(isset($_POST['button14']))
    {
       AlphabetSearch("N");
    }
    else if(isset($_POST['button15']))
    {
       AlphabetSearch("O");
    }
    else if(isset($_POST['button16']))
    {
       AlphabetSearch("P");
    }
    else if(isset($_POST['button17']))
    {
       AlphabetSearch("Q");
    }
    else if(isset($_POST['button18']))
    {
       AlphabetSearch("R");
    }
    else if(isset($_POST['button19']))
    {
       AlphabetSearch("S");
    }
    else if(isset($_POST['button20']))
    {
       AlphabetSearch("T");
    }
    else if(isset($_POST['button21']))
    {
       AlphabetSearch("U");
    }
    else if(isset($_POST['button22']))
    {
       AlphabetSearch("V");
    }
    else if(isset($_POST['button23']))
    {
       AlphabetSearch("W");
    }
    else if(isset($_POST['button24']))
    {
       AlphabetSearch("X");
    }
    else if(isset($_POST['button25']))
    {
       AlphabetSearch("Y");
    }
    else if(isset($_POST['button26']))
    {
       AlphabetSearch("Z");
    }
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
