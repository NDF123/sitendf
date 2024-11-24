<?php

/* https://api.telegram.org/bot5885803969:AAGfqTHmwjypDFpAsSvtwb_qTkd9DSPOVLU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$postname = $_POST['postname'];
$phone = $_POST['phone'];
$size = $_POST['size'];
$token = "5885803969:AAGfqTHmwjypDFpAsSvtwb_qTkd9DSPOVLU";
$chat_id = "-836616586";
$arr = array(
  'Замовлення: футболка F11.',
  'Name: ' => $name,
  'Postname: ' => $postname,
  'Call: ' => $phone,
  'Size: ' => $size
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>