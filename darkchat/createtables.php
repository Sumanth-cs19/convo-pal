<?php
$_host="localhost";
$_db="darkchat";
$_pass="";
$_user="root";
$con=mysqli_connect($_host,$_user,$_pass,$_db);
$sql1="CREATE table details (username varchar(50),password varchar(15),gender varchar(3),contact INT)";
$sql2="CREATE table friends (friend1 varchar(50),friend2 varchar(50),move varchar(50),player1 varchar(50),box1 varchar(3),box2 varchar(3),box3 varchar(3),box4 varchar(3),box5 varchar(3),box6 varchar(3),box7 varchar(3),box8 varchar(3),box9 varchar(3))";
$sql3="Create table groups (group_name varchar(50),members varchar(50))";
$sql4="Create table chat (sender varchar(50),reciever varchar(50),message varchar(200),groups INT)";
$res=mysqli_query($con,$sql1); 
$res=mysqli_query($con,$sql2); 
$res=mysqli_query($con,$sql3); 
$res=mysqli_query($con,$sql4); 
?>
