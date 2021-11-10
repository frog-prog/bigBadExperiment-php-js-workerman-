<?php
///////////////config//////////////////
define('DB_HOST','localhost:3306');
define('DB_USER','mysqladmin');
define('DB_PASSWORD','jubae3shi7Th');
define('DB_NAME','tg');

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$db) {
	exit('No connection with database');
}
$dkp=10;
$kp=0;
$kpg=4;
$query="SET NAMES UTF8";
?>