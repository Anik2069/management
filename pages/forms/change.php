<?php
include ("connection.php");
session_start();
$email =$_POST['email'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];
$old=$_SESSION['user'];
if($pass==$pass1){
    $query1 = mysqli_query($connection,"update user set email='$email',password='$pass' where email='$old'");
    echo '<script type="text/javascript">';
    echo ' alert("Passowrd Change successfully")';  //not showing an alert box.
    echo '</script>';
    $_SESSION['user']=$email;


}
else{
    echo '<script type="text/javascript">';
    echo ' alert("Passowrd is not same")';  //not showing an alert box.
    echo '</script>';
    header("location:changepass.php");


}
header("location:../../index.php");
?>
