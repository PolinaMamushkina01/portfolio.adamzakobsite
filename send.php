<?php

ini_set('display_errors','On');
error_reporting('E_ALL');

// Принимаем данные из пост массива

// Создадим переменные 

$name = $_POST['name'];
$email = $_POST['email'];
$info = $_POST['info'];

// Преобразование символов в спецсимволы

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$info = htmlspecialchars($info);

// Декодирование url

$name = urldecode($name);
$email = urldecode($email);
$info = urldecode($info);

// Удаление пробелов в конце и в начале строки

$name = trim($name);
$email = trim($email);
$info = trim($info);

// Проверка

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $info;

if (mail("pmamushkina@yandex.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: polinamamushkina@yandex.ru \r\n")) {
    echo "сообщение успешно отправлено";
}
else {
    echo "при отправке сообщения возникли ошибки";
}

?>