<?php

$to = "lyapina.natalya@ukr.net";
$subject = "Сообщение с сайта create-site.ho.ua";
$message = "Имя: ".$_POST['name']."
Email: ".$_POST['email']."
Телефон: ".$_POST['tel']."
Сообщение: ".$_POST['message'];
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
$phone = trim($_POST['email']);
 
// сообщение
$tmtext = array(
"Имя" => $name,
"Телефон" => $phone,
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