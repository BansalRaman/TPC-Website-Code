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
    <title>Company Update</title>
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
      $sql = "SELECT Alumreg.Name, Alumreg.RollNo,Alumdet.Gender,Alumreg.password, AlumDet.Name, AlumDet.Company, AlumDet.CTC, AlumDet.Email, AlumDet.Phone, AlumDet.Position, AlumDet.Location, AlumDet.Working, AlumDet.CPI 
      FROM Alumreg
      JOIN AlumDet
      ON AlumDet.id = Alumreg.id
      WHERE Alumreg.id = $id";
      
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $Name=$row['Name'];
      $RollNo=$row['RollNo'];
      $Password=$row['password']; 
      $Company=$row['Company']; 
      $Gender=$row['Gender']; 
      $CTC=$row['CTC'];
      $Email=$row['Email'];
      $Phone=$row['Phone'];
      $Position=$row['Position'];
      $Location=$row['Location'];
      $Working=$row['Working'];
      $CPI=$row['CPI'];
      ?>
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
            <li><a  href="alumnimain.php">Home</a></li>
            <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>
            <li><a  href="faq1.php">Recruitment Process</a></li>
        </ul>
    </nav>
    <form action="alumniupdateaction.php" method="post">
    <div class="row">
      
      <div class="col-lg-10">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
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
                <input type="text" name='Name' value="<?php echo ($Name) ?>" style="width:80%" readonly>
              
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">RollNo</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name='RollNo' value="<?php echo ($RollNo) ?>" style="width:80%" readonly>
               
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <input type="email" name='Email' value="<?php echo ($Email)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone No.</p>
              </div>
              <div class="col-sm-9">
                <input type="number" name='Phone' value="<?php echo ($Phone)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <select id="cars" name="Gender" value="<?php echo ($Gender)?>" required style="width:80%">
                  <option value="">None</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Company Name</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name='Company' value="<?php echo ($Company)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">CTC</p>
              </div>
              <div class="col-sm-9">
                <input type="number"  name='CTC' value="<?php echo ($CTC)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Position</p>
              </div>
              <div class="col-sm-9">
                <input type="text"  name='Position' value="<?php echo ($Position)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Location</p>
              </div>
              <div class="col-sm-9">
                <input type="text"  name='Location' value="<?php echo ($Location)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Working Tenure</p>
              </div>
              <div class="col-sm-9">
                <input type="text" placeholder="yyyy-yyyy"  name='Working' value="<?php echo ($Working)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">CPI</p>
              </div>
              <div class="col-sm-9">
                <input type="text"  name='CPI' value="<?php echo ($CPI)?>" style="width:80%">
              </div>
            </div>
            <hr>

    <div class="mb-5 list-group-item d-flex justify-content-center align-items-center ">
    <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
    </div>
    </div>
  </div>
</section>
</form>
</body>
</html>