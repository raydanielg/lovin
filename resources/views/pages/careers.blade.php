<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Careers - Glovin Limited</title>
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
    <section class="pt-32 pb-16 bg-gradient-to-br from-green-900 via-green-800 to-green-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        <div class="absolute top-20 right-10 w-72 h-72 bg-yellow-400/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-green-400/20 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6" data-aos="zoom-in">
                    <i class="fas fa-briefcase text-yellow-400"></i>
                    <span class="text-yellow-300 text-sm font-medium">Join Our Team</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-4" data-aos="fade-up" data-aos-delay="100">Careers at Glovin</h1>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">Shape the future of technology in Africa with us</p>
                <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-400" data-aos="fade-up" data-aos-delay="300">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-white">Careers</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Join Us -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-green-50 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-white to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-200 mb-6">
                    <i class="fas fa-star text-green-600"></i>
                    <span class="text-green-700 text-sm font-medium">Why Glovin</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Why Work With Us?</h2>
                <p class="text-gray-600">We offer more than just a job - we provide a platform for growth and impact</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-rocket text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                    <p class="text-gray-600 text-sm">Work on cutting-edge projects that shape the future of technology in Africa.</p>
                </div>
                
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-yellow-500 to-yellow-600 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Growth</h3>
                    <p class="text-gray-600 text-sm">Continuous learning opportunities and clear career progression paths.</p>
                </div>
                
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-600 to-green-700 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Culture</h3>
                    <p class="text-gray-600 text-sm">Collaborative environment where diverse perspectives are valued.</p>
                </div>
                
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-yellow-600 to-yellow-700 flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-gift text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Benefits</h3>
                    <p class="text-gray-600 text-sm">Competitive compensation, health insurance, and work-life balance.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Open Positions -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-50 border border-yellow-200 mb-6">
                    <i class="fas fa-door-open text-yellow-600"></i>
                    <span class="text-yellow-700 text-sm font-medium">Open Positions</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Join Our Team</h2>
                <p class="text-gray-600">Explore current opportunities and find your perfect role</p>
            </div>
            
            <div class="space-y-6 max-w-4xl mx-auto">
                <!-- Job 1 -->
                <div class="group bg-white rounded-2xl p-6 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-code text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">Senior Software Engineer</h3>
                                <div class="flex flex-wrap items-center gap-3 mt-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt"></i> Dar es Salaam</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-clock"></i> Full-time</span>
                                    <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">Technology</span>
                                </div>
                            </div>
                        </div>
                        <a href="#apply" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-all text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job 2 -->
                <div class="group bg-white rounded-2xl p-6 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-yellow-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">Cybersecurity Analyst</h3>
                                <div class="flex flex-wrap items-center gap-3 mt-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt"></i> Dar es Salaam</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-clock"></i> Full-time</span>
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">Security</span>
                                </div>
                            </div>
                        </div>
                        <a href="#apply" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-all text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job 3 -->
                <div class="group bg-white rounded-2xl p-6 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-project-diagram text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">Project Manager</h3>
                                <div class="flex flex-wrap items-center gap-3 mt-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt"></i> Dar es Salaam</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-clock"></i> Full-time</span>
                                    <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs">Management</span>
                                </div>
                            </div>
                        </div>
                        <a href="#apply" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-all text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job 4 -->
                <div class="group bg-white rounded-2xl p-6 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="250">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-paint-brush text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">UX/UI Designer</h3>
                                <div class="flex flex-wrap items-center gap-3 mt-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt"></i> Dar es Salaam</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-clock"></i> Full-time</span>
                                    <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded-full text-xs">Design</span>
                                </div>
                            </div>
                        </div>
                        <a href="#apply" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-all text-center">Apply Now</a>
                    </div>
                </div>
                
                <!-- Job 5 -->
                <div class="group bg-white rounded-2xl p-6 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-bullhorn text-red-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">Sales Executive</h3>
                                <div class="flex flex-wrap items-center gap-3 mt-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt"></i> Dar es Salaam / Dubai</span>
                                    <span class="flex items-center gap-1"><i class="fas fa-clock"></i> Full-time</span>
                                    <span class="px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs">Sales</span>
                                </div>
                            </div>
                        </div>
                        <a href="#apply" class="px-6 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition-all text-center">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Application Form -->
    <section id="apply" class="py-24 bg-gradient-to-br from-green-50 to-yellow-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Apply Now</h2>
                    <p class="text-gray-600">Take the first step towards an exciting career with us</p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" name="first_name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="John" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" name="last_name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="Doe" required>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="john@email.com" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" placeholder="+255 ...">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Position Applying For *</label>
                            <select name="position" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all" required>
                                <option value="">Select a position</option>
                                <option value="senior-software-engineer">Senior Software Engineer</option>
                                <option value="cybersecurity-analyst">Cybersecurity Analyst</option>
                                <option value="project-manager">Project Manager</option>
                                <option value="ux-ui-designer">UX/UI Designer</option>
                                <option value="sales-executive">Sales Executive</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Upload Resume/CV *</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-green-500 transition-colors">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600 mb-2">Drag and drop your file here, or click to browse</p>
                                <p class="text-gray-400 text-sm">Supported formats: PDF, DOC, DOCX (Max 5MB)</p>
                                <input type="file" name="resume" class="hidden" accept=".pdf,.doc,.docx">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Cover Letter / Message</label>
                            <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all resize-none" placeholder="Tell us why you're interested in this position..."></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold hover:from-green-700 hover:to-green-800 transition-all shadow-lg flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i>
                            Submit Application
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    @include('landing.partials.footer')
    
    <script>
        AOS.init({ duration: 1000, easing: 'ease-out-cubic', once: true, offset: 100 });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>
