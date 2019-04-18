<?php
//they point to the original content,if a new $sampl_1 is assigned it to $sample,doesn't create a copy
$sample ="hi welcome to pes";
$sample_1=$sample;
//unset($sample_1);
$sample_1="bye bye pes";
echo "$sample<br>";
echo "$sample_1<br>";
?>