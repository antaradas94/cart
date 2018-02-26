<html>
<head>
<link rel="stylesheet" type="text/css" href="head_style.css"/>
</head>
<body style="background-color:rgba(0,0,255,0.2);">
<div id="hdr" name="hdr">
	<div id='nm' name='nm'></div>
	<div id='menu' name='menu'>
		<a href="index.php"><div id='home' name='home'>Home</div></a>
		<a href="signUp.html"><div id='signUp' name='signUp'>Sign Up</div></a>
		
		<?php
		session_start();
		
		if(!isset($_SESSION['uid']))
		{
		echo "<a href='log.html'><div id='logIn' name='logIn'>Log In</div></a>";
		}
		else
			echo "<a href='logout.php'><div id='logOut' name='logOut'>Log Out</div></a>";
	
		?>
		
	</div>
</div>
</body>
</html>