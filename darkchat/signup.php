<?php
$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$conn=mysqli_connect($_host,$_user,$_pass,$_db);
$name=$_POST["user"];
$pass=$_POST["pass"];
$gender=$_POST["gender"];
$contact=$_POST["contact"];

$check="SELECT * FROM details WHERE username='$name'";
$result=mysqli_query($conn,$check);
if(mysqli_num_rows($result)>0){
echo "<h1>username already exists</h1>";
}
else{
$sql="INSERT INTO details (username,password,gender,contact) VALUES ('$name','$pass','$gender','$contact')";
mysqli_query($conn,$sql);
header("Location:welcome.html");
}
?>