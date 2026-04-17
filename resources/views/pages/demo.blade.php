<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Demo - Glovin Limited</title>
    <link rel="icon" type="image/png" href="{{ asset('transparentslogo/tranp-green.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-white text-gray-900 antialiased" x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 50)">
    
    @include('landing.partials.header')
    
    <!-- Page Header -->
    <section class="pt-32 pb-16 bg-gradient-to-br from-green-900 via-green-800 to-green-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Request a Demo</h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">Experience our solutions firsthand</p>
                <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-400">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-white">Request Demo</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Demo Form Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-green-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left - Benefits -->
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Why Request a Demo?</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-eye text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">See It In Action</h3>
                                <p class="text-gray-600">Experience our solutions firsthand and see how they can transform your business operations.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-comments text-yellow-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Ask Questions</h3>
                                <p class="text-gray-600">Get answers to your specific questions from our product experts.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-lightbulb text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-1">Custom Solutions</h3>
                                <p class="text-gray-600">Learn how we can tailor our solutions to meet your specific business needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right - Form -->
                <div data-aos="fade-left">
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Schedule Your Demo</h3>
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                    <input type="text" name="first_name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="John" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                    <input type="text" name="last_name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="Doe" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Work Email</label>
                                <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="john@company.com" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                <input type="text" name="company" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="Your Company" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="+255 ...">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Solution Interest</label>
                                <select name="solution" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" required>
                                    <option value="">Select a solution</option>
                                    <option value="healthcare">Healthcare Solutions</option>
                                    <option value="banking">Banking & Finance</option>
                                    <option value="ccip">CCIP Platform</option>
                                    <option value="cybersecurity">Cybersecurity</option>
                                    <option value="infrastructure">ICT Infrastructure</option>
                                    <option value="enterprise">Enterprise Digital</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Date</label>
                                <input type="date" name="preferred_date" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Message</label>
                                <textarea name="message" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all resize-none" placeholder="Tell us about your requirements..."></textarea>
                            </div>
                            <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all shadow-lg flex items-center justify-center gap-2">
                                <i class="fas fa-calendar-check"></i>
                                Request Demo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('landing.partials.footer')
    
    <script>
        AOS.init({ duration: 800, easing: 'ease-out-cubic', once: true, offset: 100 });
    </script>
</body>
</html>
