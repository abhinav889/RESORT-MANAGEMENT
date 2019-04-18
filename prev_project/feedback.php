<html>
<head></head>
<body>
<?php
$name=$_REQUEST['name'];
$comments=$_REQUEST['comments'];
$old = fopen("comments.txt", "r+t");
$old_comments = fread($old, 1024);
$write = fopen("comments.txt", "w");
$string=$name.':'.$comments.'<br>'.$old_comments;
//echo $string;
fwrite($write, $string);
fclose($write);
fclose($old);
$read = fopen("comments.txt", "r+t");
//echo "<br><br>Comments<hr>".fread($read, 1024);
echo "<h1 align=center>YOUR RESPONSE HAS BEEN SUCCESSFULLY SUBMITTED</h1>";
echo "<a href='/html_project/main/register.php'>Back To Login Page</a>";
fclose($read);
/*header("Location:thankyou.html");*/
?>
</body>
</html>