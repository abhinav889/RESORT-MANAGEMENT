<?php
$string = "HelloWorld.fdgfdgfg.gfdgdfgfdgf.";  
$char="";
for ($i=0; $i<strlen($string); $i++) 
{  
	if($string[$i]==".")
	{
		$char=$char.".";
		echo "$char<br>";
		$char="";
	}
	else
		$char=$char.$string[$i];
}
?>