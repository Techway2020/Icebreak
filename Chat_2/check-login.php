<?php
include("config.php");
include("commentajax.php");
session_start();

$uName = $_POST['username'];
$pWord = $_POST['password'];

$query = "SELECT * FROM user WHERE regusername='".$uName."' and regpassword='".$pWord."'";
$res = mysqli_query($link, $query);
$num_row = mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);

if( $num_row == 1) {
	echo 'true';
	$_SESSION['uname']=$row['regusername'];
	header('location:chat.php');
}
else {
	echo 'false';
}
?>