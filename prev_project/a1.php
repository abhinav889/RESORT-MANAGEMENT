<html>
<?php
$college="pes";
echo <<< eot
	hi welcome
	good morning
	bye bye $college
	hi
eot;
echo "<br>";
$string="hello hi world";
echo strlen("hello");echo "<br>";
echo strcmp("hello","hel");echo "<br>";
echo chop($string,"world");echo "<br>";//it can chop only the last string,not possible to chop middle one or first one
echo strtoupper("hello");echo "<br>";
echo strtolower("HELLO");echo "<br>";
echo strpos("I study in pes,i like pes!","pes");echo "<br>";
$college1=array("pes","iit","iim");
echo implode(" ",$college1);echo "<br>";//first parameter is delimiter
$college2="hi welcome to pes";
print_r (explode(" ",$college2));
unset($college1[0]);//to delete whole array,or just an element
print_r ($college1);
echo "<br>";
//go through cheat sheets,for html,css,js,php
$string="pes imy univ";
$string=ereg_replace('PES',$change,$string);
echo $string;
?>
</html>