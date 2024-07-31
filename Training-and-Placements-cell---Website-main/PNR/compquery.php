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
        <li><a href="compmain.php">Home</a></li>
        <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>
            <li><a  href="compquery.php">Queries</a></li>
        </ul>
    </nav>

    <form action="compqueryphpaction.php" method="post">
    <div class="row">
      
      <div class="col-lg-7">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-5">
                <p class="mb-0"><b>QUERIES</b></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Select Specialization</p>
              </div>
              <div class="col-sm-9">

                <div class="col-sm-9">
                <select id="cars" name="Specializat" value="<?php echo ($Specialization)?>" style="width:100%" required>
                  <option value="ALL">ALL</option>
                <option value="CS">CS</option>
                <option value="AI">AI</option>
                <option value="MnC">MnC</option>
                <option value="EEE">EEE</option>
              </select>
              </div>
              </div>
            </div>
            <hr>
                 
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Select Gender</p>
              </div>
              <div class="col-sm-9">
                <div class="col-sm-9">
                <select id="gend" name="Gend" value="<?php echo ($Gender)?>" required style="width:100%">
                    <option value="ALL">ALL</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-3">
        <p class="mb-0">Minimum CPI</p>
      </div>
      <div class="col-sm-9">
      <input type="text" name='CPI' value="0" style="width:75%" required>
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
         
        </div>
    </div>
    <div class="mb-5 list-group-item d-flex justify-content-center align-items-center ">
    </div>
      </div>
</body>
</html>