<?php
session_start();
include('connection.php');
$name = $_POST['cname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$newid=$_SESSION['bid'];
$date=$_POST['date'];


$query = "INSERT INTO client1 VALUES(NULL,'$name','$address', '$phone','$email','$newid','$date')";
$result = mysqli_query($connection, $query);



header ("location:print1.php");
?>
