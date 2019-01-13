<?php
require 'application/core/Controller.php';

 $modeling = new get;
class AccountController extends Controller
{
	
public function parsingAction()
{
	$this->view->render('Weather Parsing');
	require 'application/controllers/Parsing.php';
}
public function sendfeedAction()
{
	$this->view->render('Send feedbacks');
}
public function showfeedAction()
{
	$this->view->render('Show feedbacks');
require 'application/controllers/showfeedback.php';
}
}