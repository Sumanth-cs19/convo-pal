<?php
$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$conn=mysqli_connect($_host,$_user,$_pass,$_db);
$group_name=$_POST["group_name"];
$user=$_COOKIE["user"];

$check="SELECT * FROM groups WHERE group_name='$group_name'";
$result=mysqli_query($conn,$check);
if(mysqli_num_rows($result)>0){
echo "<h1>group already exists</h1>";
}
else{
$sql="INSERT INTO groups (group_name,members) VALUES ('$group_name','$user')";
mysqli_query($conn,$sql);
header("Location:home.php");
}
?>