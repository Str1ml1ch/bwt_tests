<?php
$error="You are not user of this site, please go to the registration page and loggining or registration";
if(isset($_SESSION["usern"]))
{
 function Parse($p1, $p2, $p3)
 {
    $num1 = strpos($p1, $p2);
   if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
 }
$String = file_get_contents('http://www.gismeteo.ua/city/daily/5093/');
$Pars = Parse($String, '<div class="scity" xmlns:v="http://rdf.data-vocabulary.org/#">', '-->');
echo $Pars;
}
else
{
echo $error;
}
 
?>