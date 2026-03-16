<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>

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
            Contact Us
        </h1>

        <p class="text-blue-200 max-w-2xl mx-auto text-lg" data-aos="fade-up">
            Have questions about loans, credit cards, or insurance?
            Our financial experts are ready to help you.
        </p>

    </section>



    <!-- CONTACT SECTION -->
    <section class="max-w-6xl mx-auto py-16 px-6">

        <div class="grid md:grid-cols-2 gap-12 items-start">

            <!-- CONTACT INFO -->
            <div data-aos="fade-right">

                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    Get In Touch
                </h2>

                <p class="text-gray-600 mb-8">
                    We are here to help you with all your financial needs including
                    personal loans, home loans, business loans, credit cards, and insurance.
                </p>

                <div class="space-y-6">

                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg">📍</div>
                        <div>
                            <h4 class="font-semibold">Office Address</h4>
                            <p class="text-gray-600">Akashwani road near LTV school opp Dhanorkar house Chandrapur-442401</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg">📧</div>
                        <div>
                            <h4 class="font-semibold">Email</h4>
                            <p class="text-gray-600">finworldsolution01@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 p-3 rounded-lg">📞</div>
                        <div>
                            <h4 class="font-semibold">Phone</h4>
                            <p class="text-gray-600">+91 7588086103</p>
                        </div>
                    </div>

                </div>

            </div>



            <!-- CONTACT FORM -->
            <div class="bg-white shadow-xl rounded-xl p-8" data-aos="fade-left">

                <h3 class="text-2xl font-bold mb-6">
                    Send Us a Message
                </h3>

                <form action="send-mail.php" method="POST" class="space-y-5">

                    <input type="text"
                        name="name"
                        placeholder="Full Name"
                        required
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">

                    <input type="email"
                        name="email"
                        placeholder="Email Address"
                        required
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">

                    <input type="tel"
                        name="phone"
                        placeholder="Phone Number"
                        required
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">

                    <select name="service"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">

                        <option>Select Service</option>
                        <option>Personal Loan</option>
                        <option>Business Loan</option>
                        <option>Home Loan</option>
                        <option>Car Loan</option>
                        <option>Loan Against Property</option>
                        <option>Health Insurance</option>
                        <option>Credit Card</option>
                        <option>Life Insurance</option>
                        <option>Genral Insurance</option>
                        <option>Commercial Vehical Loan</option>

                    </select>

                    <textarea name="message"
                        rows="4"
                        placeholder="Your Message"
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>

                    <button
                        type="submit"
                        class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </section>



    <!-- GOOGLE MAP -->








    <?php include_once "footer.php"; ?>


    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>