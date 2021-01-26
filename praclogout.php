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
            float:center;
            text-align:center;
        }
        st {
            font-size:small;
        }
        </style>
  <body>
  <h1>
            <t2>channel : </t2>
            <t1>PRAC</t1>
        </H1>
        <?php
      if ( $prac_login ) {
        session_destroy();
        echo "<script>alert('로그아웃 되었습니다.')</script>";
        echo "<script>location.href='prac.php';</script>";
      } else {
        echo '<h1>로그인 상태가 아닙니다.</h1>';
      }
    ?>
  </body>
</html>