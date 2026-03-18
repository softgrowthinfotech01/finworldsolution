<?php
session_start();
require_once "conn.php";
require_once "check_login.php";
if(isset($_GET['delete']))
{
    $case_id = $_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM cases WHERE case_id=:case_id");
    $stmt->execute([':case_id'=>$case_id]);

    echo "<script>alert('Case deleted successfully');window.location.href='view_case';</script>";
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

<div class="flex flex-col md:flex-row">

<?php include "sidebar.php"; ?>


<!-- Main Content -->
<div class="flex-1 p-4 md:p-6">

<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg p-5">

<!-- Controls -->
<div class="flex flex-col md:flex-row justify-between items-center gap-3 mb-4">

<input
type="text"
id="searchInput"
placeholder="Search by Name..."
class="w-full md:w-1/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none">

<div class="flex items-center gap-2 text-sm text-gray-600">

<label>Show</label>

<select id="perPageSelect"
class="border border-gray-300 rounded px-2 py-1">

<option value="5">5</option>
<option value="10" selected>10</option>
<option value="25">25</option>
<option value="50">50</option>

</select>

<span>entries</span>

</div>

</div>


<!-- Loader -->
<div id="tableLoader" class="hidden text-center py-6">
<div class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-blue-500 border-t-transparent"></div>
<p class="mt-2 text-gray-600">Loading...</p>
</div>


<!-- Table -->
<div class="overflow-x-auto">

<table class="w-full text-sm text-left border border-gray-200">

<thead class="bg-gray-100 text-gray-700 text-xs uppercase">
<tr class="text-center">
<th class="px-4 py-3">#</th>
<th class="px-4 py-3">Name</th>
<th class="px-4 py-3">Phone Number</th>
<th class="px-4 py-3">Address</th>
<th class="px-4 py-3">Date</th>
<th class="px-4 py-3">Status</th>
<th class="px-4 py-3">Actions</th>
</tr>
</thead>

<tbody id="locationTableBody">

<?php

$stmt = $conn->prepare("SELECT * FROM cases ORDER BY case_id DESC");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($rows)
{
$i = 1;
foreach($rows as $row)
{
extract($row);
?>

<tr class="border-b hover:bg-gray-50 text-center">
<td class="px-4 py-3"><?php echo $i++; ?></td>
<td class="px-4 py-3"><?php echo $full_name; ?></td>
<td class="px-4 py-3"><?php echo $phone_number; ?></td>
<td class="px-4 py-3"><?php echo $address; ?></td>
<td class="px-4 py-3"><?php echo date("d-m-Y", strtotime($calling_date)); ?></td>

<td class="px-4 py-3">

<?php
if($status == "open")
{
echo "<span class='text-green-600 font-semibold'>Open</span>";
}
else
{
echo "<span class='text-red-600 font-semibold'>Closed</span>";
}
?>

</td>

<td class="px-4 py-3 ">

<div class="flex flex-col sm:flex-row gap-2">

<a href="update_case?id=<?php echo $case_id; ?>"
class="inline-block text-center px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 transition">
Update
</a>

<a href="?delete=<?php echo $case_id; ?>"
class="inline-block text-center px-3 py-1.5 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-500 transition"
onclick="return confirm('Are you sure you want to delete this case?')">
Delete
</a>

</div>

</td>

</tr>

<?php
}
}
else
{
?>

<tr>
<td colspan="7" class="text-center py-4 text-gray-500">
No cases found
</td>
</tr>

<?php
}
?>

</tbody>

</table>

</div>


<!-- Pagination -->
<div id="paginationControls" class="flex justify-center gap-2 mt-4"></div>

<div id="resultInfo" class="text-sm text-gray-600 text-center mt-2"></div>

</div>

</div>

</div>

<?php include "footer.php"; ?>

</div>


  <script id="z7x9kp">
document.getElementById("searchInput").addEventListener("keyup", function(){

    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#locationTableBody tr");

    rows.forEach(function(row){

        let nameCell = row.cells[1]; // Name column
        if(!nameCell) return;

        let name = nameCell.textContent.toLowerCase();

        if(name.includes(filter))
        {
            row.style.display = "";
        }
        else
        {
            row.style.display = "none";
        }

    });

});

// pagination 

let rowsPerPage = 10;
let currentPage = 1;

const table = document.getElementById("locationTableBody");
const rows = table.querySelectorAll("tr");

const pagination = document.getElementById("paginationControls");
const perPageSelect = document.getElementById("perPageSelect");

function showPage(page){

currentPage = page;

let start = (page-1)*rowsPerPage;
let end = start + rowsPerPage;

rows.forEach((row,i)=>{
row.style.display = (i>=start && i<end) ? "" : "none";
});

updatePagination();

}

function updatePagination(){

pagination.innerHTML = "";

let pageCount = Math.ceil(rows.length / rowsPerPage);

for(let i=1;i<=pageCount;i++){

let btn = document.createElement("button");

btn.textContent = i;

btn.className =
"px-3 py-1 border rounded hover:bg-blue-500 hover:text-white";

if(i === currentPage)
btn.classList.add("bg-blue-500","text-white");

btn.onclick = ()=>showPage(i);

pagination.appendChild(btn);

}

}

perPageSelect.addEventListener("change",function(){

rowsPerPage = parseInt(this.value);
showPage(1);

});

showPage(1);

</script>
 
</body>

</html>