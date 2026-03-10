
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
          <?php  include_once "header.php"; ?>
   
<section class="bg-gray-100 py-16">

<div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

<!-- Left Content -->
<div>

<h2 class="text-4xl font-bold text-gray-800 mb-4">
Get In Touch
</h2>

<p class="text-gray-600 mb-6">
Have questions about loans, credit cards, or insurance?  
Our financial experts are here to help you find the best solution.
</p>

<div class="space-y-3 text-gray-700">

<p>📍 Mumbai, India</p>
<p>📧 info@moneytrust.in</p>
<p>📞 +91 9876543210</p>

</div>

</div>

<!-- Contact Form -->
<div class="bg-white shadow-xl rounded-xl p-8">

<form action="send-mail.php" method="POST" class="space-y-4">

<input type="text"
name="name"
placeholder="Full Name"
required
class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-600">

<input type="email"
name="email"
placeholder="Email Address"
required
class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-600">

<input type="tel"
name="phone"
placeholder="Phone Number"
required
class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-600">

<select name="service"
class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-600">

<option>Select Service</option>
<option>Personal Loan</option>
<option>Business Loan</option>
<option>Home Loan</option>
<option>Car Loan</option>
<option>Insurance</option>

</select>

<textarea name="message"
rows="4"
placeholder="Your Message"
class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-blue-600"></textarea>

<button
type="submit"
class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">

Send Message

</button>

</form>

</div>

</div>

</section>
<!-- Floating Contact Button -->

<a href="contact.php"
class="fixed bottom-24 right-6 bg-blue-600 hover:bg-blue-700
text-white px-5 py-3 rounded-full shadow-lg
flex items-center gap-2
transition duration-300 z-50">

<svg xmlns="http://www.w3.org/2000/svg"
fill="none"
viewBox="0 0 24 24"
stroke="currentColor"
class="w-5 h-5">

<path stroke-linecap="round"
stroke-linejoin="round"
stroke-width="2"
d="M21 8V7a2 2 0 00-2-2H5a2 2 0 00-2 2v1m18 0l-9 6-9-6m18 0v9a2 2 0 01-2 2H5a2 2 0 01-2-2V8"/>

</svg>

Contact Us

</a>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919876543210"
target="_blank"
class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600
text-white p-4 rounded-full shadow-lg transition duration-300
z-50">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
fill="currentColor"
class="w-6 h-6">

<path d="M20.52 3.48A11.86 11.86 0 0012.03 0C5.4 0 .02 5.38.02 12c0 2.12.55 4.2 1.6 6.04L0 24l6.15-1.6A11.96 11.96 0 0012.03 24c6.63 0 12-5.38 12-12 0-3.2-1.25-6.22-3.51-8.52zm-8.49 18.1c-1.82 0-3.6-.49-5.16-1.41l-.37-.22-3.65.95.97-3.55-.24-.37A9.96 9.96 0 012.03 12c0-5.5 4.48-9.98 10-9.98 2.67 0 5.18 1.04 7.07 2.93A9.93 9.93 0 0122.03 12c0 5.5-4.48 9.98-10 9.98zm5.47-7.48c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.28-.47-2.44-1.5-.9-.8-1.51-1.8-1.69-2.1-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.6-.92-2.2-.24-.58-.48-.5-.67-.5-.17 0-.37-.02-.57-.02s-.52.07-.8.37c-.27.3-1.05 1.02-1.05 2.5s1.07 2.9 1.22 3.1c.15.2 2.1 3.2 5.1 4.48.71.31 1.27.49 1.7.63.71.22 1.35.19 1.86.11.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>

</svg>

</a>


<?php  include_once "footer.php"; ?>

</body>
</html>