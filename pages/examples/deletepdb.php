<?php
include('connection.php');
error_reporting(0);
$_GET['re'];
$r=$_GET['xxx'];
$count=0;
$count1=0;
$query="select * from buying where id='$r'";
$date=mysqli_query($connection,$query);
while($rr=mysqli_fetch_assoc($date)){
    $r1=$rr['pid'];
    $count=(double)$rr['quantity'];
}
$query="DELETE from buying where id='$r'";
$date=mysqli_query($connection,$query);
$query="select * from pd where id='$r1'";
$date=mysqli_query($connection,$query);
while($rr=mysqli_fetch_assoc($date)){
    $count1=(double)$rr['quantity'];
}
$count1=$count1-$count;
$query99=mysqli_query($connection,"Update pd set quantity ='$count1' where id='$r1'");


header("location:pf.php?re=$r1");
?>