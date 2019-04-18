<html>
<?php
	$first[0]="zero";
	$first[1]="one";
	$first[]="two";//assumes index as 2
	$first[]="four";
	for($i=0;$i<count($first);$i++)
		print("$i:$first[$i] <br>");
	
	$age["a"]=1;
	$age["b"]=2;
	$age["c"]=3;
	
	for(reset($age);$element=key($age);next($age))
		print("$element:$age[$element] <br>");
	
	$fourth = array(
	"jan" => "1","feb" => "2","mar" => "3"
	);
	
	foreach ($fourth as $element => $value)
		print("$element is the $value month <br>");
	$prjgrp=array("cse"=>array("a1","a2"),"ece"=>array("b1","b2"));
	foreach($prjgrp["ece"] as $name)
		print($name."<br>");
	//foreach($ as array_keys($prjgrp))
		print_r (array_keys($prjgrp));
		
	$multi=array(
	array(1,2,3),
	array(2,4,6)
	);
	print($multi[0][1]);
?>
</html>

		