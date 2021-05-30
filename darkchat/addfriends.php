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


$sql="SELECT username FROM details WHERE username!='$user'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
echo "<form action='insertfriends.php' method='POST'>";
while($row=mysqli_fetch_assoc($result)){
$uname=$row["username"];
$sql2="SELECT friend2 FROM friends WHERE friend2='$uname' AND friend1='$user'
union	SELECT friend1 FROM friends WHERE friend1='$uname' AND friend2='$user'";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)<=0){
$k++;
echo "<input name=".(string)$k." value=".$row["username"].">  <input type='checkbox' name=".(string)($k+100)."><br>";
}
}
echo "<input name='row' value=".(string)$k."><br>";
echo "<input type='submit' value='submit'></form>";

}


?>


</html>


