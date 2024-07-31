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
    <title>Company Home</title>
</head>
    <style>
        .compa{
            padding: auto;
            background-color: red;
        }
    </style>

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
        <li><a  href="compmain.php">Home</a></li>
        <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>
            <li><a  href="compquery.php">Queries</a></li>
        </ul>
    </nav>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="profile.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $Name?></h5>
            <p class="text-muted mb-1"><?php echo $Field?></p>
            <br>
            <!-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
            <div class="d-flex justify-content-center mb-2">
              <a href="compupdate.php"><button type="button" class="btn btn-primary">Modify Details</button></a>
              <form action="logout.php" method="post">
              <button type="submit" class="btn btn-outline-primary ms-1">Log Out</button>
              </form>
            </div>
          </div>
        </div>
        
      </div>
      
        
        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <div class="row">
              <div class="col-sm-6">
                <p class="mb-0"><b> Company Details</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Company Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Name?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Description of field</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Field?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Email?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone No.</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Phone?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Company Website</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Website?></p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-12 compa"   >
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <p class="mb-0"><b> Minimum Qualification</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Minimum CPI</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $CPI?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Salary Range</p>
              </div>
              <div class="col-sm-9">
                <span class="text-muted mb-0"><?php echo $Salary_low?></span> &nbsp; - &nbsp;
                <span class="text-muted mb-0"><?php echo $Salary_high?></span>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mode of Initiative</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Mode?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Year</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $Year?></p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>