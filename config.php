<?php
error_reporting(0);
date_default_timezone_set('Asia/kolkata');
define('BASE_URL', 'http://localhost/crud/');
$conn=mysqli_connect('localhost','root','','php_practice');
if(!$conn)
{
	die('Database Connection Failed'.mysqli_error());
}
$date=date('d-m-Y').' '.date('h:m:s');

