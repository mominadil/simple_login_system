
<?php 


session_start ();
if(!isset($_SESSION["login"]))

   header("location:Login.php");




include 'connect.php';


print_r($_POST);

$email = $_POST['email'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];


 $sql = "INSERT INTO tb_login (email,user_name,password) 
    VALUES ('$email','$user_name','$password')";
    mysqli_query($conn, $sql);





 ?>