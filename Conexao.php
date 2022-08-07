<?php

ini_set('display_errors', '0');

$server = 'localhost';
$user = 'root';
$password = '';

$con = mysqli_connect($server, $user,$password);

$banco = mysqli_select_db($con,'estoque1');


	
	
?>