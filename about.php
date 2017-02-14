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
		<br />
		<?php if(!empty($_POST['name']))
		echo "Hey there {$_POST['name']}, don't you know that <b>those who SEND NUDES GET NUDES</b>"
		?>

		<br />
		<br />
		<p>For further enquiries, please see this <a href="contact.php">page</a></p>
	</body>
</html>

