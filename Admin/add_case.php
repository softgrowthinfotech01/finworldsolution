<?php
session_start();
require_once "conn.php";
require_once "check_login.php";

if(isset($_POST['submit']))
{
    extract($_POST);

    $stmt = $conn->prepare("INSERT INTO cases
    (full_name, phone_number, address, calling_date)
    VALUES
    (:full_name, :phone_number, :address, :calling_date)");

    $stmt->execute([
        ':full_name' => $full_name,
        ':phone_number' => $phone_number,
        ':address' => $address,
        ':calling_date' => $calling_date
    ]);

    echo "<script>alert('Case added successfully');window.location.href = 'view_case';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
      <?php include_once "meta.php"; ?>

     <title>Admin - Finworld Solution</title>
  <?php include_once "meta.php"; ?>


<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

</head>

<body class="bg-gray-100">

<div class="min-h-screen flex flex-col">

<!-- Header -->
<?php include "header.php"; ?>


<div class="flex flex-1">

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>


<!-- Main Content -->
<div class="flex-1 p-4 md:p-6">

<div id="mainContent"
class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-6">

<form id="userForm" method="post" enctype="multipart/form-data">

<div class="flex items-center gap-2 border-b pb-3 mb-6">
    <span class="text-xl">📄</span>
    <h2 class="text-2xl font-bold text-gray-700">
        Add Case Details
    </h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

<!-- Full Name -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Full Name
</label>

<input name="full_name" type="text" id="full_name"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
placeholder="Enter your name" required>
</div>


<!-- Phone -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Phone Number
</label>

<input name="phone_number" type="number" maxlength="10" id="phone_number"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
placeholder="Enter phone number" required>
</div>


<!-- Address -->
<div class="md:col-span-2">
<label class="block text-sm font-medium text-gray-600 mb-1">
Address
</label>

<input name="address" type="text" id="address"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
placeholder="Enter address" required>
</div>


<!-- Date -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Date
</label>

<input name="calling_date" type="date" id="calling_date"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
required>
</div>

</div>


<!-- Buttons -->
<div class="flex flex-col md:flex-row justify-center gap-3 mt-6">

<button type="submit"
class="bg-gradient-to-r from-purple-600 to-blue-500 text-white rounded-lg px-6 py-2 font-medium"
name="submit">
Save
</button>

<button type="reset"
class="bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg px-6 py-2 font-medium">
Reset
</button>

</div>

</form>

</div>

</div>

</div>


<!-- Footer -->
<?php include 'footer.php'; ?>

</div>




 <script id="2d4f4t">
document.addEventListener("DOMContentLoaded", function(){

    let today = new Date();
    today.setDate(today.getDate() + 1); // tomorrow

    let yyyy = today.getFullYear();
    let mm = String(today.getMonth() + 1).padStart(2,'0');
    let dd = String(today.getDate()).padStart(2,'0');

    let minDate = yyyy + "-" + mm + "-" + dd;

    document.getElementById("calling_date").setAttribute("min", minDate);

});
</script>  
</html>