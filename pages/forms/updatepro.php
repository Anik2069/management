<?php
include "connection.php";


    $p = $_POST['p'];
    $g = $_POST['g'];
    $u = $_POST['u'];
$id=$_POST['id'];

    $query = "UPDATE pd
SET name='$p',gp='$g',unit='$u'
WHERE id='$id'";

    $result = mysqli_query($connection, $query);




header("location:../tables/stock_add_3.php");


?>