<html>
<head>
<style>
#friendslist{
height:500px;
backgroundcolor:blue;
text-align:center;
width:600px;
color:pink;
}
#friends{
height:50px;
}
</style>
</head>
<body>
<?php
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$user=$_COOKIE["user"];
$sql="SELECT friend2 FROM friends WHERE friend1='$user'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$friend2=$row["friend2"];
echo "<a href='game.php?friend2=".$friend2."&groups=0'>".$friend2."</a><br>";
}
}
$sql="SELECT friend1 FROM friends WHERE friend2='$user'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$friend1=$row["friend1"];
echo "<a href='game.php?friend2=".$friend1."&groups=0'>".$friend1."</a><br>";
}
}

?>
</body>