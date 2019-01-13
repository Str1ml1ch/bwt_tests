<?php	
			foreach($modeling->registering() as $row)
			{
			$regname=$row['Name'];
			$regsurname=$row['Surname'];
			$regemail=$row['Email'];
			$reggender=$row['Gender'];
			$regbirthday=$row['Birthday'];
			$regbirthmounth=$row['Birthmounth'];
			$regbirthyear=$row['Birthyear'];
			$regpasswording=$row['Password'];
			$regrepasswording = $row['ReplyPassword'];
		}

if($reggender==="Not chose")
{

	$regender = "NULL";
}

if($regbirthday==="day")
{
	$regbirthday = "NULL";
}

if($regbirthmounth==="Mounth")
{
	$regbirthmounth = "NULL";
}

if($regbirthyear==="year")
{
	$regbirthyear = "NULL";
}


		if($regpasswording===$regrepasswording)
		{
			$modeling->gobaza($regname,$regsurname,$regemail,$reggender,$regbirthday,$regbirthmounth,$regbirthyear,$regpasswording);
			echo "All right pls gonna loggining";
		}
		else
		{
			echo "ERROR passwords doesnt match";
		}