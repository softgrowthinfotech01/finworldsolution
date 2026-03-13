<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Credit Card</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

<?php include_once "header.php"; ?>


<!-- HERO SECTION -->
<section class="bg-gradient-to-r from-indigo-900 via-blue-900 to-purple-900 text-white">

<div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 items-center gap-10">

<div data-aos="fade-right">

<h1 class="text-4xl md:text-5xl font-bold mb-6">
Smart Credit Cards for Smart Spending
</h1>

<p class="text-blue-200 mb-6">
Enjoy rewards, cashback, and exclusive offers with our premium credit cards.
Shop, travel, and pay later with complete financial flexibility.
</p>

<button class="bg-white text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
Apply for Credit Card
</button>

</div>

<div data-aos="fade-left">

<img src="images/credit_card.png"
class="rounded-xl shadow-2xl">

</div>

</div>

</section>


<!-- CREDIT CARD FEATURES -->
<section class="max-w-7xl mx-auto py-16 px-6">

<h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
Credit Card Benefits
</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center"
data-aos="zoom-in">

<div class="text-4xl mb-3">🎁</div>
<h3 class="text-xl font-semibold mb-2">Reward Points</h3>

<p class="text-gray-600">
Earn reward points for every purchase and redeem them for exciting gifts.
</p>

</div>


<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center"
data-aos="zoom-in"
data-aos-delay="100">

<div class="text-4xl mb-3">💸</div>
<h3 class="text-xl font-semibold mb-2">Cashback Offers</h3>

<p class="text-gray-600">
Get cashback on online shopping, dining, travel bookings and more.
</p>

</div>


<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center"
data-aos="zoom-in"
data-aos-delay="200">

<div class="text-4xl mb-3">💳</div>
<h3 class="text-xl font-semibold mb-2">Easy EMI</h3>

<p class="text-gray-600">
Convert big purchases into easy monthly installments with low interest.
</p>

</div>

</div>

</section>


<!-- CARD FEATURES SECTION -->
<section class="bg-gray-50 py-16">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-3xl font-bold text-center mb-12">
Why Choose Our Credit Cards
</h2>

<div class="grid md:grid-cols-2 gap-10">

<div class="flex gap-4" data-aos="fade-right">
<div class="text-3xl">🌎</div>
<div>
<h3 class="font-semibold text-lg">Worldwide Acceptance</h3>
<p class="text-gray-600">
Use your credit card for payments anywhere around the world.
</p>
</div>
</div>

<div class="flex gap-4" data-aos="fade-left">
<div class="text-3xl">🔐</div>
<div>
<h3 class="font-semibold text-lg">Secure Transactions</h3>
<p class="text-gray-600">
Advanced fraud protection and secure payment systems.
</p>
</div>
</div>

<div class="flex gap-4" data-aos="fade-right">
<div class="text-3xl">✈</div>
<div>
<h3 class="font-semibold text-lg">Travel Benefits</h3>
<p class="text-gray-600">
Airport lounge access and travel discounts.
</p>
</div>
</div>

<div class="flex gap-4" data-aos="fade-left">
<div class="text-3xl">📱</div>
<div>
<h3 class="font-semibold text-lg">Online Management</h3>
<p class="text-gray-600">
Track expenses and pay bills easily using mobile banking.
</p>
</div>
</div>

</div>

</div>

</section>


<!-- REWARD HIGHLIGHT -->
<section class="max-w-7xl mx-auto py-16 px-6 text-center">

<h2 class="text-3xl font-bold mb-10 text-gray-800">
Exclusive Credit Card Rewards
</h2>

<div class="grid md:grid-cols-4 gap-8">

<div class="bg-white p-6 rounded-lg shadow" data-aos="fade-up">
<h3 class="text-2xl font-bold text-blue-900">5%</h3>
<p class="text-gray-600">Cashback on Online Shopping</p>
</div>

<div class="bg-white p-6 rounded-lg shadow" data-aos="fade-up" data-aos-delay="100">
<h3 class="text-2xl font-bold text-blue-900">3X</h3>
<p class="text-gray-600">Reward Points on Dining</p>
</div>

<div class="bg-white p-6 rounded-lg shadow" data-aos="fade-up" data-aos-delay="200">
<h3 class="text-2xl font-bold text-blue-900">0%</h3>
<p class="text-gray-600">EMI for 3 Months</p>
</div>

<div class="bg-white p-6 rounded-lg shadow" data-aos="fade-up" data-aos-delay="300">
<h3 class="text-2xl font-bold text-blue-900">24/7</h3>
<p class="text-gray-600">Customer Support</p>
</div>

</div>

</section>


<!-- CTA SECTION -->
<section class="bg-gradient-to-r from-purple-700 to-indigo-800 text-white py-16 text-center">

<h2 class="text-3xl md:text-4xl font-bold mb-4">
Apply for Your Credit Card Today
</h2>

<p class="mb-6 text-purple-200">
Experience convenience, rewards, and financial flexibility.
</p>

<button class="bg-white text-purple-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
Apply Now
</button>

</section>


<?php include_once "footer.php"; ?>


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({
duration:1000,
once:false
});
</script>

</body>
</html>