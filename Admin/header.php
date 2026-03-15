<header class="bg-white/90 backdrop-blur border-b shadow-sm  z-50" >
<div class="flex items-center justify-between px-6 h-20 relative">

<!-- LEFT -->
<div class="flex items-center gap-3">

<button onclick="sidebarToggle()" class="p-2 rounded bg-gray-200 hover:bg-gray-300">

<svg xmlns="http://www.w3.org/2000/svg"
class="h-6 w-6 text-gray-600"
fill="none"
viewBox="0 0 24 24"
stroke="currentColor">

<path stroke-linecap="round"
stroke-linejoin="round"
stroke-width="2"
d="M4 6h16M4 12h16M4 18h16"/>

</svg>

</button>

</div>


<!-- CENTER COMPANY NAME -->
<div class="absolute left-1/2 transform -translate-x-1/2 flex items-center gap-3">

<img src="Images/logo.png"
class="w-10 h-10 object-contain">

<h1 class="text-2xl font-extrabold bg-gradient-to-r from-purple-700 via-blue-600 to-purple-500 bg-clip-text text-transparent tracking-wide">
Finworld Solution
</h1>

</div>


<!-- RIGHT -->
<div class="flex items-center gap-4">

<div class="relative profile-area">

<button onclick="profileToggle(event)"
class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-gray-200 hover:bg-gray-300 transition">

<img src="Images/user.png"
class="w-8 h-8 rounded-full border border-gray-300">

<span class="hidden md:block font-medium text-gray-700">
Admin
</span>

</button>


<!-- DROPDOWN -->
<div id="ProfileDropDown"
class="hidden absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-lg border overflow-hidden z-9">

<!-- user info -->
<div class="flex items-center gap-3 px-4 py-3 border-b bg-gray-50">

<img src="Images/user.png"
class="w-9 h-9 rounded-full">

<div class="text-sm">
<p class="font-semibold text-gray-700">Admin</p>

</div>

</div>

<!-- logout -->
<a href="logout.php"
class="flex items-center gap-2 px-4 py-3 text-red-500 hover:bg-red-50 cursor-pointer">

<span class="text-lg">⎋</span>

<span class="font-medium">Logout</span>

</a>

</div>

</div>

</div>

</div>
</header>