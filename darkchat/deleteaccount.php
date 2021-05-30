<?php
$user=$_COOKIE["user"];
$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$con=mysqli_connect($_host,$_user,$_pass,$_db);
$sql="DELETE FROM details WHERE username='$user'";
$res=mysqli_query($con,$sql);
setcookie("user","",time()-3600);
header("Location:welcome.php");
?>