<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>EMI Calculator</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="bg-gray-50">

<?php include_once "header.php"; ?>


<!-- HERO -->
<section class="bg-gradient-to-r from-blue-900 via-indigo-900 to-blue-700 text-white py-20 text-center">

<div class="max-w-4xl mx-auto px-6" data-aos="fade-up">

<h1 class="text-4xl md:text-5xl font-bold mb-4">
Loan EMI Calculator
</h1>

<p class="text-blue-200 text-lg">
Plan your loan repayment easily with our smart EMI calculator
</p>

</div>

</section>



<!-- CALCULATOR SECTION -->
<section class="max-w-6xl mx-auto py-16 px-6">

<div class="grid md:grid-cols-2 gap-12 items-start">

<!-- LEFT CALCULATOR -->
<div class="bg-white p-10 rounded-xl shadow-lg" data-aos="fade-right">

<h2 class="text-2xl font-bold mb-8 text-gray-800">
Enter Loan Details
</h2>

<!-- Loan Amount -->
<label class="block font-semibold mb-2">
Loan Amount: ₹ <span id="amountValue">500000</span>
</label>

<input type="range" min="10000" max="5000000" step="10000"
value="500000" id="loanAmount"
class="w-full mb-6">


<!-- Interest Rate -->
<label class="block font-semibold mb-2">
Interest Rate: <span id="rateValue">8</span>%
</label>

<input type="range" min="1" max="20" step="0.1"
value="8" id="interestRate"
class="w-full mb-6">


<!-- Tenure -->
<label class="block font-semibold mb-2">
Loan Tenure: <span id="tenureValue">10</span> Years
</label>

<input type="range" min="1" max="30"
value="10" id="loanTenure"
class="w-full mb-8">


<button onclick="calculateEMI()"
class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-3 rounded-lg w-full text-lg transition">

Calculate EMI

</button>

</div>



<!-- RIGHT RESULT -->
<div class="space-y-6" data-aos="fade-left">

<!-- EMI CARD -->
<div class="bg-white p-8 rounded-xl shadow-lg text-center">

<p class="text-gray-500 mb-2">
Monthly EMI
</p>

<h2 id="emi" class="text-4xl font-bold text-blue-900">
₹ 0
</h2>

</div>


<!-- RESULT DETAILS -->
<div class="bg-white p-8 rounded-xl shadow-lg">

<div class="flex justify-between text-lg mb-4">
<span>Total Interest</span>
<span id="totalInterest" class="font-semibold text-green-600">
₹ 0
</span>
</div>

<div class="flex justify-between text-lg">
<span>Total Payment</span>
<span id="totalPayment" class="font-semibold text-red-600">
₹ 0
</span>
</div>

</div>


<!-- INFO BOX -->
<div class="bg-blue-50 p-6 rounded-lg border border-blue-100">

<p class="text-gray-600 text-sm">
This EMI calculator provides an estimate of your monthly loan repayment.
Actual EMI may vary depending on lender policies and loan approval conditions.
</p>

</div>

</div>

</div>

</section>


<?php include_once "footer.php"; ?>


<script>

const loanAmount = document.getElementById("loanAmount");
const interestRate = document.getElementById("interestRate");
const loanTenure = document.getElementById("loanTenure");

const amountValue = document.getElementById("amountValue");
const rateValue = document.getElementById("rateValue");
const tenureValue = document.getElementById("tenureValue");

loanAmount.oninput = () => amountValue.innerText = loanAmount.value;
interestRate.oninput = () => rateValue.innerText = interestRate.value;
loanTenure.oninput = () => tenureValue.innerText = loanTenure.value;


function calculateEMI(){

let P = loanAmount.value;
let R = interestRate.value / 12 / 100;
let N = loanTenure.value * 12;

let EMI = (P * R * Math.pow(1 + R, N)) /
(Math.pow(1 + R, N) - 1);

let totalPayment = EMI * N;
let totalInterest = totalPayment - P;

document.getElementById("emi").innerText =
"₹ " + Math.round(EMI).toLocaleString();

document.getElementById("totalInterest").innerText =
"₹ " + Math.round(totalInterest).toLocaleString();

document.getElementById("totalPayment").innerText =
"₹ " + Math.round(totalPayment).toLocaleString();

}

AOS.init({
duration:1000,
once:true
});

</script>


</body>
</html>