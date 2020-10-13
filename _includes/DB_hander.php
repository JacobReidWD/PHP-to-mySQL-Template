<?php
$DBserverName = "server name"; // Enter the name of your database server here, it might be localhost by default.
$DBuserName = "username"; // Enter your database username here, it might be root by default.
$DBpassWord = "password"; // Enter your database password here, you may not have one by default.
$DBname = "database name"; // Enter your database name here.

$link = mysqli_connect($DBserverName, $DBusername, $DBpassWord, $DBname, 'server port'); /* This variable is the connection to your database, enter your port in 'server port'.*/

?>
