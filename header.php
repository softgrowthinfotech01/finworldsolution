<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Finworld</title>

    <script src="https://cdn.tailwindcss.com"></script>

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
    </style>

</head>

<body class="bg-gray-100">

<!-- HEADER -->
<header id="header" class="sticky bg-white top-0 z-50 py-4 ">

        <div class=" flex justify-between max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center">

    <!-- Logo + Name -->
    <div class="flex items-center gap-2">
        <img src="images/finworld_logo.png"
             alt="Finworld Logo"
             class="w-10 sm:w-12 md:w-14 lg:w-16 h-auto object-contain">

        <h1 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-gradient">
            Finworld Solution
        </h1>
    </div>

    <!-- Mobile Toggle -->
    <button id="menuBtn" class="ml-[150px]  lg:hidden  text-3xl">
        ☰
    </button>

</div>

          <nav id="menu"
class="hidden lg:flex items-center justify-center
gap-10
font-semibold text-gray-700
absolute lg:static
top-20 left-0
w-full lg:w-auto
bg-white lg:bg-transparent
p-6 lg:p-0
shadow lg:shadow-none">

                <a href="#" class="block hover:text-blue-700">HOME</a>

                <a href="#" class="block hover:text-blue-700">ABOUT US</a>

                <!-- UNSECURED -->
                <div class="relative">

                    <button class="dropdownBtn flex items-center gap-1 hover:text-blue-700">

                        UNSECURED LOAN

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded shadow">

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Personal Loan</a>

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Business Loan</a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-600">Credit Card</a>

                    </div>

                </div>

                <!-- SECURED -->
                <div class="relative">

                    <button class="dropdownBtn flex items-center gap-1 hover:text-blue-700">

                        SECURED LOAN

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded shadow">

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Home Loan</a>

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Car Loan</a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-600">Loan Against Property</a>

                    </div>

                </div>

                <!-- UTILITY -->
                <div class="relative">

                    <button class="dropdownBtn flex items-center gap-1 hover:text-blue-700">

                        UTILITY & TOOLS

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded shadow">

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Terms & Conditions</a>

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">EMI Calculator</a>

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Loan Calculator</a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-600">Privacy Policy</a>

                    </div>

                </div>

                <!-- QUICK LINKS -->
                <div class="relative">

                    <button class="dropdownBtn flex items-center gap-1 hover:text-blue-700">

                        QUICK LINKS

                        <svg class="w-4 h-4 arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <div class="dropdown bg-[#2c3553] text-white lg:absolute w-full lg:w-56 mt-2 rounded shadow">

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Career</a>

                        <a href="#" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">Feedback</a>

                        <a href="#" class="block px-5 py-3 hover:bg-blue-600">Contact Us</a>

                    </div>

                </div>

              

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