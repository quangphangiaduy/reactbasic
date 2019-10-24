<?php
 //if(!isset($_SESSION['user'])){
   // header('location:login.php');
//}
include 'config.php';


$tentheloai = $_GET['tentheloai'];
$thutu = $_GET['thutu'];
$anhien = $_GET['anhien'];
$idTL = $_GET['idTL']

$str = " update theloai set TenTL = '$tentheloai', ThuTu = '$thutu' , AnHien = '$anhien' where idTL = $idTL ";
mysqli_query($conn,$str);
header("location:list_theloai.php");
?>



