<?php
session_start();
// $id = $_SESSION['id'];
if(isset( $_SESSION['logged_in'] ))
{
  
}
else{
    header("location: adminlogin.php");
}
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
    /* Custom styles */
    #query-form {
      margin-top: 20px;
    }
    #query-input {
      height: 200px;
    }
    #query-results {
      margin-top: 20px;
    }
    .butt{
        padding-top: 10px;
        text-align:center;
    }
    .row{
        width: 70%;
    }
    .btn{
        background-color: light-green;
    }
    .btn:hover{
        background-color: yellow;
    }
    .col1{
        width:40%;
    }
  </style>
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
        <li><a  href="adminhome.php">Home</a></li>
            <li><a href="adminlogout.php">Logout</a></li>
        </ul>
    </nav>
    
    <div class="raman1">
            <div class="btn-div1">
                <a href="adminstu.php"> <button  class="btn"> Student</button></a>
            </div>
            
            <div class="btn-div1">
                <a href="admincomp.php"><button  class="btn"> Company</button></a> 
                </div>
                <div class="btn-div1">
                       <a href="adminalum.php"><button  class="btn" > Alumnus</button></a> 
                    </div>
                <div class="btn-div1">
                       <a href="adminmerge.php"><button  class="btn" > Merged Query</button></a> 
                    </div>
                </div>
            </div>

</body>
</html>