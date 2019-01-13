<?php
$error="You are not user of this site, please go to the registration page and loggining or registration";
if(isset($_SESSION["usern"]))
{
 $modeling = new get;
$modeling->Selectfeed();

while($result = mysqli_fetch_array($modeling->selectedfeed))
{
	require 'application/views/account/showfeeds.php';
	echo "Number:$result[id]<br/>";
	echo "Email:$result[Email]<br/>";
	echo "Name:$result[Name]<br/>";
	echo "Feedback:$result[Feedback]<br/>";
}
}
else
{
	echo $error;
}