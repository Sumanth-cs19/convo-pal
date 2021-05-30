<html>
<head>
<script src="jquery-3.4.1.js"></script>
<style>
body{
background-color:black;
}
#chatbox{
height:40px;
font-size:20px;
position:fixed;
width:80%;
top:700px;
}
#sendbtn{
height:40px;
width:20%;
position:fixed;
font-size:20px;
top:700px;
background-color:blue;
left:80%;
}
#msg{

font-size:20px;


}
#messages{
font-size:20px;

}
#messages2{
position:relative;
left:55%;
text-align:right;
background-color:blue;
height:30px;
font-size:20px;
width:45%;
color:white;

}
#messages1{
height:30px;
font-size:20px;
background-color:pink;
width:45%;
}
</style>
</head>
<body>
<?php
$friend2=$_GET["friend2"];
setcookie('friend',$friend2,time()+86400);
$groups=$_GET["groups"];
setcookie('groups',$groups,time()+86400);
?>

<div id="messages"></div>

<input id="chatbox" name="chat">
<button onclick="send()" id="sendbtn">SEND</button>




<script>

var t=setInterval(show,1000);
function show(){
$.ajax({
url:'show.php',
type:'post',
success:function(data){
$("#messages").html(data);
}
});
document.getElementByTagName("body").scrollIntoView(false);

}


function send(){


if($("#chatbox").val()!=""){
var txt=$("#chatbox").val();




$.ajax({

url:'send.php',
type:"post",
data:{'chatbox':txt}

});
}
}

</script>
</body>
</html>