<?php
session_start();
require_once "conn.php";
require_once "check_login.php";

/* Total Cases */
$stmt_total = $conn->prepare("SELECT COUNT(*) as total_cases FROM cases");
$stmt_total->execute();
$row_total = $stmt_total->fetch(PDO::FETCH_ASSOC);
extract($row_total);

/* Open Cases */
$stmt_open = $conn->prepare("SELECT COUNT(*) as open_cases FROM cases WHERE status='open'");
$stmt_open->execute();
$row_open = $stmt_open->fetch(PDO::FETCH_ASSOC);
extract($row_open);

/* Closed Cases */
$stmt_closed = $conn->prepare("SELECT COUNT(*) as closed_cases FROM cases WHERE status='closed'");
$stmt_closed->execute();
$row_closed = $stmt_closed->fetch(PDO::FETCH_ASSOC);
extract($row_closed);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    
    <title>Admin - Finworld Solution</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

   
<style>
   
</style>
</head>
<body class="bg-gray-200">

<div class="min-h-screen flex flex-col">

<!-- Header -->
<?php include "header.php"; ?>


<div class="flex flex-1">

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>


<!-- Main Content -->
<div class="flex-1 p-4 md:p-6 mt-4 ">

<div class="max-w-7xl mx-auto">

<!-- Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">


<!-- CARD 1 -->
<div class="relative overflow-hidden p-6 rounded-xl text-white shadow
bg-gradient-to-r from-orange-400 to-pink-500">

<div class="absolute -top-16 -right-16 w-40 h-40 bg-white opacity-20 rounded-full"></div>
<div class="absolute -top-10 -right-10 w-24 h-24 bg-white opacity-20 rounded-full"></div>
<div class="flex items-center justify-between pl-4">

<div>
<p class="text-sm font-semibold uppercase tracking-wider opacity-90">
Total Cases
</p>

<h2 class="text-3xl md:text-4xl font-extrabold mt-2">
<?php echo $total_cases; ?>
</h2>
</div>

</div>
</div>



<!-- CARD 2 -->
<div class="relative overflow-hidden p-6 rounded-xl text-white shadow
bg-gradient-to-r from-blue-400 to-blue-600">

<div class="absolute -top-16 -right-16 w-40 h-40 bg-white opacity-20 rounded-full"></div>
<div class="absolute -top-10 -right-10 w-24 h-24 bg-white opacity-20 rounded-full"></div>

<div class="flex items-center justify-between pl-4">

<div>
<p class="text-sm font-semibold uppercase tracking-wider opacity-90">
Open Cases
</p>

<h2 class="text-3xl md:text-4xl font-extrabold mt-2">
<?php echo $open_cases; ?>
</h2>

</div>
</div>
</div>



<!-- CARD 3 -->
<div class="relative overflow-hidden p-6 rounded-xl text-white shadow
bg-gradient-to-r from-green-400 to-teal-500">

<div class="absolute -top-16 -right-16 w-40 h-40 bg-white opacity-20 rounded-full"></div>
<div class="absolute -top-10 -right-10 w-24 h-24 bg-white opacity-20 rounded-full"></div>

<div class="flex items-center justify-between pl-4">

<div>
<p class="text-sm font-semibold uppercase tracking-wider opacity-90">
Closed Cases
</p>

<h2 class="text-3xl md:text-4xl font-extrabold mt-2">
<?php echo $closed_cases; ?>
</h2>

</div>
</div>
</div>


</div>
</div>
</div>

</div>

<?php include 'footer.php'; ?>

</div>

</body>

</html>