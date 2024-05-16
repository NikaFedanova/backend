<?php

echo 'Відправка повідомлення...' . "\n";

$subject = '1 практична';
echo '============' . "\n";
echo "Тема: " . "\n" . $subject . "\n";

$firstName = 'Nika Fedanova | group 539';
$name = "Ім'я: {$firstName}" . "\n";

// Опис
$title = $subject . "\n";
$desc = "Виконання першої практичної роботи" . "\n";

$message = $name . $title . $desc;

echo "\n" . 'Тіло повідомлення:' . "\n";

echo $message . "\n";

echo '============' . "\n";

$headers = 'From: vizzow@gmail.com (Ніка Феданова)';

if (mail('n.a.fedanova@student.khai.edu', $subject, $message, $headers)) {
    echo "Лист успішно надіслано";
} else {
    echo "Помилка при відправленні листа";
}

?>