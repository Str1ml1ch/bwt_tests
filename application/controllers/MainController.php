<?php
 $modeling = new get;
class MainController extends Controller
{
	
public function indexAction()
{
	//echo "Главная страница";
	$this->view->render('ManePage');
	require 'application/controllers/status.php';
}
}