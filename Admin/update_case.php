<?php
session_start();
require_once "conn.php";
require_once "check_login.php";

if(isset($_GET['id']))
{
    $case_id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM cases WHERE case_id=:case_id");
    $stmt->execute([':case_id'=>$case_id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row)
    {
        extract($row);
    }
}

if(isset($_POST['update']))
{
    extract($_POST);

    $stmt = $conn->prepare("UPDATE cases SET
    full_name=:full_name,
    phone_number=:phone_number,
    address=:address,
    calling_date=:calling_date,
    status=:status
    WHERE case_id=:case_id");

    $stmt->execute([
        ':full_name'=>$full_name,
        ':phone_number'=>$phone_number,
        ':address'=>$address,
        ':calling_date'=>$calling_date,
        ':status'=>$status,
        ':case_id'=>$case_id
    ]);

    echo "<script>alert('Case updated successfully');window.location.href='view_case';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once "meta.php"; ?>

     <title>Admin - Finworld Solution</title>
     
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>

</head>

<body class="bg-gray-100">

<div class="min-h-screen flex flex-col">

<?php include "header.php"; ?>

<div class="flex flex-1">

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="flex-1 p-4 md:p-6">

<div id="mainContent" class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-6">

<form method="post" class="space-y-4">

<input type="hidden" name="case_id" value="<?php echo $case_id; ?>">

<!-- Heading -->
<div class="border-b pb-3 mb-4">
<h2 class="text-2xl font-bold text-gray-700">Update Case Details</h2>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

<!-- Full Name -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Full Name
</label>

<input name="full_name"
type="text"
value="<?php echo $full_name; ?>"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
required>
</div>


<!-- Phone -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Phone Number
</label>

<input name="phone_number"
type="text"
maxlength="10"
value="<?php echo $phone_number; ?>"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
required>
</div>


<!-- Address -->
<div class="md:col-span-2">
<label class="block text-sm font-medium text-gray-600 mb-1">
Address
</label>

<input name="address"
type="text"
value="<?php echo $address; ?>"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
required>
</div>


<!-- Date -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Date
</label>

<input name="calling_date"
type="date"
id="calling_date"
value="<?php echo $calling_date; ?>"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none"
required>
</div>


<!-- Status -->
<div>
<label class="block text-sm font-medium text-gray-600 mb-1">
Status
</label>

<select name="status"
class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none">

<option value="open" <?php if($status=='open') echo "selected"; ?>>Open</option>
<option value="closed" <?php if($status=='closed') echo "selected"; ?>>Closed</option>

</select>

</div>

</div>


<!-- Buttons -->
<div class="flex flex-col md:flex-row justify-center gap-3 pt-4">

<button type="submit"
name="update"
class="bg-gradient-to-r from-purple-600 to-blue-500 text-white rounded-lg px-6 py-2 font-medium">
Update
</button>

<button type="button"
onclick="window.location.href='view_case'"
class="bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg px-6 py-2 font-medium">
Back
</button>

</div>

</form>

</div>

</div>

</div>

<?php include 'footer.php'; ?>

</div>
<script id="8n9q2s">
document.addEventListener("DOMContentLoaded", function(){

    let today = new Date();
    today.setDate(today.getDate() + 1); // tomorrow

    let yyyy = today.getFullYear();
    let mm = String(today.getMonth() + 1).padStart(2,'0');
    let dd = String(today.getDate()).padStart(2,'0');

    let minDate = yyyy + "-" + mm + "-" + dd;

    let dateInput = document.getElementById("calling_date");

    dateInput.setAttribute("min", minDate);

});
</script>
</body>
</html>