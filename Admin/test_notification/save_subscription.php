<?php

$pdo = new PDO(
"mysql:host=localhost;dbname=anushkaf_finworld",
"anushkaf_finworld",
"NwQ~X+L)TCSisWdr"
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$endpoint = $_POST['endpoint'] ?? '';
$p256dh   = $_POST['p256dh'] ?? '';
$auth     = $_POST['auth'] ?? '';

if(!$endpoint){
exit;
}

$check = $pdo->prepare("SELECT id FROM push_subscriptions WHERE endpoint = ?");
$check->execute([$endpoint]);

if ($check->rowCount() == 0) {

$insert = $pdo->prepare(
"INSERT INTO push_subscriptions(endpoint,p256dh,auth)
VALUES(?,?,?)"
);

$insert->execute([$endpoint,$p256dh,$auth]);

}