<?php
include('connection.php');
error_reporting(0);
$_GET['re'];
$r=$_GET['xxx'];

$query="DELETE from gp where id='$r'";
$date=mysqli_query($connection,$query);

header("location:stock_add.php");
?>