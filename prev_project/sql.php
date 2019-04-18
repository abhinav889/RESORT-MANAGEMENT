<?php
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='sample';

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
	echo "connected to sample database<br>";

$sql="CREATE TABLE SAMPLE.PES_Lsec (
SRN_NO INT(6) AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(30) NOT NULL,
EMAIL VARCHAR(30),
PHONE INT(10),
BRANCH VARCHAR(40))";

$result=mysqli_query($conn,$sql);

if($result)
{
	//echo "table  created".mysqli_connect_error();
	echo "table  created";
}
?>