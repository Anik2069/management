<?php
include('connection.php');
error_reporting(0);
$_GET['re'];
$r=$_GET['xxx'];
$query="select * from record4 where Serial='$r'";
$date=mysqli_query($connection,$query);
while($rr=mysqli_fetch_assoc($date)){
    $r1=$rr['cid'];
}
$query="DELETE from record4 where Serial='$r'";
$date=mysqli_query($connection,$query);

header("location:profile2.php?re=$r1");
?>