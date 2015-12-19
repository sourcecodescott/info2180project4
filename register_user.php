<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("INSERT INTO user (firstname, lastname, password, username)VALUES('$fname', '$lname', '$password', '$username')");
header("location: admin.php");
mysql_close($con);
?>