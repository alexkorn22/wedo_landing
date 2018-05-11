<?php


if((isset($_POST['Username-kr'])&&$_POST['Username-kr']!="")&&(isset($_POST['phone-kr'])&&$_POST['phone-kr']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
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

    $message = '<b>WeDo Контекстная реклама. Обратный звонок </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['Username-kr'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-kr'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}



if((isset($_POST['Username'])&&$_POST['Username']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['select'])&&$_POST['select']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
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

    $message = '<b>Обратная связь с wedo.com.ua </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['Username'] . "\n";
    $message .= '<b>Фамилия: </b>'.$_POST['phone'] . "\n";
    $message .= '<b>Вопрос: </b>'.$_POST['select'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}



if((isset($_POST['phone-discover'])&&$_POST['phone-discover']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
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

    $message = '<b>WeDo Контекстная реклама. Узнать </b>'. "\n";
    $message .= '<b>Адрес сайта: </b>'.$_POST['address-discover'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-discover'] . "\n";
    $message .= '<b>Плановый бюджет в месяц: </b>'.$_POST['budget-discover'] . "\n";
    $message .= '<b>Рекламируемые товары и услуги: </b>'.$_POST['goods-discover'] . "\n";
    $message .= '<b>Регионы для показа рекламы: </b>'.$_POST['regions-discover'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}




if((isset($_POST['phone-order-kr'])&&$_POST['phone-order-kr']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
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

        $message = '<b>WeDo Контекстная реклама. Закзать контекстную рекламу </b>'. "\n";
        $message .= '<b>Адрес сайта: </b>'.$_POST['address-order-kr'] . "\n";
        $message .= '<b>Телефон: </b>'.$_POST['phone-order-kr'] . "\n";
        $message .= '<b>Тариф: </b>'.$_POST['select-tariff'] . "\n";
        $message .= '<b>Регионы для показа рекламы: </b>'.$_POST['regions-order-kr'] . "\n";
        $message .= '<b>Комментарий: </b>'.$_POST['comment'] . "\n";

        require 'Telegram.php';
        $tg = new Telegram();
        $tg->sendMessage($message);

}



if((isset($_POST['phone-freecalc'])&&$_POST['phone-freecalc']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
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

    $message = '<b>WeDo Контекстная реклама. Заказать бесплатный расчёт </b>'. "\n";
    $message .= '<b>Адрес сайта: </b>'.$_POST['address-freecalc'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-freecalc'] . "\n";
    $message .= '<b>Рекламируемые товары и услуги: </b>'.$_POST['goods-freecalc'] . "\n";
    $message .= '<b>Регионы для показа рекламы: </b>'.$_POST['regions-freecalc'] . "\n";
    $message .= '<b>Комментарий: </b>'.$_POST['comment-freecalc'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-free-audit'])&&$_POST['name-free-audit']!="")&&(isset($_POST['phone-free-audit'])&&$_POST['phone-free-audit']!="")&&(isset($_POST['site-free-audit'])&&$_POST['site-free-audit']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SEO. Бесплатный экспресс-аудит'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-free-audit'].'</p>
                        <p>Телефон: '.$_POST['phone-free-audit'].'</p>
                        <p>Сайт: '.$_POST['site-free-audit'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SEO. Бесплатный экспресс-аудит </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-free-audit'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-free-audit'] . "\n";
    $message .= '<b>Сайт: </b>'.$_POST['site-free-audit'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-same'])&&$_POST['name-same']!="")&&(isset($_POST['phone-same'])&&$_POST['phone-same']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SEO. Заказ SEO-продвижения'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-same'].'</p>
                        <p>Телефон: '.$_POST['phone-same'].'</p>
                        <p>Сайт: '.$_POST['site-same'].'</p>
                        <p>Опишите проблему: '.$_POST['comment-same'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SEO. Заказ SEO-продвижения </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-same'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-same'] . "\n";
    $message .= '<b>Сайт: </b>'.$_POST['site-same'] . "\n";
    $message .= '<b>Опишите проблему: </b>'.$_POST['comment-same'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-order-promotion'])&&$_POST['name-order-promotion']!="")&&(isset($_POST['phone-order-promotion'])&&$_POST['phone-order-promotion']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SEO. Заказ SEO-продвижения сайта'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-order-promotion'].'</p>
                        <p>Телефон: '.$_POST['phone-order-promotion'].'</p>
                        <p>Сайт: '.$_POST['site-order-promotion'].'</p>
                        <p>Опишите проблему: '.$_POST['comment-order-promotion'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SEO. Заказ SEO-продвижения </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-order-promotion'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-order-promotion'] . "\n";
    $message .= '<b>Сайт: </b>'.$_POST['site-order-promotion'] . "\n";
    $message .= '<b>Опишите проблему: </b>'.$_POST['comment-order-promotion'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-order-consultation'])&&$_POST['name-order-consultation']!="")&&(isset($_POST['phone-order-consultation'])&&$_POST['phone-order-consultation']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SEO. Заказ обратного звонка'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-order-consultation'].'</p>
                        <p>Телефон: '.$_POST['phone-order-consultation'].'</p>
                        <p>Сайт: '.$_POST['site-order-consultation'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SEO. Заказ обратного звонка </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-order-consultation'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-order-consultation'] . "\n";
    $message .= '<b>Сайт: </b>'.$_POST['site-order-consultation'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-discover-smm'])&&$_POST['name-discover-smm']!="")&&(isset($_POST['phone-discover-smm'])&&$_POST['phone-discover-smm']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SMM. Узнать'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-discover-smm'].'</p>
                        <p>Телефон: '.$_POST['phone-discover-smm'].'</p>
                        <p>Сайт: '.$_POST['site-discover-smm'].'</p>
                        <p>Сфера бизнеса: '.$_POST['busines-discover-smm'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SMM. Узнать </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-discover-smm'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-discover-smm'] . "\n";
    $message .= '<b>Сайт: </b>'.$_POST['site-discover-smm'] . "\n";
    $message .= '<b>Сфера бизнеса: </b>'.$_POST['busines-discover-smm'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-same-smm'])&&$_POST['name-same-smm']!="")&&(isset($_POST['phone-same-smm'])&&$_POST['phone-same-smm']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SMM. Хочу так же'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-same-smm'].'</p>
                        <p>Телефон: '.$_POST['phone-same-smm'].'</p>
                        <p>Комментарий: '.$_POST['comment-same-smm'].'</p>
                     
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SMM. Хочу так же </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-same-smm'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-same-smm'] . "\n";
    $message .= '<b>Комментарий: </b>'.$_POST['comment-same-smm'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

if((isset($_POST['name-order-consult-smm'])&&$_POST['name-order-consult-smm']!="")&&(isset($_POST['phone-order-consult-smm'])&&$_POST['phone-order-consult-smm']!="")){//Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@artorg.com.ua'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'WeDo SMM. Закзать контсультацию'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-order-consult-smm'].'</p>
                        <p>Телефон: '.$_POST['phone-order-consult-smm'].'</p>
                        <p>Комментарий: '.$_POST['comment-order-consult-smm'].'</p>
                     
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail($to, $subject, $message, $headers);

    $message = '<b>WeDo SMM. Закзать контсультацию </b>'. "\n";
    $message .= '<b>Имя: </b>'.$_POST['name-order-consult-smm'] . "\n";
    $message .= '<b>Телефон: </b>'.$_POST['phone-order-consult-smm'] . "\n";
    $message .= '<b>Комментарий: </b>'.$_POST['comment-order-consult-smm'] . "\n";

    require 'Telegram.php';
    $tg = new Telegram();
    $tg->sendMessage($message);

}

?>
