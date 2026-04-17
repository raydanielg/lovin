<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-green-900 via-green-800 to-green-900"></div>
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-72 h-72 bg-yellow-400/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-green-400/20 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
                    <span class="text-yellow-300 text-sm font-medium">Leading Technology Solutions in Africa</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Secure & Scalable <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">Digital Solutions</span>
                </h1>
                
                <p class="text-lg text-gray-300 mb-8 max-w-xl mx-auto lg:mx-0">
                    Glovin Limited delivers innovative technology solutions across Africa. From cybersecurity to ICT infrastructure, we empower governments and enterprises with secure, intelligent systems.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#services" class="px-8 py-4 rounded-xl bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-semibold text-lg hover:from-yellow-600 hover:to-yellow-700 transition-all shadow-lg hover:shadow-yellow-500/25 flex items-center justify-center gap-2">
                        Explore Services
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="px-8 py-4 rounded-xl border-2 border-white/30 text-white font-semibold text-lg hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-play-circle"></i>
                        Watch Demo
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-12 pt-8 border-t border-white/10">
                    <div>
                        <div class="text-3xl font-bold text-white">10+</div>
                        <div class="text-sm text-gray-400">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white">500+</div>
                        <div class="text-sm text-gray-400">Projects Delivered</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white">50+</div>
                        <div class="text-sm text-gray-400">Enterprise Clients</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Visual -->
            <div class="hidden lg:block relative" data-aos="fade-left">
                <div class="relative">
                    <!-- Main Image Container -->
                    <div class="relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-2xl">
                        <img src="{{ asset('transparentslogo/tranp-green.png') }}" alt="Glovin Technology" class="w-full h-auto opacity-90">
                        
                        <!-- Floating Cards -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-xl p-4 shadow-xl animate-bounce" style="animation-duration: 3s;">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-green-600"></i>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500">Security</div>
                                    <div class="text-sm font-semibold text-green-700">SOC 2 Certified</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-4 shadow-xl animate-bounce" style="animation-duration: 4s;">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-yellow-600"></i>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500">Growth</div>
                                    <div class="text-sm font-semibold text-yellow-700">99.9% Uptime</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-white/60 hover:text-white transition-colors">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>
