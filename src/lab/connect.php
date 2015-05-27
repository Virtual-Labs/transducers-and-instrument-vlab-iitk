<?php 
$dbname= 'virtuallab';
$con= mysql_connect("localhost","root","electrical") or die(mysql_error());
$db=mysql_select_db($dbname, $con) or die('could not select database');
?>
