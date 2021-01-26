<?php 
  include 'inc_head.php';
?>
<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <title>channel - PRAC</title>
  </head>
  
  <body>
    <?php
      if ( $prac_login ) {
        echo '<h1>이미 로그인하셨습니다.</h1>';
      } else if (isset($_POST['id'])&&isset($_POST['password'])){
            $id=$_POST['id'];
            $password=$_POST['password'];
            $conn= mysqli_connect('localhost', 'root', 'gusdn136', 'login');
            $sql="SELECT * FROM users where id='$id' and pwd ='$password'";
            if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
              $_SESSION['id'] = $id;
              echo "<script>alert('$id 님 환영합니다 !')</script>";
              echo "<script>location.href='prac.php'</script>";
            }
            else{
              echo "<script>alert('아이디 혹은 비밀번호를 확인해주세요.')</script>";
              echo "<script>location.href='praclogin.php'</script>";
            }
          }
    ?>
  </body>
</html>