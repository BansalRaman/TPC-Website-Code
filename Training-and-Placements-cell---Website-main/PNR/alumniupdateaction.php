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
                        $Name=$_POST['Name'];
                        $RollNo=$_POST['RollNo'];
                        $Email=$_POST['Email']; 
                        $Phone=$_POST['Phone'];
                        $Company=$_POST['Company']; 
                        $CTC=$_POST['CTC']; 
                        $Gender=$_POST['Gender']; 
                        $Position=$_POST['Position'];
                        $Location=$_POST['Location'];
                        $Working=$_POST['Working'];
                        $CPI=$_POST['CPI'];
                        $sql="update AlumDet set Company='$Company', CTC = '$CTC',  Phone = '$Phone', Position='$Position', Location = '$Location', Working='$Working',Gender='$Gender', CPI = '$CPI',Email='$Email' where id=$id"; 
                        $s7="Delete from  Placements where RollNo='$RollNo' ";
                        $s6="insert into  Placements values (NULL,'$Name','$RollNo','$Company',2000+ CONVERT( SUBSTRING('$RollNo',1,2) , UNSIGNED INTEGER), '$Gender')";
                        mysqli_query($conn,$s7);
                        mysqli_query($conn,$s6);
                        if(mysqli_query($conn,$sql)){
                            header("location: alumnimain.php");
            }
            else{
                echo "Error: ". mysqli_error($conn);
            }
            mysqli_close($conn);
    ?>
</body>
</html>