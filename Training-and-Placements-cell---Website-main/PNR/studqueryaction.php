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
            $CTC=$_POST['CTC'];
            // // echo $first_name;
            $yearl=$_POST['year_low'];
            $yearh=$_POST['year_high'];
            $Field=$_POST['Field'];
            $CPI=$_POST['CPI'];
            $Company=$_POST['Company'];
            
            $tt="all";
            if( $Field==$tt){
                if( $Company==$tt){
                    $sql ="Select compEdu.Name,compdet.Field, compEdu.CPI, compEdu.Salary_low, compEdu.Salary_high, compEdu.Mode, compEdu.year from compEdu JOIN compDet ON compEdu.Name = compDet.Name where  $CTC<=compEdu.Salary_high AND compEdu.year>=$yearl AND compEdu.year<=$yearh AND $CPI>=compEdu.CPI ";
                }
                else{
                    $sql ="Select compEdu.Name,compdet.Field, compEdu.CPI, compEdu.Salary_low, compEdu.Salary_high, compEdu.Mode, compEdu.year from compEdu JOIN compDet ON compEdu.Name = compDet.Name where  $CTC<=compEdu.Salary_high AND compEdu.year>=$yearl AND compEdu.year<=$yearh AND $CPI>=compEdu.CPI AND compEdu.Name = '$Company' ";
                }
            }
            else{
                if( $Company==$tt){
                    $sql ="Select compEdu.Name,compdet.Field, compEdu.CPI, compEdu.Salary_low, compEdu.Salary_high, compEdu.Mode, compEdu.year from compEdu JOIN compDet ON compEdu.Name = compDet.Name where  $CTC<=compEdu.Salary_high AND compEdu.year>=$yearl AND compEdu.year<=$yearh AND $CPI>=compEdu.CPI AND compDet.Field='$Field' ";
                }
                else{
                    $sql ="Select compEdu.Name,compdet.Field, compEdu.CPI, compEdu.Salary_low, compEdu.Salary_high, compEdu.Mode, compEdu.year from compEdu JOIN compDet ON compEdu.Name = compDet.Name where  $CTC<=compEdu.Salary_high AND compEdu.year>=$yearl AND compEdu.year<=$yearh AND $CPI>=compEdu.CPI AND compEdu.Name = '$Company' AND compDet.Field='$Field'  ";
                }
            }
            $result1 = mysqli_query($conn, $sql); 
            if($result1){
                echo 'he';
                while ($row = mysqli_fetch_assoc($result1)) {
                    $cname1=$row['Name']; 
                    $cpi1=$row['CPI'];
                    $sal_low=$row['Salary_low'];
                    $sal_high=$row['Salary_high'];
                    $mode1=$row['Mode'];
                    $year1=$row['year'];
                    $Field1=$row['Field'];
                    $sq2 = "insert into Sturesult values(NULL,NULL,NULL,'$cname1','$cpi1','$sal_low','$sal_high','$mode1','$year1',NULL,'$Field1')";
                    mysqli_query($conn,$sq2);
                 }
                 
                 header("location: studquery.php ");
                }
            else{
                // echo 'NOne';
                header("location: studquery.php ");
            }
            // $row = mysqli_fetch_assoc($result1);
            // $Name1 = isset($row['StuName']) ? count($row['StuName']) : NULL;
        //     $Name1=$row['StuName'];
        //     $RollNo1=$row['RollNo'];
        //     $cname1=$row['cName']; 
        //     $cpi1=$row['CPI'];
        //     $sal_low=$row['Salary_low'];
        //     $sal_high=$row['Salary_high'];
        //     $mode1=$row['Mode'];
        //     $year1=$row['year'];
        //     $Gender1=$row['Gender'];
        //     $Field1=$row['Field'];
        //         echo ("$Name1");

        //    $sq3 = "delete from Sturesult";
           
        //    mysqli_query($conn,$sq3);
          

            // $result = mysqli_query($conn, $sq2);
            // echo ($result);
            // $row = mysqli_fetch_assoc($result);

            // while ($row = mysqli_fetch_assoc($result)) {
            //     echo 'hello';
            //     echo "<option value='" . $row['cName'] . "'>" . $row['cName'] . "</option>";
            // }
            // $s2="Insert into stuplaced values (NULL,'$RollNo',NULL,NULL,NULL)";
            // $s3="Insert into stuDet (RollNo,Name) values ('$RollNo','$Name')";
            // $s4="Insert into stuedu (RollNo) values ('$RollNo')";
            // $s5="Insert into stuarea (RollNo) values ('$RollNo')";
            // mysqli_query($conn,$sq2);
            // echo ("$Name1");


            // mysqli_query($conn,$s3);
            // mysqli_query($conn,$s4);
            
            // mysqli_query($conn,$s5);
            // if(mysqli_query($conn,$sq2)){
                // header("location: studquery.php ");
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         echo 'hello';
            //         echo "<option value='" . $row['cName'] . "'>" . $row['cName'] . "</option>";
            //     }
            //     echo "<h2>Data Stored Successfully</h2>";
            //     echo "<a href='login.php'><button>Login Now</button></a>";
            // }
            // else{
            //     echo "Error: ". mysqli_error($conn);
            // }
            mysqli_close($conn);
    ?>
</body>
</html>