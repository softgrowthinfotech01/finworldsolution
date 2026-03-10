<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sticky Navbar</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>

header{
transition:all .3s ease;
}

header.shrink{
padding-top:8px;
padding-bottom:8px;
box-shadow:0 4px 20px rgba(0,0,0,0.15);
}

.logo{
transition:all .3s ease;
}

header.shrink .logo{
width:45px;
}

.dropdown{
opacity:0;
transform:translateY(10px);
pointer-events:none;
transition:all .25s ease;
}

.dropdown.show{
opacity:1;
transform:translateY(0);
pointer-events:auto;
}

</style>

</head>

<body class="bg-gray-100">

<!-- HEADER -->
<header id="header" class="bg-white sticky top-0 z-50 py-4">

<div class="max-w-7xl mx-auto flex items-center justify-between px-4">

<!-- Logo -->
<img src="logo.png" class="logo w-16">

<!-- Mobile Button -->
<button id="menuBtn" class="lg:hidden text-3xl">
☰
</button>

<!-- Navigation -->
<nav id="menu"
class="hidden lg:flex flex-col lg:flex-row lg:items-center
space-y-4 lg:space-y-0 lg:space-x-8
font-semibold text-gray-700
absolute lg:static top-20 left-0
w-full lg:w-auto bg-white lg:bg-transparent
p-6 lg:p-0 shadow lg:shadow-none">

<a href="finworld.php" class="hover:text-blue-700">HOME</a>

<a href="about.php" class="hover:text-blue-700">ABOUT US</a>

<!-- Services -->
<div class="relative">

<button id="serviceBtn"
class="flex items-center gap-1 hover:text-blue-700">

SERVICES

<svg xmlns="http://www.w3.org/2000/svg"
class="w-4 h-4 transition-transform"
id="arrow"
fill="none"
stroke="currentColor"
viewBox="0 0 24 24">

<path stroke-linecap="round"
stroke-linejoin="round"
stroke-width="2"
d="M19 9l-7 7-7-7"/>

</svg>

</button>

<div id="serviceMenu"
class="dropdown absolute
bg-[#2c3553] text-white
w-56 mt-2 rounded shadow-lg">

<a href="personal-loan.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">PERSONAL LOAN</a>
<a href="business-loan.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">BUSINESS LOAN</a>
<a href="home-loan.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">HOME LOAN</a>
<a href="car-loan.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">CAR LOAN</a>
<a href="commercial-vehicle-loan.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">COMMERCIAL VEHICAL LOAN</a>
<a href="credit-card.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">CREDIT CARD</a>
<a href="health-insurance.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">HEALTH INSURANCE</a>
<a href="life-insurance.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">LIFE INSURANCE</a>
<a href="general-insurance.php" class="block px-5 py-3 border-b border-gray-600 hover:bg-blue-600">GENERAL INSURANCE</a>

</div>

</div>

<a href="faq.php" class="hover:text-blue-700">FAQ'S</a>

<a href="contact.php" class="hover:text-blue-700">CONTACT US</a>

</nav>

</div>

</header>





<script>

const menuBtn = document.getElementById("menuBtn")
const menu = document.getElementById("menu")

const serviceBtn = document.getElementById("serviceBtn")
const serviceMenu = document.getElementById("serviceMenu")
const arrow = document.getElementById("arrow")

const header = document.getElementById("header")

// MOBILE MENU
menuBtn.addEventListener("click", function(e){
    e.stopPropagation()
    menu.classList.toggle("hidden")
})

// SERVICES DROPDOWN
serviceBtn.addEventListener("click", function(e){
    e.stopPropagation()
    serviceMenu.classList.toggle("show")
    arrow.classList.toggle("rotate-180")
})

// PREVENT CLOSING WHEN CLICKING INSIDE MENU
menu.addEventListener("click", function(e){
    e.stopPropagation()
})

serviceMenu.addEventListener("click", function(e){
    e.stopPropagation()
})

// CLOSE WHEN CLICKING OUTSIDE
document.addEventListener("click", function(){
    serviceMenu.classList.remove("show")
    menu.classList.add("hidden")
    arrow.classList.remove("rotate-180")
})

// SCROLL SHRINK EFFECT
window.addEventListener("scroll", function(){
    if(window.scrollY > 50){
        header.classList.add("shrink")
    } else {
        header.classList.remove("shrink")
    }
})

</script>

</body>
</html>