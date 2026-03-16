<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Customer Feedback</title>

<script src="https://cdn.tailwindcss.com"></script>

<!-- AOS Animation -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="bg-gray-50">

<?php include_once "header.php"; ?>


<!-- HERO -->
<section class="bg-gradient-to-r from-blue-900 via-indigo-800 to-purple-800 text-white py-20 text-center">

<h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-down">
Customer Feedback
</h1>

<p class="text-blue-200 text-lg max-w-2xl mx-auto" data-aos="fade-up">
Your feedback helps us improve our financial services and deliver a better experience.
</p>

</section>



<!-- FEEDBACK FORM -->
<section class="max-w-4xl mx-auto py-16 px-6">

<div class="bg-white p-10 rounded-xl shadow-lg" data-aos="zoom-in">

<h2 class="text-2xl font-bold mb-8 text-center">
Share Your Experience
</h2>

<form class="space-y-6">

<!-- Name -->
<div>
<label class="font-semibold">Full Name</label>
<input type="text"
class="w-full border border-gray-300 p-3 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
placeholder="Enter your name">
</div>

<!-- Email -->
<div>
<label class="font-semibold">Email Address</label>
<input type="email"
class="w-full border border-gray-300 p-3 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
placeholder="Enter your email">
</div>

<!-- Service -->
<div>
<label class="font-semibold">Service Used</label>
<select
class="w-full border border-gray-300 p-3 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

<option>Personal Loan</option>
<option>Home Loan</option>
<option>Business Loan</option>
<option>Car Loan</option>
<option>Health insurance</option>
<option>Life insurance</option>
<option>General  insurance</option>
<option>Credit Card</option>
<option>Loan Against Property</option>
<option>Commercial vehical loan </option>

</select>
</div>

<!-- Rating -->
<!-- <div>
<label class="font-semibold block mb-2">Rate Our Service</label>

<div class="flex gap-2 text-2xl text-yellow-400 cursor-pointer">

<span onclick="setRating(1)">★</span>
<span onclick="setRating(2)">★</span>
<span onclick="setRating(3)">★</span>
<span onclick="setRating(4)">★</span>
<span onclick="setRating(5)">★</span>

</div>

<input type="hidden" id="rating" value="0">

</div> -->

<!-- Feedback -->
<div>
<label class="font-semibold">Your Feedback</label>

<textarea rows="4"
class="w-full border border-gray-300 p-3 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
placeholder="Write your feedback here..."></textarea>

</div>

<!-- Submit -->
<button
class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition">

Submit Feedback

</button>

</form>

</div>

</section>



<!-- CUSTOMER MESSAGE -->
<section class="max-w-6xl mx-auto pb-16 px-6">

<div class="bg-blue-900 text-white p-10 rounded-xl text-center" data-aos="fade-up">

<h3 class="text-2xl font-bold mb-3">
We Value Your Opinion
</h3>

<p class="text-blue-200">
Your suggestions help us improve our financial services and deliver better loan
and insurance solutions to our customers.
</p>

</div>

</section>



<?php include_once "footer.php"; ?>


<script>

function setRating(value){
document.getElementById("rating").value = value;
}

// AOS Animation
AOS.init({
duration:1000,
once:true
});

</script>


</body>
</html>