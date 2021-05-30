<?php 
$_host="localhost";
$_user="root";
$_pass="";
$_db="darkchat";
$conn=mysqli_connect($_host,$_user,$_pass,$_db);
$user=$_COOKIE["user"];
$friend=$_GET["friend"];

?>
<html>
    <head><script type="text/python" src="hi.py"></script>
        <script src="jquery-3.4.1.js"></script>
        <script>
            
            $(document).ready(function(){
                var turn=true;
            var move=1;
                $("#table1 tr td").click(function(){
                   if(move%2==1){if($(this).text()==""){$(this).append("X");move++;}}
                    else{if($(this).text()==""){$(this).append("O");
			move++;}}
                    if((ForWinner()!=-1)&&(ForWinner()!="")){
                        //if(ForWinner()=="X"){alert("X WINS!");}
                        //else{alert("O WINS!");}
                        alert(ForWinner());
                    }
                    if(move>9){alert("MATCH DRAW!");}
                    
                });
                
                var ban={X:-1,O:1,tie:0};

                       

                       
                   
                
                function ForWinner(){
                    
                    var f1=$("#table1 tr:nth-child(1) td:nth-child(1)").text();
                    var f2=$("#table1 tr:nth-child(1) td:nth-child(2)").text();
                    var f3=$("#table1 tr:nth-child(1) td:nth-child(3)").text();
                    var f4=$("#table1 tr:nth-child(2) td:nth-child(1)").text();
                    var f5=$("#table1 tr:nth-child(2) td:nth-child(2)").text();
                    var f6=$("#table1 tr:nth-child(2) td:nth-child(3)").text();
                    var f7=$("#table1 tr:nth-child(3) td:nth-child(1)").text();
                    var f8=$("#table1 tr:nth-child(3) td:nth-child(2)").text();
                    var f9=$("#table1 tr:nth-child(3) td:nth-child(3)").text();
                    if((f1==f2)&&(f2==f3)){return f3;}
                    else if((f4==f5)&&(f5==f6)){return f6;}
                    else if((f7==f8)&&(f8==f9)){return f9;}
                    else if((f1==f4)&&(f4==f7)){return f7;}
                    else if((f2==f5)&&(f5==f8)){return f8;}
                    else if((f3==f6)&&(f6==f9)){return f9;}
                    else if((f1==f5)&&(f5==f9)){return f9;}
                    else if((f3==f5)&&(f5==f7)){return f7;}
                    
                    return -1;
                    
                    
                }
        
                
            });
        </script>
        <style>
            body{
                background-image:linear-gradient(to right,#cc2b5e,#753a88);
                color:white;
            }
            #table1{
                width:300px;
                height:300px;
                position:fixed;
                top:200px;
                left:600px;
                background-color: black;
                color:white;
                
            }
            table,th,td{
                border:2px solid white;
                width:50px;
                height:50px;
                
            }
            th,td{
                padding:10px 10px;
                text-align:center;
            }
            #tic{
                color:white;
                position:fixed;
                left:650px;
                top:100px;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <div id="tic">TIC TAC TOE</div>
        <table id="table1">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </body>
</html>