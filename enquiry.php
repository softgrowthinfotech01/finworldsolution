

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact Us</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen">

<?php include_once "header.php"; ?>

<section class="py-16 text-center">

<h1 class="text-4xl lg:text-5xl font-bold mb-4">
Get in <span class="text-blue-900">Touch</span>
</h1>

<p class="text-gray-600 max-w-xl mx-auto">
Have questions about loans, insurance, or credit cards?
Our team is ready to assist you.
</p>

</section>

<section class="pb-20">

<div class="max-w-7xl mx-auto px-4 lg:px-8 flex justify-center">

<div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-xl" data-aos="zoom-in">

<h3 class="text-2xl font-bold mb-6 text-center">
Send Us a Message
</h3>

<form action="enquiry.php" method="POST" class="space-y-5">

<input type="text" name="name" placeholder="Full Name" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input type="email" name="email" placeholder="Email Address" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input type="tel" name="phone" placeholder="Phone Number" required
class="w-full border border-gray-300 p-3 rounded-lg">

<select name="service"
class="w-full border border-gray-300 p-3 rounded-lg">

<option>Select Service</option>
<option>Personal Loan</option>
<option>Business Loan</option>
<option>Home Loan</option>
<option>Car Loan</option>
<option>Loan Against Property</option>
<option>Health Insurance</option>
<option>Credit Card</option>
<option>Life Insurance</option>
<option>General Insurance</option>

</select>

<textarea name="message" rows="4" placeholder="Your Message"
class="w-full border border-gray-300 p-3 rounded-lg"></textarea>

<button type="submit"
class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold">

Send Message

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