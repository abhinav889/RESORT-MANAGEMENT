<?php

session_start();

?>
<html>
<body>
<?php


$_SESSION["car"]="BMW";
$_SESSION["color"]="Black";
$_SESSION["seats"]=5;

echo "session variables are set";
session_unset();
//session_destroy();

?>

</body>
</html>