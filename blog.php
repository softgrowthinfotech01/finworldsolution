<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ALORNIX Blog - Latest insights, tutorials, and industry news">
    <meta name="keywords" content="blog, articles, tutorials, technology, ALORNIX">
    <meta property="og:title" content="ALORNIX Blog - Insights & Updates">
    <meta property="og:description" content="Stay updated with the latest technology trends and insights">
    <title>Blog - ALORNIX</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
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

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out;
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .blog-card {
            transition: all 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .category-badge {
            transition: all 0.3s ease;
        }

        .category-badge:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold gradient-text">ALORNIX</span>
                </div>

                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index.html" class="text-gray-600 hover:text-purple-600 transition">Home</a>
                    <a href="about.html" class="text-gray-600 hover:text-purple-600 transition">About</a>
                    <a href="services.html" class="text-gray-600 hover:text-purple-600 transition">Services</a>
                    <a href="portfolio.html" class="text-gray-600 hover:text-purple-600 transition">Portfolio</a>
                    <a href="blog.html" class="text-purple-600 font-medium">Blog</a>
                    <a href="pricing.html" class="text-gray-600 hover:text-purple-600 transition">Pricing</a>
                    <a href="contact.html" class="text-gray-600 hover:text-purple-600 transition">Contact</a>
                </div>

                <button
                    class="px-6 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-lg hover:shadow-lg transition">
                    Subscribe
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-purple-50 to-indigo-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center animate-fadeInUp">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6">
                    Our <span class="gradient-text">Blog</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Insights, tutorials, and the latest updates from the world of technology and digital innovation.
                </p>

                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search articles..."
                            class="w-full px-6 py-4 pr-12 rounded-full border-2 border-gray-200 focus:border-purple-600 focus:outline-none">
                        <button
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 p-2 bg-purple-600 text-white rounded-full hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="category-badge px-6 py-2 bg-purple-600 text-white rounded-full hover:bg-purple-700">
                    All Posts
                </button>
                <button
                    class="category-badge px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600">
                    Technology
                </button>
                <button
                    class="category-badge px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600">
                    Design
                </button>
                <button
                    class="category-badge px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600">
                    Development
                </button>
                <button
                    class="category-badge px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600">
                    Marketing
                </button>
                <button
                    class="category-badge px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600">
                    Business
                </button>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content - Blog Posts -->
                <div class="lg:col-span-2">
                    <!-- Featured Post -->
                    <article class="blog-card bg-white rounded-xl overflow-hidden shadow-lg mb-8 animate-fadeInUp">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1200"
                                alt="Featured Post" class="w-full h-64 object-cover">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-purple-600 text-white rounded-full text-sm font-medium">
                                Featured
                            </span>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                                <span>Technology</span>
                                <span>•</span>
                                <span>Jan 15, 2024</span>
                                <span>•</span>
                                <span>5 min read</span>
                            </div>
                            <h2 class="text-3xl font-bold mb-4 hover:text-purple-600 transition cursor-pointer">
                                The Future of AI in Web Development: Trends to Watch in 2024
                            </h2>
                            <p class="text-gray-600 mb-6 line-clamp-3">
                                Artificial Intelligence is revolutionizing how we build and interact with websites. From
                                automated coding to personalized user experiences, discover the cutting-edge AI
                                technologies that are shaping the future of web development.
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100"
                                        alt="Author" class="w-10 h-10 rounded-full">
                                    <div>
                                        <p class="font-medium">John Doe</p>
                                        <p class="text-sm text-gray-500">Senior Developer</p>
                                    </div>
                                </div>
                                <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition">
                                    Read More →
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Regular Posts -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Post 1 -->
                        <article class="blog-card bg-white rounded-xl overflow-hidden shadow-lg animate-slideInLeft">
                            <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?w=600"
                                alt="Blog Post" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                    <span class="text-purple-600">Design</span>
                                    <span>•</span>
                                    <span>Jan 12, 2024</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 hover:text-purple-600 transition cursor-pointer">
                                    10 UX Design Principles Every Developer Should Know
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    Creating user-friendly interfaces requires understanding fundamental UX principles.
                                    Learn the essential guidelines that bridge design and development.
                                </p>
                                <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition">
                                    Read More →
                                </a>
                            </div>
                        </article>

                        <!-- Post 2 -->
                        <article class="blog-card bg-white rounded-xl overflow-hidden shadow-lg animate-slideInLeft"
                            style="animation-delay: 0.1s">
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600"
                                alt="Blog Post" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                    <span class="text-purple-600">Development</span>
                                    <span>•</span>
                                    <span>Jan 10, 2024</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 hover:text-purple-600 transition cursor-pointer">
                                    Building Scalable APIs with Node.js and Express
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    Learn best practices for creating robust, scalable REST APIs using Node.js and
                                    Express framework with real-world examples.
                                </p>
                                <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition">
                                    Read More →
                                </a>
                            </div>
                        </article>

                        <!-- Post 3 -->
                        <article class="blog-card bg-white rounded-xl overflow-hidden shadow-lg animate-slideInLeft"
                            style="animation-delay: 0.2s">
                            <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?w=600" alt="Blog Post"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                    <span class="text-purple-600">Marketing</span>
                                    <span>•</span>
                                    <span>Jan 8, 2024</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 hover:text-purple-600 transition cursor-pointer">
                                    SEO Strategies That Actually Work in 2024
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    Discover proven SEO techniques that will help your website rank higher in search
                                    results and drive organic traffic.
                                </p>
                                <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition">
                                    Read More →
                                </a>
                            </div>
                        </article>

                        <!-- Post 4 -->
                        <article class="blog-card bg-white rounded-xl overflow-hidden shadow-lg animate-slideInLeft"
                            style="animation-delay: 0.3s">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600" alt="Blog Post"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                    <span class="text-purple-600">Business</span>
                                    <span>•</span>
                                    <span>Jan 5, 2024</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 hover:text-purple-600 transition cursor-pointer">
                                    Digital Transformation: A Guide for Small Businesses
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">
                                    Navigate the digital transformation journey with practical steps and strategies
                                    tailored for small business success.
                                </p>
                                <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition">
                                    Read More →
                                </a>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center items-center gap-2 mt-12">
                        <button class="px-4 py-2 rounded-lg hover:bg-gray-100 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button class="px-4 py-2 bg-purple-600 text-white rounded-lg">1</button>
                        <button class="px-4 py-2 rounded-lg hover:bg-gray-100 transition">2</button>
                        <button class="px-4 py-2 rounded-lg hover:bg-gray-100 transition">3</button>
                        <button class="px-4 py-2 rounded-lg hover:bg-gray-100 transition">...</button>
                        <button class="px-4 py-2 rounded-lg hover:bg-gray-100 transition">12</button>
                        <button class="px-4 py-2 rounded-lg hover:bg-gray-100 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <!-- About -->
                    <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
                        <h3 class="text-xl font-bold mb-4">About Our Blog</h3>
                        <p class="text-gray-600 mb-4">
                            Stay updated with the latest trends in technology, design, and digital innovation. Our
                            expert team shares insights and tutorials to help you grow.
                        </p>
                        <button
                            class="w-full px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                            Subscribe to Newsletter
                        </button>
                    </div>

                    <!-- Popular Posts -->
                    <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
                        <h3 class="text-xl font-bold mb-4">Popular Posts</h3>
                        <div class="space-y-4">
                            <a href="#" class="block group">
                                <p class="text-sm text-gray-500 mb-1">Jan 15, 2024</p>
                                <h4 class="font-medium group-hover:text-purple-600 transition">
                                    The Future of AI in Web Development
                                </h4>
                            </a>
                            <a href="#" class="block group">
                                <p class="text-sm text-gray-500 mb-1">Jan 12, 2024</p>
                                <h4 class="font-medium group-hover:text-purple-600 transition">
                                    10 UX Design Principles
                                </h4>
                            </a>
                            <a href="#" class="block group">
                                <p class="text-sm text-gray-500 mb-1">Jan 10, 2024</p>
                                <h4 class="font-medium group-hover:text-purple-600 transition">
                                    Building Scalable APIs
                                </h4>
                            </a>
                            <a href="#" class="block group">
                                <p class="text-sm text-gray-500 mb-1">Jan 8, 2024</p>
                                <h4 class="font-medium group-hover:text-purple-600 transition">
                                    SEO Strategies That Work
                                </h4>
                            </a>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
                        <h3 class="text-xl font-bold mb-4">Popular Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                JavaScript
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                React
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                Node.js
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                UI/UX
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                SEO
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                CSS
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                Python
                            </a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full hover:bg-purple-100 hover:text-purple-600 transition">
                                AI/ML
                            </a>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <a href="#"
                                class="flex items-center justify-center p-3 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center p-3 bg-blue-100 text-blue-400 rounded-lg hover:bg-blue-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center p-3 bg-pink-100 text-pink-600 rounded-lg hover:bg-pink-600 hover:text-white transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Don't Miss Any Updates</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter and get the latest articles, tutorials, and insights delivered to your
                inbox.
            </p>
            <form class="max-w-md mx-auto flex gap-4">
                <input type="email" placeholder="Enter your email"
                    class="flex-1 px-6 py-3 rounded-lg focus:outline-none">
                <button class="px-8 py-3 bg-white text-purple-600 rounded-lg hover:shadow-lg transition font-semibold">
                    Subscribe
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">ALORNIX</h3>
                    <p class="text-gray-400">
                        Transforming ideas into digital reality.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Services</a></li>
                        <li><a href="#" class="hover:text-white transition">Portfolio</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition">Mobile Apps</a></li>
                        <li><a href="#" class="hover:text-white transition">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition">Digital Marketing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect</h4>
                    <p class="text-gray-400 mb-4">Follow us on social media</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ALORNIX. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Category filter
        document.querySelectorAll('.category-badge').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.category-badge').forEach(b => {
                    b.classList.remove('bg-purple-600', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('bg-purple-600', 'text-white');
            });
        });
    </script>
</body>

</html>