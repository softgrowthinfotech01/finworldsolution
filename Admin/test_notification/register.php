<?php

require "../conn.php";

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare(
"INSERT INTO users(name,email) VALUES(?,?)"
);

$stmt->execute([$name,$email]);

require "send_push.php";

sendPush("New User Registered",$name." just registered");

header("Location: register.php?success=1");
exit;

}
?>

<?php
if(isset($_GET['success'])){
echo "<h3>User Registered Successfully</h3>";
}
?>

<form method="POST">

<input name="name" placeholder="Enter name" required>
<br><br>

<input name="email" placeholder="Enter email" required>
<br><br>

<button name="submit">Register</button>

</form>