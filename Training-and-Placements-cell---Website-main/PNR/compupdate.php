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
      $sql = "SELECT compreg.Name, compreg.email, compreg.password, compDet.Name,compDet.Field,compDet.email,compDet.phone,compDet.website,compEdu.Name, compEdu.CPI, compEdu.Salary_low, compEdu.Salary_high, compEdu.Mode, compEdu.year
      FROM compreg
      JOIN compEdu
      ON compEdu.id = compreg.id
      JOIN compDet
      ON compDet.id = compreg.id
      WHERE compreg.id = $id";
      
      // execute the query
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $Email=$row['email'];
      $Name=$row['Name'];
      $Password=$row['password']; 
      $Field=$row['Field']; 
      $Phone=$row['phone'];
      $Website=$row['website'];
      $CPI=$row['CPI'];
      $Salary_low=$row['Salary_low'];
      $Salary_high=$row['Salary_high'];
      $Mode=$row['Mode'];
      $Year=$row['year'];
//   ?>
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
            <li><a class="active" href="compmain.php">Home</a></li>
            <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>
            <li><a  href="compquery.php">Queries</a></li>
        </ul>
    </nav>

    <form action="companyupdateaction.php" method="post">
    <div class="row">
      
      <div class="col-lg-12">
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
                <p class="mb-0">Company Name</p>
              </div>
              <div class="col-sm-9">

                <p class="text-muted mb-0"><?php echo ($Name) ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Description of field</p>
              </div>
              <div class="col-sm-9">
                <select id="fiel" name="Field" value="<?php echo ($Field)?>" required>
                  <option value="">None</option>
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
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?php echo ($Email) ?></p>
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
                <p class="mb-0">Company Website</p>
              </div>
              <div class="col-sm-9">
                <input type="text"  name='Website' value="<?php echo ($Website)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-1">
              </div>
              <div class="col-sm-5">
                <p class="mb-0"><b>Eligibility Criteria</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Minimum CPI</p>
              </div>
              <div class="col-sm-9">
                <input type="text" name='CPI' value="<?php echo ($CPI)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Salary Range</p>
              </div>
              <div class="col-sm-9">
                <input type="number" name='Salary_low' value="<?php echo ($Salary_low)?>" style="width:80%">
                <input type="number" name='Salary_high' value="<?php echo ($Salary_high)?>" style="width:80%">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mode of Interview</p>
              </div>
              <div class="col-sm-9">
                <select id="cars" name="Mode" value="<?php echo ($Mode)?>" required>
                  <option value="Offline">Offline</option>
                <option value="Online">Online</option>
                <option value="Partial">Partial</option>
              </select>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Year</p>
              </div>
              <div class="col-sm-9">
                <input type="number" name='Year' value="<?php echo ($Year)?>" style="width:80%">
              </div>
            </div>
            <hr>
        </div>
    </div>
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