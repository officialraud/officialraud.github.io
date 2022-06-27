<?php
include ("table.php");
$config = array(
	//База 
	'host' => '31.31.198.55',
	'user' => 'u1083682_elpato',
	'pass' => 'rhjyjcnfh1337',
	'db' => 'u1083682_gta5rp' );

$connect = mysqli_connect("$config[host]", "$config[user]", "$config[pass]", "$config[db]");
if (mysqli_connect_errno()) {
    printf("Сайт временно не доступен!", mysqli_connect_error());
    exit();
}
