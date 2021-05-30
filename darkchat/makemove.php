<?php
$user=$_COOKIE["user"];
$friend=$_COOKIE["friend"];

$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$box=$_POST["box"];
$move="";
$player1="";
$sql="select * from friends where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
while($rows=mysqli_fetch_assoc($res)){
$move=$rows["move"];
$player1=$rows["player1"];
}
}
if($move==$player1){
$sql="update friends set ".$box."='X' where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
}
else{
$sql="update friends set ".$box."='O' where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
}
$res=mysqli_query($con,$sql);
?>
