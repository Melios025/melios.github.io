
<?php
session_start();
include"connect.php";
if (!empty($_POST["comment"])) {
   $comment=$_POST['comment'];
   $str = "SELECT ID FROM USERNAME WHERE UserName ='" . $_SESSION['userLogin'] . "'";
    $result = $connect->query($str);
    $row=$result->fetch_array();
   $sql="INSERT INTO COMMENT VALUES(NULL,'".$comment."','".$_SESSION['mabaiviet']."','".$row[0]."')";
   $result = $connect->query($sql);
   header("location:detailContent.php?mabaiviet=".$_SESSION['mabaiviet']."");
}
?>