<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ALORNIX Pricing - Flexible plans for businesses of all sizes">
    <meta name="keywords" content="pricing, plans, packages, subscription, ALORNIX">
    <meta property="og:title" content="ALORNIX Pricing - Choose Your Plan">
    <meta property="og:description" content="Transparent pricing with flexible plans to suit your business needs">
    <title>Pricing - ALORNIX</title>

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

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-scaleIn {
            animation: scaleIn 0.6s ease-out;
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

        .pricing-card {
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .popular-badge {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .toggle-switch {
            transition: all 0.3s ease;
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
                    <a href="blog.html" class="text-gray-600 hover:text-purple-600 transition">Blog</a>
                    <a href="pricing.html" class="text-purple-600 font-medium">Pricing</a>
                    <a href="contact.html" class="text-gray-600 hover:text-purple-600 transition">Contact</a>
                </div>

                <button class="px-6 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-lg hover:shadow-lg transition">
                    Get Started
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-purple-50 to-indigo-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center animate-fadeInUp">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6">
                    Simple, Transparent <span class="gradient-text">Pricing</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Choose the perfect plan for your business. No hidden fees, no surprises.
                </p>

                <!-- Billing Toggle -->
                <div class="inline-flex items-center bg-white rounded-full p-1 shadow-lg">
                    <button id="monthly-btn" class="px-6 py-2 bg-purple-600 text-white rounded-full font-medium transition">
                        Monthly
                    </button>
                    <button id="annual-btn" class="px-6 py-2 text-gray-600 rounded-full font-medium transition">
                        Annual
                        <span class="ml-2 px-2 py-1 bg-green-100 text-green-600 rounded-full text-xs">Save 20%</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Starter Plan -->
                <div class="pricing-card bg-white rounded-2xl shadow-xl p-8 animate-scaleIn">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2">Starter</h3>
                        <p class="text-gray-600">Perfect for small projects</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-baseline">
                            <span class="text-5xl font-bold">$29</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Billed monthly</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Up to 5 projects</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Basic support</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>10GB storage</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>SSL certificate</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <svg class="w-5 h-5 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Custom domain</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <svg class="w-5 h-5 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Advanced analytics</span>
                        </li>
                    </ul>

                    <button class="w-full px-6 py-3 border-2 border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition font-semibold">
                        Start Free Trial
                    </button>
                </div>

                <!-- Professional Plan (Most Popular) -->
                <div class="pricing-card bg-white rounded-2xl shadow-xl p-8 relative transform scale-105 animate-scaleIn" style="animation-delay: 0.1s">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="popular-badge text-white px-4 py-1 rounded-full text-sm font-semibold">
                            MOST POPULAR
                        </span>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2">Professional</h3>
                        <p class="text-gray-600">For growing businesses</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-baseline">
                            <span class="text-5xl font-bold">$79</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Billed monthly</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Unlimited projects</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Priority support</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>100GB storage</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>SSL certificate</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>5 custom domains</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Advanced analytics</span>
                        </li>
                    </ul>

                    <button class="w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-lg hover:shadow-lg transition font-semibold">
                        Get Started
                    </button>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card bg-white rounded-2xl shadow-xl p-8 animate-scaleIn" style="animation-delay: 0.2s">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                        <p class="text-gray-600">For large organizations</p>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-baseline">
                            <span class="text-5xl font-bold">$199</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Billed monthly</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Unlimited everything</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Dedicated support</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Unlimited storage</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>SSL certificate</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Unlimited domains</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Custom integrations</span>
                        </li>
                    </ul>

                    <button class="w-full px-6 py-3 border-2 border-purple-600 text-purple-600 rounded-lg hover:bg-purple-50 transition font-semibold">
                        Contact Sales
                    </button>
                </div>
            </div>

            <!-- Custom Plan -->
            <div class="max-w-4xl mx-auto mt-16 text-center">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl p-12 text-white">
                    <h2 class="text-3xl font-bold mb-4">Need a Custom Plan?</h2>
                    <p class="text-xl mb-8 text-purple-100">
                        We can create a tailored solution that perfectly fits your unique requirements.
                    </p>
                    <button class="px-8 py-3 bg-white text-purple-600 rounded-lg hover:shadow-lg transition font-semibold">
                        Talk to Our Team
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Comparison -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Compare Plans</h2>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-gray-200">
                                <th class="text-left py-4">Features</th>
                                <th class="text-center py-4">Starter</th>
                                <th class="text-center py-4">Professional</th>
                                <th class="text-center py-4">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">Projects</td>
                                <td class="text-center py-4">5</td>
                                <td class="text-center py-4">Unlimited</td>
                                <td class="text-center py-4">Unlimited</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">Storage</td>
                                <td class="text-center py-4">10GB</td>
                                <td class="text-center py-4">100GB</td>
                                <td class="text-center py-4">Unlimited</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">Custom Domains</td>
                                <td class="text-center py-4">-</td>
                                <td class="text-center py-4">5</td>
                                <td class="text-center py-4">Unlimited</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">Support</td>
                                <td class="text-center py-4">Email</td>
                                <td class="text-center py-4">Priority</td>
                                <td class="text-center py-4">Dedicated</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">Analytics</td>
                                <td class="text-center py-4">Basic</td>
                                <td class="text-center py-4">Advanced</td>
                                <td class="text-center py-4">Custom</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">API Access</td>
                                <td class="text-center py-4">
                                    <svg class="w-5 h-5 text-gray-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </td>
                                <td class="text-center py-4">
                                    <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                                <td class="text-center py-4">
                                    <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-4 font-medium">Team Members</td>
                                <td class="text-center py-4">1</td>
                                <td class="text-center py-4">10</td>
                                <td class="text-center py-4">Unlimited</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>

                <div class="space-y-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <button class="w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Can I change my plan later?</h3>
                            <svg class="w-5 h-5 text-gray-400 transform rotate-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <p class="mt-4 text-gray-600">
                            Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <button class="w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Do you offer refunds?</h3>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <p class="mt-4 text-gray-600 hidden">
                            We offer a 30-day money-back guarantee. If you're not satisfied, contact our support team for a full refund.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <button class="w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-semibold">What payment methods do you accept?</h3>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <p class="mt-4 text-gray-600 hidden">
                            We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank transfers for enterprise plans.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <button class="w-full text-left flex justify-between items-center">
                            <h3 class="text-lg font-semibold">Is there a free trial?</h3>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <p class="mt-4 text-gray-600 hidden">
                            Yes, we offer a 14-day free trial for all plans. No credit card required to start your trial.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-600">
        <div class="container mx-auto px-4 text-center">
            <div class="animate-float">
                <svg class="w-20 h-20 text-white/20 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Get Started?</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">
                Join thousands of businesses that trust ALORNIX for their digital needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-8 py-3 bg-white text-purple-600 rounded-lg hover:shadow-lg transition font-semibold">
                    Start Free Trial
                </button>
                <button class="px-8 py-3 border-2 border-white text-white rounded-lg hover:bg-white hover:text-purple-600 transition font-semibold">
                    Schedule Demo
                </button>
            </div>
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
                    <h4 class="font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe for updates</p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Your email" class="w-full px-4 py-2 bg-gray-800 rounded focus:outline-none focus:bg-gray-700">
                        <button class="w-full px-4 py-2 bg-purple-600 rounded hover:bg-purple-700 transition">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ALORNIX. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Billing toggle
        const monthlyBtn = document.getElementById('monthly-btn');
        const annualBtn = document.getElementById('annual-btn');

        monthlyBtn.addEventListener('click', function() {
            monthlyBtn.classList.add('bg-purple-600', 'text-white');
            monthlyBtn.classList.remove('text-gray-600');
            annualBtn.classList.remove('bg-purple-600', 'text-white');
            annualBtn.classList.add('text-gray-600');
        });

        annualBtn.addEventListener('click', function() {
            annualBtn.classList.add('bg-purple-600', 'text-white');
            annualBtn.classList.remove('text-gray-600');
            monthlyBtn.classList.remove('bg-purple-600', 'text-white');
            monthlyBtn.classList.add('text-gray-600');
        });

        // FAQ Accordion
        document.querySelectorAll('.bg-white button').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const arrow = this.querySelector('svg');

                if (content && content.tagName === 'P') {
                    content.classList.toggle('hidden');
                    arrow.classList.toggle('rotate-180');
                }
            });
        });
    </script>
</body>

</html>