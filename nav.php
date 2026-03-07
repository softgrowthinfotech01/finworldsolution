 <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex justify-between items-center h-16 lg:h-20">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl lg:text-3xl font-bold gradient-text">ALORNIX</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index.html" class="text-gray-700 hover:text-purple-600 transition">Home</a>
                    <a href="about.html" class="text-gray-700 hover:text-purple-600 transition">About</a>
                    <a href="services.html" class="text-gray-700 hover:text-purple-600 transition">Services</a>
                    <a href="portfolio.html" class="text-gray-700 hover:text-purple-600 transition">Portfolio</a>
                    <a href="blog.html" class="text-gray-700 hover:text-purple-600 transition">Blog</a>
                    <a href="contact.html" class="text-gray-700 hover:text-purple-600 transition">Contact</a>
                    <a href="login.html" class="text-gray-700 hover:text-purple-600 transition font-medium">Log In</a>
                    <button
                        class="px-6 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-full hover:shadow-lg transition">
                        Get Started
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="px-4 py-2 space-y-1">
                <a href="index.html" class="block px-3 py-2 text-gray-700">Home</a>
                <a href="about.html" class="block px-3 py-2 text-gray-700">About</a>
                <a href="services.html" class="block px-3 py-2 text-gray-700">Services</a>
                <a href="portfolio.html" class="block px-3 py-2 text-gray-700">Portfolio</a>
                <a href="blog.html" class="block px-3 py-2 text-gray-700">Blog</a>
                <a href="contact.html" class="block px-3 py-2 text-gray-700">Contact</a>
                <button
                    class="w-full mt-2 px-6 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-full">
                    Get Started
                </button>
            </div>
        </div>
    </nav>