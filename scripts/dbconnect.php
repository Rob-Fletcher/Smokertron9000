<?php
$MyUsername = "root";  // enter your username for mysql
$MyPassword = "";  // enter your password for mysql
$MyHostname = "localhost:3306";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysqli_connect($MyHostname , $MyUsername, $MyPassword, "test");
$selected = mysqli_select_db($dbh, "test");
?>
