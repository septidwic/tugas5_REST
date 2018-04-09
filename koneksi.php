<?php
$host='localhost';
$user='root';
$pass='';
$dbname='akademik';
$connect=mysql_connect($host, $user, $pass,$dbname) or die (mysql_error());
$dbselect=mysql_select_db($dbname);
?>