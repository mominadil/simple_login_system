<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:Login.php");


?>

<h1> Welcome to page 3 </h1>
<a href="Page1.php"><h2><font color="">PAGE 1</font></h2>
<a href="Page2.php"><h2><font color="">PAGE 2</font></h2>
<a href="Page3.php"><h2><font color="">PAGE 3</font></h2>



<a href="Logout.php"><h2><font color="red">Logout</font></h2>

<a href="Logout.php"><h2><font color="red">Logout</font></h2></a>
