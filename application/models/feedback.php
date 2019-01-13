<?php
class get 
{
	public $connect;
    public $selectedfeed;
    public $Nameing;
    public $Emailing;
    public $Passwording;
    public $Repasswording;

    public function __construct()//подключение к базе 
    {
     $this->connect = mysqli_connect('localhost','taraskuznet1','240500240500','db_taraskuznet1');
    }
	

	public function registering()//массив с данными
	{	

		return array(
			
			array(
				'Name' => $_POST['username'],
				'Surname' => $_POST['login'],
				'Email' => $_POST['mail'],
				'Gender'=>$_POST['gender'],
				'Birthday'=>$_POST['bday'],
				'Birthmounth'=>$_POST['bmounth'],
				'Birthyear'=>$_POST['byear'],
				'Password'=>$_POST['password1'],
				'ReplyPassword'=>$_POST['retrypassword'],
			),
		);
		}
		public function  gobaza($n,$s,$e,$g,$bd,$bm,$by,$p)//занесение в базу
		{
        $query1 = mysqli_query($this->connect,"INSERT INTO Users (`Name`,`Surname`,`Email`,`Gender`,`Birthday`,`Birthmounth`,`Birthyear`,`Password`) VALUES ('$n' , '$s' , '$e' , '$g' , '$bd' , '$bm' , '$by' , '$p')") or die(mysqli_error());
		}

		public function checklogin($log,$pass)//вход в систему
		{
			$this->selecting=mysqli_fetch_assoc(mysqli_query($this->connect,"SELECT * FROM Users WHERE `Email`='$log'AND `Password`='$pass'"));
			return $this->selecting;
		}
		public function Selectfeed()//просмотр всех фидбеков
		{
			$this->selectedfeed=mysqli_query($this->connect,"SELECT * FROM feedbacks");

		}
		public function ArrFeedbacks()//Массив Фидбеков
		{
		return array(
			
			array(
				'SendEmail' => $_POST['feedmail'],
				'SendName' => $_POST['feedname'],
				'SendFeed' => $_POST['feedtext'],
			),
		);
	}
		public function SendFeedbacks($fe,$fn,$ft)//отправаить фидбек
		{
			$query12 = mysqli_query($this->connect,"INSERT INTO feedbacks (`Name`,`Email`,`Feedback`) VALUES ('$fe' , '$fn' , '$ft')") or die(mysqli_error());
		}
		
	}