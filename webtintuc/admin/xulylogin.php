<?php session_start();
include "config.php";
$user = $_POST['user'];
$pass = md5($_POST['pass']);
if(isset($user)  and isset($pass)){
	// $pass = md5($pass);
	 $str = "select * from users where Username = '$user' and Password = '$pass' ";
	 $result = mysqli_query($conn,$str);
	 $num = mysqli_num_rows($result);
	 if ($num==1) {
		 $row = mysqli_fetch_assoc($result);
		 $_SESSION['user'] = $row['Username'];
		//  echo $_SESSION['user'];
		//echo "chao mung ban ".$_SESSION['user']." login ";
		header("location:index.php");
	 }else{
	 	header("location:login.php");
	 }
}else{
	header("location:login.php");
}



?>