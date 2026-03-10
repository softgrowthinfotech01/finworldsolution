<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>FAQ - Frequently Asked Questions</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

<!-- Page Banner -->
<section class="bg-blue-900 text-white py-16 text-center">
<h1 class="text-4xl font-bold">Frequently Asked Questions</h1>
<p class="mt-3">Find answers to common questions about loans and insurance</p>
</section>


<!-- FAQ Section -->
<section class="max-w-4xl mx-auto py-12 px-6">

<div class="space-y-4">

<!-- Question 1 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
What is a personal loan?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
A personal loan is an unsecured loan that helps you manage personal expenses such as medical emergencies, weddings, travel, or education without providing collateral.
</div>
</div>


<!-- Question 2 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
How long does loan approval take?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
Loan approval usually takes between 24 hours to 3 working days depending on documentation and eligibility verification.
</div>
</div>


<!-- Question 3 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
What documents are required for a loan?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
Generally required documents include identity proof, address proof, income proof, bank statements, and passport-size photographs.
</div>
</div>


<!-- Question 4 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
What is the minimum credit score required?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
Most lenders prefer a credit score of 700 or above for faster loan approval and better interest rates.
</div>
</div>


<!-- Question 5 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
What is EMI?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
EMI (Equated Monthly Installment) is the fixed monthly payment made by a borrower to repay a loan over a specified period.
</div>
</div>


<!-- Question 6 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
Can I prepay my loan?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
Yes, most banks allow loan prepayment, but some may charge a small prepayment fee depending on the loan agreement.
</div>
</div>


<!-- Question 7 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
What is health insurance?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
Health insurance covers medical expenses including hospitalization, surgery, and treatment costs depending on the policy coverage.
</div>
</div>


<!-- Question 8 -->
<div class="bg-white rounded shadow">
<button class="faq-btn w-full text-left px-6 py-4 font-semibold flex justify-between">
How do I apply for a loan?
<span>+</span>
</button>

<div class="faq-content hidden px-6 pb-4 text-gray-600">
You can apply for a loan by filling out the online application form on our website or by contacting our loan advisors.
</div>
</div>

</div>

</section>


<script>

const buttons = document.querySelectorAll(".faq-btn")

buttons.forEach(btn => {
btn.addEventListener("click", () => {

const content = btn.nextElementSibling
content.classList.toggle("hidden")

})
})

</script>

</body>
</html>