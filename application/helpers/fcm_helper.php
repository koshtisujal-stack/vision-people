<?php
function sendFCM($token, $title, $body)
{
    $url = "https://fcm.googleapis.com/fcm/send";

    $serverKey = "PASTE_YOUR_LEGACY_SERVER_KEY_HERE"; // ⚠️ TEMP

    $notification = [
        "title" => $title,
        "body"  => $body,
        "icon"  => "/assets/images/logo-icon.png"
    ];

    $fields = [
        "to" => $token,
        "notification" => $notification
    ];

    $headers = [
        "Authorization: key=" . $serverKey,
        "Content-Type: application/json"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    curl_exec($ch);
    curl_close($ch);
}
