<?php


$user='root';
$pass='';
$db='user';

$con = mysqli_connect('localhost', $user , $pass , $db) or
die("connection failed".mysqli_connect_error());

?>