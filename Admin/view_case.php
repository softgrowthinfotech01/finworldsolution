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
    <title>Case Date</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!--Container -->
    <div class="mx-auto">
        <!--Screen-->
        <div class="flex flex-col">
            <!--Header Section Starts Here-->
            <?php include "header.php"; ?>
            <!--/Header-->

            <div class="flex">
                <!--Sidebar-->
                <?php include "sidebar.php"; ?>
                <!--/Sidebar-->

                <!--Main-->
                <!--Main-->
<div class="w-full sm:w-[95%] md:w-[80%] lg:w-[60%] mx-3 md:mx-auto my-4 self-start rounded-lg bg-slate-100 p-4 md:p-6 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium">

    <div class="mb-4 flex flex-col md:flex-row justify-between items-start md:items-center gap-3">

        <!-- Search -->
        <input
            type="text"
            id="searchInput"
            placeholder="Search by Name..."
            class="px-3 py-2 border rounded w-full md:w-1/3">

        <!-- Per Page Select -->
        <div class="flex items-center gap-2">
            <label>Show:</label>
            <select id="perPageSelect"
                class="px-2 py-1 border rounded">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <span>entries</span>
        </div>
    </div>

    <div id="tableLoader" class="hidden text-center py-6">
        <div class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-blue-500 border-t-transparent"></div>
        <p class="mt-2 text-gray-600">Loading...</p>
    </div>

    <!-- Responsive Table Wrapper -->
    <div class="overflow-x-auto">

        <table class="w-full text-sm md:text-md text-left text-gray-600">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
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

                <tr class="bg-white border-b hover:bg-gray-50">
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
                    <td class="px-4 py-3">
                        <a href="update_case?id=<?php echo $case_id; ?>" class="text-blue-600 hover:underline">Update</a> |
                        <a href="?delete=<?php echo $case_id; ?>"
                            class="text-red-600 hover:underline"
                            onclick="return confirm('Are you sure you want to delete this case?')">
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
                    <td colspan="6" class="text-center py-4">No cases found</td>
                </tr>

                <?php
                }
                ?>

                </tbody>

        </table>

    </div>

    <div id="paginationControls" class="flex flex-wrap justify-center gap-2 mt-4"></div>

    <div id="resultInfo" class="text-sm text-gray-600 mt-2 text-center"></div>

</div>
<!--/Main-->
            </div>
            <!--Footer-->
            <?php include "footer.php"; ?>
            <!--/footer-->

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

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
</script>  
</body>

</html>