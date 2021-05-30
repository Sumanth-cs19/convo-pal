<?php
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$sql="CREATE TRIGGER delacc
AFTER DELETE
on
details
FOR EACH ROW
WHEN (NEW.username!='')

BEGIN

DELETE FROM friends WHERE (friend1=OLD.username) OR (friend2=OLD.username);
DELETE FROM chat WHERE (sender=OLD.username) OR (reciever=OLD.username);
END;";
$res=mysqli_query($con,$sql);
?>