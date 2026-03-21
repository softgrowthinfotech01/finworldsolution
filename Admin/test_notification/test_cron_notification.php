<?php

require __DIR__ . '/../conn.php';
require "send_push.php";

// current date (ONLY date part)
$today = date("Y-m-d");

// fetch today's cases
$stmt = $conn->prepare("SELECT * FROM cases WHERE DATE(calling_date) = :today");
$stmt->execute([':today' => $today]);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($rows)
{
    foreach($rows as $row)
    {
        $name = $row['full_name'];
        $phone = $row['phone_number'];
        $date = date("d-m-Y", strtotime($row['calling_date']));

        $msg = "Today Followup:\n$name\n$phone\n$date";

        sendPush("Case Reminder", $msg);
    }
}
else
{
    // optional
    //sendPush("No Cases Today", date("d-m-Y"));
}

?>