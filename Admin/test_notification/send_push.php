<?php

require 'vendor/autoload.php';

use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

function sendPush($title,$message){

    $servername="localhost";
	$dbname="anushkaf_finworld";
	$username="anushkaf_finworld";
	$password="NwQ~X+L)TCSisWdr";
		   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   
$stmt = $conn->query("SELECT * FROM push_subscriptions");

$auth = [
'VAPID' => [
'subject' => 'mailto:test@test.com',
'publicKey' => 'BLi370oF3fEV8LrI3th2oq6Wmpwqh0ca5HCbWUrKg77keyku6vdkXgWADMXgxLzjYCwSTFs_yhPlOpZsh9-KXzM',
'privateKey' => 'l-B4qMwq1rHu_oGu0WoRsc_5aeNlkMxpurlOvzHE6TM',
]
];

$webPush = new WebPush($auth);
// queue notifications
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

$subscription = Subscription::create([
"endpoint" => $row['endpoint'],
"keys" => [
"p256dh" => $row['p256dh'],
"auth" => $row['auth']
]
]);

$webPush->queueNotification(
$subscription,
json_encode([
"title"=>$title,
"message"=>$message
])
);

}

// send notifications
foreach ($webPush->flush() as $report) {

$endpoint = $report->getRequest()->getUri()->__toString();

if (!$report->isSuccess()) {

if ($report->isSubscriptionExpired()) {

$delete = $conn->prepare(
"DELETE FROM push_subscriptions WHERE endpoint = ?"
);

$delete->execute([$endpoint]);

}

}

}

}