<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Home</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50">
      <?php  include_once "header.php"; ?>


<!-- Hero Section -->
<section class="bg-blue-50 py-20">
<div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center px-4">

<div>
<h1 class="text-4xl md:text-5xl font-bold mb-6">
Secure Your Financial Future
</h1>

<p class="text-gray-600 mb-6">
Expert financial planning, investment advisory and wealth management services to help you achieve your financial goals.
</p>

<button class="bg-blue-600 text-white px-6 py-3 rounded-lg">
Get Consultation
</button>
</div>

<img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f"
class="rounded-xl shadow-lg">

</div>
</section>


<!-- About Section -->
<section class="py-20 bg-white">

<div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-center px-4">

<img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40"
class="rounded-xl shadow">

<div>

<h2 class="text-3xl font-bold mb-4">
About Our Company
</h2>

<p class="text-gray-600 mb-4">
We provide trusted financial advisory services including mutual funds,
insurance and retirement planning.
</p>

<p class="text-gray-600 mb-6">
Our mission is to help individuals and businesses grow their wealth through smart financial strategies.
</p>

<button class="bg-blue-600 text-white px-6 py-2 rounded">
Learn More
</button>

</div>

</div>
</section>


<!-- Services -->
<section class="bg-gray-100 py-20">

<div class="max-w-7xl mx-auto px-4">

<h2 class="text-3xl font-bold text-center mb-12">
Our Services
</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
<h3 class="text-xl font-semibold mb-2">Mutual Funds</h3>
<p class="text-gray-600">
Investment options to help grow your wealth.
</p>
</div>

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
<h3 class="text-xl font-semibold mb-2">Insurance</h3>
<p class="text-gray-600">
Secure your family with life and health insurance plans.
</p>
</div>

<div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
<h3 class="text-xl font-semibold mb-2">Retirement Planning</h3>
<p class="text-gray-600">
Plan your future with smart retirement strategies.
</p>
</div>

</div>

</div>

</section>


<!-- Testimonials -->
<section class="py-20 bg-white">

<h2 class="text-3xl font-bold text-center mb-12">
Client Testimonials
</h2>

<div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-4">

<div class="bg-gray-100 p-6 rounded-xl">
<p class="text-gray-600">
Excellent service and financial guidance.
</p>
<h4 class="mt-4 font-semibold">Rahul Sharma</h4>
</div>

<div class="bg-gray-100 p-6 rounded-xl">
<p class="text-gray-600">
They helped me manage my investments professionally.
</p>
<h4 class="mt-4 font-semibold">Priya Mehta</h4>
</div>

<div class="bg-gray-100 p-6 rounded-xl">
<p class="text-gray-600">
Very knowledgeable team and great support.
</p>
<h4 class="mt-4 font-semibold">Amit Patel</h4>
</div>

</div>

</section>


<!-- Contact Section -->
<section class="bg-gray-100 py-20">

<h2 class="text-3xl font-bold text-center mb-10">
Request a Call Back
</h2>

<form class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow">

<input type="text" placeholder="Name"
class="w-full border p-3 mb-4 rounded">

<input type="email" placeholder="Email"
class="w-full border p-3 mb-4 rounded">

<input type="text" placeholder="Phone"
class="w-full border p-3 mb-4 rounded">

<textarea placeholder="Message"
class="w-full border p-3 mb-4 rounded"></textarea>

<button class="bg-blue-600 text-white w-full py-3 rounded-lg">
Submit
</button>

</form>

</section>


<!-- Footer -->
  <?php  include_once "footer.php"; ?>


</body>
</html>