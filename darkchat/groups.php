<html>
<head>
<style>
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
$sql="SELECT group_name FROM groups WHERE members='$user'";
$res=mysqli_query($con,$sql); 
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
$groups=$row["group_name"];
echo "<a href='chat.php?friend2=".$groups."&groups=1'>".$groups."</a><a href='addmembers.php?group_name=".$groups."'>ADD MEMBERS</a><br>";
}
}

echo "<form action='creategroup.php' method='POST'>";
echo "<input name='group_name'> <input type='submit' value='create'></form>";

?>
</body>