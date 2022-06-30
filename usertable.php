<?php

include("connection.php");

$sql= "CREATE TABLE userinfo (email varchar(20),password varchar(30),name varchar(15))";

if (mysqli_query($con , $sql))
{
    echo "table created successfully";
}
else
{
    echo "error creating tale" . mysqli_error($con);
}

?>