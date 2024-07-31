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
      $sql = "SELECT stuReg.Name, stuReg.password,stuReg.RollNo, stuDet.email,stuDet.phone,stuDet.DOB,stuDet.Gender,stuEdu.Specialization,stuEdu.Batch_year,stuEdu.tenth ,stuEdu.twelve ,stuEdu.CPI,stuPlaced.Placed,stuPlaced.CName,stuPlaced.Package
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

    <form action="updateaction.php" method="post">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-center p-7 interest">
                <!-- <i class="fas fa-globe fa-lg text-warning"></i> -->
                <div class="mb-0 ml-5  " style="color: #f00000;"><b>Area of Interest</b></d>
                <!-- <p >Area of Interest</p> -->
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <input type="checkbox" name='sde' value='0'>
                <!-- <i class="fab fa-github fa-lg" style="color: #333333;"></i> -->
                <p class="mb-0">SDE</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <input type="checkbox" name='mang' value='0'>
                <!-- <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i> -->
                <p class="mb-0">Management</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <input type="checkbox" name='mach' value='0'>
                <!-- <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i> -->
                <p class="mb-0">Machine Learning</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <input type="checkbox" name='fin' value='0'>
                <!-- <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i> -->
                <p class="mb-0">Finance</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <input type="checkbox" name='quant' value='0'>
                <!-- <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i> -->
                <p class="mb-0">Quant</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <!-- <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i> -->
                <input type="checkbox" name='cons' value='0'>
                <p class="mb-0">Consultancy</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <!-- <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i> -->
                <input type="checkbox" name='cor' value='0'>
                <p class="mb-0">Core</p>
              </li>
            </ul>
          </div>
        </div>
        <br>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-center p-7 interest">
                <!-- <i class="fas fa-globe fa-lg text-warning"></i> -->
                <div class="mb-0 ml-5  " style="color: #f00000;"><b>Placement Scenario</b></d>
                <!-- <p >Area of Interest</p> -->
              </li>
              </ul>
              <hr>
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Placed?</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" style="width:80%"> -->
                <select id="cars" name="Placed" value="<?php echo ($Placed)?>" required>
                  <option value="">None</option>
                <option value="YES">Yes</option>
                <option value="NO">No</option>
              </select>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
             
              <hr>
              <div class="row align-items-center " >
              <div class="col-sm-3">
                <p class="mb-0">Company Name</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name='CName' value="<?php echo ($cname)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
              <hr>
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Package</p>
              </div>
              <div class="col-sm-9">
                <input type="number" name='Package' value="0" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
                <!-- <p class="mb-0">Full Name</p> -->
              </div>
              <div class="col-sm-5">
                <p class="mb-0"><b>Profile Details</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" '' style="width:80%" > -->
                <input type="text" name='Name' value="<?php echo ($Name) ?>" style="width:80%" readonly>

                <!-- <p class="text-muted mb-0"></p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Roll No.</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" name='roll' style="width:80%"> -->
                <input type="text" name='RollNo' value="<?php echo ($RollNo)?>" style="width:80%" readonly>
                <!-- <p class="text-muted mb-0"></p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" name='email' value="<?php echo ($email)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone No.</p>
              </div>
              <div class="col-sm-9">
                <input type="number" name='phone' value="<?php echo ($phone)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" style="width:80%"> -->
                <select id="cars" name="Gender" value="<?php echo ($Gender)?>" required>
                  <option value="">None</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">DOB</p>
              </div>
              <div class="col-sm-9">
                <input type="date"  name='DOB' value="<?php echo ($DOB)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-1">
                <!-- <p class="mb-0">Full Name</p> -->
              </div>
              <div class="col-sm-5">
                <p class="mb-0"><b>Educational Details</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Specialization</p>
              </div>
              <div class="col-sm-9">
                <!-- <input type="text" style="width:80%"> -->
                <select id="cars" name="Specialization" value="<?php echo ($Specialization)?>" required>
                  <option value="">None</option>
                <option value="CSE">CSE</option>
                <option value="AI">AI</option>
                <option value="MnC">MnC</option>
                <option value="EEE">EEE</option>
              </select>
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Batch year</p>
              </div>
              <div class="col-sm-9">
                <input type="number" name='Batch_year' value="<?php echo ($Batch_year)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">10th marks</p>
              </div>
              <div class="col-sm-9">
                <input type="text" placeholder="Out of 100" name='tenth' value="<?php echo ($tenth)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">12th marks</p>
              </div>
              <div class="col-sm-9">
                <input type="text" placeholder="Out of 100" name='twelve' value="<?php echo ($twelve)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">CPI</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name='CPI' value="<?php echo ($CPI)?>" style="width:80%">
                <!-- <p class="text-muted mb-0">example@example.com</p> -->
              </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="mb-5 list-group-item d-flex justify-content-center align-items-center ">
    <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
        <!-- <di class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </di> -->
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>