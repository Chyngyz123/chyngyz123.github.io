<?php

# Принимаем запрос
$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);

/*//https://api.telegram.org/bot6328866007:AAHkMfS-rIAqr29OTFc3Rc6htcp9JyRgL4E/setwebhook?url=https://samp.rf.gd/index.php

# Переменные
$token = '6328866007:AAHkMfS-rIAqr29OTFc3Rc6htcp9JyRgL4E';

# Обрабатываем команды
$message = $data['message']['text'];

# Формируем массив для отправления в телеграм
$params = [
    'chat_id' => $data['message']['chat']['id'],
    'text'    => $message
];

# Отправляем запрос в телеграм
file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));*/


//https://api.telegram.org/bot6712648842:AAGqQUUyTIH2Jh74MPNPny0JAcZ4F7rxCFQ/setwebhook?url=https://samp.rf.gd/index.php

/*# Переменные
$token = '6712648842:AAGqQUUyTIH2Jh74MPNPny0JAcZ4F7rxCFQ';

# Обрабатываем команды
$message = $data['message']['text'];

# Формируем массив для отправления в телеграм
$params = [
    'chat_id' => $data['message']['chat']['id'],
    'text'    => $message
];

# Отправляем запрос в телеграм
file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($params));*/
