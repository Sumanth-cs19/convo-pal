<?php

$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$conn=mysqli_connect($_host,$_user,$_pass,$_db);

$name=$_POST["loginname"];
$pass=$_POST["loginpass"];

$sql="SELECT * FROM details WHERE username='$name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($pass==$row["password"]){
if(isset($_COOKIE["user"])){
setcookie("user",$name,time()+86400);
header("Location:home.php");
}
else{
setcookie("user",$name,time()+86400);
header("Location:home.php");
}
}
else{
echo "<h1>USERNAME AND PASSWORD DID NOT MATCH</h1>";
}


?>