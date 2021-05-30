<?php
$user=$_COOKIE["user"];
$reciever=$_COOKIE["friend"];
$groups=$_COOKIE["groups"];
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$message=$_POST["chatbox"];


$sql="INSERT INTO chat (sender,reciever,message,groups) VALUES ('$user','$reciever','$message','$groups')";

$result=mysqli_query($con,$sql);


?>