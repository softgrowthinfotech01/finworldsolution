<!DOCTYPE html>
<html lang="en">

<head>
         <?php  include_once "meta.php"; ?>


    <title>ALORNIX - Digital Excellence</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(1.1);
            }

            to {
                transform: scale(1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
    
        }
        @keyframes float{
0%,100%{transform:translateY(0)}
50%{transform:translateY(-20px)}
}


.marquee{
width:100%;
overflow:hidden;
}

.marquee-track{
display:flex;
align-items:center;
gap:80px;
width:max-content;
animation:marquee 25s linear infinite;
}

.marquee-track img{
height:40px;
flex-shrink:0;
}

@keyframes marquee{
0%{
transform:translateX(0);
}
100%{
transform:translateX(-50%);
}
}

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out;
        }

        .animate-fadeInDown {
            animation: fadeInDown 1s ease-out;
        }

        .animate-zoomIn {
            animation: zoomIn 15s ease-out infinite alternate;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .slider-container {
            overflow: hidden;
        }

        .slider-track {
            display: flex;
            animation: slide 20s linear infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
        /* Glassmorphism */
.glass{
background: rgba(255,255,255,0.1);
backdrop-filter: blur(10px);
border:1px solid rgba(255,255,255,0.2);
}

/* Gradient animation */
.animate-gradient{
background-size: 300% 300%;
animation: gradientMove 10s ease infinite;
}

@keyframes gradientMove{
0%{background-position:0% 50%}
50%{background-position:100% 50%}
100%{background-position:0% 50%}
}

    </style>
</head>

<body class="bg-gray-50">
<div class="bg-gray-900 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center space-x-4">
                    <span>📧 info@alornix.com</span>
                    <span>📱 +1 (555) 123-4567</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-gray-300">Support</a>
                    <a href="#" class="hover:text-gray-300">Client Portal</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation -->
   
         <?php  include_once "header.php"; ?>

<section class="relative overflow-hidden text-white">

<!-- Animated Gradient Background -->
<div class="absolute inset-0 bg-gradient-to-r from-blue-950 via-indigo-900 to-blue-900 animate-gradient"></div>

<div class="relative max-w-7xl mx-auto px-6 py-24">

<div class="relative overflow-hidden rounded-3xl">



<!-- SLIDER -->
<div id="slider" class="flex transition-transform duration-700 ease-in-out">

<!-- SLIDE 1 -->
<div class="min-w-full grid md:grid-cols-2 items-center gap-10">

<div>
<h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
Instant Personal Loans <br>
<span class="text-yellow-400">Up To ₹25 Lakhs</span>
</h1>

<p class="text-gray-200 mb-8 text-lg">
Get quick approval with minimal documents and flexible EMI options designed for your financial needs.
</p>

<div class="flex gap-4">
<a href="#" class="px-7 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:scale-105 transition">
Apply Now
</a>

<a href="#" class="px-7 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">
Check Eligibility
</a>
</div>
</div>

<div class="relative">

<div class="glass p-4 rounded-3xl backdrop-blur-lg shadow-2xl">
<img src="https://images.unsplash.com/photo-1620266757065-5814239881fd?q=80&w=2400"
class="rounded-2xl w-full object-cover animate-zoomIn">
</div>

</div>

</div>


<!-- SLIDE 2 -->
<div class="min-w-full grid md:grid-cols-2 items-center gap-10">

<div>
<h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
Affordable Home Loans <br>
<span class="text-yellow-400">Lowest Interest Rates</span>
</h1>

<p class="text-gray-200 mb-8 text-lg">
Turn your dream home into reality with easy EMI options and fast loan approvals.
</p>

<div class="flex gap-4">
<a href="#" class="px-7 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:scale-105 transition">
Apply Now
</a>

<a href="#" class="px-7 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">
View Plans
</a>
</div>
</div>

<div class="relative">

<div class="glass p-4 rounded-3xl backdrop-blur-lg shadow-2xl">
<img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2400"
class="rounded-2xl w-full object-cover animate-zoomIn">
</div>

</div>

</div>


<!-- SLIDE 3 -->
<div class="min-w-full grid md:grid-cols-2 items-center gap-10">

<div>
<h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
Business Expansion Loans
<span class="text-yellow-400">Fast Funding</span>
</h1>

<p class="text-gray-200 mb-8 text-lg">
Fuel your business growth with instant capital and flexible repayment solutions.
</p>

<div class="flex gap-4">
<a href="#" class="px-7 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:scale-105 transition">
Apply Today
</a>

<a href="#" class="px-7 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">
Learn More
</a>
</div>
</div>

<div class="relative">

<div class="glass p-4 rounded-3xl backdrop-blur-lg shadow-2xl">
<img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?q=80&w=2400"
class="rounded-2xl w-full object-cover animate-zoomIn">
</div>

</div>

</div>

</div>

<!-- ARROWS -->
<button id="prev"
class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-md p-3 rounded-full hover:bg-white/40 transition">
❮
</button>

<button id="next"
class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-md p-3 rounded-full hover:bg-white/40 transition">
❯
</button>

</div>

</div>

<!-- Floating Icons -->
<div class="absolute inset-0 pointer-events-none">

<div class="absolute top-20 left-10 animate-float opacity-40">
💰
</div>

<div class="absolute top-40 right-20 animate-float opacity-40 text-2xl">
🏦
</div>

<div class="absolute bottom-32 left-1/4 animate-float opacity-40 text-2xl">
📈
</div>

<div class="absolute bottom-20 right-1/3 animate-float opacity-40 text-2xl">
💳
</div>

</div>


<section class="py-16 bg-white">

<div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

<div>
<h3 class="text-4xl font-bold text-blue-600 counter" data-target="2500">0</h3>
<p class="text-gray-600">Loans Approved</p>
</div>

<div>
<h3 class="text-4xl font-bold text-blue-600 counter" data-target="1200">0</h3>
<p class="text-gray-600">Happy Clients</p>
</div>

<div>
<h3 class="text-4xl font-bold text-blue-600 counter" data-target="18">0</h3>
<p class="text-gray-600">Years Experience</p>
</div>

<div>
<h3 class="text-4xl font-bold text-blue-600 counter" data-target="35">0</h3>
<p class="text-gray-600">Bank Partners</p>
</div>

</div>

</section>
</section>

    <section class="py-20 bg-gray-50">

<div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

<!-- Image -->

<div class="relative">

<img 
src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1"
class="rounded-2xl shadow-xl w-full">

<div class="absolute -bottom-6 -right-6 bg-blue-600 text-white p-6 rounded-xl shadow-lg">
<p class="text-2xl font-bold">18+</p>
<p class="text-sm">Years Experience</p>
</div>

</div>


<!-- Content -->

<div>

<h2 class="text-4xl font-bold text-gray-800 mb-6">
Trusted Financial Guidance for Your Future
</h2>

<p class="text-gray-600 mb-5 leading-relaxed">
Money Trust Financial Services provides a wide range of financial 
solutions including personal loans, business loans, home loans, 
insurance, and investment advisory services. Our goal is to help 
individuals and businesses achieve their financial objectives 
through expert guidance and reliable financial products.
</p>

<p class="text-gray-600 mb-6 leading-relaxed">
We carefully understand each client’s financial needs, risk profile, 
and long-term goals to provide customized financial solutions that 
ensure stability, growth, and financial confidence.
</p>


<div class="flex gap-4">

<a href="about.php"
class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
Learn More
</a>

<a href="contact.php"
class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition">
Contact Us
</a>

</div>

</div>

</div>

</section>

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4 gradient-text">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Comprehensive digital solutions tailored to your business needs
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-purple-500">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-purple-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <circle cx="12" cy="7" r="4"/>
                        <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"/>
                        <circle cx="19" cy="5" r="3"/>
                        <path d="M19 4v2M18 5h2"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Personal Loan</h3>
                    <p class="text-gray-600 mb-6">
                        A personal loan is an unsecured loan that provides quick
                        funds for personal expenses with flexible repayment options.
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>

                <!-- Service Card 2 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-indigo-500">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-indigo-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <rect x="3" y="7" width="18" height="13" rx="3"/>
                        <path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/>
                        <path d="M3 13h18"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Business Loan</h3>
                    <p class="text-gray-600 mb-6">
                        A business loan provides financial support to help businesses
                         manage operations, expand, or invest in growth opportunities.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>

                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-pink-600">
                    <div
                        class="w-16 h-16 bg-gradient-to-l from-pink-200 via-purple-400 to-indigo-600 rounded-2xl flex items-center justify-center mb-6">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10l9-7 9 7M5 10v10h14V10M9 21v-6h6v6"/>

                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Loan against Property</h3>
                    <p class="text-gray-600 mb-6">
                        Unlock the value of your property to get high-value
                         loans at competitive interest rates.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>

                <!-- Service Card 3 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-yellow-500">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M3 11L12 3l9 8"/>
                        <path d="M5 10v10h14V10"/>
                        <rect x="9" y="14" width="6" height="6"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Home Loan</h3>
                    <p class="text-gray-600 mb-6">
                        A home loan helps individuals finance the purchase, construction, or
                         renovation of a house with flexible repayment options.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
                 <!-- Service Card 4 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-red-400">
                    <div
                        class="w-16 h-16 bg-gradient-to-bl from-red-900 via-pink-600 to-rose-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2  text-red-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M3 13l2-5h14l2 5"/>
                        <rect x="4" y="13" width="16" height="6" rx="2"/>
                        <circle cx="7" cy="19" r="1.5"/>
                        <circle cx="17" cy="19" r="1.5"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Car Loan</h3>
                    <p class="text-gray-600 mb-6">
                        A car loan helps individuals purchase a new or used 
                        vehicle by paying in easy monthly installments (EMIs).
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
                
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-green-500">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-gray-400 via-pink-500 to-rose-400 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 13h13l3 3v3h-2a2 2 0 11-4 0H9a2 2 0 11-4 0H3v-6z"/>

                            </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Commercial Vehical Loan</h3>
                    <p class="text-gray-600 mb-6">
                       Finance commercial vehicles easily to expand and grow your business operations.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
                <!-- <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <rect x="2" y="6" width="20" height="12" rx="2" stroke-width="2"/>

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2 10h20"/>

                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Credit Card</h3>
                    <p class="text-gray-600 mb-6">
                        Enjoy flexible spending, rewards, and convenient cashless payments with credit cards.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div> -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-teal-500">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-gray-300 via-gray-500 to-gray-700 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 21s-6-4.35-9-7.5A5.5 5.5 0 0112 5a5.5 5.5 0 019 8.5C18 16.65 12 21 12 21z"/>

                            </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Health Insurance</h3>
                    <p class="text-gray-600 mb-6">
                        Protect yourself and your family from medical expenses with comprehensive health coverage.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-cyan-500">
                    <div
                        class="w-16 h-16 bg-gradient-to-bl from-yellow-500 via-lime-500 to-green-500 rounded-2xl flex items-center justify-center mb-6">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3l8 4v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/>

                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Life Insurance</h3>
                    <p class="text-gray-600 mb-6">
                      Secure your family's financial future with reliable life insurance protection.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-orange-600">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 via-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>

                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">General Insurance</h3>
                    <p class="text-gray-600 mb-6">
                       Comprehensive insurance solutions to protect your assets, travel, and valuables.
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-14 bg-gray-50">



</section>

<section class="py-20 bg-gray-900 text-white overflow-hidden">

<h3 class="text-center text-2xl font-semibold mb-12">
Our Banking Partners
</h3>

<div class="marquee">

<div class="marquee-track">

<!-- LOGOS -->
<img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/HDFC_Bank_Logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/ICICI_Bank_Logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/SBI-logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Axis_Bank_logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Kotak_Mahindra_Bank_logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Yes_Bank_SVG_Logo.svg">

<!-- DUPLICATE -->
<img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/HDFC_Bank_Logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5a/ICICI_Bank_Logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/SBI-logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Axis_Bank_logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Kotak_Mahindra_Bank_logo.svg">
<img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Yes_Bank_SVG_Logo.svg">

</div>

</div>

</section>
    <!-- Stats Section -->
    <!-- <section class="py-20 hero-gradient">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl lg:text-5xl font-bold gradient-text mb-2">500+</div>
                    <p class="text-gray-600">Projects Completed</p>
                </div>
                <div>
                    <div class="text-4xl lg:text-5xl font-bold gradient-text mb-2">200+</div>
                    <p class="text-gray-600">Happy Clients</p>
                </div>
                <div>
                    <div class="text-4xl lg:text-5xl font-bold gradient-text mb-2">50+</div>
                    <p class="text-gray-600">Team Members</p>
                </div>
                <div>
                    <div class="text-4xl lg:text-5xl font-bold gradient-text mb-2">10+</div>
                    <p class="text-gray-600">Years Experience</p>
                </div>
            </div>
        </div>
    </section> -->
    

    <!-- Portfolio Section -->
    

    <!-- Testimonials Section with Slider -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4 gradient-text">Client Testimonials</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    What our clients say about working with us
                </p>
            </div>

            <div class="slider-container max-w-4xl mx-auto">
                <div class="slider-track">
                    <!-- Testimonial 1 -->
                    <div class="min-w-full px-4">
                        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-purple-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>
                            <p class="text-lg text-gray-600 mb-6">
                                "ALORNIX transformed our online presence completely. Their attention to detail and
                                innovative approach exceeded our expectations."
                            </p>
                            <div class="flex items-center justify-center">
                                <img src="https://i.pravatar.cc/100?img=1" alt="Client"
                                    class="w-12 h-12 rounded-full mr-4">
                                <div class="text-left">
                                    <p class="font-semibold">John Smith</p>
                                    <p class="text-sm text-gray-500">CEO, TechCorp</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="min-w-full px-4">
                        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                            <div class="mb-6">
                                <svg class="w-12 h-12 text-purple-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>
                            <p class="text-lg text-gray-600 mb-6">
                                "Working with ALORNIX was a game-changer for our business. They delivered beyond what we
                                imagined possible."
                            </p>
                            <div class="flex items-center justify-center">
                                <img src="https://i.pravatar.cc/100?img=5" alt="Client"
                                    class="w-12 h-12 rounded-full mr-4">
                                <div class="text-left">
                                    <p class="font-semibold">Sarah Johnson</p>
                                    <p class="text-sm text-gray-500">Founder, StartupX</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-600">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Ready to Start Your Project?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Let's work together to bring your vision to life with innovative digital solutions
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="px-8 py-4 bg-white text-purple-600 font-semibold rounded-full hover:shadow-xl transform hover:scale-105 transition">
                    Get Free Consultation
                </button>
                <button
                    class="px-8 py-4 bg-transparent text-white font-semibold rounded-full border-2 border-white hover:bg-white hover:text-purple-600 transition">
                    View Pricing
                </button>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">

<div class="max-w-4xl mx-auto bg-white p-10 rounded-xl shadow">

<h2 class="text-3xl font-bold text-center mb-8">Loan EMI Calculator</h2>

<div class="grid md:grid-cols-3 gap-6">

<input id="amount" type="number" placeholder="Loan Amount"
class="border p-3 rounded">

<input id="rate" type="number" placeholder="Interest Rate %"
class="border p-3 rounded">

<input id="years" type="number" placeholder="Years"
class="border p-3 rounded">

</div>

<button onclick="calculateEMI()"
class="mt-6 bg-blue-600 text-white px-6 py-3 rounded">
Calculate EMI
</button>

<p class="mt-4 text-xl font-semibold" id="emiResult"></p>

</div>

</section>
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

<script>

function calculateEMI(){

let P = document.getElementById("amount").value
let R = document.getElementById("rate").value / 12 / 100
let N = document.getElementById("years").value * 12

let EMI = P * R * Math.pow(1+R,N) / (Math.pow(1+R,N)-1)

document.getElementById("emiResult").innerHTML =
"Monthly EMI: ₹ " + Math.round(EMI)

}

</script>

    <!-- Footer -->
   
       <?php  include_once "footer.php"; ?>
    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.card-hover').forEach(card => {
            observer.observe(card);
        });
    </script>
    
    <script>

let slider = document.getElementById("slider");
let index = 0;
let totalSlides = 3;

function showSlide(){
slider.style.transform = `translateX(-${index*100}%)`;
}

document.getElementById("next").onclick = function(){
index = (index + 1) % totalSlides;
showSlide();
}

document.getElementById("prev").onclick = function(){
index = (index - 1 + totalSlides) % totalSlides;
showSlide();
}

setInterval(()=>{
index = (index + 1) % totalSlides;
showSlide();
},4000);



const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
counter.innerText = '0';

const updateCounter = () => {
const target = +counter.getAttribute('data-target');
const c = +counter.innerText;

const increment = target / 100;

if(c < target){
counter.innerText = `${Math.ceil(c + increment)}`;
setTimeout(updateCounter,20);
}else{
counter.innerText = target;
}
};

updateCounter();
});
</script>
</body>

</html>