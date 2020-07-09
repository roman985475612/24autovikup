<?php 

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);

$to = 'ar.m2009@yandex.ru';
$subject = 'Заявка от клиента';
$message = 'Клиент '.$name.' просит перезвонить по номеру '.$phone;
$headers  = 'Content-type: text/html; charset=windows-1251 \r\n'; 

mail($to, $subject, $message, $headers);
