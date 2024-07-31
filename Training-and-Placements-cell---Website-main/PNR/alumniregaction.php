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
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];
            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
               echo  "<h2>Only letters and white space allowed</h2>";
               exit();
            }
            
            if($password!=$confirm_password){
                echo "<h2>Password and Confirm password should be same</h2>";
                exit();
            }
            if (strlen($password) < 8) {
            echo "Password too short!";
                exit();
            }
        
            if (!preg_match("#[0-9]+#", $password)) {
                echo "Password must include at least one number!";
                exit();
            }
        
            if (!preg_match("#[a-zA-Z]+#", $password)) {
                echo "Password must include at least one letter!";
                exit();
            }     

            $sql ="Insert into Alumreg values(NULL,'$Name','$RollNo','$password')";
            $s2="Insert into AlumDet values (NULL,'$Name',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
            mysqli_query($conn,$s2);
            if(mysqli_query($conn,$sql)){
                header("location: alumnuslogin.php");
            }
            else{
                echo "Error: ". mysqli_error($conn);
            }
            mysqli_close($conn);
    ?>
</body>
</html>