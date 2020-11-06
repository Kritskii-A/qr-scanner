<?php
$json = file_get_contents('php://input');
$obj = json_decode($json, true);

//указываем что получаем
$text = $obj['qrcode'];

$filename = 'somefile.txt';
//записываем текст в файл
file_put_contents($filename, $text, FILE_APPEND);
//потом его можно прочитать из файла
$text = file_get_contents($filename);

echo json_encode($text);
?>
