<?php
include "connection.php";


$name = $_POST['c'];
$phone = (double)$_POST['d'];
echo $phone;
$a = $_POST['a'];
$b = $_POST['b'];
$t = (double)$a - (double)$b;
$sms = "Dear Customer,\n Assalamualikum. Your bill " . $a . " BDT.\n You Pay " . $b . " BDT & Your due " . $t ." BDT.\nThanks Bhai-bhaiseeds.";
$to = $phone;
$token = "ff5cdfa30225fbc5575facf8a181ae34";
$message = $sms;

$url = "http://api.greenweb.com.bd/api.php";


$data = array(
    'to' => "$to",
    'message' => "$message",
    'token' => "$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result

$phone = $_POST['d'];


//header("location:../tables/clsms.php");
date_default_timezone_set('Asia/Dhaka');
$d = date("Y-m-d");
$tu = date("h:i:sa");
$query = mysqli_query($connection, "insert into inbox values (NULL,'$name','$phone','$d','$tu','$sms')")
?>
<script type="text/javascript">
    window.alert("Message Send Successfully!!!");
    window.location.href = '../tables/simple.php';
</script>
