<?php
//Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
$name = $_GET['name']; // Вытаскиваем имя в переменную
$email = "solodukha.as@gmail.com"; // Вытаскиваем почту в переменную
$phone = $_GET['phone'];
$message = "Имя: $name, номер телефона: $phone "; // Формируем сообщение, отправляемое на почту
$to = "solodukha.as@gmail.com"; // Задаем получателя письма
$from = "milonov.webstar@gmail.com"; // От кого пришло письмо
$subject = "Заявка с сайта ISMI"; // Задаем тему письма
$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
if (mail($to, $subject, $message, $headers)) { // При помощи функции mail, отправляем сообщение, проверяя отправилось оно или нет
    echo "<p>Сообщение успешно отправлено</p>"; // Отправка успешна
}
else {
    echo "<p>Что-то пошло не так, как планировалось</p>"; // Письмо не отправилось
}


?>