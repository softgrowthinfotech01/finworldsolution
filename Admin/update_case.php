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
<title>Update Case</title>

<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet">

</head>

<body>

<div class="mx-auto">

<div class="flex flex-col">

<?php include "header.php"; ?>

<div class="flex">

<?php include 'sidebar.php'; ?>

<div id="mainContent"
class="w-full md:w-[80%] lg:w-[60%] mx-3 md:mx-auto my-4
transition-all duration-300
rounded-lg bg-gray-200 p-6 border shadow-xl">

<form class="w-full px-4" method="post">

<input type="hidden" name="case_id" value="<?php echo $case_id; ?>">

<div class="personal-details">

<h5 class="text-xl font-bold text-heading p-1">Update Case Details</h5>

<div class="grid grid-cols-1 md:grid-cols-2">

<div class="mb-5 px-1">
<label class="block mb-2.5 text-sm font-medium text-heading">Full Name</label>

<input name="full_name"
type="text"
value="<?php echo $full_name; ?>"
class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
required>

</div>

<div class="mb-5 px-1">

<label class="block mb-2.5 text-sm font-medium text-heading">Phone Number</label>

<input name="phone_number"
type="text"
maxlength="10"
value="<?php echo $phone_number; ?>"
class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
required>

</div>

<div class="mb-5 px-1">

<label class="block mb-2.5 text-sm font-medium text-heading">Address</label>

<input name="address"
type="text"
value="<?php echo $address; ?>"
class="rounded-lg bg-white border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
required>

</div>

<div class="mb-5 px-1">

<label class="block mb-2.5 text-sm font-medium text-heading">Date</label>

<input name="calling_date" type="date" id="calling_date"
value="<?php echo $calling_date; ?>"
class="rounded-lg bg-white border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
required>

</div>

<div class="mb-5 px-1">

<label class="block mb-2.5 text-sm font-medium text-heading">Status</label>

<select name="status"
class="rounded-lg bg-white border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs">

<option value="open" <?php if($status=='open') echo "selected"; ?>>Open</option>
<option value="closed" <?php if($status=='closed') echo "selected"; ?>>Closed</option>

</select>

</div>

</div>

</div>

<hr class="border-white-300 mb-3">

<div class="flex justify-center gap-3">

<button type="submit"
name="update"
class="w-full md:w-[20%] text-white bg-blue-600 hover:bg-blue-500 rounded-lg text-sm px-4 py-2.5">

Update

</button>

<button type="button"
onclick="window.location.href='view_case'"
class="w-full md:w-[20%] text-gray-700 bg-white hover:bg-gray-200 rounded-lg text-sm px-4 py-2.5">

Back

</button>

</div>

</form>

</div>

</div>

<?php include 'footer.php'; ?>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
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