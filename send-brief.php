<?php

$to = "lyapina.natalya@ukr.net";
$subject = "Бриф с сайта create-site.ho.ua";
$message = "Имя: ".$_POST['name']."
Телефон: ".$_POST['phone']."
Email: ".$_POST['mail']."
Як зручніше з Вами зв'язатися: ".$_POST['communication']."
Як Ви про мене дізналися: ".$_POST['source']."
Що для Вас важливо в процесі нашої роботи: ".$_POST['important']."
Товар/послуга, для якого потрібен сайт: ".$_POST['product']."
Які цілі Ви ставите? Наприклад, продаж товару чи послуги, реєстрація на курс, реклама: ".$_POST['goal']."
Хто Ваші клієнти? Що для них має бути важливо при виборі: ".$_POST['customers']."
Основні блоки/розділи, які мають бути на сайті: ".$_POST['chapters']."
Який функціонал повинен бути на сайті: ".$_POST['functional']."
Чи потрібен мультиязичний сайт? Вкажіть мови: ".$_POST['lang']."
Які відчуття має викликати сайт у відвідувачів: ".$_POST['feeling']."
Чи є у вас логотип: ".$_POST['logo']."
Яка палітра кольорів має бути на сайті: ".$_POST['colors']."
Наведіть приклади сайтів, які Вам подобаються і чому: ".$_POST['like']."
Наведіть приклади сайтів, які Вам не подобаються і чому: ".$_POST['dislike'];
$header = "Content-type:text/plain; charset = UTF-8\r\nReply-To:\r\nFrom: <contact>";
if (mail($to, $subject, $message, $header)) {
  echo ('Спасибо, данные отправлены!<br> Я с Вами свяжусь');
}
else {
  echo ('Ошибка! Попробуйте снова');
}


//Даные телеграмм
$token ='1622742476:AAEGVQxg7BH61qLMUogacmVjQYQI_BkYaVc';
$chatid = '-577778821';
$success = 'Сообщение отправлено';
$text_error = 'Форма не заполнена';
 
//данные из форм
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['mail']);
$communication = trim($_POST['communication']);
$source = trim($_POST['source']);
$important = trim($_POST['important']);
$product = trim($_POST['product']);
$goal = trim($_POST['goal']);
$customers = trim($_POST['customers']);
$chapters = trim($_POST['chapters']);
$functional = trim($_POST['functional']);
$lang = trim($_POST['lang']);
$feeling = trim($_POST['feeling']);
$logo = trim($_POST['logo']);
$colors = trim($_POST['colors']);
$like= trim($_POST['like']);
$dislike = trim($_POST['dislike']);

 
// сообщение
$tmtext = array(
"Имя:" => $name,
"Телефон:" => $phone,
"Email:" => $email,
"Як зручніше з Вами зв'язатися:" => $communication,
"Як Ви про мене дізналися:" => $source,
"Що для Вас важливо в процесі нашої роботи:" => $important,
"Товар/послуга, для якого потрібен сайт:" => $product,
"Які цілі Ви ставите? Наприклад, продаж товару чи послуги, реєстрація на курс, реклама:" => $goal,
"Хто Ваші клієнти? Що для них має бути важливо при виборі:" => $customers,
"Основні блоки/розділи, які мають бути на сайті:" => $chapters,
"Який функціонал повинен бути на сайті:" => $functional,
"Чи потрібен мультиязичний сайт? Вкажіть мови:" => $lang,
"Які відчуття має викликати сайт у відвідувачів:" => $feeling,
"Чи є у вас логотип:" => $logo,
"Яка палітра кольорів має бути на сайті:" => $colors,
"Наведіть приклади сайтів, які Вам подобаються і чому:" => $like,
"Наведіть приклади сайтів, які Вам не подобаються і чому:" => $dislike,
);
//собираем все в сообщение
$txt='';
foreach($tmtext as $key => $value) { 
     $txt .= "".$key.": ".$value."%0A"; 
  }
#Отправляем сообщение
$sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  echo 'Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.';
  echo $sendToTelegram;
  return true;
}

else {
  
}
 
?>