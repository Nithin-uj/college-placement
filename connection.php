<?php
    $sn = "localhost";
    $username="root";
    $password="Nithin@20";
    $database="elect_bill1";
    $con=mysqli_connect($sn,$username,$password,$database);

    if($con){
        //echo"connection success ";
    }
else{
    echo"connection failed";
}
?>