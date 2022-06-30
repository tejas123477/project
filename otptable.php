<?php


include("connection.php");


$sql= "CREATE TABLE otp (email varchar(20),otpgen varchar(10))";

if(mysqli_query($con,$sql))
{
    echo "otp table created succesfully";
}
else{
    echo "table not created" . mysqli_error($con);
}
?>