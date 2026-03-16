<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Finworld</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>


header {
  transition: .3s
}

.text-gradient {
  background: linear-gradient(135deg, #667eea, #764ba2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent
}

.dropdown {
  display: none;
}

.dropdown.show {
  display: block;
}

header.shrink {
  padding: 8px 0;
  box-shadow: 0 4px 20px rgba(0, 0, 0, .15);
}

.source-serif {
  font-family: "Source Serif 4", serif;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
}

.space-grotesk {
  font-family: "Space Grotesk", sans-serif;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
}

    </style>

</head>

<body class="bg-gray-100">
    <div class="axis-top-bar w-full"></div>


    <!-- HEADER -->
    <header id="header" class="sticky  bg-white top-0 z-50 py-4 ">
        <div class="axis-shape"></div>
        <div class=" flex justify-between max-w-7xl mx-auto px-4 z-10">

            <div class="flex justify-between items-center">

                <!-- Logo + Name -->
                <a href="finworld">
                    <div class="flex items-center mb-1 gap-2">
                        <img src="images/finworld_logo.png"
                            alt="Finworld Logo"
                            class="w-10  sm:w-12 md:w-14 lg:w-16 h-auto object-contain ">
                        <h1 class="source-serif font-bold text-3xl bg-gradient-to-r from-purple-900 via-blue-600 to-purple-500 bg-clip-text text-transparent ">
                            Finworld Solution
                        </h1>
                    </div>
                </a>

                <!-- Mobile Toggle -->
                <button id="menuBtn" class="ml-[150px]  lg:hidden  text-3xl">
                    ☰
                </button>

            </div>

            <nav id="menu"
                class="hidden lg:flex items-center justify-center
gap-5
font-semibold text-gray-700
absolute lg:static
top-20 left-0
w-full lg:w-auto
bg-white lg:bg-transparent
p-6 lg:p-0
shadow lg:shadow-none">


                <a href="about" class="block space-grotesk  hover:text-blue-700">ABOUT US</a>

                <!-- UNSECURED -->
                <div class="relative">

                    <button class="dropdownBtn space-grotesk flex items-center gap-1 hover:text-blue-700">

                        UNSECURED LOAN

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded-xl shadow">

                        <a href="personal-loan" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Personal Loan</a>

                        <a href="business-loan" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Business Loan</a>

                        <a href="credit-card" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Credit Card</a>

                        <a href="commercial-vehicle-loan" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Commercial vehical loan</a>

                        <a href="health-insurance" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Health insurance </a>



                    </div>

                </div>

                <!-- SECURED -->
                <div class="relative">

                    <button class="dropdownBtn space-grotesk flex items-center gap-1 hover:text-blue-700">

                        SECURED LOAN

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded-xl shadow">

                        <a href="home-loan" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Home Loan</a>

                        <a href="car-loan" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Car Loan</a>

                        <a href="loan-against-property" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Loan Against Property</a>

                        <a href="life-insurance" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Life insurance </a>

                        <a href="general-insurance" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">General insurance</a>

                    </div>

                </div>

                <!-- UTILITY -->
                <div class="relative">

                    <button class="dropdownBtn space-grotesk flex items-center gap-1 hover:text-blue-700">

                        UTILITY & TOOLS

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded-xl shadow">

                        <a href="terms-and-condition" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Terms & Conditions</a>

                        <a href="emi_calculator" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">EMI Calculator</a>

                        <a href="loan_calculator" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Loan Calculator</a>

                        <a href="privacy-policy" class="block px-5 py-3 hover:bg-blue-600">Privacy Policy</a>

                    </div>

                </div>

                <!-- QUICK LINKS -->
                <div class="relative">

                    <button class="dropdownBtn space-grotesk flex items-center gap-1 hover:text-blue-700">

                        QUICK LINKS

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded-xl shadow">

                        <a href="career" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Career</a>

                        <a href="feedback" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Feedback</a>

                        <a href="contact" class="block px-5 py-3 hover:bg-blue-600">Contact Us</a>

                    </div>

                </div>

                <a href="gallery" class="block space-grotesk hover:text-blue-700">Gallery</a>




            </nav>

        </div>

    </header>

    <script>
        const menuBtn = document.getElementById("menuBtn")
        const menu = document.getElementById("menu")

        menuBtn.onclick = () => {
            menu.classList.toggle("hidden")
        }

        const dropdownBtns = document.querySelectorAll(".dropdownBtn")

        dropdownBtns.forEach(btn => {

            btn.addEventListener("click", function(e) {

                e.stopPropagation()

                const dropdown = this.nextElementSibling
                const arrow = this.querySelector(".arrow")

                document.querySelectorAll(".dropdown").forEach(d => {
                    if (d !== dropdown) d.classList.remove("show")
                })

                document.querySelectorAll(".arrow").forEach(a => {
                    if (a !== arrow) a.classList.remove("rotate-180")
                })

                dropdown.classList.toggle("show")
                arrow.classList.toggle("rotate-180")

            })

        })

        document.addEventListener("click", () => {

            document.querySelectorAll(".dropdown").forEach(d => {
                d.classList.remove("show")
            })

            document.querySelectorAll(".arrow").forEach(a => {
                a.classList.remove("rotate-180")
            })

        })

        window.addEventListener("scroll", () => {

            if (window.scrollY > 50) {
                document.getElementById("header").classList.add("shrink")
            } else {
                document.getElementById("header").classList.remove("shrink")
            }

        })
    </script>

</body>

</html>