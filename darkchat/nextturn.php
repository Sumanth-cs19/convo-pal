<?php

$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$move="";
$user=$_COOKIE["user"];
$friend=$_COOKIE["friend"];
$sql="select * from friends where where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
while($rows=mysqli_fetch_assoc($res)){
$move=$rows["move"];
}
}

$sql="update friends set move='$friend' where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";

$res=mysqli_query($con,$sql);
?>