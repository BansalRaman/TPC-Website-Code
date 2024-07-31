<?php
session_start();
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="stuhome.css">
    <title>Student Queries</title>
</head>
<body>
 
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="college-logo">
				<img src="iitp2.png"/>
				<div class="college-text logo" style="padding-left:22px;">
                    <span style="font-size:20pt;">Training and Placement Cell</span><br /><span style="font-size:20pt;">Indian Institute of Technology Patna</span><br /><br />
				</div>
			</div>
        <ul>
            <li><a  href="stuhome.php">Home</a></li>
            <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>

            <li><a  href="studquery.php">Queries</a></li>
            <!-- <li><a href="#">iit patna</a></li> -->
            <!-- <li><a href="#CONTACTUS">Contact us</a></li> -->
        </ul>
    </nav>

    <form action="studqueryaction.php" method="post">
    <div class="row">
      
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
                <!-- <p class="mb-0">Full Name</p> -->
              </div>
              <div class="col-sm-5">
                <p class="mb-0"><b>QUERIES</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Select Field</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" '' style="width:80%" > -->

                <!-- <p class="text-muted mb-0"></p> -->
                <div class="col-sm-9">
                <!-- <input type="text" style="width:80%"> -->
                <select id="fiel" name="Field" value="" required style="width:100%">
                  <option value="all">ALL</option>
                  <option value="SDE">SDE</option>
                  <option value="Finance">Finance</option>
                <option value="Quant">Quant</option>
                <option value="Management">Management</option>
                  <option value="Machine Learning">Machine Learning</option>
                <option value="Consultancy">Consultancy</option>
                <option value="Core">Core</option>
              </select>
</div>
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Select Company</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" '' style="width:80%" > -->

                <!-- <p class="text-muted mb-0"></p> -->
                <div class="col-sm-9">
                <!-- <input type="text" style="width:80%"> -->
                <select id="fiel" name="Company" value="" required style="width:100%">
                  <option value="all">ALL</option>
                  <?php 
                         $dbhost="localhost";
                         $dbuser="root";
                         $dbpass="Vasudev@123";
                         $dbname="projectpnr";
                         
                         $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                         if($conn->connect_error){
                             die("Connection failed: ". $conn->connect_error ."\n");
                         }
                        // Select data from the table
                        $sql = "SELECT Name FROM compDet";
                        $result = mysqli_query($conn, $sql);
                        
                        // Create the dropdown
                        // echo "<select>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                        }
                        // echo "</select>";
                        
                        // Close the database connection
                        mysqli_close($conn);
                  ?>
              </select>
</div>
              </div>
            </div>
            <hr>
            
            <!-- <hr> -->
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Expected CTC</p>
              </div>
              <div class="col-sm-9">
              <!-- <p class="text-muted mb-0"></p> -->
              <input type="number" name='CTC' value="" style="width:75%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">CPI</p>
              </div>
              <div class="col-sm-9">
              <!-- <p class="text-muted mb-0"></p> -->
              <input type="text" name='CPI' value="" style="width:75%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="rang">
                  <span class="col-sm-9 ">
                    Year Range
                  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="col-sm-9">
                <input type="number" name='year_low' value="" style="width:25%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </span> &nbsp; - &nbsp;
              <span class="col-sm-9">
                <input type="number" name='year_high' value="" style="width:25%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </span>
              </div>
            </div>
            <hr>
            
        </div>
    </div>
    <div class="mb-5 list-group-item d-flex justify-content-center align-items-center ">
    <button type="submit" class="btn btn-primary">Show Results</button>
    </div>
      </div>
    </div>
  </div>
</section>
</form>
<?php 
                      $dbhost="localhost";
                      $dbuser="root";
                      $dbpass="Vasudev@123";
                      $dbname="projectpnr";
                      
                      $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                      if($conn->connect_error){
                          die("Connection failed: ". $conn->connect_error ."\n");
                      }
                    // Select data from the table
                    // $sq1='delete from Sturesult where RollNo!=".$RollNo".';
                    $sql = "SELECT  cName, CPI, Salary_low, Salary_high, Mode ,Field FROM Sturesult ";
                    $result = mysqli_query($conn, $sql);
                    // Create the dropdown
                    // echo "<select>";
                    $ctt="0";
                while ($row = mysqli_fetch_assoc($result)) {
                  $coname= $row['cName'];
                  // echo ($coname);
              $sq22 = "select count(*) as count1 from Placements where Placements.cName =  '$coname' ";
              $result1 = mysqli_query($conn, $sq22);
              $row1 = mysqli_fetch_assoc($result1);
              $sq23 = "select count(*) as count2 from Placements where Placements.cName =  '$coname' and Placements.Gender = 'Female' ";
              $result2 = mysqli_query($conn, $sq23);
                  $row2 = mysqli_fetch_assoc($result2);
                  $var1=$row1['count1'];
                  // echo ($var1);
                  $var2=$row2['count2'];
                  $ctt="1";
                    echo (' <div class="col-lg-4 col mx-auto ">
                    <div class="card mx-auto ">
                      <div class="card-body mx-auto align-items-center " >
                     
                        <a href="" class="text-reset ">
                          <p class=""><b>Company Name : </b> '.$coname.' </p>
                        </a>
                        <a href="" class="text-reset ">
                          <p class=""><b>Domain of Company : </b>'. $row['Field'] . '</p>
                        </a>
                        <a href="" class="text-reset ">
                          <p class=""><b>Minimum CPI : </b>'. $row['CPI'] . '</p>
                        </a>
                        <a href="" class="text-reset ">
                          <p class=""><b>Salary between : </b>'. $row['Salary_low'] . '- '. $row['Salary_high'] . '</p>
                        </a>
                        <a href="" class="text-reset ">
                          <p class=""><b>Mode of Interview : </b>'. $row['Mode'] . '</p>
                        </a>
                        <a href="" class="text-reset ">
                          <p class=""><b>Total No of student Placed : </b>'.$var1 . '</p>
                        </a>
                        <a href="" class="text-reset ">
                          <p class=""><b>Total No of Female student Placed : </b>'.$var2 . '</p>
                        </a>
                      </div>
                     
                    </div>
                  </div>');
                        // echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                    }
                    if($ctt=="0"){
                      echo (' <div class="col-lg-4 col mx-auto ">
                      <div class="card mx-auto ">
                        <div class="card-body mx-auto align-items-center " >
                            No Result Found !!
                        </div>
                       
                      </div>
                    </div>');
                    }
                    // echo "</select>";
                    
                    // Close the database connection
                    $sq4 = "delete from Sturesult";
           
                    mysqli_query($conn,$sq4);
                    mysqli_close($conn);

                  ?>

</body>
</html>