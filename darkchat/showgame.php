<?php
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$out="";
$player1=$_COOKIE["user"];
$player2=$_COOKIE["friend"];
$boxes=array();
$sql="SELECT * FROM friends WHERE (friend1='$player1' AND friend2='$player2') OR (friend2='$player1' AND friend1='$player2')";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
while($rows=mysqli_fetch_assoc($res)){
$out.=$rows["box1"]!=""?$rows["box1"]:"b";
$out.=$rows["box2"]!=""?$rows["box2"]:"b";
$out.=$rows["box3"]!=""?$rows["box3"]:"b";
$out.=$rows["box4"]!=""?$rows["box4"]:"b";
$out.=$rows["box5"]!=""?$rows["box5"]:"b";
$out.=$rows["box6"]!=""?$rows["box6"]:"b";
$out.=$rows["box7"]!=""?$rows["box7"]:"b";
$out.=$rows["box8"]!=""?$rows["box8"]:"b";
$out.=$rows["box9"]!=""?$rows["box9"]:"b";
$out.="-".$rows["move"];
}
}
echo $out;
?>