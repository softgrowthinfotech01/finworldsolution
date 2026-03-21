<?php

require 'vendor/autoload.php';

use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

function sendPush($title,$message){

/* = new PDO(
"mysql:host=localhost;dbname=notification_system",
"root",
""
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
require_once "conn.php";

$stmt = $conn->query("SELECT * FROM push_subscriptions");

$auth = [
'VAPID' => [
'subject' => 'mailto:test@test.com',
'publicKey' => 'BLi370oF3fEV8LrI3th2oq6Wmpwqh0ca5HCbWUrKg77keyku6vdkXgWADMXgxLzjYCwSTFs_yhPlOpZsh9-KXzM',
'privateKey' => 'l-B4qMwq1rHu_oGu0WoRsc_5aeNlkMxpurlOvzHE6TM',
]
];

$webPush = new WebPush($auth, [], 30, [
'verify' => false
]);

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

$delete = $pdo->prepare(
"DELETE FROM push_subscriptions WHERE endpoint = ?"
);

$delete->execute([$endpoint]);

}

}

}

}