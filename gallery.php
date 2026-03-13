<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Gallery</title>

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
Our Office Gallery
</h1>

<p class="text-blue-200 max-w-2xl mx-auto text-lg" data-aos="fade-up">
Take a look at our workspace and meet the dedicated team behind our financial services.
</p>

</section>



<!-- GALLERY -->
<section class="max-w-7xl mx-auto py-16 px-6">

<div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

<!-- Image 1 -->
<div class="overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in">
<img src="images/staff1.jpeg"
class="w-full h-64 object-cover hover:scale-110 transition duration-500"
alt="Office Staff">
</div>

<!-- Image 2 -->
<div class="overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in" data-aos-delay="100">
<img src="images/staff2.jpeg"
class="w-full h-64 object-cover hover:scale-110 transition duration-500"
alt="Office Staff">
</div>

<!-- Image 3 -->
<div class="overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in" data-aos-delay="200">
<img src="images/staff3.jpeg"
class="w-full h-64 object-cover hover:scale-110 transition duration-500"
alt="Office Staff">
</div>

<!-- Image 4 -->
<div class="overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in">
<img src="images/staff4.jpeg"
class="w-full h-64 object-cover hover:scale-110 transition duration-500"
alt="Office Staff">
</div>

<!-- Image 5 -->
<div class="overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in" data-aos-delay="100">
<img src="images/staff5.jpeg"
class="w-full h-64 object-cover hover:scale-110 transition duration-500"
alt="Office Staff">
</div>

<!-- Image 6 -->
<div class="overflow-hidden rounded-xl shadow-lg" data-aos="zoom-in" data-aos-delay="200">
<img src="images/staff6.jpeg"
class="w-full h-64 object-cover hover:scale-110 transition duration-500"
alt="Office Staff">
</div>

</div>

</section>



<!-- TEAM MESSAGE -->
<section class="max-w-6xl mx-auto px-6 pb-16">

<div class="bg-blue-900 text-white p-10 rounded-xl text-center" data-aos="fade-up">

<h2 class="text-2xl font-bold mb-3">
Our Dedicated Team
</h2>

<p class="text-blue-200">
Our experienced professionals are committed to helping customers
find the best financial solutions including loans, credit cards, and insurance.
</p>

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