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

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$SRN_NO=$_POST["SRN_NO"];
	$NAME=$_POST["NAME"];
	$EMAIL=$_POST["EMAIL"];
	$PHONE=$_POST["PHONE"];
	$BRANCH=$_POST["BRANCH"];
}
//print_r($_POST);
$sql="INSERT INTO
SAMPLE.PES_Lsec(SRN_NO,NAME,EMAIL,PHONE,BRANCH) VALUES ('$SRN_NO','$NAME','$EMAIL','$PHONE','$BRANCH')";
$result=mysqli_query($conn,$sql);
if($result)
	echo "row inserted";
$sql="select * from sample.PES_Lsec";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	echo "the srn_no is".$row['SRN_NO'];
}
?>