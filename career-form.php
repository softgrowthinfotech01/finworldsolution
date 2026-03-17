

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Career-form</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen">

<?php include_once "header.php"; ?>



<section class="pb-20">

<div class="max-w-7xl mx-auto px-4 lg:px-8 flex justify-center">

<div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-xl" data-aos="zoom-in">

<h3 class="text-2xl font-bold mb-6 text-center">
Apply Now
</h3>

<form action="career-form.php" method="POST" class="space-y-5">

<input type="text" name="name" placeholder="Full Name" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input type="email" name="email" placeholder="Email Address" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input type="tel" name="phone" placeholder="Phone Number" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input id="file-upload" type="file"  placeholder="Resume" required
class="w-full border border-gray-300 p-3 rounded-lg">


<button type="submit"
class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold">

Apply Now

</button>

</form>

</div>

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