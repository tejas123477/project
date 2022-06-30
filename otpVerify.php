<?php
include("connection.php");
$enterOTP = $_POST['otp'];
$sql = "SELECT * from otp where $enterOTP = otp";
$res = mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
    echo "Verified!!";
}
else
{
    echo "Incorrect OTP!!";
}
?>