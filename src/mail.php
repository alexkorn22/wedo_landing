<?php


if((isset($_POST['Username-kr'])&&$_POST['Username-kr']!="")&&(isset($_POST['phone-kr'])&&$_POST['phone-kr']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'sergeydem24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo Контекстная реклама. Обратный звонок'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['Username-kr'].'</p>
                        <p>Телефон: '.$_POST['phone-kr'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

//    $message = '<b>WeDo Контекстная реклама. Обратный звонок </b>'. "\n";
//    $message .= '<b>Имя: </b>'.$_POST['Username-kr'] . "\n";
//    $message .= '<b>Телефон: </b>'.$_POST['phone-kr'] . "\n";
//
//    require 'Telegram.php';
//    $tg = new Telegram();
//    $tg->sendMessage($message);

}



if((isset($_POST['Username'])&&$_POST['Username']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['select'])&&$_POST['select']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'sergeydem24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Обратная связь с сайта WeDo'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['Username'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Вопрос: '.$_POST['select'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);
/*
    $message = '<b>Имя: </b>'.$_POST['Username'] . "\n";
    $message .= '<b>Фамилия: </b>'.$_POST['phone'] . "\n";
    $message .= '<b>Вопрос: </b>'.$_POST['select'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);
*/
}



if((isset($_POST['phone-discover'])&&$_POST['phone-discover']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'sergeydem24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo Контекстная реклама. Узнать'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Адрес сайта: '.$_POST['address-discover'].'</p>
                        <p>Телефон: '.$_POST['phone-discover'].'</p>
                        <p>Плановый бюджет в месяц: '.$_POST['budget-discover'].'</p>
                        <p>Рекламируемые товары и услуги: '.$_POST['goods-discover'].'</p>
                        <p>Регионы для показа рекламы: '.$_POST['regions-discover'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);


//    $message = '<b>WeDo Контекстная реклама. Узнать </b>'. "\n";
//    $message .= '<b>Адрес сайта: </b>'.$_POST['address-discover'] . "\n";
//    $message .= '<b>Телефон: </b>'.$_POST['phone-discover'] . "\n";
//    $message .= '<b>Плановый бюджет в месяц: </b>'.$_POST['budget-discover'] . "\n";
//    $message .= '<b>Рекламируемые товары и услуги: </b>'.$_POST['goods-discover'] . "\n";
//    $message .= '<b>Регионы для показа рекламы: </b>'.$_POST['regions-discover'] . "\n";
//
//    require 'Telegram.php';
//    $tg = new Telegram();
//    $tg->sendMessage($message);

}




if((isset($_POST['phone-order-kr'])&&$_POST['phone-order-kr']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'sergeydem24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo Контекстная реклама. Закзать контекстную рекламу'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Адрес сайта: '.$_POST['address-order-kr'].'</p>
                        <p>Телефон: '.$_POST['phone-order-kr'].'</p>
                        <p>Тариф: '.$_POST['select-tariff'].'</p>
                        <p>Регионы для показа рекламы: '.$_POST['regions-order-kr'].'</p>
                        <p>Комментарий: '.$_POST['comment'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

//        $message = '<b>WeDo Контекстная реклама. Закзать контекстную рекламу </b>'. "\n";
//        $message .= '<b>Адрес сайта: </b>'.$_POST['address-order-kr'] . "\n";
//        $message .= '<b>Телефон: </b>'.$_POST['phone-order-kr'] . "\n";
//        $message .= '<b>Тариф: </b>'.$_POST['select-tariff'] . "\n";
//        $message .= '<b>Регионы для показа рекламы: </b>'.$_POST['regions-order-kr'] . "\n";
//        $message .= '<b>Комментарий: </b>'.$_POST['comment'] . "\n";
//
//        require 'Telegram.php';
//        $tg = new Telegram();
//        $tg->sendMessage($message);

}



if((isset($_POST['phone-freecalc'])&&$_POST['phone-freecalc']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'sergeydem24@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo Контекстная реклама. Заказать бесплатный расчёт'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Адрес сайта: '.$_POST['address-freecalc'].'</p>
                        <p>Телефон: '.$_POST['phone-freecalc'].'</p>
                        <p>Рекламируемые товары и услуги: '.$_POST['goods-freecalc'].'</p>
                        <p>Регионы для показа рекламы: '.$_POST['regions-freecalc'].'</p>
                        <p>Комментарий: '.$_POST['comment-freecalc'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

//    $message = '<b>WeDo Контекстная реклама. Заказать бесплатный расчёт </b>'. "\n";
//    $message .= '<b>Адрес сайта: </b>'.$_POST['address-freecalc'] . "\n";
//    $message .= '<b>Телефон: </b>'.$_POST['phone-freecalc'] . "\n";
//    $message .= '<b>Рекламируемые товары и услуги: </b>'.$_POST['goods-freecalc'] . "\n";
//    $message .= '<b>Регионы для показа рекламы: </b>'.$_POST['regions-freecalc'] . "\n";
//    $message .= '<b>Комментарий: </b>'.$_POST['comment-freecalc'] . "\n";
//
//    require 'Telegram.php';
//    $tg = new Telegram();
//    $tg->sendMessage($message);

}

?>
