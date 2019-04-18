<?php

session_start();//start the php session function,a cookie get created called sessid thingy,check properly in browser

if(isset($_SESSION['page_count']))//$_SESSION is an associative array
{
	$_SESSION['page_count']+=1;
}
else
{
		$_SESSION['page_count']=1;
}
	echo 'you are vistor number'.$_SESSION['page_count']."</br>";

?>
<html>
<body>learn session</body>
</html>
