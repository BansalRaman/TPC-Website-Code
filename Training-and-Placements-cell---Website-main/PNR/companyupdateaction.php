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
    <title>Document</title>
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
            $Field=$_POST['Field']; 
            $Phone=$_POST['Phone'];
            $Website=$_POST['Website'];
            $CPI=$_POST['CPI'];
            $Salary_low=$_POST['Salary_low'];
            $Salary_high=$_POST['Salary_high'];
            $Mode=$_POST['Mode'];
            $Year=$_POST['Year'];
                        $s3="update compDet set phone='$Phone',Field='$Field', website='$Website' where id=$id ";
                        $s4="update compEdu set CPI='$CPI', Salary_low='$Salary_low' , Salary_high='$Salary_high', Mode='$Mode', year='$Year' where id=$id ";
                        mysqli_query($conn,$s4);
                        if(mysqli_query($conn,$s3)){
                            header("location: compmain.php");
            }
            else{
                echo "Error: ". mysqli_error($conn);
            }
            mysqli_close($conn);
    ?>
</body>
</html>