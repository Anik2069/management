<?php
include "connection.php";


$name = $_POST['cname'];
$address = $_POST['address'];
$phone = (double)$_POST['phone'];
$sms = $_POST['sms'];
$id = $_POST['id'];


$to = $phone;
$token = "ff5cdfa30225fbc5575facf8a181ae34";
$message =$sms;

$url = "http://api.greenweb.com.bd/api.php";


$data= array(
    'to'=>"$to",
    'message'=>"$message",
    'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
//echo $smsresult;

//Error Display
//echo curl_error($ch);

$phone = $_POST['phone'];

//header("location:../tables/clsms.php");
date_default_timezone_set('Asia/Dhaka');
$d=date("Y-m-d");
$t=date("h:i:sa");
$query= mysqli_query($connection,"insert into inbox values (NULL,'$name','$phone','$d','$t','$sms')")
?>
<script type="text/javascript">
    window.alert("Message Send Successfully!!!");
    window.location.href = '../tables/csms.php';
</script>
