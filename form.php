<?php
$name = $_POST['name'];
$message = $_POST['message'];
$token = "5130221153:AAHxs162H6U677rA3fo7OuRFX7mdHKSY7DU";
$chat_id = '-798142020';
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $message,
  );

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  };
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
    &parse_mode=html&text={$txt}","r");

  if ($sendToTelegram) {
    echo ('success');
  } else {
    echo "Error";
  }
?>