<?php

$host = "localhost";
$dbname = "anushkaf_finworld";
$user = "anushkaf_finworld";
$password = "NwQ~X+L)TCSisWdr";

try {

$pdo = new PDO(
"mysql:host=$host;dbname=$dbname;charset=utf8",
$user,
$password
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $e){

die("Database connection failed: " . $e->getMessage());

}

?>