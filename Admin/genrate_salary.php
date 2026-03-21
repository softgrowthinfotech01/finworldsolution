<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php include_once "meta.php"; ?>

    <title>Admin - Generate Salary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <!-- Header -->
     <?php include "header.php"; ?>

    <!-- Include your header here -->

    <div class="flex flex-1">
        <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>

        <!-- Include your sidebar here -->

        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-6">
            <div id="mainContent" class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6">

                <!-- Salary Form -->
                <form id="salaryForm" method="post">

                    <div class="flex items-center gap-2 border-b pb-3 mb-6">
                        <span class="text-xl">💰</span>
                        <h2 class="text-2xl font-bold text-gray-700"> Generate Salary </h2>
                    </div>

                    <!-- Salary Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Earnings -->
                        <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                            <h4 class="font-semibold text-green-700 mb-2">Earnings</h4>
                            <div class="space-y-2">
                                <div>
                                    <label class="block text-sm text-gray-600">Basic</label>
                                    <input name="basic" type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-400 outline-none" placeholder="Enter basic salary">
                                </div>
                                <div>
                                    <label class="block text-sm text-gray-600">HRA</label>
                                    <input name="hra" type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-400 outline-none" placeholder="Enter HRA">
                                </div>
                                <div>
                                    <label class="block text-sm text-gray-600">Incentive</label>
                                    <input name="incentive" type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-400 outline-none" placeholder="Enter incentive">
                                </div>
                            </div>
                        </div>

                        <!-- Deductions -->
                        <div class="bg-red-50 p-4 rounded-lg border border-red-200">
                            <h4 class="font-semibold text-red-700 mb-2">Deductions</h4>
                            <div class="space-y-2">
                                <div>
                                    <label class="block text-sm text-gray-600">Provident Fund</label>
                                    <input name="pf" type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-400 outline-none" placeholder="Enter PF amount">
                                </div>
                                <div>
                                    <label class="block text-sm text-gray-600">Professional Tax</label>
                                    <input name="pt" type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-400 outline-none" placeholder="Enter PT">
                                </div>
                                <div>
                                    <label class="block text-sm text-gray-600">Leave Deduction</label>
                                    <input name="leave_deduction" type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-red-400 outline-none" placeholder="Enter leave deduction">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salary Buttons -->
                    
                </form>

                <!-- Salary PDF Section -->
                <div class="mt-10 max-w-md mx-auto bg-gray-50 p-4 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-700 mb-3">Generate Salary PDF</h3>

                    <div class="mb-4">
                        <label class="block text-sm text-gray-600 mb-1">Select Employee</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none">
                            <option value="">Select employee</option>
                            <!-- Dynamic employee names go here -->
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm text-gray-600 mb-1">Number of Leaves</label>
                        <input type="number" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" id="num_leaves" placeholder="Enter number of leaves">
                    </div>

                    <button class="w-full bg-green-600 hover:bg-green-700 text-white rounded-lg px-6 py-2 font-medium">Save / Generate PDF</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
     <?php include 'footer.php'; ?>

    <!-- Include your footer here -->
</div>

<script>
    // Example: leave deduction calculation placeholder
    document.getElementById("num_leaves")?.addEventListener("input", function() {
        // You can implement salary adjustment based on leaves here
    });
</script>
</body>
</html>