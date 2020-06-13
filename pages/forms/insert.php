<?php
include "connection.php";

$name1 = $_POST['cname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];


$image = $_FILES['image']['name'];
// Get text
//Get type
$file_type = $_FILES['image']['type'];
//extension
$extensions= array("jpeg","jpg","png");
$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

// image file directory
$target = "images/".basename($image);

// execute query

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}


$query1 = "INSERT INTO `customer` VALUES(NULL,'$name1','$address', '$phone','$email','$date','$image')";

$result = mysqli_query($connection, $query1);
//echo $result;
//mysqli_error($result)
header("location:general.php");
?>
