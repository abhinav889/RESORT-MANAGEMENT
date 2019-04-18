<html>
<?php
$college=array("ban"=>"pes","chen"=>"iitm","mum"=>"iitb");

$coll1=(array_keys($college));
$count=-1;
$arr2=array();
print_r($coll1);
echo "<br>";
/*foreach($college as $key=>$value)
  $count+=1;
  $arr2[$count]=$value;
 echo $count;
for($i=0;$i<=$count;$i++)
 echo $arr2[$i];*/
print_r(array_values($college));

$res=is_array($college);
echo $res;
echo "<br>";

array_push($college,"aims");
var_dump($college);
echo "<br>";
array_pop($college);
echo "<br>";
print_r($college);
echo "<br>";
print_r(array_chunk($college,2));//second parameter is size of each chunk
echo "<br>";
$arr1=array("a"=>"apple","b"=>"orange","c"=>"banana");
$arr2=array("a"=>"apple","c"=>"watermelon","d"=>"banana");
$result=array_diff_key($arr1,$arr2);
var_dump($result);

