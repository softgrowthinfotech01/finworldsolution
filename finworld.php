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
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navigation -->
   
         <?php  include_once "header.php"; ?>


    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Animation -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-900/90 to-indigo-900/90 z-10"></div>
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920" alt="Hero Background"
                class="w-full h-full object-cover animate-zoomIn">
        </div>

        <!-- Hero Content -->
        <div class="relative z-20 container mx-auto px-4 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 animate-fadeInDown">
                Welcome to <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-pink-400">ALORNIX</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 mb-4 animate-fadeInUp" style="animation-delay: 0.2s">
                Transforming Ideas into Digital Reality
            </p>

            <p class="text-md md:text-lg text-gray-300 mb-8 max-w-2xl mx-auto animate-fadeInUp"
                style="animation-delay: 0.4s">
                We craft exceptional digital experiences that drive growth and innovation for modern businesses
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fadeInUp" style="animation-delay: 0.6s">
                <button
                    class="px-8 py-4 bg-gradient-to-r from-yellow-400 to-pink-400 text-gray-900 font-semibold rounded-full hover:shadow-2xl transform hover:scale-105 transition">
                    Start Your Project
                </button>
                <button
                    class="px-8 py-4 bg-white/10 backdrop-blur text-white font-semibold rounded-full border border-white/30 hover:bg-white/20 transition">
                    View Our Work
                </button>
            </div>
        </div>

        <!-- Animated Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-float">
            <svg class="w-6 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
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
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Web Development</h3>
                    <p class="text-gray-600 mb-6">
                        Custom websites and web applications built with cutting-edge technologies for optimal
                        performance
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>

                <!-- Service Card 2 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Mobile Apps</h3>
                    <p class="text-gray-600 mb-6">
                        Native and cross-platform mobile applications that deliver exceptional user experiences
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>

                <!-- Service Card 3 -->
                <div class="card-hover bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">UI/UX Design</h3>
                    <p class="text-gray-600 mb-6">
                        Beautiful, intuitive designs that captivate users and drive engagement across all platforms
                    </p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 hero-gradient">
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
    </section>

    <!-- Portfolio Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4 gradient-text">Recent Projects</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Showcasing our latest work and creative solutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio Item 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500" alt="Project 1"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl font-bold mb-2">E-Commerce Platform</h3>
                            <p class="text-sm">Modern online shopping experience</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500" alt="Project 2"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Analytics Dashboard</h3>
                            <p class="text-sm">Real-time data visualization</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg card-hover">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=500" alt="Project 3"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Corporate Website</h3>
                            <p class="text-sm">Professional business presence</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/portfolio.html"
                    class="inline-block px-8 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-semibold rounded-full hover:shadow-lg transition">
                    View All Projects
                </a>
            </div>
        </div>
    </section>

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
</body>

</html>