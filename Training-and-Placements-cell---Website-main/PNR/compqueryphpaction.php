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
            $special=$_POST['Specializat'];
            $CPI=$_POST['CPI'];
            $Gender=$_POST["Gend"];
            
            echo ($Gender);
            echo ($special);
            $t="ALL";
        if( $special==$t){
            if($Gender==$t){
                $sql1="Select studet.Name,studet.RollNo,studet.email, stuedu.Specialization,stuedu.CPI, studet.Gender,stuplaced.Package from studet JOIN stuedu ON studet.RollNo = stuedu.RollNo JOIN stuplaced ON stuplaced.RollNo = studet.RollNo where stuedu.CPI>= $CPI ";
            }
            else{
                $sql1="Select studet.Name,studet.RollNo,studet.email, stuedu.Specialization,stuedu.CPI,studet.Gender,stuplaced.Package from studet  JOIN stuedu ON studet.RollNo = stuedu.RollNo JOIN stuplaced ON stuplaced.RollNo = studet.RollNo where stuedu.CPI>= $CPI AND  studet.Gender='$Gender'";
            }
        }
        else{
            if($Gender==$t){
                $sql1="Select studet.Name,studet.RollNo,studet.email, stuedu.Specialization,stuedu.CPI,studet.Gender,stuplaced.Package from studet JOIN stuedu ON studet.RollNo = stuedu.RollNo JOIN stuplaced ON stuplaced.RollNo = studet.RollNo where stuedu.CPI>= $CPI AND  stuedu.Specialization='$special' ";
            }
            else{
                $sql1="Select studet.Name,studet.RollNo,studet.email, stuedu.Specialization,stuedu.CPI,studet.Gender,stuplaced.Package from studet JOIN stuedu ON studet.RollNo = stuedu.RollNo JOIN stuplaced ON stuplaced.RollNo = studet.RollNo where stuedu.CPI>= $CPI AND studet.Gender='$Gender' AND stuedu.Specialization='$special' ";
            }
        }
            $result1 = mysqli_query($conn, $sql1); 
            if($result1){
                echo 'he';
            }
            else{
                echo 'None';
            }
           while ($row = mysqli_fetch_assoc($result1)) {
               $Name1=$row['Name'];
               $RollNo1=$row['RollNo'];
               $email1=$row['email']; 
               $cpi1=$row['CPI'];
               $spec=$row['Specialization'];
               $Gender1=$row['Gender'];
               $pkg1=$row['Package'];
               $sq2 = "insert into compresult values(NULL,'$Name1','$RollNo1','$email1','$cpi1','$Gender1','$spec','$pkg1')";
               mysqli_query($conn,$sq2);
            }

            header("location: compqueryresult.php ");

            mysqli_close($conn);
    ?>
</body>
</html>