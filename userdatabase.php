<?php

include("connection.php");

$sql="CREATE DATABASE user";

if(mysqli_query($con,$sql))
{
    echo "user database created succesfully";
}
else
{
    echo "error creating database". mysqli_error($con);
}