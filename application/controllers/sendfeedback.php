<?php
// ваш секретный ключ
$secret = '6LcLAn8UAAAAAITCV6qBR6UocPyvSeltqa6uBfoI';
// однократное включение файла autoload.php (клиентская библиотека reCAPTCHA PHP)
//require_once (dirname(__FILE__).'recaptcha/autoload.php');
// если в массиве $_POST существует ключ g-recaptcha-response, то...
if (isset($_POST['g-recaptcha-response'])) {
  // создать экземпляр службы recaptcha, используя секретный ключ
  $recaptcha = new \ReCaptcha\ReCaptcha($secret);
  // получить результат проверки кода recaptcha
  $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
  if ($resp->isSuccess()){
  	foreach($modeling->ArrFeedbacks() as $row)
			{
			$fmail=$row['SendEmail'];
			$fname=$row['SendName'];
			$ftext=$row['SendFeed'];
		}
$modeling->SendFeedbacks($fmail,$fname,$ftext);
echo "Ваш отзыв успешно отправлен!";
  } else {
    // иначе передать ошибку
    $errors = $resp->getErrorCodes();
    $data['error-captcha']=$errors;
    $data['msg']='Код капчи не прошёл проверку на сервере';
    $data['result']='error';
    echo $data['msg'];
  }
 
} else {
  //ошибка, не существует ассоциативный массив $_POST["send-message"]
  $data['result']='error';
}