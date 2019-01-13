<?php
$logname = $_POST['inlogin'];
$logpass = $_POST['inpass'];
if($modeling->checklogin($logname,$logpass))
{
	$_SESSION["usern"] = $logname;
	echo "Вы успешно вошли,приветствуем:";
	echo $_SESSION["usern"];
	
}
else
{
	echo "Данного логина или пароля не существует";
}