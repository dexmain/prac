<?php 
  include 'inc_head.php';
?>
<!DOCTYPE html>
<html> 
    <head>
        <title >channel - PRAC</title>
        <meta charset="utf-8">
    <style>
        input[type=text] {
            padding:3px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            width:100px;
            text-align:center;
            }
        input[type=password] {
            padding:3px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            width:100px;
            text-align:center;
            }

        input[type=text]:focus {
            border-color:#333;
        }
        button[type=button]{
            padding:5px 15px; 
            background:#ccc; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
        }

        input[type=submit] {
            padding:5px 15px; 
            background:#ccc; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
        }        
        h1{
            text-align:center;
            padding:3px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            }
        h1 t2{
            font-size:small;
        }
        form {
            font-size:small;
            float:center;            
            text-align:center;
            padding:3px;
            width:300px;
            height:320px;
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 80px;
            position: absolute;
			left: 50%; top:50%;
			margin-left: -150px;
			margin-top: -200px;
        }
        st{ font-size:medium;}
    </style>
    </head>
    <body>
        <h1>
            <t2>channel : </t2>
            <t1>PRAC</t1><br>
        </h1>
        <?php
            if ($prac_login) {
        ?>
        <st>로그아웃 후 다시 시도해주세요 !</st>
        <?php
            } else {
        ?>
        <form method ="post" action ="/join.php">
            <st>Sign up</st><br><br>
            ID<br><input type="text" placeholder = "최소 4자 이상"name ="id"/><br><br>
            Password<br><input type="password" placeholder ="최소 6자 이상"name = "password"/><br><br>
            Password confirm<br><input type="password" placeholder = "비밀번호 확인" name = "password2"><br><br>
            Nickname<br><input type="text" placeholder = " 2~8자 내외" name = "nickname"/><br><br>
            <input type="submit" value ="join">
        </form>
        <?php
            }
        ?>
    </body>
<html>

<script>
</script>    