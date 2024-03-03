<?php
$name = isset($_POST['Name']) ? $_POST['Name'] : 'N/A'; // Changed to match form field name and added default value
$message = isset($_POST['message']) ? $_POST['message'] : 'N/A';
$token = "5130221153:AAHxs162H6U677rA3fo7OuRFX7mdHKSY7DU";
$chat_id = '-798142020';
$arr = array(
  'Имя пользователя: ' => $name,
  'Сообщение: ' => $message, // Changed from 'Телефон: ' for clarity
);

$txt = ""; // Initialize the variable
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

// Using cURL for better error handling
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot{$token}/sendMessage");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('chat_id' => $chat_id, 'parse_mode' => 'HTML', 'text' => $txt)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

if ($server_output) {
  echo 'Success';
} else {
  echo "Error";
}
?>
