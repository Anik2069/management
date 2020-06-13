<?php
include('connection.php');
error_reporting(0);
$_GET['re'];
$r=$_GET['xxx'];
$query = mysqli_query($connection,"select * from bankhistory where id='$r'");
while ($res= mysqli_fetch_assoc($query)){
    $nmber=$res['account'];
    $opp=$res['operation'];
    $am= $res['amount'];
}
if($opp=='deposit'){
    $query = mysqli_query($connection, "select * from bank where number='$nmber'");
    while ($res = mysqli_fetch_assoc($query)) {
        $te = (double)$res['balance'] - (double)$am;
        $query = mysqli_query($connection, "Update bank set balance='$te' where number='$nmber'");

    }
}
else{
    $query = mysqli_query($connection, "select * from bank where number='$nmber'");
    while ($res = mysqli_fetch_assoc($query)) {
        $te = (double)$res['balance'] + (double)$am;
        $query = mysqli_query($connection, "Update bank set balance='$te' where number='$nmber'");

    }
}
$query="DELETE from bankhistory where id='$r'";
$date=mysqli_query($connection,$query);

header("location:bank_history.php");
?>