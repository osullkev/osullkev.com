<html>
	<head>
		<title>About osullkev.com</title>

	</head>
	<body>
		<h1>About</h1>
		<p>About page for Kev's nudes</p>
		<p>Available 24/7, all year round (excluding public holidays and sub zero temperatures)</p>
		<p>More content to come soon ;)</p>
  
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 			Wish to enquire about nudes? Enter your name here:  <input type="text" name="name"/>
 			<input type="submit" />
		</form>

		<br />
		<?php 

		if(!empty($_POST['name']))
		{
			echo "Hey there {$_POST['name']}, keep in mind that those who <b>SEND NUDES GET NUDES</b><br />";
			echo "But don't worry, plenty of nudes will be made available soon. Check in regulary :)";
		}
		?>
		<br />
		<p>For further enquiries, please see this <a href="contact.php">page</a></p>
	</body>
</html>

