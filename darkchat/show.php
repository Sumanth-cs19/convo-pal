<?php

$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$sender=$_COOKIE["user"];
$reciever=$_COOKIE["friend"];
$groups=$_COOKIE["groups"];
$out='';
if($groups==0){
$sql="SELECT * FROM chat WHERE sender='$sender' AND reciever='$reciever' OR sender='$reciever' AND reciever='$sender'";
}
else{
$sql="SELECT * FROM chat WHERE reciever='$reciever'";
}
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
while($rows=mysqli_fetch_assoc($result)){
$msg=$rows["message"];
$user=$rows["sender"];
if($user==$sender){
$out.='<div id="messages1">'.$msg.'</div><br>';
}
else{
$out.='<div id="messages2">'.$msg.'</div><br>';
}
}
}
echo $out.'<br>';



?>