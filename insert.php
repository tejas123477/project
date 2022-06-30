<?php


include("connection.php");

$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['fname'];


$sql="INSERT INTO user.userinfo(email,password,name) VALUES('$email','$password','$name')";



if(mysqli_query($con,$sql))
{
    echo "value inserted successfully";
}
else
{
    echo "not inserted";
}

?>

















?>