<?php
 if(!isset($_SESSION['user'])){
    header('location:login.php');
}
include 'config.php';


$tentheloai = $_GET['tentheloai'];
$thutu = $_GET['thutu'];
$anhien = $_GET['anhien'];

echo $str = " insert into theloai VALUES (null,'$tentheloai','$thutu','$anhien')";
mysqli_query($conn,$str);
header("location:list_theloai.php");
?>



