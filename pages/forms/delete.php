<?php
include('connection.php');
error_reporting(0);
$_GET['re'];
$r=$_GET['red'];
$query="select * from record5 where Serial='$r'";
$date=mysqli_query($connection,$query);
while($rr=mysqli_fetch_assoc($date)){
    $r1=$rr['cid'];
}
$query="DELETE from record5 where Serial='$r'";
$date=mysqli_query($connection,$query);

header("location:print1.php");
?>