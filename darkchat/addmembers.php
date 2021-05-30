<html>
<head>
<style>
button{
height="100px";
width="200px";
}
</style>
</head>
<?php
$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$conn=mysqli_connect($_host,$_user,$_pass,$_db);
$k=0;
$user=$_COOKIE["user"];
$group_name=$_GET["group_name"];
setcookie("group_name",$group_name,time()+86400);

$sql="SELECT username FROM details WHERE username!='$user'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
echo "<form action='insertgroup.php' method='POST'>";
while($row=mysqli_fetch_assoc($result)){
$uname=$row["username"];
$sql2="SELECT members FROM groups where members='$uname' AND group_name='$group_name'";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)<=0){
$k++;
echo "<input name=".(string)$k." value=".$uname.">  <input type='checkbox' name=".(string)($k+100)."><br>";
}
}
echo "<input name='row' value=".(string)$k."><br>";
echo "<input type='submit' value='submit'></form>";

}


?>


</html>