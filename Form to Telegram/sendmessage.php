<?php
    $content = '';
    foreach ($_POST as $key => $value) {
        if ($value) {
            $content .= "<b>$key</b>: <i>$value</i>\n";
        }
    }
    if (trim($content)) {
        $content = "<b>Message from Site:</b>\n".$content;
        // Token from bot
        $apiToken = "6228690465:AAF29N00Kb8BLpB1H56nmXiILC56w3snZXk";
        $data = [
            // Telegram chat ID
            'chat_id' => '@SuperrSendMessageBot',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $respose = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
    }
?>