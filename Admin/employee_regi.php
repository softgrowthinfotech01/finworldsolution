<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php include_once "meta.php"; ?>

    <title>Admin - Employee Registration</title>
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

                <!-- Employee Registration Form -->
                <form id="employeeForm" method="post" enctype="multipart/form-data">

                    <div class="flex items-center gap-2 border-b pb-3 mb-6">
                        <span class="text-xl">👤</span>
                        <h2 class="text-2xl font-bold text-gray-700"> Employee Registration </h2>
                    </div>

                    <!-- Employee Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Full Name</label>
                            <input name="full_name" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter full name" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone Number</label>
                            <input name="phone_number" type="number" maxlength="10" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter phone number" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email ID</label>
                            <input name="email" type="email" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter email" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Aadhar Number</label>
                            <input name="adhar_number" type="text" maxlength="12" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter Aadhar number" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Designation</label>
                            <input name="designation" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter designation" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Date of Joining</label>
                            <input name="joining_date" type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">PAN Number</label>
                            <input name="pan_no" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter PAN number" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Bank Name</label>
                            <input name="bank_name" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter bank name" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Bank Account Number</label>
                            <input name="bank_account" type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 outline-none" placeholder="Enter account number" required>
                        </div>
                    </div>

                    <!-- Salary Section -->
                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-gray-700 mb-3">Salary Details</h3>
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
                    </div>

                    <!-- Form Buttons -->
                    <div class="flex flex-col md:flex-row justify-center gap-3 mt-6">
                        <button type="submit" class="bg-gradient-to-r from-purple-600 to-blue-500 text-white rounded-lg px-6 py-2 font-medium">Save</button>
                        <button type="reset" class="bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg px-6 py-2 font-medium">Cancel</button>
                    </div>
                </form>

                <!-- Salary PDF Section -->

                 
                   

            </div>
        </div>
    </div>

    <!-- Footer -->
     <?php include 'footer.php'; ?>

    <!-- Include your footer here -->
</div>

<script>
    // Example: dynamically calculate leave deduction if needed
    document.getElementById("num_leaves")?.addEventListener("input", function() {
        // Implement calculation logic here
    });
</script>
</body>
</html>