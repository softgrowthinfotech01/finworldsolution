<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "meta.php"; ?>


  <title>Finworld Solution</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <!-- Custom CSS -->
  
  <style>


  </style>
</head>

<body class="bg-gray-50  overflow-x-hidden">
  <div class="text-white py-2 bg-[linear-gradient(93.64deg,#f26f21_4.44%,#5c217a_93.74%)]">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center text-sm">
        <div class="flex items-center space-x-4">
          <span>📧 finworldsolution01@gmail.com</span>
          <span>📱 +91-7588086103</span>
        </div>
        <div class="flex items-center space-x-4">
          <a href="#" class="hover:text-gray-300">Support</a>

        </div>
      </div>
    </div>
  </div>
  <!-- Navigation -->

  <?php include_once "header.php"; ?>

  <section class="relative overflow-visible text-white">


    <!-- Background Image -->
    <div class="absolute inset-0">
      <img src="images/bg_slider_img.jpg"
        class="w-full h-full object-cover opacity-100">

      <div class="absolute inset-0 bg-[linear-gradient(93.64deg,#f26f21_4.44%,#5c217a_93.74%)]"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 py-24">
      <div class="relative rounded-3xl overflow-hidden">

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
              <!-- <div class="flex gap-4">
              <a href="#" class="px-7 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:scale-105 transition">Apply Now</a>
              <a href="#" class="px-7 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">Check Eligibility</a>
            </div> -->
            </div>
            <div class="relative">
              <div class="glass p-4 rounded-3xl backdrop-blur-lg shadow-2xl overflow-hidden">
                <img src="images/slider_img.png" class="rounded-2xl w-full  object-cover animate-zoomIn">
              </div>
            </div>
          </div>

          <div class="min-w-full grid md:grid-cols-2 items-center gap-10">
            <div>
              <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                Affordable Home Loans <br>
                <span class="text-yellow-400">Lowest Interest Rates</span>
              </h1>
              <p class="text-gray-200 mb-8 text-lg">
                Turn your dream home into reality with easy EMI options and fast loan approvals.
              </p>
              <!-- <div class="flex gap-4">
              <a href="#" class="px-7 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:scale-105 transition">Apply Now</a>
              <a href="#" class="px-7 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">View Plans</a>
            </div> -->
            </div>
            <div class="relative">
              <div class="glass p-4 rounded-3xl backdrop-blur-lg shadow-2xl overflow-hidden">
                <img src="images/slider_img2.png" class="rounded-2xl w-full  object-cover animate-zoomIn">
              </div>
            </div>
          </div>

          <!-- SLIDE 3 -->
          <div class="min-w-full grid md:grid-cols-2 items-center gap-10">
            <div>
              <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                Business Expansion Loans <br>
                <span class="text-yellow-400">Fast Funding</span>
              </h1>
              <p class="text-gray-200 mb-8 text-lg">
                Fuel your business growth with instant capital and flexible repayment solutions.
              </p>
              <!-- <div class="flex gap-4">
              <a href="#" class="px-7 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:scale-105 transition">Apply Today</a>
              <a href="#" class="px-7 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">Learn More</a>
            </div> -->
            </div>
            <div class="relative">
              <div class="glass p-4 rounded-3xl backdrop-blur-lg shadow-2xl overflow-hidden">
                <img src="images/slider_img3.png" class="rounded-2xl w-full  object-cover animate-zoomIn">
              </div>
            </div>
          </div>

        </div>

        <!-- ARROWS -->


      </div>
      <!-- Slider Arrows - Premium Design -->
      <button id="prev"
        class="absolute left-2 md:left-[-75px] top-1/2 -translate-y-1/2 
flex items-center justify-center w-14 h-14
bg-white/10 backdrop-blur-xl border border-white/20
rounded-full shadow-2xl text-white font-bold text-3xl 
hover:bg-gradient-to-r hover:from-yellow-400 hover:to-yellow-300 
hover:text-black hover:scale-110 transition-all duration-300 z-20">
        ❮
      </button>

      <button id="next"
        class="absolute right-2 md:right-[-75px] top-1/2 -translate-y-1/2
