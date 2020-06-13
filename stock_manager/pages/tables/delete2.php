<?php
include('connection.php');
error_reporting(0);

$r=$_GET['re'];

$query="DELETE from client1 where bid='$r'";
$date=mysqli_query($connection,$query);
$query="DELETE from record5 where cid='$r'";
$date=mysqli_query($connection,$query);
header("location:simple2.php");
?>