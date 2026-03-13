<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Loan Calculator</title>

<script src="https://cdn.tailwindcss.com"></script>

<!-- AOS Animation -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="bg-gray-100">

<?php include_once "header.php"; ?>


<!-- HERO -->
<section class="bg-gradient-to-r from-blue-900 to-indigo-800 text-white py-16 text-center"
data-aos="fade-down">

<h1 class="text-4xl font-bold mb-4" data-aos="zoom-in">
Loan Calculator
</h1>

<p class="text-blue-200" data-aos="fade-up">
Calculate your loan EMI, interest and total payment instantly
</p>

</section>


<!-- CALCULATOR -->
<section class="max-w-6xl mx-auto py-16 px-6" data-aos="fade-up">

<div class="grid lg:grid-cols-2 gap-12">

<!-- LEFT FORM -->
<div class="bg-white p-10 rounded-xl shadow"
data-aos="fade-right"
data-aos-duration="1000">

<h2 class="text-2xl font-bold mb-8">Loan Details</h2>

<!-- Loan Amount -->
<label class="font-semibold block mb-2">Loan Amount</label>

<input type="range" min="10000" max="5000000" value="500000"
id="loanAmountRange" class="w-full mb-2">

<input type="number" id="loanAmount"
class="w-full border p-3 rounded mb-6" value="500000">


<!-- Interest Rate -->
<label class="font-semibold block mb-2">Interest Rate (%)</label>

<input type="range" min="1" max="20" value="8"
id="interestRange" class="w-full mb-2">

<input type="number" id="interestRate"
class="w-full border p-3 rounded mb-6" value="8">


<!-- Tenure -->
<label class="font-semibold block mb-2">Loan Tenure (Years)</label>

<input type="range" min="1" max="30" value="10"
id="tenureRange" class="w-full mb-2">

<input type="number" id="loanTenure"
class="w-full border p-3 rounded mb-6" value="10">


<button onclick="calculateLoan()"
class="w-full bg-blue-900 text-white py-3 rounded hover:bg-blue-800 transition">

Calculate Loan

</button>

</div>



<!-- RIGHT RESULT -->
<div class="bg-white p-10 rounded-xl shadow"
data-aos="fade-left"
data-aos-duration="1000">

<h2 class="text-2xl font-bold mb-8">Loan Summary</h2>

<div class="space-y-6 text-lg">

<div class="flex justify-between" data-aos="fade-up" data-aos-delay="100">
<span>Monthly EMI</span>
<span id="emi" class="font-bold text-blue-900">₹0</span>
</div>

<div class="flex justify-between" data-aos="fade-up" data-aos-delay="200">
<span>Total Interest</span>
<span id="interest" class="font-bold text-green-600">₹0</span>
</div>

<div class="flex justify-between" data-aos="fade-up" data-aos-delay="300">
<span>Total Payment</span>
<span id="total" class="font-bold text-red-600">₹0</span>
</div>

</div>

<!-- INFO BOX -->
<div class="mt-10 bg-blue-50 p-6 rounded">

<p class="text-gray-600 text-sm">

Use this calculator to estimate your monthly loan payments.
Actual EMI may vary depending on bank policies and loan approval conditions.

</p>

</div>

</div>

</div>

</section>


<?php include_once "footer.php"; ?>


<script>

// sync sliders with inputs
loanAmountRange.oninput = () => loanAmount.value = loanAmountRange.value;
interestRange.oninput = () => interestRate.value = interestRange.value;
tenureRange.oninput = () => loanTenure.value = tenureRange.value;


function calculateLoan(){

let P = parseFloat(document.getElementById("loanAmount").value);
let R = parseFloat(document.getElementById("interestRate").value)/12/100;
let N = parseFloat(document.getElementById("loanTenure").value)*12;

let EMI = (P * R * Math.pow(1+R,N)) / (Math.pow(1+R,N)-1);

let total = EMI * N;
let interest = total - P;

document.getElementById("emi").innerText =
"₹ " + Math.round(EMI).toLocaleString();

document.getElementById("interest").innerText =
"₹ " + Math.round(interest).toLocaleString();

document.getElementById("total").innerText =
"₹ " + Math.round(total).toLocaleString();

}

calculateLoan();


// INIT ANIMATION
AOS.init({
duration:1000,
once:true
});

</script>


</body>
</html>