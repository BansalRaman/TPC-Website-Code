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
    <div class="row">
              <div class="col-sm-3">
                <b>Company Tables Name</b>
              </div>
              <div class="col1">
                <select id="cars" name="Table" value="" required style="width:60%">
                  <option value="compdet">compdet</option>
                <option value="compedu">compedu</option>
                <option value="compreg">compreg</option>
                <option value="placements">placements</option>
              </select>
              </div>
            </div>
        <hr>
  <div class="container">
    <h1 class="mt-5"> Run SQL Query </h1>
    <form id="query-form" method="post">
      <div class="form-group">
        <label for="query-input" class="font-weight-bold"> <b> Enter your SQL query:</b></label>
        <textarea id="query-input" name="query" class="form-control" required></textarea>
      </div>
      <div class="butt">
      <button type="submit" class="btn btn-primary">Run Query</button>
      </div>
    </form>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Connect to the database
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="Vasudev@123";
        $dbname="projectpnr";

        $conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
        if($conn->connect_error){
            die("Connection failed: ". $conn->connect_error ."\n");
        }
        $query = $_POST['query'];
        $result = $conn->query($query);

        if ($result&&$result->num_rows > 0) {
          echo "<div id='query-results' class='table-responsive'><table class='table table-bordered'><thead><tr>";
          while ($field = $result->fetch_field()) {
            echo "<th>" . $field->name . "</th>";
          }
          echo "</tr></thead><tbody>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
          }
          echo "</tbody></table></div>";
        } else {
          echo "<p>No results found.</p>";
        }

        // Close the database connection
        $conn->close();
      }
    ?>

  </div>


</body>
</html>