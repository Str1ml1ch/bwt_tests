<?php
 session_start();
 require'recaptcha/autoload.php';
 require 'application/lib/Dev.php';//Проверка переменных (ДЕБАГ)
  require 'application/models/feedback.php';//База
 require 'application/core/Router.php';//Router
 $router = new Router;
 $router->run();

   require 'application/controllers/controls.php';//База

?>