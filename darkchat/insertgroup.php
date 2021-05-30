<?php
$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$con=mysqli_connect($_host,$_user,$_pass,$_db);
$b=0;
$friend1=$_COOKIE["user"];
$group_name=$_COOKIE["group_name"];
$rows=(int)$_POST["row"];
for($i=1;$i<=$rows;$i++){
$checkid=$i+100;
$check=$_POST[(string)$checkid];
if($check){
$friend2=$_POST[(string)$i];

$sql="INSERT INTO groups (group_name,members) values ('$group_name','$friend2')";
$result=mysqli_query($con,$sql);

}

}
header("Location:home.php");
?>