<?php
   session_start();
    if(isset($_POST['submit'])&&($_POST['submit']=="Đăng nhập"))
    {
    include "connect.php";
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $str = "SELECT * FROM USERNAME WHERE UserName = '$username' and PassWord = '$pass'";
    $result = $connect->query($str);
      
    if($result->num_rows>0) {
     $_SESSION['userLogin']=$username;       
       header("location: index.php");
    }else {
        $erro="Sai tên đăng nhập hoặc mật khẩu.";
        $_SESSION['err'] =$erro;
        
        header("location:dangnhap.php");
      
    } 
     $connect->close();
    } 
    ?>