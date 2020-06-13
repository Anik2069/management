<?php
include('connection.php');
error_reporting(0);

$r=$_GET['re'];

$query="DELETE from pd where id='$r'";
$date=mysqli_query($connection,$query);

header("location:stock_add_3.php");
?>