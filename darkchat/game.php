<?php
$user=$_COOKIE["user"];
$friend=$_GET["friend2"];
setcookie('friend',$friend,time()+86400);
$host="localhost";
$_user="root";
$_pass="";
$db="darkchat";
$con=mysqli_connect($host,$_user,$_pass,$db);
$sql="select * from friends where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
$sql1="Update friends set player1='$user' where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
$sql2="Update friends set move='$user' where (friend1='$user' And friend2='$friend') OR (friend1='$friend' AND friend2='$user')";
$player1="";
$currentplayer="";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0){
while($rows=mysqli_fetch_assoc($res)){
$player1=$rows["player1"];
if($player1==""){
$result=mysqli_query($con,$sql1);
$result=mysqli_query($con,$sql2);
}
}
}
?>
<html>
<head>
<style>
    .box{
        border:3px solid black;
        height:100px;
        width:100px;
        font-size:30px;
        background-color:black;
        color:gold;
        text-align:center;
    }
    table{
        position:relative;
        top:200px;
    }
    
</style>    
</head>
<body>
<center>
        <table id="table1">
            <tr>
                <td><div class="box" id="box1"></div></td>
                <td><div class="box" id="box2"></div></td>
                <td><div class="box" id="box3"></div></td>
            
            </tr>
            <tr>
                <td><div class="box" id="box4"></div></td>
                <td><div class="box" id="box5"></div></td>
                <td><div class="box" id="box6"></div></td>
            
            </tr>
            <tr>
                <td><div class="box" id="box7"></div></td>
                <td><div class="box" id="box8"></div></td>
                <td><div class="box" id="box9"></div></td>
            
            </tr>
        
        </table>
        
        </center>
<script src="jquery-3.4.1.js"></script>
<script>
$(document).ready(function(){
var t=setInterval(show,1000);
var currentplayer;
var user='<?php echo $user; ?>';
function back(){
window.location.replace("home.php");
}
function endgame(result){
$.ajax({
url:'endgame.php',
type:"post"
});
alert(result);
var s=setTimeout(back,2000);
}
function checkwinner(){
                var f1=$("#table1 tr:nth-child(1) td:nth-child(1) div").text();
                var f2=$("#table1 tr:nth-child(1) td:nth-child(2) div").text();
                var f3=$("#table1 tr:nth-child(1) td:nth-child(3) div").text();
                var f4=$("#table1 tr:nth-child(2) td:nth-child(1) div").text();
                var f5=$("#table1 tr:nth-child(2) td:nth-child(2) div").text();
                var f6=$("#table1 tr:nth-child(2) td:nth-child(3) div").text();
                var f7=$("#table1 tr:nth-child(3) td:nth-child(1) div").text();
                var f8=$("#table1 tr:nth-child(3) td:nth-child(2) div").text();
                var f9=$("#table1 tr:nth-child(3) td:nth-child(3) div").text();
                
                if((f1==f2)&&(f2==f3)&&(f1!="")){
                    return f1;
                }
                if((f1==f4)&&(f4==f7)&&(f1!="")){
                    return f1;
                }
                if((f1==f5)&&(f5==f9)&&(f1!="")){
                    return f1;
                }
                if((f2==f5)&&(f2==f8)&&(f2!="")){
                    return f2;
                }
                if((f3==f6)&&(f9==f3)&&(f3!="")){
                    return f3;
                }
                if((f4==f5)&&(f4==f6)&&(f4!="")){
                    return f4;
                }
                if((f7==f8)&&(f8==f9)&&(f7!="")){
                    return f7;
                }
                if((f3==f5)&&(f5==f7)&&(f3!="")){
                    return f3;
                }
                if ((f1!="")&&(f2!="")&&(f3!="")&&(f4!="")&&(f5!="")&&(f6!="")&&(f7!="")&&(f8!="")&&(f9!="")){
                    return "tie";
                }
                return null;
            }
function nextturn(currentplayer){
    
$.ajax({
    url:'nextturn.php',
    type:'post'
});
}
$("#table1 tr td div").click(function(){
if($(this).text()==""){
if(user==currentplayer){
var box=$(this).attr("id");
$.ajax({

url:'makemove.php',
type:"post",
data:{'box':box}

});
var result=checkwinner();
if(result){
endgame(result);
}
nextturn(currentplayer);
}
}
});
function show(){
$.ajax({
url:'showgame.php',
type:'post',
success:function(res){
var x=res;
$("#table1 tr:nth-child(1) td:nth-child(1) div").html(x[0]=="b"?"":x[0]);
$("#table1 tr:nth-child(1) td:nth-child(2) div").html(x[1]=="b"?"":x[1]);
$("#table1 tr:nth-child(1) td:nth-child(3) div").html(x[2]=="b"?"":x[2]);
$("#table1 tr:nth-child(2) td:nth-child(1) div").html(x[3]=="b"?"":x[3]);
$("#table1 tr:nth-child(2) td:nth-child(2) div").html(x[4]=="b"?"":x[4]);
$("#table1 tr:nth-child(2) td:nth-child(3) div").html(x[5]=="b"?"":x[5]);
$("#table1 tr:nth-child(3) td:nth-child(1) div").html(x[6]=="b"?"":x[6]);
$("#table1 tr:nth-child(3) td:nth-child(2) div").html(x[7]=="b"?"":x[7]);
$("#table1 tr:nth-child(3) td:nth-child(3) div").html(x[8]=="b"?"":x[8]);
var y=x.split("-");
currentplayer=y[1];
}
});

}
});
</script>
</body>
</html>