<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Harjutus8 - Cookies</title>
</head>

<body>
	<?php
	
		$name = "Test";
		$value = "45";
		$expire = time() + (60*60*24*7);

		setcookie($name, $value, $expire);
	
	echo time() + (60*60*24*7);	
	?>
</body>
</html>