<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Payslip</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
/* Print Styles */
@media print {
    body {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
    .no-print {
        display: none !important;
    }
}
/* Table styles */
.label { font-weight: 600; }
.value { text-align: right; }



/* Global print styling */
#printSection {
    background: #fff;
    color: #000;
    font-family: Arial, sans-serif;
}

/* Remove all Tailwind colors */
#printSection * {
    background: transparent !important;
    color: #000 !important;
}

/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #000;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

/* Employee info grid */
.info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 20px;
}

/* Each field box */
.info p {
    border: 1px solid #000;
    padding: 6px 8px;
    margin: 0;
    display: flex;
    justify-content: space-between;
    font-size: 14px;
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #000;
}

th, td {
    padding: 8px;
    font-size: 14px;
}

th {
    font-weight: bold;
    text-align: left;
}

.text-right {
    text-align: right;
}

.text-center {
    text-align: center;
}

/* Print button hide */
@media print {
    .no-print {
        display: none !important;
    }
}
</style>
</head>
<body class="bg-gray-100 p-6">

<!-- Employee Registration Form -->
<div id="formSection" class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Employee Registration</h2>
    <form id="employeeForm">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" placeholder="Full Name" name="full_name" class="border p-2 rounded">
            <input type="text" placeholder="Phone Number" name="phone_number" class="border p-2 rounded">
            <input type="email" placeholder="Email ID" name="email" class="border p-2 rounded">
            <input type="text" placeholder="Adhar Number" name="adhar_number" class="border p-2 rounded">
            <input type="text" placeholder="Designation" name="designation" class="border p-2 rounded">
            <input type="date" placeholder="Date of Joining" name="joining_date" class="border p-2 rounded">
            <input type="text" placeholder="PAN Number" name="pan_number" class="border p-2 rounded">
            <input type="text" placeholder="Bank Name" name="bank_name" class="border p-2 rounded">
            <input type="text" placeholder="Bank Account Number" name="bank_account" class="border p-2 rounded">
        </div>

        <!-- Salary -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 border rounded">
                <h3 class="font-semibold mb-2">Earnings</h3>
                <input type="number" placeholder="Basic" name="basic" class="border p-2 rounded w-full mb-2">
                <input type="number" placeholder="HRA" name="hra" class="border p-2 rounded w-full mb-2">
                <input type="number" placeholder="Incentive" name="incentive" class="border p-2 rounded w-full">
            </div>
            <div class="p-4 border rounded">
                <h3 class="font-semibold mb-2">Deductions</h3>
                <input type="number" placeholder="Provident Fund" name="pf" class="border p-2 rounded w-full mb-2">
                <input type="number" placeholder="Professional Tax" name="pt" class="border p-2 rounded w-full mb-2">
                <input type="number" placeholder="Leave Deduction" name="leave" class="border p-2 rounded w-full">
            </div>
        </div>

        <div class="mt-6 flex gap-3 no-print">
            <button type="button" id="previewBtn" class="bg-blue-600 text-white px-4 py-2 rounded">Preview Payslip</button>
            <button type="reset" class="bg-gray-200 px-4 py-2 rounded">Reset</button>
        </div>
    </form>
</div>

