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
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
               echo  "<h2>Only letters and white space allowed</h2>";
            //    header("location: stureg.php");
               exit();
            }
            // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //     echo "<h2>Invalid email format</h2>";
            //     exit();
            // }
            if($password!=$confirm_password){
                echo "<h2>Password and Confirm password should be same</h2>";
            //    header("location: stureg.php");
                exit();
            }
            if (strlen($password) < 8) {
            //    echo  (window.alert("Password too short!"));
            //    echo '<script>alert("Password too short!")</script>';
            echo "Password too short!";
            //    header("location: stureg.php");
                exit();
            }
        
            if (!preg_match("#[0-9]+#", $password)) {
                echo "Password must include at least one number!";
            //    header("location: stureg.php");
                exit();
            }
        
            if (!preg_match("#[a-zA-Z]+#", $password)) {
                echo "Password must include at least one letter!";
            //    header("location: stureg.php");
                exit();
            }     

            $sql ="Insert into stureg values(NULL,'$RollNo','$Name','$password')";
            $s2="Insert into stuplaced values (NULL,'$RollNo',NULL,NULL,NULL)";
            $s3="Insert into stuDet (RollNo,Name) values ('$RollNo','$Name')";
            $s4="Insert into stuedu (RollNo) values ('$RollNo')";
            $s5="Insert into stuarea (RollNo) values ('$RollNo')";
            mysqli_query($conn,$s2);
            mysqli_query($conn,$s3);
            mysqli_query($conn,$s4);
            mysqli_query($conn,$s5);
            if(mysqli_query($conn,$sql)){
                header("location: studentlogin.php");
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