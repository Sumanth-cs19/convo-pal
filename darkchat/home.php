<html>
<head>
<style>
#menu{
word-spacing:150px;
font-size:20px;
background-color:blue;
height:40px;
color:black;
}
#play{
position:absolute;
left:600px;
top:300px;
backround-color:black;
height:100px;
width:200px;
}
</style>
</head>
<body>
<div id="menu">
<a href="friends.php"><font color="black">FRIENDS</font></a>
<a href="addfriend.php"><font color="black">ADDFRIENDS</font></a>
<a href="logout.php"><font color="black">LOGOUT</font></a>
<a href="groups.php"><font color="black">GROUPS</font></a>
<a href="gamefriends.php"><font color="black">PLAY</font></a>
<a href="deleteaccount.php"><font color="black">DELETE ACCOUNT</font></a>
</div>
<button id="play"><h1><a href="tic-tac-toe.html">PLAY GAME</a></h1></button>












<?php
if(isset($_COOKIE["user"])){
echo "<h1>welcome   ".$_COOKIE["user"]."!!</h1>";
}
else{
header("Location:welcome.php");
} 
?>
</body>
</html>