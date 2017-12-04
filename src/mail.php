<?php

if((isset($_POST['Username'])&&$_POST['Username']!="")&&(isset($_POST['Phone'])&&$_POST['Phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'sergeydem24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратная связь с сайта WeDo'; //Загаловок сообщения
        $email = $_POST['email'];
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['Username'].'</p>
                        <p>Фамилия: '.$_POST['Phone'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= 'From: '. $email . "\r\n"; // от кого //Наименование и почта отправителя
        $send = mail($to, $subject, $message, $headers);
}
?>