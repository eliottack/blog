<?php

$dbHost = 'localhost';
$dbName = 'lambdasys';
$dbUser = 'root';
$dbPass = '';


try {
	$pdo = New PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser, $dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Fallo en la conexion: " .$e->getMessage();
}
