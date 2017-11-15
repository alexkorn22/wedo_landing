<?php

$recepient = "sergeydem24@gmail.com";
$sitename = "WeDo";

$name = trim($_GET["Username"]);
$tel = trim($_GET["Phone"]);
$select = trim($_GET["select"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $tel \nСообщение: $select";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");