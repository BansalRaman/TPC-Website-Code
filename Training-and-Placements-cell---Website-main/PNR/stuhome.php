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
    <title>Student Home</title>
</head>
<body>
<?php
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="Vasudev@123";
        $dbname="projectpnr";
        $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
        if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error ."\n");
        }
        // $sql = "SELECT RollNo,tenth,Placed,CName FROM stuedu natural join stuplaced natural join stuReg where id=$id";
        // $sql = "SELECT RollNo,tenth,Placed,CName FROM (SELECT RollNo,tenth,Placed,CName FROM stuedu natural join stuplaced) natural join stuReg where id=$id";
        // // echo "dsjd";
        // $result = mysqli_query($conn,$sql);
        // $row = mysqli_fetch_assoc($result);
        // $Name=$row['Name'];
        // $RollNo=$row['RollNo'];
        // $placed=$row['Placed']; 
        // $cname=$row['CName']; 
// $id=10;
          // echo "$id";
// build the SQL query using INNER JOIN to join the two tables based on customer_id
$sql = "SELECT stuReg.Name, stuReg.password,stuReg.RollNo, stuDet.email,stuDet.phone,stuDet.DOB,stuEdu.Specialization,stuEdu.Batch_year,stuEdu.tenth ,stuEdu.twelve ,stuEdu.CPI,stuDet.Gender,stuPlaced.Placed,stuPlaced.CName,stuPlaced.Package,stuarea.SDE,stuarea.Management,stuarea.ML,stuarea.Fin,stuarea.Quant,stuarea.Consult,stuarea.core
FROM stuReg
JOIN stuplaced
ON stuReg.RollNo = stuplaced.RollNo
JOIN stuEdu
ON stuEdu.RollNo = stuplaced.RollNo
JOIN stuDet
ON stuDet.RollNo = stuplaced.RollNo
JOIN stuarea
ON stuarea.RollNo = stuplaced.RollNo
WHERE stuReg.id = $id";

// execute the query
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Name=$row['Name'];
$RollNo=$row['RollNo'];
$cname=$row['CName']; 
$tenth=$row['tenth']; 
$Gender=$row['Gender']; 
$Package=$row['Package'];
$Specialization=$row['Specialization'];
$Batch_year=$row['Batch_year'];
$password=$row['password'];
$email=$row['email'];
$phone=$row['phone'];
$DOB=$row['DOB'];
$twelve=$row['twelve'];
$CPI=$row['CPI'];
$Placed=$row['Placed'];
$sde=$row['SDE'];
$mang=$row['Management'];
$mach=$row['ML'];
$fin=$row['Fin'];
$quant=$row['Quant'];
$cons=$row['Consult'];
$cor=$row['core'];
    ?>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="college-logo">
				<img src="iitp2.png"/>
				<div class="college-text logo" style="padding-left:22px;">
					<!-- <span style="font-size:18pt;">Placements, IIT PATNA</span><br /> -->
                    <span style="font-size:20pt;">Training and Placement Cell</span><br /><span style="font-size:20pt;">Indian Institute of Technology Patna</span><br /><br />
					<!-- <h3>Indian Institute of Technology Patna<br /><span style="font-size:18pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h3> -->
				</div>
			</div>
        <!-- <label class="logo">Placements, IIT PATNA</label> -->
        <ul>
            <li><a class="active" href="stuhome.php">Home</a></li>
            <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>

            <li><a  href="studquery.php">Queries</a></li>
            <!-- <li><a href="#">iit patna</a></li> -->
            <!-- <li><a href="#CONTACTUS">Contact us</a></li> -->
        </ul>
    </nav>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="profile.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $Name?></h5>
            <p class="text-muted mb-1"><?php echo $RollNo?></p>
            <br>
            <!-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
            <div class="d-flex justify-content-center mb-2">
              <a href="update_profile.php"><button type="button" class="btn btn-primary">Update Profile</button></a>
              <form action="logout.php" method="post">
              <button type="submit" class="btn btn-outline-primary ms-1">Log Out</button>
              </form>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-center p-7 interest">
                <!-- <i class="fas fa-globe fa-lg text-warning"></i> -->
                <div class="mb-0 ml-5  " style="color: #f00000;"><b>Area of Interest</b></d>
                <!-- <p >Area of Interest</p> -->
              </li>
              <?php
                  // for($x=0;$x<7;$x++){
                    if($sde=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>SDE</p>
                      </li>';
                    }
                    if($mang=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>Management</p>
                      </li>';
                    }
                    if($mach=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>Machine Learning</p>
                      </li>';
                    }
                    if($fin=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>Finance</p>
                      </li>';
                    }
                    if($quant=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>Quant</p>
                      </li>';
                    }
                    if($cons=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>Consultancy</p>
                      </li>';
                    }
                    if($cor=="true"){
                      echo '<li class="list-group-item d-flex justify-content-center align-items-center p-3">
                      <p>Core</p>
                      </li>';
                    }
                  // }
              ?>
             
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Name?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Roll No</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $RollNo?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $email?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone No.</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $phone?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Gender?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">DOB</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $DOB?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-3"><b> Education Details</b>
                </p>
                <div class="progress rounded mb-2" style="height: 5px; width: 100%">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="row  ">
              <div class="col-md-4">
                     Specialization
              </div>
              <div class="col-sm-8">
              <?php echo $Specialization?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
              <div class="row  ">
              <div class="col-md-4">
                     Batch
              </div>
              <div class="col-sm-8">
              <?php echo $Batch_year?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
              <div class="row  ">
              <div class="col-md-4">
                     10th
              </div>
              <div class="col-sm-8">
              <?php echo $tenth?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
              <div class="row  ">
              <div class="col-md-4">
                     12th
              </div>
              <div class="col-sm-8">
              <?php echo $twelve?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
              <div class="row  ">
              <div class="col-md-4">
                     CPI
              </div>
              <div class="col-sm-8">
              <?php echo $CPI?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-3"><b> Placement Scenario</b>
                </p>
                <div class="progress rounded mb-2" style="height: 5px; width: 100%">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            
              <div class="row  ">
              <div class="col-md-4">
                    Placed?
              </div>
              <div class="col-sm-8">
              <?php echo $Placed?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
              <div class="row  ">
              <div class="col-md-4">
                     Company Name
              </div>
              <div class="col-sm-8">
              <?php echo $cname?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row  ">
              <div class="col-md-4">
                     Package
              </div>
              <div class="col-sm-8">
              <?php echo $Package?>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            
            </div>
          </div>
          <!-- <dv class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4">
                </p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </dv> -->
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>