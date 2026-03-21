<?php
session_start();
require_once "conn.php";
require_once "check_login.php";

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];

    // ✅ FIXED TABLE NAME
    $stmt = $conn->prepare("DELETE FROM applications WHERE id=:id");
    $stmt->execute([':id'=>$id]);

    echo "<script>alert('Application deleted successfully');window.location.href='career_enquiries.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0
  <?php include_once "meta.php"; ?>

<title>Admin - Career Applications</title>
<link rel="icon" href="images/finworld_logo.ico">
<link rel="icon" type="image/png" sizes="32x32" href="images/finworld_logo.ico">
<link rel="icon" type="image/png" sizes="16x16" href="images/finworld_logo.ico">
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

<div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg p-5">

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

<!-- Table -->
<div class="overflow-x-auto">

<table class="w-full text-sm text-left border border-gray-200">

<thead class="bg-gray-100 text-gray-700 text-xs uppercase">
<tr class="text-center">
<th class="px-4 py-3">#</th>
<th class="px-4 py-3">Name</th>
<th class="px-4 py-3">Email</th>
<th class="px-4 py-3">Phone</th>
<th class="px-4 py-3">Resume</th>
<th class="px-4 py-3">Date</th>
<th class="px-4 py-3">Action</th>
</tr>
</thead>

<tbody id="locationTableBody">

<?php

// ✅ FIXED TABLE NAME
$stmt = $conn->prepare("SELECT * FROM applications ORDER BY id DESC");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($rows)
{
$i=1;
foreach($rows as $row)
{
?>

<tr class="border-b hover:bg-gray-50 text-center">

<td class="px-4 py-3"><?php echo $i++; ?></td>

<td class="px-4 py-3"><?php echo $row['name']; ?></td>

<td class="px-4 py-3"><?php echo $row['email']; ?></td>

<td class="px-4 py-3"><?php echo $row['phone']; ?></td>

<td class="px-4 py-3">
    <!-- ✅ Resume View Link -->
    <a href="../<?php echo $row['resume']; ?>" target="_blank"
    class="text-blue-600 underline">
    View Resume
    </a>
</td>

<td class="px-4 py-3">
<?php echo date("d-m-Y", strtotime($row['created_at'])); ?>
</td>

<td class="px-4 py-3">

<a href="?delete=<?php echo $row['id']; ?>"
class="inline-block text-center px-3 py-1.5 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-500 transition"
onclick="return confirm('Delete this application?')">
Delete
</a>

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
No applications found
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

<script>

// SEARCH
document.getElementById("searchInput").addEventListener("keyup", function(){

let filter = this.value.toLowerCase();
let rows = document.querySelectorAll("#locationTableBody tr");

rows.forEach(function(row){

let nameCell = row.cells[1];

if(!nameCell) return;

let name = nameCell.textContent.toLowerCase();

row.style.display = name.includes(filter) ? "" : "none";

});

});

// PAGINATION
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