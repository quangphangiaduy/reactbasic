<?php
$host = "localhost";
$name = "root";
$pass = "";
$dbname = "webtintuc";

$conn = mysqli_connect($host,$name,$pass);
if(isset($conn)){
    mysqli_select_db($conn,$dbname);
}else{
    echo "Ket noi CSDL that bai";
}
mysqli_set_charset($conn,'utf8');