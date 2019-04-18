<?php
//$_REQUEST is used for getting both get and post
if($_SERVER["REQUEST_METHOD"]=="GET")
{
	$name=$_REQUEST["name"];//name should be the same as given in the html file attribute name
	$address=$_REQUEST["add"];
	if(empty($name))
		echo "i have no name";
	else
		echo "iam $name and i stay in $address";
}
?>