<?php
include "connection.php";


    $name = $_POST['cname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
$id = $_POST['id'];





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








    $query = "UPDATE customer
SET `name`= '$name', `address` = '$address', `phone` = '$phone', `email` = '$email' ,`file_name` = '$image'
WHERE id='$id'";

    $result = mysqli_query($connection, $query);




header("location:../tables/simple.php");


?>