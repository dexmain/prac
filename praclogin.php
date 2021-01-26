<?php 
  include 'inc_head.php';
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>channel-PRAC</title>
  </head>
  <style>
        a:visited{
            color:black;
        }
        h1{
            text-decoration:none;
            text-align:center;
            padding:3px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            }
        h1 t2{
            font-size:small;
        }
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
            
        button{
            padding:5px 15px; 
            background:#ccc; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
        }

        input[type=text]:focus {
            border-color:#333;
        }
        form {
            float:center;            
            text-align:center;
            padding:3px;
            width:200px;
            height:270px;
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 40px;
            position: absolute;
			left: 50%; top:50%;
			margin-left: -100px;
			margin-top: -200px;
        }
        a {
            text-decoration:none;
            float:center;
            text-align:center;
        }
        st {
            font-size:small;
        }
        </style>
  <body>
  <h1>
      <t2 id ='t2'>channel : </t2>
      <a href ="prac.php">PRAC</a>
      </h1>
    <?php
      if ( $prac_login ) {
    ?>
      <a>이미 로그인하셨습니다.</a>
    <?php
      } else {
    ?>
      <form action="login_result.php" method="POST">
        <a>Login</a><br><br>
        <st>id</st><br><input type="text" name="id"><br><br>
        <st>password</st><br><input type="password" name="password"><br><br><br>
        <button > Enter</button><br>
      </form>
    <?php
      }
    ?>
  </body>
</html>