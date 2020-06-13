<?php
include "connection.php";
$name = $_POST['cname'];
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
$target = "../../../pages/forms/images1/".basename($image);

// execute query

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}


$query = "INSERT INTO client VALUES('','$name','$phone','$email','$address','$date','$image')";

$result = mysqli_query($connection, $query);
header("location:general1.php");
?>
