<?php 

define('DB_USER', 'rishi1');
define('DB_PASS', 'Rishi@123');
define('DB_HOST', 'db4free.net');
define('DB_NAME', 'multilevel1');

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
if (!is_null($db->errorCode())) {
	die("Not Connected");
	exit();
}








 ?>