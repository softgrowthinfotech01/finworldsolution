<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Careers</title>

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
Join Our Team
</h1>

<p class="text-blue-200 text-lg max-w-2xl mx-auto" data-aos="fade-up">
Build your career with a growing financial services company and
help people achieve their financial goals.
</p>

</section>



<!-- WHY JOIN US -->
<section class="max-w-6xl mx-auto py-16 px-6">

<h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">
Why Work With Us
</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center"
data-aos="fade-up">

<div class="text-blue-900 text-4xl mb-4">💼</div>
<h3 class="text-xl font-bold mb-2">Career Growth</h3>
<p class="text-gray-600">
Opportunities to learn, grow, and build a strong career in finance.
</p>

</div>


<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center"
data-aos="fade-up" data-aos-delay="150">

<div class="text-blue-900 text-4xl mb-4">🤝</div>
<h3 class="text-xl font-bold mb-2">Supportive Team</h3>
<p class="text-gray-600">
Work with experienced professionals in a collaborative environment.
</p>

</div>


<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition text-center"
data-aos="fade-up" data-aos-delay="300">

<div class="text-blue-900 text-4xl mb-4">📈</div>
<h3 class="text-xl font-bold mb-2">Performance Rewards</h3>
<p class="text-gray-600">
Attractive incentives and recognition for outstanding performance.
</p>

</div>

</div>

</section>



<!-- JOB OPENINGS -->
<section class="max-w-6xl mx-auto py-10 px-6">

<h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">
Current Openings
</h2>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">


<!-- Job 1 -->
<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition"
data-aos="fade-up">

<h3 class="text-xl font-bold mb-2">Loan Consultant</h3>

<p class="text-gray-600 mb-4">
Assist customers in selecting suitable loan products and guide them through the process.
</p>

<p class="text-sm text-gray-500 mb-4">
Experience: 1+ Years
</p>

<button class="bg-blue-900 text-white px-5 py-2 rounded hover:bg-blue-800 transition">
Apply Now
</button>

</div>


<!-- Job 2 -->
<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition"
data-aos="fade-up" data-aos-delay="150">

<h3 class="text-xl font-bold mb-2">Sales Executive</h3>

<p class="text-gray-600 mb-4">
Handle client relationships and promote financial products and services.
</p>

<p class="text-sm text-gray-500 mb-4">
Experience: 1+ Years
</p>

<button class="bg-blue-900 text-white px-5 py-2 rounded hover:bg-blue-800 transition">
Apply Now
</button>

</div>


<!-- Job 3 -->
<div class="bg-white p-8 rounded-xl shadow hover:shadow-xl transition"
data-aos="fade-up" data-aos-delay="300">

<h3 class="text-xl font-bold mb-2">Customer Support</h3>

<p class="text-gray-600 mb-4">
Provide support and assistance to customers regarding financial services.
</p>

<p class="text-sm text-gray-500 mb-4">
Experience: 0–2 Years
</p>

<button class="bg-blue-900 text-white px-5 py-2 rounded hover:bg-blue-800 transition">
Apply Now
</button>

</div>

</div>

</section>



<!-- CTA -->
<section class="max-w-6xl mx-auto py-16 px-6">

<div class="bg-blue-900 text-white rounded-xl p-12 text-center"
data-aos="zoom-in">

<h2 class="text-3xl font-bold mb-4">
Didn't Find the Right Role?
</h2>

<p class="text-blue-200 mb-6">
Send us your resume and we will contact you when a suitable opportunity arises.
</p>

<a href="contact.php"
class="bg-white text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
Submit Resume
</a>

</div>

</section>


<?php include_once "footer.php"; ?>


<script>
AOS.init({
duration:1000,
once:true
});
</script>

</body>
</html>