flex items-center justify-center w-14 h-14
bg-white/10 backdrop-blur-xl border border-white/20
rounded-full shadow-2xl text-white font-bold text-3xl
hover:bg-gradient-to-l hover:from-yellow-400 hover:to-yellow-300 
hover:text-black hover:scale-110 transition-all duration-300 z-20">
        ❯
      </button>

    </div>

    <!-- Floating Icons -->
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute top-20 left-10 animate-float opacity-40">💰</div>
      <div class="absolute top-40 right-20 animate-float opacity-40 text-2xl">🏦</div>
      <div class="absolute bottom-32 left-1/4 animate-float opacity-40 text-2xl">📈</div>
      <div class="absolute bottom-20 right-1/3 animate-float opacity-40 text-2xl">💳</div>
    </div>

  </section>


  <section class="relative py-24 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

      <!-- Image -->
      <div class="relative" data-aos="fade-right" data-aos-duration="1200">
        <img
          src="images/about_us_img.cms"
          alt="Financial Guidance"
          class="rounded-3xl shadow-2xl w-full object-cover h-[500px] lg:h-[600px]">

        <!-- Glass Card Overlay -->

      </div>

      <!-- Content -->
      <div data-aos="fade-left" data-aos-duration="1200">
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 tracking-tight">
        Finworld Solution Guidance for
          <span class="color-text"> Your Future </span>
        </h2>

        <p class="text-gray-700 mb-5 leading-relaxed text-lg">
          Finworld Solution provides a wide range of financial solutions including personal loans, business loans, home loans, insurance, and investment advisory services. Our goal is to help individuals and businesses achieve their financial objectives through expert guidance and reliable financial products.
        </p>

        <p class="text-gray-700 mb-8 leading-relaxed text-lg">
          We carefully understand each client’s financial needs, risk profile, and long-term goals to provide customized financial solutions that ensure stability, growth, and financial confidence.
        </p>

        <div class="flex gap-5 flex-wrap">
          <a href="about"
            class="px-8 py-3 rounded-lg bg-main  text-white font-semibold shadow-lg hover:scale-105 transition-transform duration-300">
            Learn More
          </a>

          <a href="contact"
            class="px-8 py-3 rounded-lg border-2 border-blue-600 text-blue-600 font-semibold hover:bg-blue-600 hover:text-white transition-all duration-300">
            Contact Us
          </a>
        </div>
      </div>

    </div>

  </section>

  <!-- Services Section -->
  <section class="py-20 bg-gradient-to-b from-gray-100 via-blue-200 to-gray-300">
    <div class="container mx-auto px-4 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-bold mb-4 ">Our <span class="color-text">Services</span></h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Comprehensive digital solutions tailored to your business needs
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service Card 1 -->
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-purple-500 " data-aos="flip-right">
          <div
            class="relative w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex mx-auto justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2  translate-x-1/2 text-purple-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
              <circle cx="12" cy="7" r="4" />
              <path d="M4 21c0-4 3.5-7 8-7s8 3 8 7" />
              <circle cx="19" cy="5" r="3" />
              <path d="M19 4v2M18 5h2" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-center mb-4">Personal Loan</h3>
          <p class="text-gray-600 mb-6">
            A personal loan is an unsecured loan that provides quick
            funds for personal expenses with flexible repayment options.
            <a href="personal-loan.php" class="text-purple-600 font-semibold hover:text-purple-700  transition">
              Learn More →
            </a>
        </div>

        <!-- Service Card 2 -->
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-indigo-500" data-aos="flip-right">
          <div
            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-500 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-indigo-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
              <rect x="3" y="7" width="18" height="13" rx="3" />
              <path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2" />
              <path d="M3 13h18" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Business Loan</h3>
          <p class="text-gray-600 mb-6">
            A business loan provides financial support to help businesses
            manage operations, expand, or invest in growth opportunities.
          </p>
          <a href="business-loan.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>

        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-pink-600" data-aos="flip-right">
          <div
            class="w-16 h-16 bg-gradient-to-l from-pink-200 via-purple-400 to-indigo-600 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 10l9-7 9 7M5 10v10h14V10M9 21v-6h6v6" />

            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Loan against Property</h3>
          <p class="text-gray-600 mb-6">
            Unlock the value of your property to get high-value
            loans at competitive interest rates.
          </p>
          <a href="loan-against-property.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>

        <!-- Service Card 3 -->
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-yellow-500" data-aos="flip-left">
          <div
            class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex ml-[165px] items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M3 11L12 3l9 8" />
              <path d="M5 10v10h14V10" />
              <rect x="9" y="14" width="6" height="6" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Home Loan</h3>
          <p class="text-gray-600 mb-6">
            A home loan helps individuals finance the purchase, construction, or
            renovation of a house with flexible repayment options.
          </p>
          <a href="home-loan.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>
        <!-- Service Card 4 -->
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-red-400" data-aos="flip-left">
          <div
            class="w-16 h-16 bg-gradient-to-bl from-red-900 via-pink-600 to-rose-500 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2  text-red-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
              <path d="M3 13l2-5h14l2 5" />
              <rect x="4" y="13" width="16" height="6" rx="2" />
              <circle cx="7" cy="19" r="1.5" />
              <circle cx="17" cy="19" r="1.5" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Car Loan</h3>
          <p class="text-gray-600 mb-6">
            A car loan helps individuals purchase a new or used
            vehicle by paying in easy monthly installments (EMIs).
          </p>
          <a href="car-loan.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>

        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-green-500" data-aos="flip-left">
          <div
            class="w-16 h-16 bg-gradient-to-r from-gray-400 via-pink-500 to-rose-400 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 13h13l3 3v3h-2a2 2 0 11-4 0H9a2 2 0 11-4 0H3v-6z" />

            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Commercial Vehical Loan</h3>
          <p class="text-gray-600 mb-6">
            Finance commercial vehicles easily to expand and grow your business operations.
          </p>
          <a href="commercial-vehicle-loan.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
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
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-teal-500" data-aos="flip-right">
          <div
            class="w-16 h-16 bg-gradient-to-br from-gray-300 via-gray-500 to-gray-700 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 21s-6-4.35-9-7.5A5.5 5.5 0 0112 5a5.5 5.5 0 019 8.5C18 16.65 12 21 12 21z" />

            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Health Insurance</h3>
          <p class="text-gray-600 mb-6">
            Protect yourself and your family from medical expenses with comprehensive health coverage.
          </p>
          <a href="health-insurance.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-cyan-500" data-aos="flip-right">
          <div
            class="w-16 h-16 bg-gradient-to-bl from-yellow-500 via-lime-500 to-green-500 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-cyan-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3l8 4v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z" />

            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">Life Insurance</h3>
          <p class="text-gray-600 mb-6">
            Secure your family's financial future with reliable life insurance protection.
          </p>
          <a href="life-insurance.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>
        <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border-[4px] border-orange-600" data-aos="fade-right">
          <div
            class="w-16 h-16 bg-gradient-to-r from-blue-500 via-cyan-500 to-teal-500 rounded-2xl ml-[165px] flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-15 h-15 top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">

              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />

            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-center">General Insurance</h3>
          <p class="text-gray-600 mb-6">
            Comprehensive insurance solutions to protect your assets, travel, and valuables.
          </p>
          <a href="general-insurance.php" class="text-purple-600 font-semibold hover:text-purple-700 transition">
            Learn More →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Loan Process Section -->
  <section
    class="py-24 relative overflow-hidden bg-fixed bg-center bg-cover"
    style="background-image:url('images/parallix_bg.avif');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-indigo-900/80 to-purple-900/80"></div>

    <div class="max-w-7xl mx-auto px-6 text-center relative z-10 text-white">

      <!-- Section Title -->
      <h2 class="text-4xl lg:text-5xl font-bold mb-6"
        data-aos="fade-up" data-aos-duration="1000">
        Our Loan Process
      </h2>

      <p class="text-gray-200 text-lg mb-16"
        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        Simple, Fast, and Transparent. Get your loan in just a few easy steps.
      </p>

      <!-- Process Cards -->
      <div class="grid md:grid-cols-4 gap-8">

        <!-- Step 1 -->
        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-2xl p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300"
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">

          <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-5 rounded-full text-white mb-4 shadow-lg">
            📝
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-2">Apply Online</h3>

          <p class="text-gray-600 text-center">
            Fill out a simple application form with your basic details.
          </p>

        </div>

        <!-- Step 2 -->
        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-2xl p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300"
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">

          <div class="bg-gradient-to-r from-green-500 to-teal-600 p-5 rounded-full text-white mb-4 shadow-lg">
            📄
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-2">Document Verification</h3>

          <p class="text-gray-600 text-center">
            Submit your documents and we verify them quickly and securely.
          </p>

        </div>

        <!-- Step 3 -->
        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-2xl p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300"
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">

          <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-5 rounded-full text-white mb-4 shadow-lg">
            ✅
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-2">Approval</h3>

          <p class="text-gray-600 text-center">
            Get instant approval based on your eligibility and submitted documents.
          </p>

        </div>

        <!-- Step 4 -->
        <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-2xl p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300"
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">

          <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 rounded-full text-white mb-4 shadow-lg">
            💰
          </div>

          <h3 class="text-xl font-bold text-gray-900 mb-2">Receive Funds</h3>

          <p class="text-gray-600 text-center">
            Funds are transferred directly to your account quickly and safely.
          </p>

        </div>

      </div>

    </div>
  </section>


  <!-- Testimonials Section with Slider -->
  <section class="py-20 bg-gradient-to-b from-white via-gray-50 to-gray-100">
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
               "I was impressed by their transparency and quick response. Finworld Solution truly cares about helping customers make the right financial decisions."
              </p>
              <div class="flex items-center justify-center">
                <!-- <img src="https://i.pravatar.cc/100?img=1" alt="Client"
                  class="w-12 h-12 rounded-full mr-4"> -->
                <div class="text-left">
                  <p class="font-semibold">Bharti Jadhav</p>
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
                "Finworld Solution made the loan process incredibly simple and fast. Their team guided us at every step and helped us secure the best option for our needs."
              </p>
              <div class="flex items-center justify-center">
                <!-- <img src="https://i.pravatar.cc/100?img=5" alt="Client"
                  class="w-12 h-12 rounded-full mr-4"> -->
                <div class="text-left">
                  <p class="text-sm text-gray-500">Dinesh Dubey</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900  relative text-white overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
      <img src="images/about_us_img.cms" class="w-full h-full object-cover opacity-40">
      <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900 to-gray-900 opacity-50"></div>
    </div>

    <h3 class="text-center text-3xl font-bold mb-12 relative z-10">
      Our Banking Partners
    </h3>

    <div class="overflow-hidden relative w-full max-w-4xl mx-auto">

      <div class="client-slider-wrapper">

        <div class="client-slider-track flex items-center gap-[80px]">

          <!-- Slide 1 -->
          <div class="flex-shrink-0 w-40">
            <img src="images/axis_logo.jpg"
              class="w-[280px] h-[70px] rounded-lg">
          </div>

          <!-- Slide 2 -->
          <div class="flex-shrink-0 w-40">
            <img src="images/hdfc_logo.png"
              class="w-[280px] h-[70px] rounded-lg">
          </div>

          <!-- Slide 3 -->
          <div class="flex-shrink-0 w-40">
            <img src="images/icic_logo.png"
              class="w-[280px] h-[70px] rounded-lg">
          </div>

          <!-- Slide 4 -->
          <div class="flex-shrink-0 w-40">
            <img src="images/kotak_logo.jpg"
              class="w-[280px] h-[70px] rounded-lg">
          </div>

          <div class="flex-shrink-0 w-40">
            <img src="images/panjab_logo.jpg"
              class="w-[280px] h-[70px] rounded-lg">
          </div>

          <div class="flex-shrink-0 w-40">
            <img src="images/sbi_logo.jpg"
              class="w-[280px] h-[70px] rounded-lg ">
          </div>



        </div>

      </div>

    </div>

  </section>

  <section id="contact"
    class="relative py-14 overflow-hidden bg-cover bg-center opacity-100%"
    style="background-image: url('images/contact_bg.avif');">

    <!-- Dark overlay for readability -->
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative max-w-7xl mx-auto px-6">

      <div class="grid lg:grid-cols-2 gap-12 items-center">

        <!-- Contact Form -->
        <div
          data-aos="fade-right"
          data-aos-duration="1000"
          data-aos-offset="200"
          class="bg-black/70 backdrop-blur-xl border border-white/20 rounded-2xl p-10 shadow-2xl">

          <h2 class="text-3xl text-white font-bold mb-6">Get in Touch</h2>

          <p class="text-gray-300 mb-6">
            Have questions or want to discuss your financial goals? Fill out the form and our experts will reach out to you.
          </p>

          <form class="space-y-4">

            <input type="text" placeholder="Full Name"
              class="w-full px-4 py-3 rounded-lg border border-gray-400/40 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

            <input type="email" placeholder="Email Address"
              class="w-full px-4 py-3 rounded-lg border border-gray-400/40 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">

            <textarea placeholder="Your Message" rows="5"
              class="w-full px-4 py-3 rounded-lg border border-gray-400/40 bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>

            <button
              class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg w-full transition-all duration-300 hover:scale-105">
              Send Message
            </button>

          </form>

        </div>


        <!-- Contact Info -->
        <div
          data-aos="fade-left"
          data-aos-duration="1000"
          data-aos-offset="200"
          class="text-white space-y-6">

          <h3 class="text-3xl font-bold">Contact Information</h3>

          <div class="text-sm sm:text-base">

            <h3 class="text-white text-lg font-semibold mb-4">Contact Us</h3>

            <!-- Address -->
            <div class="flex items-start gap-3 mb-3">
              <span class="text-lg">📍</span>
              <p class="leading-relaxed">
                Akashwani Road, Near LTV School,<br class="hidden sm:block">
                Opp. Dhanorkar House,<br class="hidden sm:block">
                Chandrapur – 442401,<br class="hidden sm:block">
                Maharashtra, India
              </p>
            </div>

            <!-- Phone -->
            <div class="flex items-center gap-3 mb-3">
              <span class="text-lg">📞</span>
              <p>+91 7588086103</p>
            </div>

            <!-- Email -->
            <div class="flex items-center gap-3 mb-3">
              <span class="text-lg">✉</span>
              <p class="break-all">finworldsolution01@gmail.com</p>
            </div>

          </div>



        </div>

      </div>
    </div>

  </section>

  <!-- WhatsApp Floating Button -->
  <!-- Sticky CTA -->
  <!-- Sticky CTA -->
  <div class="fixed bottom-[50px] right-5 sm:right-[100px] z-50">

    <div class="flex flex-col gap-3 items-end">

      <!-- Call Button -->
      <button onclick="playSound()"
        class="flex  items-center justify-center gap-2
    w-12 h-12 sm:w-auto sm:h-auto
    sm:px-5 sm:py-3
    rounded-full
    bg-main text-white font-semibold shadow-xl
    hover:scale-105 transition-all duration-300">

        <span class="text-xl ">📞</span>
        <span class="hidden sm:inline">Call</span>

      </button>

      <!-- WhatsApp Button -->
      <button onclick="playSound()"
        class="flex items-center justify-center gap-2
    w-12 h-12 sm:w-auto sm:h-auto
    sm:px-5 sm:py-3
    rounded-full
    bg-main text-white font-semibold shadow-xl
    hover:scale-105 transition-all duration-300 animate-pulse">

        <span class=" text-xl">💬</span>
        <span class="hidden sm:inline">WhatsApp</span>

      </button>

    </div>

  </div>
  <!-- Sound -->
  <audio id="clickSound" preload="auto">
    <source src="images/mixkit-select-click-1109.wav" type="audio/mpeg">
  </audio>








  <!-- Footer -->

  <?php include_once "footer.php"; ?>
  <!-- JavaScript -->
  <script>
    function playSound() {
      const sound = document.getElementById("clickSound");
      sound.currentTime = 0;
      sound.play();
    }

    // Mobile Menu Toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  </script>

  <script>
    // slider

    let slider = document.getElementById("slider");
    let index = 0;
    let totalSlides = 3;

    function showSlide() {
      slider.style.transform = `translateX(-${index*100}%)`;
    }

    document.getElementById("next").onclick = function() {
      index = (index + 1) % totalSlides;
      showSlide();
    }

    document.getElementById("prev").onclick = function() {
      index = (index - 1 + totalSlides) % totalSlides;
      showSlide();
    }

    setInterval(() => {
      index = (index + 1) % totalSlides;
      showSlide();
    }, 4000);




    // animation about us and loan process
    AOS.init({
      once: false, // allow animation every time you scroll
      offset: 100, // trigger animation when 100px in view
      duration: 100, // animation duration (optional)
      easing: 'ease-in-out', // smooth animation
    });

    // animation for contact form
    AOS.init({
      once: false, // animation runs every time when scrolling
      offset: 150,
      duration: 100,
      easing: "ease-in-out"
    });


    AOS.init({
      duration: 800,
      once: false
    });





    // Testimonials Slider
let testimonialTrack = document.querySelector(".slider-track");
let testimonialIndex = 0;
let testimonialSlides = document.querySelectorAll(".slider-track > div").length;

function moveTestimonial(){
  testimonialTrack.style.transform = `translateX(-${testimonialIndex * 100}%)`;
}

setInterval(() => {
  testimonialIndex++;
  
  if(testimonialIndex >= testimonialSlides){
    testimonialIndex = 0;
  }

  moveTestimonial();

}, 4000);
  </script>
  

</body>

</html>