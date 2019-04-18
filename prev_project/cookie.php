
<?php
	//name of cookie is mandatory
//done using setcookie() function_exists.setcookie method must be mentioned before html tags
//can be accessed even after closing and opening again,session independent
	$name="pes_hsec";
	$name1="pes_dsec";
	//setcookie("name","$name",time()+10,'/');//time()+10 denotes 10 seconds
	setcookie("name","$name",time()+10);
	setcookie("name1","$name1",time()+10,'/');
	echo "the cookie named $name and $name1 have been set <br>";
	print_r($_COOKIE);
?>
<html>
<body>
<p>learn cookies</p>
</body>
</html>

	