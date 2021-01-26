
    <?php 
         header("Content-Type: text/html; charset=UTF-8");
         $conn = new mysqli("localhost","root","gusdn136","login");
        mysqli_query($conn,'SET NAMES utf8');
        $id = $_POST['id'];
        $nickname = $_POST['nickname'];
        $password = $_POST['password'];
        $sql = "insert into users (id,nickname,pwd) values ('$id','$nickname','$password')";
        $res = $conn ->query($sql);
        echo "<script>location.href='signcomp.php';</script>";
    ?>