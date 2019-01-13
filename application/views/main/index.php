   <link href="external.css" rel="stylesheet">
<style>
div.a
{
  position: relative;
  width: 400px;
  height: 35px;
}
div.b
{
  position: absolute;
   top: 0;
 left: 0px;
}
div.c
{
  position: absolute;
  top: 100px;
 left: 0px;
}
div.result
{
  position: absolute;
  left: 1200px;
  top: 50px;
  font-size: 20px;
  color: red;

}
</style>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <form method="POST" class="form-inline">
<div class="container-fluid">

<div class="b">
  <div class="form-group">
<ul class="nav nav-tabs">
  <li class="active"><a href="http://pogoda123.com.gamma.mtw.ru">Home</a></li>
  <li> <a href="http://pogoda123.com.gamma.mtw.ru/account/parsing">Parse</a></li>
  <li><a href="http://pogoda123.com.gamma.mtw.ru/account/sendfeed">SendFeedback</a></li>
  <li><a href="http://pogoda123.com.gamma.mtw.ru/account/showfeed">ShowFeedback</a></li>
</ul>
</div>
</div>
<div class="text-right">
 <label>><font size="4" face="Comic sans MS"><b style="color: #FFFFFF">Login:</b></font></label>
<div class="form-group">
<input class="form-control" type="email" name="inlogin" placeholder="Ваш Email" autocomplete="of" required>
</div>
<div class="form-group">
<input class="form-control" type="password" name="inpass" placeholder="Ваш пароль" autocomplete="of" required="">
</div>
<div class="form-group">
<button class="btn btn-primary" type="submit" name="logining">login</button>
</div>
</div>
</div>
</form>

</div>
</nav>
  <div class="a">
  </div>
<div class="text-left">
<form method="POST" class="form-inline">
  <div class="form-group">
<p class="text-left"><font size="7" face = "Comic sans MS"><b style="color: #000000"><strong>Регистрация:</strong></b></font></p>
</div>
<br>
<!-- С„РѕСЂРјР° -->
<div class="form-group">

<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Name:</strong></b></font></p><!-- РРњРЇ -->
<input class="form-control" type ="username" name="username" placeholder="Ваше имя" autocomplete="of"  required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Surname:</strong></b></font></p><!-- Р¤Р°РјРёР»РёСЏ -->
<input class="form-control" type ="login" name="login" placeholder="Ваша фамилия" autocomplete="of" required>
</div>
<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Email:</strong></b></font></p><!-- РјС‹Р»Рѕ -->
<input class="form-control" type ="email" name="mail" placeholder="Ваш email" autocomplete="of" required>
</div>

<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Gender:</strong></b></font></p><!-- РїРѕР» -->
<select class="form-control" name="gender">
<option>Not chose</option>
<option >Man</option>
<option >Woman</option>
</select></p>
</div>

<br>

<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Birthday:</strong></b></font></p><!-- РґРµРЅСЊ СЂРѕР¶Рґ -->
<select class="form-control" name ="bday">
  <option>day</option>
<?php
    for($i=1; $i<=31; $i++)
    {
        echo '<option>' .$i. '</option>';
    }
     ?>
 </select>

<select name="bmounth" class="form-control"><!-- РјРµСЃСЏС† СЂРѕР¶Рґ -->
<option>Mounth</option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select>


<select class="form-control" name="byear"><!-- РіРѕРґ СЂРѕР¶Рґ -->
  <option>year</option>
  <?php
    for($p=1900;$p<=2018;$p++)
      echo '<option>'.$p.'</option>';
  ?>
</select></p>
 </div>

<br>


<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Password:</strong></b></font></p><!-- РїР°СЂРѕР»СЊ -->
<input class="form-control" type ="password" placeholder="Ваш пароль" name="password1" autocomplete="of" "required>
</div>
<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>
<br>
<div class="form-group">
<p class="text-left"><font size="5" face="Comic sans MS"><b style="color: #FFFFFF"><strong >Repeat password:</strong></b></font></p><!-- РїРѕРІС‚РѕСЂРёС‚СЊ РїР°СЂРѕР»СЊ -->
<input class="form-control" type ="password" name="retrypassword" autocomplete="of" placeholder="Повторите пароль"  required>
</div>
<div class="form-group">
<lable><font size="6"><b style="color: #FF0000">*</b></font></lable>
</div>
<br><br>
<div class="form-group">
  <p class="text-left"><button class="btn btn-primary" type ="submit" name="submit_value=">Register</button></p><!-- РєРЅРѕРїРєР° -->
  </div>
</div>
</form> 
</div>
</body>
<div class="result">
