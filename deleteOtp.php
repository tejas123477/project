<?php
include("connection.php");
$sql = "DELETE FROM otp WHERE Time <= DATE_SUB(NOW(), INTERVAL 1 MINUTE)";
if(mysqli_query($con,$sql))
{
    echo "success!!";
}
?>