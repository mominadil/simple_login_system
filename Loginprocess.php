<?php

session_start ();
include("connect.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['user_name'];
$b = $_REQUEST['password'];

$res = mysqli_query($conn,"select* from tb_login where user_name='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location:Index.php");
}
else	
{
	header("location:Login.php");
	
}
}
?>