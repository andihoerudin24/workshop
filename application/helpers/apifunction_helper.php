<?php

function pesan($message, $number) {
    include 'apiconfig.php';
    $ch = curl_init();
    $fields = array(
        'token' => $token,
        'aksi' => '1', // aksi = 1 kirim sms , aksi = 2 cek saldo dan masa aktif , aksi = 3 lihat sms outbox
        'pesan' => $message,
        'hp' => $number,
        'passkey' => $passkey,
    );
    $postvars = json_encode($fields);
    $url = "http://purindo.net/api/sms.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    $result = curl_exec($ch);
    echo $result;
}

?>