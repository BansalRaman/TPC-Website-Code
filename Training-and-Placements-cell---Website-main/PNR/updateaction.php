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
            // echo $first_name;
            $RollNo=$_POST['RollNo'];
            // $password=$_POST['password'];
            // $confirm_password=$_POST['confirm_password'];
            $cname=$_POST['CName']; 
            $tenth=$_POST['tenth']; 
            $Gender=$_POST['Gender'];
            $Package=$_POST['Package'];
            $Specialization=$_POST['Specialization'];
            $Batch_year=$_POST['Batch_year'];
            // $password=$_POST['password'];
            $sde='false';
            if (isset($_POST['sde'])) {
                $sde='true';
            }
            $mang='false';
            if (isset($_POST['mang'])) {
                $mang='true';
            }
            $mach='false';
            if (isset($_POST['mach'])) {
                $mach='true';
            }
            $fin='false';
            if (isset($_POST['fin'])) {
                $fin='true';
            }
            $quant='false';
            if (isset($_POST['quant'])) {
                $quant='true';
            }
            $cons='false';
            if (isset($_POST['cons'])) {
                $cons='true';
            }
            $cor='false';
            if (isset($_POST['cor'])) {
                $cor='true';
            }
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $DOB=$_POST['DOB'];
            $twelve=$_POST['twelve'];
            $CPI=$_POST['CPI'];
            $Placed=$_POST['Placed'];
            // if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
                //    echo  "<h2>Only letters and white space allowed</h2>";
                // //    header("location: stureg.php");
            //    exit();
            // }
            // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //     echo "<h2>Invalid email format</h2>";
            //     exit();
            // }
            // if($password!=$confirm_password){
            //     echo "<h2>Password and Confirm password should be same</h2>";
            // //    header("location: stureg.php");
            //     exit();
            // }
            // if (strlen($password) < 8) {
                // //    echo  (window.alert("Password too short!"));
                // //    echo '<script>alert("Password too short!")</script>';
                // echo "Password too short!";
                // //    header("location: stureg.php");
                //     exit();
                // }
                
                // if (!preg_match("#[0-9]+#", $password)) {
                    //     echo "Password must include at least one number!";
                    // //    header("location: stureg.php");
                    //     exit();
                    // }
                    
                    // if (!preg_match("#[a-zA-Z]+#", $password)) {
                        //     echo "Password must include at least one letter!";
                        // //    header("location: stureg.php");
                        //     exit();
                        // }     
                        $no='2000';
                        // $sql ="update stureg set  values(NULL,'$RollNo','$Name','$password')";
                        $sql="update stuplaced set Placed='$Placed',CName='$cname',Package='$Package' where id=$id"; 
                        $s3="update stuDet set email='$email' , phone='$phone',DOB='$DOB',Gender='$Gender' where id=$id ";
                        $s4="update stuedu set Specialization='$Specialization', Batch_year='$Batch_year' , tenth='$tenth', twelve='$twelve',CPI='$CPI' where id=$id";
                        $s5="update stuarea set SDE='$sde',Management='$mang', ML='$mach', Fin='$fin', Quant='$quant' , Consult='$cons', core='$cor' where id=$id ";
                        $s7="Delete from  Placements where RollNo='$RollNo' ";
                        $s6="insert into  Placements values (NULL,'$Name','$RollNo','$cname',2000+ CONVERT( SUBSTRING('$RollNo',1,2) , UNSIGNED INTEGER) ,'$Gender')";
                        // // mysqli_query($conn,$s2);
                        mysqli_query($conn,$s3);
                        mysqli_query($conn,$s4);
                        mysqli_query($conn,$s5);
                        mysqli_query($conn,$s7);
                        mysqli_query($conn,$s6);
                        if(mysqli_query($conn,$sql)){
                            // echo ($cname);
                            // echo ($sde);
                            header("location: stuhome.php");
                // echo "<h2>Data Stored Successfully</h2>";
                // echo "<a href='login.php'><button>Login Now</button></a>";
            }
            else{
                echo "Error: ". mysqli_error($conn);
            }
            mysqli_close($conn);
    ?>
</body>
</html>