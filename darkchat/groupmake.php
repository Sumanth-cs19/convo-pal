<?php
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$sql="INSERT INTO GROUPS VALUES('FAMILY','srihari')";
$res=mysqli_query($con,$sql);
$sql="INSERT INTO GROUPS VALUES('FAMILY','jayashree')";
$res=mysqli_query($con,$sql);
$sql="INSERT INTO GROUPS VALUES('FAMILY','thanu')";
$res=mysqli_query($con,$sql);
?>