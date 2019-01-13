   <?php
    if(isset($_SESSION["usern"]))
            {
                  
                  echo "Hello ";
                  echo $_SESSION["usern"];
                   require 'application/views/main/exit.php';   
                        }
                   
                        if(isset($_POST['exiting']))
                        {
                        	session_destroy();
                        echo "Вы успешно выышли с аккаунта";
                        }