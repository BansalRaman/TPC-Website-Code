
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
        $myemail = mysqli_real_escape_string($conn,$_POST['email']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        if($myemail=='tpc123@iitp.ac.in'&& $mypassword=='0987654321q'){
            session_start();
            $_SESSION['logged_in'] = true;
            header("location: adminhome.php");
        }
        else{
            echo "<b>Your Email or Password is invalid</b><br/><br/>";
            echo "<a href='adminlogin.php'><button>Login Again</button></a>";
        }
        ?>
</body>
</html>