<?php

$dbHost = 'localhost';
$dbName = 'pruebasn_apphouse';
$dbUser = 'pruebasn_house';
$dbPass = 'bq7usj786i5z';


try {
	$pdo = New PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser, $dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Fallo en la conexion: " .$e->getMessage();
}
