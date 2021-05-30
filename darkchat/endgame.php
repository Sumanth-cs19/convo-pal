<?php
$user=$_COOKIE["user"];
$friend=$_COOKIE["friend"];
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$sql="update friends set move='',player1='',box1='',box2='',box3='',box4='',box5='',box6='',box7='',box8='',box9='' where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
$res=mysqli_query($con,$sql);
?>