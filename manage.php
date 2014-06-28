<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>تنبور نوازان حنان</title>
	<link rel="stylesheet" type="text/css" href="reset.css"/>
	<link rel="stylesheet" type="text/css" href="1styles.css"/>
	<link rel="stylesheet" type="text/css" href="prettyphoto.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/zepto.js"></script>
	<script type="text/javascript" src="./js/slide.js"></script>
	<script type="text/javascript" src="./js/jquery.prettyphoto.js"></script>
</head>


<body id="back">

	<?php

		$usr = "admin";
		$psw = "123";
		$username = '$_POST[username]';
		$password = '$_POST[password]';
		
		if ($_SESSION['login']==true || ($_POST['username']=="admin" && $_POST['password']=="123")) {
			echo "password accepted";
    		$_SESSION['login']=true; 
		else { 
			echo "incorrect login";
		}
	?>


	<div class="adminform">
		<form action="trylog.php" method ="post">

		<h1>Admin Panel</h1><br /><br /><br />

		<input class="username" type="input" placeholder="Username" name="username"/>
		<br /><br />

		<input class="pass" type="password"  placeholder="Password" name="password" />
		<br /><br /><br /><br />

		<input class="enter" type="submit" value="Enter"/>
		<input class="changepass" type="submit" value="Change Pass"/>
		

	</form>


		
	</div>


</body>
</html>