<!-- Payslip Print Section -->
<div id="printSection" class="hidden" style="max-width:800px;margin:auto;padding:20px;">

    <!-- Header -->
    <div class="header">
        <div>
            <img src="https://via.placeholder.com/150x50?text=Logo" style="height:50px;">
        </div>
        <div style="text-align:right;">
            <h2 style="margin:0;">Payslip</h2>
            Month: <span id="payslipMonth"></span>
        </div>
    </div>

    <!-- Employee Info -->
    <div class="info">
        <div>
            <p><b>Full Name:</b> <span id="empFullName"></span></p>
            <p><b>Phone:</b> <span id="empPhone"></span></p>
            <p><b>Email:</b> <span id="empEmail"></span></p>
            <p><b>Designation:</b> <span id="empDesignation"></span></p>
        </div>
        <div>
            <p><b>Adhar:</b> <span id="empAdhar"></span></p>
            <p><b>Date of Joining:</b> <span id="empJoining"></span></p>
            <p><b>PAN:</b> <span id="empPAN"></span></p>
            <p><b>Bank:</b> <span id="empBank"></span></p>
            <p><b>Account No:</b> <span id="empAccount"></span></p>
        </div>
    </div>

    <!-- Salary Table -->
    <table>
        <thead>
            <tr>
                <th>Earnings</th>
                <th>Amount</th>
                <th>Deductions</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Basic</td>
                <td class="text-right" id="basicVal"></td>
                <td>Provident Fund</td>
                <td class="text-right" id="pfVal"></td>
            </tr>
            <tr>
                <td>HRA</td>
                <td class="text-right" id="hraVal"></td>
                <td>Professional Tax</td>
                <td class="text-right" id="ptVal"></td>
            </tr>
            <tr>
                <td>Incentive</td>
                <td class="text-right" id="incVal"></td>
                <td>Leave Deduction</td>
                <td class="text-right" id="leaveVal"></td>
            </tr>
            <tr>
                <td><b>Total Earnings</b></td>
                <td class="text-right" id="totalEarnings"></td>
                <td><b>Total Deductions</b></td>
                <td class="text-right" id="totalDeductions"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"><b>Net Salary</b></td>
                <td colspan="2" class="text-right" id="netSalary"></td>
            </tr>
        </tbody>
    </table>

    <!-- Print Button -->
    <div class="no-print" style="margin-top:20px;text-align:center;">
    <button onclick="window.print()" style="
        border: 2px solid #000;
        background: #fff;
        color: #000;
        padding: 8px 20px;
        font-size: 14px;
        cursor: pointer;
    ">
        Print
    </button>
</div>

</div>

<script>
// Preview & Print
document.getElementById('previewBtn').addEventListener('click', function() {
    const form = document.getElementById('employeeForm');

    // Employee Info
    document.getElementById('empFullName').textContent = form.elements['full_name'].value || '-';
    document.getElementById('empPhone').textContent = form.elements['phone_number'].value || '-';
    document.getElementById('empEmail').textContent = form.elements['email'].value || '-';
    document.getElementById('empAdhar').textContent = form.elements['adhar_number'].value || '-';
    document.getElementById('empDesignation').textContent = form.elements['designation'].value || '-';
    document.getElementById('empJoining').textContent = form.elements['joining_date'].value || '-';
    document.getElementById('empPAN').textContent = form.elements['pan_number'].value || '-';
    document.getElementById('empBank').textContent = form.elements['bank_name'].value || '-';
    document.getElementById('empAccount').textContent = form.elements['bank_account'].value || '-';

    // Salary
    const basic = Number(form.elements['basic'].value) || 0;
    const hra = Number(form.elements['hra'].value) || 0;
    const incentive = Number(form.elements['incentive'].value) || 0;
    const pf = Number(form.elements['pf'].value) || 0;
    const pt = Number(form.elements['pt'].value) || 0;
    const leave = Number(form.elements['leave'].value) || 0;

    document.getElementById('basicVal').textContent = basic;
    document.getElementById('hraVal').textContent = hra;
    document.getElementById('incVal').textContent = incentive;
    document.getElementById('pfVal').textContent = pf;
    document.getElementById('ptVal').textContent = pt;
    document.getElementById('leaveVal').textContent = leave;

    const totalEarnings = basic + hra + incentive;
    const totalDeductions = pf + pt + leave;
    document.getElementById('totalEarnings').textContent = totalEarnings;
    document.getElementById('totalDeductions').textContent = totalDeductions;
    document.getElementById('netSalary').textContent = totalEarnings - totalDeductions;

    // Set Month
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"];
    const now = new Date();
    document.getElementById('payslipMonth').textContent = monthNames[now.getMonth()] + " " + now.getFullYear();

    // Show print section
    document.getElementById('formSection').classList.add('hidden');
    document.getElementById('printSection').classList.remove('hidden');
});
</script>

</body>
</html> 