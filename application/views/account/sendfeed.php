<head>
	<script src='https://www.google.com/recaptcha/api.js'></script>
			 <link rel="icon" href="/public/test.png" type="image/x-png">                          
<link rel="shortcut icon" href="/public/test.png" type="image/x-png">
</head>
<style>
div.result
{
  position: absolute;
  left: 600px;
  font-size: 30px;
  color: black;
}
</style>
<body>
	<form method="POST" class="form-inline">
	<p class="text-center"><font size="5" face="Comic sans MS"><b style="color: #000000"><strong >Send Feedbacks:</strong></b></font></p>
<br>
  <div class="form-group">
<strong>Email: </strong>
<input class="form-control" type="email" name="feedmail" autocomplete="of" placeholder="your email" name = "feedlogin" required>
</div>
<br><br>
<div class="form-group">
<strong>Name:</strong>
<input class="form-control" type="text" name="feedname" autocomplete="of" placeholder="name" name="feedname" required><br><br>
</div>
<br>
<p class="text-center"><font size="4" face="Comic sans MS"><b style="color: #000000">Feedback</b></font></p>
<p class="text-center"><textarea  name="feedtext" autocomplete="of" placeholder="your feedback" cols="200" rows="20" name="feedtext" required></textarea></p>
<br>
<div class="g-recaptcha" data-sitekey="6LcLAn8UAAAAAPw88kPtICf0bbl66-tB6yxwLdy5" required></div>
<p class="text-center"><button class="btn btn-primary" type="sumbit" name="feedsumbit">Send a feedback</button></p>
</form>
</body>
<div class="result">