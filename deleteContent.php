<?php
include"connect.php";
$mabaiviet = $_GET['mabaiviet'];
$str="DELETE FROM CONTENT WHERE IDContent=$mabaiviet";
$result = $connect->query($str);
$connect->close();
header("location:index.php");
?>