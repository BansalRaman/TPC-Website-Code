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
        <li><a  href="compmain.php">Home</a></li>
        <li><a href="https://www.iitp.ac.in/placement/placementsumm.php" target="_blank">Statistics</a></li>

            <li><a  href="compquery.php">Queries</a></li>
        </ul>
    </nav>

    <div class="row">
      
      <div class="col-lg-10">
        <div class="card mb-4">
          <div class="card-body">
            <div class="text-center">
  <div class="table-responsive overflow-hidden">
    <?php 
                    $dbhost="localhost";
                    $dbuser="root";
                    $dbpass="Vasudev@123";
                    $dbname="projectpnr";
                    
                    $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
                    if($conn->connect_error){
                        die("Connection failed: ". $conn->connect_error ."\n");
                    }
                    $sql1 = "SELECT Name, RollNo,email,CPI,Gender,Specialization,Package FROM compresult ";
                    $result = mysqli_query($conn, $sql1);
                    
                    $ct="0";
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($ct=="0"){
                            $ct="1";
                            echo (" <table class='table table-bordered'>
                            <thead>
                            <tr>
                            <th>Name</th>
                            <th>RollNo</th>
                            <th>Email</th>
                            <th>CPI</th>
                            <th>Gender</th>
                            <th>Specialization</th>
                            <th>Package</th>
                            </tr>
                            </thead>
                            <tbody>
                            ");
                        }
                    // else{

                        echo ("
                        <tr>
                        <td>". $row['Name'] ."</td>
                        <td>". $row['RollNo'] ."</td>
                        <td>". $row['email'] ."</td>
                        <td>". $row['CPI'] ."</td>
                        <td>". $row['Gender'] ."</td>
                        <td>". $row['Specialization'] ."</td>
                        <td>". $row['Package'] ."</td>
                        </tr>
                       
                      ");
                    }

                    if($ct=="0"){
                        echo "No Students matching given criteria<br><br>";
                    
                }
                else{
                    echo (" </tbody>");
                }

                
                $sq4 = "delete from compresult";
                
                mysqli_query($conn,$sq4);
                mysqli_close($conn);
                ?>
</div>
<br> <a href='compquery.php'> <button  class='btn btn-primary '>Try Again</button></a><br>
</div>
</body>
</html>